@extends('layout.app')
@section('content')
<div class="main-content text-defaulttextcolor text-defaultsize">
	<!-- Page Header --> 
	<div class="block justify-between page-header md:flex">
		<div>
			<h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">Les visiteurs de l'agence <b>{{ auth()->user()->agence->nom_agence }} :</b></h3>
		</div>
	</div>
	<!-- End::row-3--> <!-- Start::row-4 --> 
    <div class="grid grid-cols-12 md:gap-x-6">
        @foreach($visiteurs as $visiteur)
		<div class="xl:col-span-3 col-span-12">
			<div class="box text-center">
				<div class="box-header !border-b-0 pb-0">  </div>
				<div class="box-body !pt-1">
					<span class="avatar avatar-xl avatar-rounded me-2 mb-2">
                        <div class="inline-flex items-center justify-center w-16 h-16 text-md font-bold text-white bg-indigo-500 rounded-full">
                            {{ substr($visiteur->prenom, 0, 1).''.substr($visiteur->nom, 0, 1)}}
                        </div>
                    </span> 
					<div class="font-semibold text-[1rem] mt-2">{{ $visiteur->prenom.' '.$visiteur->nom }}</div>
					<p class="text-[#8c9097] dark:text-white/50 text-[.6875rem]">Fonction : <b>{{ $visiteur->fonction->nom_fonction }}</b></p>
                    <p class="mb-4 text-[#8c9097] dark:text-white/50 text-[.6875rem]">Agence : <b>{{ $visiteur->agence->nom_agence }}</b></p>
					<div class="grid grid-cols-2 gap-4">
						<div>
							<a href="{{ route('visite.visites_show', ['id_visiteur' => $visiteur->code_employe]) }}">
								<button type="button" class="ti-btn  ti-btn-primary-full ti-btn-hover ti-btn-hover-animate rounded-full">Visites</button>
							</a>
						</div>
						<div>
							<a href="{{ route('frais.recap_show', ['id_visiteur' => $visiteur->code_employe]) }}">
								<button type="button" class="ti-btn  ti-btn-info-full ti-btn-hover ti-btn-hover-animate rounded-full">Frais</button>
							</a>
						</div>
					</div>	
				</div>
			</div>
		</div>
        @endforeach
	</div>
</div>
@stop