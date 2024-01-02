<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FRAIS\Frais;
use App\Models\FRAIS\Justificative;
use App\Models\FRAIS\Nature;
use App\Models\FRAIS\SituationValidation;
use thiagoalessio\TesseractOCR\TesseractOCR;
use HelgeSverre\ReceiptScanner\Facades\ReceiptScanner;
use HelgeSverre\ReceiptScanner\Enums\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;
use Carbon\Carbon;
use Mail;
use App\Mail\FraisAcceptedMail;
use App\Mail\FraisRefusedMail;

class FraisController extends Controller
{
    public function visiteurs_show()
    {
        $visiteurs = User::where('code_fonction', 2)->get();
        return view('frais.visiteurs', ['visiteurs' => $visiteurs]);
    }

    public function recap_show($id_visiteur = NULL)
    {
        Carbon::setLocale('fr');
        $requested_year = request()->requested_year ?? Carbon::now()->year;
        $startMonth = Carbon::createFromDate($requested_year, 1, 1)->startOfYear();
        $id_visiteur = $id_visiteur ?? auth()->user()->code_employe;
        
        $months = [];
        for ($i = 0; $i < 12; $i++) {
            $startMonth = Carbon::now()->startOfYear();
            $frais = Frais::where('appartenance_annee', $requested_year)
            ->where('appartenance_mois', $startMonth->copy()->addMonths($i)->month)
            ->count();  

            $visite = \App\Models\VISITE\Visite::where('code_employe', $id_visiteur)->whereMonth('created_at', $startMonth->copy()->addMonths($i))->count();
                        
            $months[] = (object)[
                'date' => $startMonth->copy()->addMonths($i),
                'frais_count' => $frais,
                'visite_count' => $visite
            ];
        }

        $visiteur = User::where('code_employe', $id_visiteur ?? auth()->user()->code_employe)->first();

        return view('frais.recap', ['requested_year' => $requested_year, 'months' => $months, 'visiteur' => $visiteur]);
    }

    public function frais_list_show($requested_year = NULL,$requested_month = NULL,$id_visiteur = NULL)
    {
        $id_visiteur = ($id_visiteur) ? $id_visiteur : auth()->user()->code_employe;
        $visiteur = User::where('code_employe', $id_visiteur)->first();
        if(!$requested_year || !$requested_month){
            $frais = Frais::whereHas('visite', function($query) use ($id_visiteur){
                $query->where('visite__visite.code_employe', $id_visiteur);
            })
            ->with('situation','nature')
            ->get();
        }else{
            $frais = Frais::whereHas('visite', function($query) use ($id_visiteur){
                $query->where('visite__visite.code_employe', $id_visiteur);
            })
            ->where('appartenance_annee', $requested_year)
            ->where('appartenance_mois', $requested_month)
            ->with('situation','nature')
            ->get();
        }

        $situations = SituationValidation::all();

        return view('frais.frais', ['lesfrais' => $frais, 'situations' => $situations, 'visiteur' => $visiteur, 'requested_year' => $requested_year , 'requested_month' => $requested_month]);
    }

    public function frais_create_show($id_visite)
    {
        $forfaits = Nature::all();
        return view('frais.create', ['forfaits' => $forfaits, 'id_visite' => $id_visite]);
    }

    public function frais_justificative_IA(Request $request)
    {
        try {
            $file = $request->file('file');
            $originalFilename = $file->getClientOriginalName();
            $uniqueFilename = auth()->user()->code_employe . '_' . time() . '_' . $originalFilename;
            $originalTempPath = $file->storeAs('temp_uploads', $uniqueFilename);
            $originalImage = InterventionImage::make(storage_path('app/' . $originalTempPath));
            $resizedGreyscaleImage = $originalImage
                ->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->greyscale();
            $resizedGreyscaleTempPath = $resizedGreyscaleImage->encode('jpg', 90)
                ->save(storage_path('app/temp_uploads/resized_greyscale_' . $uniqueFilename))
                ->basename;
            $imagePath = storage_path('app/temp_uploads/resized_greyscale_' . $uniqueFilename);
            $text = (new TesseractOCR($imagePath))
                ->lang('fra', 'eng')
                ->psm(6)
                ->oem(3)
                ->run();
                
            Storage::delete($originalTempPath);
            Storage::delete($imagePath);
            // dd($text);

            // $scan = ReceiptScanner::scan($text,asArray: true);
            $scan = [
                "orderRef" => "R1301425407841 100323",
                "date" => "2021-03-23",
                "taxAmount" => 4.88,
                "totalAmount" => 29.3,
                "currency" => "euros",
                "merchant" => [
                    "name" => "ECHANGEUR 33 A10",
                    "vatId" => null,
                    "address" => "ASF 79360 GRANZAY-GRIPT",
                ],
                "lineItems" => [
                    [
                        "text" => "Revel 3. oi. 5. WO/OoalS",
                        "qty" => 1,
                        "price" => 24.42,
                        "sku" => null,
                    ],
                    [
                        "text" => "Biri e 2, cae) + gee Ob Ze",
                        "qty" => 1,
                        "price" => 4.88,
                        "sku" => null,
                    ],
                ],
                "categorie" => "toll",
            ];

            if($scan){
                return response()->json(['success' => 'scan completed', 'content' => $scan], 200);
            }else{
                return false;
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function frais_create()
    {
        $isforfait = is_numeric(request()->frais_nature);
        if($isforfait){
            if(request()->frais_nature !== "6"){
                if(!in_array(request()->frais_nature, [7])){
                    $nature = Nature::find(request()->frais_nature);
                    if(request()->montant_reel > $nature->montant_forfait){
                        request()->montant_reel = $nature->montant_forfait;
                    }
                }
                $montant_total = request()->forfait_quantite * request()->montant_reel;
            }else{
                $montant_total = request()->forfait_quantite * Nature::find(request()->frais_nature)->montant_forfait;
            }
        }else{
            $montant_total = request()->montant_reel * 1;
        }

        $frais = Frais::create([
            'montant_total' => $montant_total,
            'date_frais' => request()->date_frais,
            'type_forfait' => $isforfait ? 'forfait' : 'horsforfait',
            'horsforfait_libelle' => request()->horsforfait_label ?? NULL,
            'forfait_quantite' => request()->forfait_quantite,
            'commentaire' => request()->frais_commentaire,
            'appartenance_mois' => 01,
            'appartenance_annee' => 2024,
            'id_nature' => $isforfait ? request()->frais_nature : NULL,
            'code_situation' => 1,
            'id_visite' => request()->id_visite
        ]);

        foreach(request()->file('justificatives') as $file){
            $path = $file->store('public/justificatives');
            Justificative::create([
                'justif_nom' => $file->getClientOriginalName(),
                'justif_chemin' => $path,
                'justif_extension' => $file->getClientOriginalExtension(),
                'justif_mime' => $file->getMimeType(),
                'id_frais' => $frais->id_frais
            ]);
        }

        $url = route('visite.visite_show', ['id_visite' => request()->id_visite]);
        return redirect()->to($url . '#frais'); 
    }

    public function frais_delete()
    {
        $id_frais = request()->id_frais;
        $frais = Frais::with('ged')->find($id_frais);
        foreach($frais->ged as $justificative){
            $filePath = $justificative->justif_chemin;
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }
        $frais->ged()->delete();
        $frais->delete();
    }

    public function frais_accept()
    {
        $frais = Frais::with('visite.visiteur')->find(request()->modal_id_frais);
        if($frais){
            $frais->update([
                'code_situation' => 4
            ]);
            Mail::to('ilyas.mohetna.1@gmail.com')->send(new FraisAcceptedMail($frais));
            return redirect()->to(route('visite.visite_show', ['id_visite' => $frais->id_visite]) . '#frais'); 
        }else{
            die(505);
        }
    }

    public function frais_decline()
    {
        $frais = Frais::find(request()->modal_id_frais);
        if($frais){
            $frais->update([
                'code_situation' => 3
            ]);
            Mail::to('ilyas.mohetna.1@gmail.com')->send(new FraisRefusedMail($frais));
            return redirect()->to(route('visite.visite_show', ['id_visite' => $frais->id_visite]) . '#frais'); 
        }else{
            die(505);
        }
    }
}
