@extends('layout.app')
@section('content')
<div class="main-content">
	<div class="my-6">
		<!-- Start::row-1 --> 
		<div class="grid grid-cols-12 gap-x-6">
			<div class="grid col-span-12 grid-cols-12 gap-2" id="vehicule_service_list">
                <div class="md:flex col-span-12 block items-center justify-between my-[1.5rem] page-header-breadcrumb">
                    <div>
                    </div>
                    <div class="btn-list md:mt-0 mt-2">
                        <a href="{{ route('parametrage.vehicule_service_create_show') }}"><button type="button" class="ti-btn bg-primary text-white btn-wave !font-medium !me-[0.375rem] !ms-0 !text-[0.85rem] !rounded-[0.35rem] !py-[0.51rem] !px-[0.86rem] shadow-none">
                            <i class="las la-plus"></i>Ajouter un véhicule de service
                        </button></a>
                    </div>
                </div>
                @forelse($vehicules_service as $vehicule)
				<div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
					<div class="box product-card">
						<div class="box-body">
							<a href="#" class="product-image">
								<div class="h-48 w-full overflow-hidden rounded-md bg-gray-100 flex justify-center items-center">
									<img src="{{ $vehicule->photo }}" class="object-contain h-full w-full" alt="...">
								</div>
							</a>
							<p class="product-name text-[1.2rem] font-semibold mb-0 flex items-center justify-between">{{ $vehicule->marque }}</p>
							<p class="product-description text-[.6875rem] text-[#8c9097] dark:text-white/50 mb-2">{{ $vehicule->model }} - {{ $vehicule->annee_model }}</p>
							<p class="product-description text-[.6875rem] text-[#8c9097] dark:text-white/50 mb-2">Agence : <b>{{ $vehicule->agence->nom_agence }}</b> à <b class="capitalize">{{ $vehicule->agence->ville->nom }}</b></p>
                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">{{ $vehicule->immatriculation }}</p>
							<p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center"> <i class="ti ti-discount-2 text-[1rem] me-1"></i>Ajouté le : {{ $vehicule->created_at }}</p>
						</div>
					</div>
				</div>
				@empty 
				<div class="col-span-12">
					<span>Vous n'avez aucun véhicule personnel disponible pour le moment</span>
				</div>
				@endforelse
			</div>
		</div>
		<script>
			$('.vehicule_select').on('click',function(){
			    $('#vehicule_perso_list').slideToggle();
			    $('#vehicule_service_list').slideToggle();
			    $('.vehicule_select').not($(this)).removeClass('text-white').addClass('!bg-white text-black');
			    $(this).removeClass('!bg-white text-black').addClass('text-white').css({"background-color":"rgb(30, 64, 175)"});
			});
		</script>
	</div>
</div>
</div>
<script>$('#sidebar-parametrage-vehicule-service').addClass('active');</script>
@stop