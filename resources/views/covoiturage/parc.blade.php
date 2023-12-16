@extends('layout.app')
@section('content')
<div class="main-content">
	<div class="my-6">
		<!-- Start::row-1 --> 
		<div class="grid grid-cols-12 gap-x-6">
			<div class="xl:col-span-12 col-span-12">
				<div class="box">
					<div class="box-body !p-0 bg-transparent">
						<nav class="w-full mx-auto px-4 xxl:flex sm:items-center xxl:justify-between navbar navbar-expand-xxl bg-transparent dark:bg-bodybg !py-2" aria-label="Global">
                            <div class="grid grid-cols-2">
                                <div class="mx-auto">
                                    <button type="button" style="background-color: rgb(30, 64, 175);" class="vehicule_select px-4 py-4 text-md border border-1 font-medium text-center bg-white items-center rounded-lg !hover:bg-blue-800 !hover:text-white text-white">
                                        <i class='bx bx-car'></i>
                                        Véhicules personneles
                                    </button>
                                </div>
                                <div class="mx-auto">
                                    <button type="button" class="vehicule_select px-4 py-4 text-md border border-1 font-medium text-center bg-white items-center text-black rounded-lg !hover:text-white  !hover:bg-blue-800">
                                        <i class='bx bxs-buildings' ></i>   
                                        Véhicules de service
                                    </button>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
				<div class="grid col-span-12 grid-cols-12 gap-2" id="vehicule_perso_list">
                    @forelse($vehicules_perso as $vehicule)
					    <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box product-card">
                                <div class="box-body">
                                    <a href="#" class="product-image">
                                        <div class="h-48 w-full overflow-hidden rounded-md bg-gray-100 flex justify-center items-center">
                                            <img src="{{ $vehicule->photo }}" class="object-contain h-full w-full" alt="...">
                                        </div>
                                    </a>
                                    
                                    <p class="product-name font-semibold mb-0 flex items-center justify-between">{{ $vehicule->marque }}</p>
                                    <p class="product-description text-[.6875rem] text-[#8c9097] dark:text-white/50 mb-2">{{ $vehicule->model }} - {{ $vehicule->annee_model }}</p>
                                    <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">{{ $vehicule->immatriculation }}</p>
                                    <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center"> <i class="ti ti-discount-2 text-[1rem] me-1"></i>Ajouté le : {{ $vehicule->created_at }}</p>
                                </div>
                            </div>
                        </div>
                        @empty 
                        <span>Vous n'avez aucun véhicule personnel disponible pour le moment</span>
                    @endforelse
                </div>
                <div class="grid col-span-12 grid-cols-12 gap-2" id="vehicule_service_list" style="display:none">
                    @forelse($vehicules_service as $vehicule)
					    <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box product-card">
                                <div class="box-body">
                                    <a href="#" class="product-image">
                                        <div class="h-48 w-full overflow-hidden rounded-md bg-gray-100 flex justify-center items-center">
                                            <img src="{{ $vehicule->photo }}" class="object-contain h-full w-full" alt="...">
                                        </div>
                                    </a>
                                    
                                    <p class="product-name font-semibold mb-0 flex items-center justify-between">{{ $vehicule->marque }}</p>
                                    <p class="product-description text-[.6875rem] text-[#8c9097] dark:text-white/50 mb-2">{{ $vehicule->model }} - {{ $vehicule->annee_model }}</p>
                                    <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">{{ $vehicule->immatriculation }}</p>
                                    <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center"> <i class="ti ti-discount-2 text-[1rem] me-1"></i>Ajouté le : {{ $vehicule->created_at }}</p>
                                </div>
                            </div>
                        </div>
                        @empty 
                        <span>Vous n'avez aucun véhicule personnel disponible pour le moment</span>
                    @endforelse
                </div>
			</div>
            <script>
                $('.vehicule_select').on('click',function(){
                    $('#vehicule_perso_list').toggle();
                    $('#vehicule_service_list').toggle();
                    $('.vehicule_select').not($(this)).removeClass('text-white').addClass('!bg-white text-black');
                    $(this).removeClass('!bg-white text-black').addClass('text-white').css({"background-color":"rgb(30, 64, 175)"});
                });
            </script>
        </div>
	</div>
</div>
<script>$('#sidebar-parc').addClass('active');</script>
@stop