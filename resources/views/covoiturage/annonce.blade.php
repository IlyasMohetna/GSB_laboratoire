@extends('layout.app')
@section('content')
@php 
use Carbon\Carbon;
@endphp
<div class="main-content mx-auto w-1/2">
	<!-- Start::page-header --> 
	<div class="md:flex block  items-center justify-between my-[1.5rem] page-header-breadcrumb">
		<div>
			<p class="font-semibold text-[1.125rem] text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-0 ">Annonce N°{{$trajet->id_trajet}}</p>
		</div>
	</div>
	<!-- End::page-header --> 
	<div class="box">
		<div class="box-header">
			<div class="box-title"> Mon trajet </div>
			<div class="ms-auto text-success">
            @if($trajet->etapes->last()->date_passage->isPast())
            <span class="badge bg-danger text-white">Terminé</span>
            @elseif(Carbon::now()->between($trajet->etapes->first()->date_passage,$trajet->etapes->last()->date_passage))
            <span class="badge bg-primary text-white">En cours</span>
            @elseif(Carbon::now()->lt($trajet->etapes->first()->date_passage))
            @if($trajet->reservations->count() == $trajet->nombre_place_maximum)
            <span class="badge bg-secondary text-white">Complet</span>
            @else  
            <span class="badge bg-success text-white">Ouvert pour réservation</span>
            @endif
            @else 
            <span>ERREUR !</span>
            @endif
        </div>
		</div>
		<div class="box-body">
			<div class="order-track">
				<div class="hs-accordion-group" data-hs-accordion-always-open="">
                    @foreach($etapes as $etape)
					<div class="hs-accordion active">
						<a href="javascript:void(0);" class="hs-accordion-toggle group pb-3 inline-flex items-center gap-x-3 w-full font-semibold text-start transition" aria-controls="order-collapse-one">
							<div class="flex mb-0">
                                @if($loop->first)
                                <div class="me-2">
                                    <span class="avatar avatar-md avatar-rounded bg-success !text-white border !border-success/10">
                                        <i class="las la-map-pin font-bold text-xl"></i>
                                    </span>
                                </div>
                                @elseif($loop->last)
                                <div class="me-2">
                                    <span class="avatar avatar-md avatar-rounded bg-danger !text-white border !border-danger/10">
                                        <i class="las la-map-pin font-bold text-xl"></i>
                                    </span>
                                </div>
                                @else 
                                <div class="me-2">
                                    <span class="avatar avatar-md avatar-rounded bg-primary !text-white border !border-primary/10">
                                        <i class="las la-map-signs font-bold text-xl"></i>
                                    </span>
                                </div>
                                @endif
                                <div class="flex-grow">
									<p class="font-semibold mb-0 text-[0.875rem] capitalize">{{ $etape->ville->nom }}</p>
									<span class="text-[0.6875rem] text-success">{{ $etape->date_passage->format('d/m/Y H:i') }}</span> 
								</div>
							</div>
						</a>
						<div id="order-collapse-one" class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="order-heading-one" style="display: block;">
							<div class="accordion-body !pt-0 !ps-8">
                                @if(!$etape->reservations->start->isEmpty())
                                <div class="font-bold">
                                    <i class="las la-truck-pickup"></i> Embarquement : 
                                    @foreach($etape->reservations->start as $pickup)
                                    <div class="uppercase inline-flex items-center justify-center w-8 h-8 text-md font-bold text-white bg-indigo-500 rounded-full" title="{{ $pickup->covoitureur->prenom.' '.$pickup->covoitureur->nom }}">
                                        {{ $pickup->covoitureur->prenom[0].$pickup->covoitureur->nom[0] }}
                                    </div>
                                    @endforeach
								</div>
                                @endif

                                @if(!$etape->reservations->end->isEmpty())
                                <div class="font-bold">
                                    <i class="las la-truck-pickup"></i> Debarquement : 
                                    @foreach($etape->reservations->end as $dropoff)
                                    <div class="uppercase inline-flex items-center justify-center w-8 h-8 text-md font-bold text-white bg-indigo-500 rounded-full" title="{{ $dropoff->covoitureur->prenom.' '.$dropoff->covoitureur->nom }}">
                                        {{ $dropoff->covoitureur->prenom[0].$dropoff->covoitureur->nom[0] }}
                                    </div>
                                    @endforeach
								</div>
                                @endif
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<script>$('#sidebar-annonces').addClass('active');</script>
@stop