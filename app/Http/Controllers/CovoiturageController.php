<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PARAMETRAGE\Ville;

class CovoiturageController extends Controller
{
    public function create_show()
    {
        return view('covoiturage.create');
    }

    public function ville_lookup()
    {
        $query = empty(request()->q) ? '' : request()->q;
        $search = Ville::select(['id_ville', 'nom', 'ville_longitude', 'ville_latitude'])
                        ->where('nom', 'LIKE', '%'.$query.'%')
                        ->orWhere('nom', 'LIKE', '%'.$query.'%')
                        ->orderByRaw("CASE WHEN `nom` = ? THEN 1 WHEN `nom` LIKE ? THEN 2 ELSE 3 END", [$query, $query.'%'])
                        ->limit(10)
                        ->get();
        $result = [];
        $result['results'] = [];

        foreach($search as $ville){
            $result['results'][] = [
                'id' => $ville->id_ville,
                'text' => $ville->nom,
                'longitude' => $ville->ville_longitude,
                'latitude' => $ville->ville_latitude
            ];
        }

        return json_encode($result);
    }
}
