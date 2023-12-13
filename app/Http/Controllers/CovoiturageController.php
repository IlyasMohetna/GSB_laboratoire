<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\COVOITURAGE\Vehicule;
use App\Models\COVOITURAGE\Trajet;
use App\Models\COVOITURAGE\Etape;
use Carbon\Carbon;
use Illuminate\Support\Sleep;

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

    public function annonce_search_show()
    {
        return view('covoiturage.search');
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

    public function annonce_search_action()
    {
        $id_ville_depart = request()->depart;
        $id_ville_arrive = request()->arrive;
        $departDate = Carbon::createFromFormat('d/m/Y', request()->datedepart);
        DB::enableQueryLog();
        $trajets = Trajet::query()
        ->join('covoiturage__etape as depart', 'depart.id_trajet', '=', 'covoiturage__trajet.id_trajet')
        ->where('depart.id_ville', $id_ville_depart)
        ->whereDate('depart.date_passage', $departDate)
        ->whereExists(function ($query) use ($id_ville_arrive) {
            $query->select(DB::raw(1))
                  ->from('covoiturage__etape as arrive')
                  ->whereColumn('arrive.id_trajet', 'depart.id_trajet')
                  ->where('arrive.id_ville', $id_ville_arrive)
                  ->whereRaw('arrive.ordre_etape > depart.ordre_etape');
        })
        ->with([
            'etapes.ville', 
            'automobiliste.agence.ville', 
            'automobiliste.fonction'
        ])
        ->select('covoiturage__trajet.*')
        ->selectSub(function($query) {
            $query->from('covoiturage__reservation')
                  ->selectRaw('COUNT(*)')
                  ->whereColumn('covoiturage__reservation.id_trajet', 'covoiturage__trajet.id_trajet');
        }, 'reservation_count')
        ->distinct()
        ->get();

        // foreach(DB::getQueryLog() as $query){
        //     echo $query['query'];
        // }

        $data = [];
        foreach($trajets as $trajet){
            $data[] = [
                'places_restantes' => $trajet->reservation_count,
                'automobiliste' => [
                    'initials' => $trajet->automobiliste->prenom[0].$trajet->automobiliste->nom[0],
                    'name' => $trajet->automobiliste->prenom.' '.$trajet->automobiliste->nom,
                    'fonction' => $trajet->automobiliste->fonction->nom_fonction,
                    'agence' => $trajet->automobiliste->agence->nom_agence,
                    'agence_ville' => $trajet->automobiliste->agence->ville->nom
                ],
                'point_depart' => [
                    'ville' => $trajet->etapes->where('id_ville', $id_ville_depart)->first()->ville->nom,
                    'date_passage' => $trajet->etapes->where('id_ville', $id_ville_depart)->first()->date_passage
                ],
                'point_arrive' => [
                    'ville' => $trajet->etapes->where('id_ville', $id_ville_arrive)->first()->ville->nom,
                    'date_passage' => $trajet->etapes->where('id_ville', $id_ville_arrive)->first()->date_passage
                ]
            ];
        }

        // Sleep::for(2)->seconds();

        return response()->json($data);
    }

}
