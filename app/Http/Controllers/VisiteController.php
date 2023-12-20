<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VISITE\FamilleMedicament;
use App\Models\VISITE\Medicament;
use App\Models\VISITE\Praticien;
use App\Models\VISITE\Visite;
use App\Models\VISITE\PresentationMedicament;

class VisiteController extends Controller
{
    public function create_show()
    {
        return view('visite.create');
    }

    public function create_visite()
    {
        
        dd('stop');
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

        return view('visite.confirmed');
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
}
