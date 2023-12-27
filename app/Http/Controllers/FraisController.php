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
        $startMonth = Carbon::createFromDate(2024, 1, 1)->startOfYear();
        $months = [];
        for ($i = 0; $i < 12; $i++) {
            $months[] = $startMonth->copy()->addMonths($i);
        }

        $visiteur = User::where('code_employe', $id_visiteur ?? auth()->user()->code_employe)->first();

        return view('frais.recap', ['months' => $months, 'visiteur' => $visiteur]);
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
            if(!in_array(request()->frais_nature, [6,7])){
                $nature = Nature::find(request()->frais_nature);
                if(request()->montant_reel > $nature->montant_forfait){
                    request()->montant_reel = $nature->montant_forfait;
                }
            }
            $montant_total = request()->forfait_quantite * request()->montant_reel;
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
            'appartenance_mois' => 12,
            'appartenance_annee' => 2023,
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

        return redirect()->route('visite.visite_show', ['id_visite' => request()->id_visite]);
    }
}
