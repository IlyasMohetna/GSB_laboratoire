@extends('layout.app')
@section('content')
@php 
use Carbon\Carbon;
@endphp
<div class="main-content">
	<div class="grid grid-cols-12 gap-6 mt-6">
		<div class="xl:col-span-12 col-span-12">
			<div class="box custom-box">
				<div class="box-header justify-between">
					<div class="box-title">Mes reservations covoiturage</div>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table class="table whitespace-nowrap min-w-full">
							<thead>
								<tr class="border-b border-defaultborder">
									<th scope="col" class="text-start">Depart</th>
									<th scope="col" class="text-start">Arrivé</th>
                                    <th scope="col" class="text-start">Date de réservation</th>
                                    <th scope="col" class="text-start">Durée</th>
									<th scope="col" class="text-start">Statut</th>
								</tr>
							</thead>
							<tbody>
                                @forelse($reservations as $reservation)
								<tr class="border-b border-defaultborder">
									<td class="capitalize">{{ $reservation->etape_depart->ville->nom.' à '.$reservation->etape_depart->date_passage->format('d/m/Y H:i') }}</td>
									<td class="capitalize">{{ $reservation->etape_arrive->ville->nom.' à '.$reservation->etape_arrive->date_passage->format('d/m/Y H:i') }}</td>
									<td class="text-center">{{ $reservation->date_de_reservation->format('d/m/Y H:i') }}</td>
                                    <td class="text-center">{{ (new App\Http\Controllers\CovoiturageController)->calculateTimeDifference($reservation->etape_depart->date_passage,$reservation->etape_arrive->date_passage) }} Etapes</td>
									<td>
                                        @if($reservation->trajet->etapes->last()->date_passage->isPast())
                                        <span class="badge bg-danger text-white">Terminé</span>
                                        @elseif(Carbon::now()->between($reservation->trajet->etapes->first()->date_passage,$reservation->trajet->etapes->last()->date_passage))
                                        <span class="badge bg-primary text-white">En cours</span>
                                        @elseif(Carbon::now()->lt($reservation->trajet->etapes->first()->date_passage))
                                            <span class="badge bg-success text-white">En attente départ</span>
                                        @else 
                                        <span>ERREUR !</span>
                                        @endif
                                    </td>
								</tr>
                                @empty
                                <span>Vous n'avez aucune réservation</span>
                                @endforelse
							</tbody>
						</table>
					</div>
				</div>
				<div class="box-footer hidden border-t-0">
				</div>
			</div>
		</div>
	</div>
</div>
@stop