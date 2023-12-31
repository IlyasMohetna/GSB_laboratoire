<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SALLE\Salle;
use App\Models\SALLE\Agence;
use App\Models\SALLE\Batiment;
use App\Models\SALLE\Reservation;
use App\Models\SALLE\Extra;
use Carbon\Carbon;

class SalleController extends Controller
{
    public function search_show()
    {
        return view('salle.search', [
            'extras' => Extra::all()
        ]);
    }

    public function reserver()
    {
        $debut = Carbon::createFromFormat('d/m/Y H:i', request()->debut);
        $fin = Carbon::createFromFormat('d/m/Y H:i', request()->fin);

        Reservation::create([
            'date_debut_reservation' => $debut,
            'date_fin_reservation' => $fin,
            'code_employe' => auth()->user()->code_employe,
            'id_salle' => request()->id_salle,
            'id_extra' => request()->extra ?? NULL
        ]);
    }

    public function reservation_show()
    {
        $reservations = Reservation::where('code_employe', auth()->user()->code_employe)->with('salle.batiment.agence','extra')->get();
        return view('salle.reservation', ['reservations' => $reservations]);
    }

    public function planning_show()
    {
        return view('salle.planning');
    }

    public function planning_events()
    {
        $id_agence = request()->id_agence;
        $id_batiment = request()->id_batiment;
        
        $reservations = Reservation::
            with('salle.batiment.agence','employe')
            ->when(($id_agence !== 'null'), function ($query) use ($id_agence) {
                $query->whereHas('salle.batiment.agence', function ($query) use ($id_agence) {
                    $query->where('id_agence', $id_agence);
                });
            })
            ->when(($id_batiment !== 'null'), function ($query) use ($id_batiment) {
                $query->whereHas('salle.batiment', function ($query) use ($id_batiment) {
                    $query->where('id_batiment', $id_batiment);
                });
            })
            ->get();
        
        $events = $reservations->map(function ($reservation) {
            return [
                "title" => 'Salle '.ucfirst($reservation->salle->nom_salle). ' | '.$reservation->employe->prenom.' '.$reservation->employe->nom,
                "start" => $reservation->date_debut_reservation->toDateTimeString(),
                "end" => $reservation->date_fin_reservation->toDateTimeString(),
            ];
        });
            
        return json_encode($events);
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

    public function salle_search()
    {
        $id_agence = request()->agence ?? NULL;
        $id_batiment = request()->batiment ?? NULL;
        $debut = Carbon::createFromFormat('d/m/Y H:i', request()->debut);
        $fin = Carbon::createFromFormat('d/m/Y H:i', request()->fin);
        $materialInputs = collect(request()->all())->filter(function ($value, $key) {
            return strpos($key, 'material_') === 0 && $value === "1";
        })->all();
        $query_material = [];
        foreach($materialInputs as $material_key => $material_value){
            array_push($query_material, explode('_', $material_key)[1]);
        }

        $search = Salle::
            with('batiment.agence.ville', 'materielTypes')
            ->when($id_agence, function ($query) use ($id_agence) {
                return $query->whereHas('batiment', function ($query) use ($id_agence) {
                    $query->where('id_agence', $id_agence);
                });
            })
            ->when($id_batiment, function ($query) use ($id_batiment) {
                return $query->where('id_batiment', $id_batiment);
            })
            ->when((!empty($query_material)), function ($query) use ($query_material) {
                return $query->whereHas('materielTypes', function ($query) use ($query_material) {
                    $query->whereIn('id_materiel', $query_material);
                }, '=', count($query_material));
            })
            ->whereDoesntHave('reservation', function ($subquery) use ($debut, $fin) {
                $subquery->where(function ($query) use ($debut, $fin) {
                    $query->whereBetween('date_debut_reservation', [$debut, $fin])
                    ->orWhereBetween('date_fin_reservation', [$debut, $fin]);
                });
            })
            ->get();
        $data = collect();
        foreach($search as $salle){
            $data[] = (object)[
                'id' => $salle->id_salle,
                'numero' => ucfirst($salle->nom_salle),
                'batiment' => $salle->batiment->nom_batiment,
                'agence' => $salle->batiment->agence->nom_agence,
                'ville' => $salle->batiment->agence->ville->nom,
                'debut' => $debut->format('d/m/Y H:i'),
                'fin' => $fin->format('d/m/Y H:i')
            ];
        }
        return $data->toJson();
    }
}
