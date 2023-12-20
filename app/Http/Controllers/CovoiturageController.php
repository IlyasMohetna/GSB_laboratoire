<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\COVOITURAGE\Vehicule;
use App\Models\COVOITURAGE\Trajet;
use App\Models\COVOITURAGE\Etape;
use App\Models\COVOITURAGE\Reservation;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use Illuminate\Support\Sleep;
use Illuminate\Support\Collection;

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

    public function annonces_show()
    {
        $trajets = Trajet::where('code_employe', auth()->user()->code_employe)->with('etapes.ville','reservations.covoitureur')->latest()->get();
        return view('covoiturage.annonces', [
            'trajets' => $trajets
        ]);
    }

    public function annonce_show($id)
    {
        $trajet = Trajet::with(['etapes.ville', 'reservations.covoitureur'])->findOrFail($id);

        $etapes = $trajet->etapes->map(function ($etape) use ($trajet) {
            $startReservations = $trajet->reservations->where('id_etape_depart', $etape->id_etape);
            $endReservations = $trajet->reservations->where('id_etape_arrive', $etape->id_etape);

            $etape->reservations = (object)[
                'start' => $startReservations,
                'end' => $endReservations
            ];

            return $etape;
        });

        return view('covoiturage.annonce', [
            'trajet' => $trajet,
            'etapes' => $etapes
        ]);
    }

    public function reservations_show()
    {
        $reservations = Reservation::where('code_employe', auth()->user()->code_employe)->with('etape_depart.ville','etape_arrive.ville','trajet.etapes')->latest()->get();
        return view('covoiturage.reservations', [
            'reservations' => $reservations
        ]);
    }

    public function parc_show()
    {
        $vehicules_perso = Vehicule::where('code_employe', auth()->user()->code_employe)->get();
        $vehicules_service = Vehicule::where('id_agence', auth()->user()->id_agence)->get();

        return view('covoiturage.parc', [
            'vehicules_perso' => $vehicules_perso,
            'vehicules_service' => $vehicules_service
        ]);
    }

    public function vehicule_perso_create_show()
    {
        return view('covoiturage.vehicule_create');
    }

    public function vehicule_perso_create_action()
    {
        $create = Vehicule::create([
            'immatriculation' => request()->immatriculation,
            'marque' => request()->marque,
            'model' => request()->model,
            'annee_model' => request()->annee_model,
            'type_vehicule' => 'perso',
            'photo' => request()->photo,
            'code_employe' => auth()->user()->code_employe
        ]);

        return redirect()->route('covoiturage.parc_show');
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
        
        $data = [];
        foreach($trajets as $trajet){
            $data[] = [
                'id_trajet' => $trajet->id_trajet,
                'reservation_count' => $trajet->reservation_count,
                'nombre_place_maximum' => $trajet->nombre_place_maximum,
                'full' => ($trajet->reservation_count >= $trajet->nombre_place_maximum),
                'automobiliste' => [
                    'initials' => $trajet->automobiliste->prenom[0].$trajet->automobiliste->nom[0],
                    'name' => $trajet->automobiliste->prenom.' '.$trajet->automobiliste->nom,
                    'fonction' => $trajet->automobiliste->fonction->nom_fonction,
                    'agence' => $trajet->automobiliste->agence->nom_agence,
                    'agence_ville' => $trajet->automobiliste->agence->ville->nom
                ],
                'point_depart' => [
                    'id_etape' => $trajet->etapes->where('id_ville', $id_ville_depart)->first()->id_etape,
                    'ville' => $trajet->etapes->where('id_ville', $id_ville_depart)->first()->ville->nom,
                    'date_passage' => $trajet->etapes->where('id_ville', $id_ville_depart)->first()->date_passage
                ],
                'point_arrive' => [
                    'id_etape' => $trajet->etapes->where('id_ville', $id_ville_arrive)->first()->id_etape,
                    'ville' => $trajet->etapes->where('id_ville', $id_ville_arrive)->first()->ville->nom,
                    'date_passage' => $trajet->etapes->where('id_ville', $id_ville_arrive)->first()->date_passage
                ]
            ];
        }

        // Sleep::for(2)->seconds();

        return response()->json($data);
    }

    public function annonce_reserver()
    {
        $trajet = Trajet::find(request()->modal_id_trajet);
        if(!$trajet){
            dd('Impossible de retrouver le trajet');
        }else{
            Reservation::create([
                'date_de_reservation' => Carbon::now(),
                'code_employe' => auth()->user()->code_employe,
                'id_trajet' => $trajet->id_trajet,
                'id_etape_depart' => request()->modal_etape_depart,
                'id_etape_arrive' => request()->modal_etape_arrive
            ]);
            session(['reservation_success' => true]);
            return redirect()->route('covoiturage.reservation_confirmed_show');
        }
    }

    public function vehicule_perso_available_search_action()
    {
        $startDate = Carbon::createFromFormat('d/m/Y H:i', request('startDate'));
        $endDate = Carbon::createFromFormat('d/m/Y H:i:s', request('endDate')); 
        $vehicules = Vehicule::where('type_vehicule', 'perso')->where('code_employe', auth()->user()->code_employe)
        ->whereDoesntHave('trajets.etapes', function (Builder $query) use ($startDate, $endDate) {
            $query->whereBetween('date_passage', [$startDate, $endDate]);
        })->get();    
        return response()->json($vehicules);
    }  
    
    public function vehicule_service_available_search_action()
    {
        $startDate = Carbon::createFromFormat('d/m/Y H:i', request('startDate'));
        $endDate = Carbon::createFromFormat('d/m/Y H:i:s', request('endDate')); 
        $vehicules = Vehicule::where('type_vehicule', 'service')->where('id_agence', auth()->user()->id_agence)
        ->whereDoesntHave('trajets.etapes', function (Builder $query) use ($startDate, $endDate) {
            $query->whereBetween('date_passage', [$startDate, $endDate]);
        })->get();    
        return response()->json($vehicules);
    }  

    public function calculateTimeDifference($time1, $time2)
    {        
        // Calculate the difference in total minutes
        $diffInMinutes = $time1->diffInMinutes($time2);
        
        // Calculate hours and minutes
        $hours = intdiv($diffInMinutes, 60);
        $minutes = $diffInMinutes % 60;
        
        // Format the string
        $result = '';
        if ($hours > 0) {
            if ($minutes > 0) {
                $result .= $hours . ' heure' . ($hours > 1 ? 's' : '');
            }
            if (!empty($result)) {
                $result .= ' ';
            }
            $result .= $minutes . ' minute' . ($minutes > 1 ? 's' : '');
        }
            
        return $result ?: '0 minute';
    }

}
