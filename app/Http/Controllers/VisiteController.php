<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VISITE\FamilleMedicament;
use App\Models\VISITE\Medicament;
use App\Models\VISITE\Praticien;
use App\Models\VISITE\Visite;
use App\Models\VISITE\PresentationMedicament;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;
use PDF;

class VisiteController extends Controller
{
    public function create_show()
    {
        return view('visite.create');
    }

    public function create_visite()
    {
        $visite = Visite::create([
            'date_debut_visite' => request()->date_debut_visite,
            'id_praticien' => request()->id_praticien,
            'code_employe' => auth()->user()->code_employe
        ]);

        $id_medicaments = explode(',', request()->id_medicament);
        foreach($id_medicaments as $id){
            if(!empty($id)){
                PresentationMedicament::create([
                    'id_visite' => $visite->id_visite,
                    'id_medicament' => $id
                ]);
            }
        }

        $visite = Visite::where('id_visite', $visite->id_visite)->with('visiteur.agence.ville','praticien.ville')->first();

        return view('visite.search', ['visite' => $visite]);
    }

    public function create_confirmed($id_visite)
    {
        return view('visite.confirmed', [
            'id_visite' => $id_visite
        ]);
    }

    public function generer_ordre_mission($id_visite)
    {
        $visite = Visite::where('id_visite', $id_visite)->with('visiteur.fonction','praticien.ville','visiteur.agence.ville','medicaments.medicament')->first();
        $pdf = PDF::loadView('pdf.ordre_de_mission', $visite->toArray());
        return $pdf->download('ORDRE_MISSION_'.$visite->created_at->format('d-m-Y').'.pdf');
    }

    public function visites_show()
    {
        $visites = Visite::with('praticien')->get();
        return view('visite.visites', ['visites' => $visites]);
    }

    public function visite_show($id_visite)
    {
        $visite = Visite::where('id_visite', $id_visite)->with('praticien.ville','medicaments.medicament.famille')->first();
        return view('visite.visite', ['visite' => $visite]);
    }

    public function visite_close()
    {
        $visite = Visite::where('id_visite', request()->id_visite)->update([
            'rapport' => request()->quill_content,
            'date_fin_visite' => Carbon::now()
        ]);

        return redirect()->back();
    }

    public function medicament_lookup()
    {
        $q = empty(request()->q) ? '' : request()->q;
        $id_famille = empty(request()->id_famille) ? '' : request()->id_famille;
        
        $search = Medicament::with('famille')
            ->when(!empty($q), function ($query) use ($q) {
                return $query->where('nom_medicament', 'LIKE', '%' . $q . '%');
            })
            ->orderByRaw("CASE WHEN `nom_medicament` = ? THEN 1 WHEN `nom_medicament` LIKE ? THEN 2 ELSE 3 END", [$q, $q . '%'])
            ->limit(7)
            ->get();
        
        return json_encode($search);        
    }

    public function famille_lookup()
    {
        $query = empty(request()->q) ? '' : request()->q;
        $search = FamilleMedicament::select(['id_famille', 'nom_famille'])
                        ->where('nom_famille', 'LIKE', '%'.$query.'%')
                        ->orWhere('nom_famille', 'LIKE', '%'.$query.'%')
                        ->orderByRaw("CASE WHEN `nom_famille` = ? THEN 1 WHEN `nom_famille` LIKE ? THEN 2 ELSE 3 END", [$query, $query.'%'])
                        ->limit(10)
                        ->get();
        $result = [];
        $result['results'] = [];

        foreach($search as $famille){
            $result['results'][] = [
                'id' => $famille->nom_famille,
                'text' => $famille->nom_famille
            ];
        }

        return json_encode($result);
    }

    public function praticien_lookup()
    {
        $query = empty(request()->q) ? '' : request()->q;
        $search = Praticien::select(['id_praticien', 'raison_sociale'])
                        ->where('raison_sociale', 'LIKE', '%'.$query.'%')
                        ->orWhere('raison_sociale', 'LIKE', '%'.$query.'%')
                        ->orderByRaw("CASE WHEN `raison_sociale` = ? THEN 1 WHEN `raison_sociale` LIKE ? THEN 2 ELSE 3 END", [$query, $query.'%'])
                        ->limit(10)
                        ->get();
        $result = [];
        $result['results'] = [];

        foreach($search as $ville){
            $result['results'][] = [
                'id' => $ville->id_praticien,
                'text' => $ville->raison_sociale
            ];
        }

        return json_encode($result);
    }

    public function praticiens_show()
    {
        return view('visite.praticiens');
    }

    public function medicaments_show()
    {
        return view('visite.medicaments');
    }

    public function praticien_yajra()
    {
        $praticiens = Praticien::with('ville.departement.region')->latest();
        return DataTables::of($praticiens)
        ->addColumn('code_postal', function ($praticien) {
            return $praticien->ville->code_postal;
        })
        ->addColumn('ville', function ($praticien) {
            return $praticien->ville->nom;
        })
        ->addColumn('departement', function ($praticien) {
            return $praticien->ville->departement->nom;
        })
        ->addColumn('region', function ($praticien) {
            return $praticien->ville->nom;
        })
        ->make(true);
    }

    public function medicaments_yajra(Request $request)
    {
    
        $query = Medicament::query();
        $query->with('famille')->get();
        
        return DataTables::of($query)
        ->addColumn('photo', function ($medicament) {
            return '<img src="' . asset($medicament->photo_medicament) . '" alt="Photo" class="img-thumbnail" width="50">';
        })
        ->editColumn('famille', function ($medicament) {
            return $medicament->famille->nom_famille;
        })
        ->rawColumns(['photo'])
        ->make(true);
    }

}
