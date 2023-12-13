@extends('layout.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
	.select2-container .select2-selection--single, .select2-container--default .select2-selection--single .select2-selection__arrow{
	height:44px!important;
	}
	.select2-selection__rendered{
	margin-top:5px;
	}
</style>
<div class="main-content">
	<div class="container">
		<!-- Start::row-1 --> 
		<div class="grid grid-cols-12 gap-6">
			<div class="col-span-12 mx-auto w-1/2">
				<div class="grid grid-cols-12 gap-6 items-center mb-6 mt-40" id="search_container">
					<!-- Page Header --> 
					<div class="col-span-12 block justify-between page-header md:flex">
						<div>
							<h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">Rechercher une annonce de covoiturage</h3>
						</div>
					</div>
					<!-- Page Header Close --> 
					<div class="lg:col-span-12 col-span-12">
						<div class="inline-flex !w-full companies-search-input">
							<select id="startLocation" class="form-control select2watch" name="startLocation"></select>
							<select id="endLocation" class="form-control select2watch" name="endLocation"></select>
							<input type="text" class="form-control flatpickr-input" id="DateDepart" name="DateDepart" placeholder="Date de départ" readonly="readonly">
							<script>
								$("#DateDepart").flatpickr({
								    minDate: "today",
								    dateFormat: "d/m/Y",
								});
							</script>
							<button type="button" aria-label="button" id="search-perform" class="ti-btn ti-btn-primary-full !mb-0 !rounded-s-none"><i class="ri-search-line"></i></button> 
						</div>
					</div>
				</div>
                <div class="mt-40 ml-6 !hidden" id="loading_annonce">
                    <img src="https://www.cartakeback.ie/wp-content/themes/cartakeback/images/Car-Animation-V2.gif">
                </div>
				<div class="box custom-box !hidden" id="annonce_metric">
					<div class="box-body">
						<div class="sm:flex items-center">
							<h5 class="font-semibold mb-0 flex-grow"><b id="covoiturage_count"></b> <span class="font-normal text-[1.125rem]">covoiturage(s) correspond à votre recherche.</span> </h5>
						</div>
					</div>
				</div>
                <div id="annonces"></div>
			</div>
		</div>
		<!--End::row-1 --> 
	</div>
</div>
<script>
	$('#search-perform').on('click', function(){
        $('#annonces').html('');
	    $('#search_container,#annonce_metric').addClass('!hidden');
        $('#loading_annonce').removeClass('!hidden');
        // Perform search
        const url = '/api/covoiturage/search?depart='+$('#startLocation').val()+'&arrive='+$('#endLocation').val()+'&datedepart='+$('#DateDepart').val();
        fetch(url).then((response) => {
            if (response.ok) {
                return response.json();
            }
            throw new Error('Something went wrong');
        })
        .then((responseJson) => {
            $('#loading_annonce').addClass('!hidden');
            $('#search_container').removeClass('mt-40 !hidden');
            $('#annonce_metric').removeClass('!hidden');
            $('#covoiturage_count').text(responseJson.length);
            responseJson.forEach(trajet => {
                $('#annonces').append(`<div class="box custom-box">
					<div class="box-body">
						<div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
							<div class="hs-tooltip ti-main-tooltip">
								<button type="button" class="ti-btn ti-btn-primary-full label-ti-btn"> <i class="ri-chat-smile-line label-ti-btn-icon  me-2"></i> Réserver </button>
							</div>
						</div>
						<div class="flex mb-3 items-center">
							<span class="avatar avatar-lg ">
                                <div class="uppercase inline-flex items-center justify-center w-10 h-10 text-md font-bold text-white bg-indigo-500 rounded-full">${trajet.automobiliste.initials}</div>
                            </span> 
							<div class="ms-2">
								<h5 class="font-semibold mb-0 flex items-center">
                                    <span> 
                                        ${trajet.automobiliste.name} 
                                        <i class="bi bi-check-circle-fill text-success text-base"></i>
                                    </span>
                                </h5>
								<div class="sm:flex gap-2">
									<a href="javascript:void(0);">${trajet.automobiliste.fonction}</a> 
									<p class="text-xs text-[#8c9097] dark:text-white/50 mt-0.5"><i class="bi bi-geo-alt text-[.6875rem]"></i> ${trajet.automobiliste.agence}, <span class="uppercase">${trajet.automobiliste.agence_ville}</span></p>
								</div>
							</div>
						</div>
						<div class="flex items-center">
							<p class="mb-0 flex-grow">
								<i class="las la-map-marker"></i>
								<span class="text-[#8c9097] dark:text-white/50 capitalize">${trajet.point_depart.ville} : </span>
								<span class="font-semibold" title="Current">${trajet.point_depart.date_passage}</span>
							</p>
							<p class="mb-0">
								<i class="las la-map-marker"></i>
								<span class="text-[#8c9097] dark:text-white/50 capitalize">${trajet.point_arrive.ville} : </span>
								<span class="font-semibold">${trajet.point_arrive.date_passage}</span>
							</p>
						</div>
					</div>
				</div>`);
            })
        })
        .catch((error) => {
            console.log(error)
        });    
	})
</script>
<script>
	$(document).ready(function() {
	$('#startLocation').select2({
	    placeholder: "Ville de départ",
	    allowClear: true,
	    height:'44px',
	    ajax: {
	        url: '/ville',
	        delay: 0,
	        dataType: 'json',
	        data: function (params) {
	            return {
	                q: params.term
	            };
	        },
	        processResults: function (data) {
	            return {
	                results: data.results
	            };
	        },
	    }
	});
	
	$('#endLocation').select2({
	    placeholder: "Ville d'arrivée",
	    allowClear: true,
	    ajax: {
	        url: '/ville',
	        delay: 0,
	        dataType: 'json',
	        data: function (params) {
	            return {
	                q: params.term
	            };
	        },
	        processResults: function (data) {
	            var formattedResults = data.results.map(function (result) {
	                return {
	                    id: result.id,
	                    text: result.text,
	                    longitude: result.longitude,
	                    latitude: result.latitude
	                };
	            });
	            return {
	                results: formattedResults
	            };
	        }
	    }
	});   
	});
</script>
@stop