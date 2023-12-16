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
					<div class="box-title">Mes annonces covoiturage</div>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table class="table whitespace-nowrap min-w-full">
							<thead>
								<tr class="border-b border-defaultborder">
									<th scope="col" class="text-start">Depart</th>
									<th scope="col" class="text-start">Arrivé</th>
									<th scope="col" class="text-center">Nombre d'étapes</th>
									<th scope="col" class="text-start">Statut</th>
									<th scope="col" class="text-start">Reservation</th> <!-- Passé , En cours , Complet  -->
									<th scope="col" class="text-start">Action</th>
								</tr>
							</thead>
							<tbody>
                                @foreach($trajets as $trajet)
								<tr class="border-b border-defaultborder">
									<td class="capitalize">{{ $trajet->etapes->first()->ville->nom.' à '.$trajet->etapes->first()->date_passage->format('d/m/Y H:i') }}</td>
									<td class="capitalize">{{ $trajet->etapes->last()->ville->nom.' à '.$trajet->etapes->last()->date_passage->format('d/m/Y H:i') }}</td>
									<td class="text-center">{{ $trajet->etapes->count() }} Etapes</td>
									<td>
                                        @if($trajet->etapes->last()->date_passage->isPast())
                                        <span class="badge bg-danger text-white">Terminé</span>
                                        @elseif(Carbon::now()->between($trajet->etapes->first()->date_passage,$trajet->etapes->last()->date_passage))
                                        <span class="badge bg-primary text-white">En cours</span>
                                        @elseif(Carbon::now()->lt($trajet->etapes->first()->date_passage))
                                            @if($trajet->reservations->count() == $trajet->nombre_place_maximum)
                                                <span class="badge bg-secondary text-white">Complet</span>
                                            @else  
                                                <span class="badge bg-success text-white">Ouvert</span>
                                            @endif
                                        @else 
                                        <span>ERREUR !</span>
                                        @endif
                                    </td>
									<td>
										<div class="avatar-list-stacked">
                                            @forelse($trajet->reservations as $reservation)
                                            <span class="avatar avatar-md">
                                                <div class="uppercase inline-flex items-center justify-center w-8 h-8 text-md font-bold text-white bg-indigo-500 rounded-full" title="{{ $reservation->covoitureur->prenom.' '.$reservation->covoitureur->nom }}">
                                                    {{ $reservation->covoitureur->prenom[0].$reservation->covoitureur->nom[0] }}
                                                </div>
                                            </span> 
                                            @empty
                                            <span>Aucune réservation</span>
                                            @endforelse
                                        </div>
									</td>
									<td>
										<div class="hstack flex gap-3 text-[.9375rem]">
                                            <a aria-label="Voir" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-warning-full">
                                                <i class="las la-eye"></i>
                                            </a>
                                        </div>
									</td>
								</tr>
                                @endforeach
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
<script>$('#sidebar-annonces').addClass('active');</script>
@stop