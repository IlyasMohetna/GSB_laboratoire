<?php 

namespace App\Http\Controllers;

use App\Models\PARAMETRAGE\Ville;
use App\Models\PARAMETRAGE\Departement;
use App\Models\PARAMETRAGE\Region;
use App\Models\COVOITURAGE\Vehicule;

class ParametrageController extends Controller{

    public function vehicule_service_show()
    {
        $vehicules_service = Vehicule::with('agence.ville')->where('type_vehicule', 'service')->latest()->get();
        return view('parametrage.vehicule_service', [
            'vehicules_service' => $vehicules_service
        ]);
    }

    public function vehicule_service_create_show()
    {
        return view('parametrage.vehicule_service_create');
    }

    public function vehicule_service_create()
    {
        $create = Vehicule::create([
            'immatriculation' => request()->immatriculation,
            'marque' => request()->marque,
            'model' => request()->model,
            'annee_model' => request()->annee_model,
            'type_vehicule' => 'service',
            'photo' => request()->photo,
            'id_agence' => request()->agence
        ]);

        return redirect()->route('parametrage.vehicule_service_show');
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
                'text' => ucfirst($ville->nom),
                'longitude' => $ville->ville_longitude,
                'latitude' => $ville->ville_latitude
            ];
        }

        return json_encode($result);
    }

    public function departement_lookup()
    {
        $query = empty(request()->q) ? '' : request()->q;
        $search = Departement::select(['departement_id', 'nom_departement'])
                        ->where('nom_departement', 'LIKE', '%'.$query.'%')
                        ->orWhere('nom_departement', 'LIKE', '%'.$query.'%')
                        ->orderByRaw("CASE WHEN `nom_departement` = ? THEN 1 WHEN `nom_departement` LIKE ? THEN 2 ELSE 3 END", [$query, $query.'%'])
                        ->limit(10)
                        ->get();
        $result = [];
        $result['results'] = [];

        foreach($search as $departement){
            $result['results'][] = [
                'id' => $departement->departement_id,
                'text' => ucfirst($departement->nom_departement)
            ];
        }

        return json_encode($result);
    }

    public function region_lookup()
    {
        $query = empty(request()->q) ? '' : request()->q;
        $search = Region::select(['region_id', 'nom_region'])
                        ->where('nom_region', 'LIKE', '%'.$query.'%')
                        ->orWhere('nom_region', 'LIKE', '%'.$query.'%')
                        ->orderByRaw("CASE WHEN `nom_region` = ? THEN 1 WHEN `nom_region` LIKE ? THEN 2 ELSE 3 END", [$query, $query.'%'])
                        ->limit(10)
                        ->get();
        $result = [];
        $result['results'] = [];

        foreach($search as $region){
            $result['results'][] = [
                'id' => $region->region_id,
                'text' => ucfirst($region->nom_region)
            ];
        }

        return json_encode($result);
    }

    public function agence_lookup()
    {
        $query = empty(request()->q) ? '' : request()->q;
        $search = Region::select(['region_id', 'nom_region'])
                        ->where('nom_region', 'LIKE', '%'.$query.'%')
                        ->orWhere('nom_region', 'LIKE', '%'.$query.'%')
                        ->orderByRaw("CASE WHEN `nom_region` = ? THEN 1 WHEN `nom_region` LIKE ? THEN 2 ELSE 3 END", [$query, $query.'%'])
                        ->limit(10)
                        ->get();
        $result = [];
        $result['results'] = [];

        foreach($search as $region){
            $result['results'][] = [
                'id' => $region->region_id,
                'text' => ucfirst($region->nom_region)
            ];
        }

        return json_encode($result);
    }
}
