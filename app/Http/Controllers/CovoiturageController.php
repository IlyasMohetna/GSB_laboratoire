<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PARAMETRAGE\Ville;
use App\Models\COVOITURAGE\Vehicule;
use App\Models\COVOITURAGE\Trajet;
use App\Models\COVOITURAGE\Etape;
use Carbon\Carbon;

class CovoiturageController extends Controller
{
    public function annonce_create_show()
    {
        $vehicules_perso = Vehicule::where('code_employe', auth()->user()->code_employe)->get();
        $vehicules_service = Vehicule::where('id_agence', auth()->user()->id_agence)->get();

        return view('covoiturage.create', [
            'vehicules_perso' => $vehicules_perso,
            'vehicules_service' => $vehicules_service
        ]);
    }

    public function annonce_create_action()
    {
        $trajet = Trajet::create([
            'nombre_place_maximum' => request()->NbPlace,
            'id_vehicule' => isset(request()->vehicule_perso) ? request()->vehicule_perso : request()->vehicule_service,
            'code_employe' => auth()->user()->code_employe
        ]);

        if($trajet){
            Etape::create(['ordre_etape' => 0, 'date_passage' => Carbon::createFromFormat('d/m/Y H:i', request()->DateTimeDepart), 'id_trajet' => $trajet->id_trajet, 'id_ville' => request()->startLocation]);
            $ordre = 1;

            if(isset(request()->steps)){
                foreach(request()->steps as $step){
                    Etape::create(['ordre_etape' => $ordre, 'date_passage' => Carbon::createFromFormat('d/m/Y H:i:s', request()->arriving_dates[$ordre-1]), 'id_trajet' => $trajet->id_trajet, 'id_ville' => $step]);
                    $ordre++;
                }
            }

            Etape::create([
                'ordre_etape' => $ordre,
                'date_passage' => Carbon::createFromFormat('d/m/Y H:i:s', request()->arriving_dates[array_key_last(request()->arriving_dates)]),
                'id_trajet' => $trajet->id_trajet,
                'id_ville' => request()->endLocation
            ]);
        }
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
