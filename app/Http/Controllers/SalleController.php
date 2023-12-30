<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SALLE\Agence;
use App\Models\SALLE\Batiment;

class SalleController extends Controller
{
    public function search_show()
    {
        return view('salle.search');
    }

    public function agence_lookup()
    {
        $query = empty(request()->q) ? '' : request()->q;
        
        $search = Agence::with('ville')
        ->where('nom_agence', 'LIKE', '%' . $query . '%')
        ->orWhereHas('ville', function ($subquery) use ($query) {
            $subquery->where('nom', 'LIKE', '%' . $query . '%');
        })
        ->orderByRaw("CASE WHEN `nom_agence` = ? THEN 1 WHEN `nom_agence` LIKE ? THEN 2 ELSE 3 END", [$query, $query . '%'])
        ->limit(10)
        ->get();
        
        $result = [];
        $result['results'] = [];
        
        foreach ($search as $agence) {
            $result['results'][] = [
                'id' => $agence->id_agence,
                'text' => $agence->nom_agence . ' - ' . ucfirst($agence->ville->nom)
            ];
        }
            
        return json_encode($result);
    }

    public function batiment_lookup()
    {
        $q = empty(request()->q) ? '' : request()->q;
        $id_agence = request()->id_agence;
        $search = Batiment::select(['id_batiment', 'nom_batiment', 'id_agence'])
                ->when(!empty($id_agence), function ($query) use ($id_agence) {
                    return $query->where('id_agence', $id_agence);
                })
                ->where(function ($query) use ($q) {
                    $query->where('nom_batiment', 'LIKE', '%' . $q . '%')
                    ->orWhere('nom_batiment', 'LIKE', '%' . $q . '%');
                })
                ->orderByRaw("CASE WHEN `nom_batiment` = ? THEN 1 WHEN `nom_batiment` LIKE ? THEN 2 ELSE 3 END", [$q, $q . '%'])
                ->limit(10)
                ->get();
        
        $result = [];
        $result['results'] = [];

        foreach($search as $batiment){
            $result['results'][] = [
                'id' => $batiment->id_batiment,
                'text' => $batiment->nom_batiment,
                'id_agence' => $batiment->id_agence
            ];
        }

        return json_encode($result);
    }
}
