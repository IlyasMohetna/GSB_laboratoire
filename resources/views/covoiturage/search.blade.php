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
		<div class="box-body">
			<button type="button" id="reservation_confirm_modal_opener" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#reservation_confirm_modal" style="display:none"></button>
			<div id="reservation_confirm_modal" class="hs-overlay ti-modal hidden">
				<div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
					<div class="ti-modal-content w-full">
						<div class="ti-modal-header">
							<h6 class="modal-title" id="staticBackdropLabel4">Confirmer votre réservation</h6>
							<button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#reservation_confirm_modal">
								<span class="sr-only">Close</span> 
								<svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
								</svg>
							</button>
						</div>
						<div class="ti-modal-body">
							<div>
                            Confirmez-vous la réservation de ce trajet ? Si oui, veuillez appuyer sur <b>Covoiturer</b> et préparer vos bagages. Dans le cas contraire, merci d'annuler cette réservation.
							</div>
						</div>
						<div class="ti-modal-footer">
                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-danger-full" data-hs-overlay="#reservation_confirm_modal"> Annuler </button>
                            <form action="{{ route('covoiturage.annonce_reserver_action') }}" method="POST">
                                @csrf
                                <input type="hidden" id="modal_id_trajet" name="modal_id_trajet">
                                <input type="hidden" id="modal_etape_depart" name="modal_etape_depart">
                                <input type="hidden" id="modal_etape_arrive" name="modal_etape_arrive">
                                <button class="mt-3 ti-btn ti-btn-success-full" type="submit">Covoiturer</button>
                            </form>
                        </div>
					</div>
				</div>
			</div>
		</div>
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
                var full = trajet.full;
                if(full){
                    $('#annonces').append(`<div class="box custom-box">
					<div class="box-body">
                        <div class="pb-4"><span class="badge !rounded-full bg-danger text-white">Trajet complet</span></div>
						<div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                            <button type="button" data-id-etape-arrive="${trajet.point_arrive.id_etape}" class="ti-btn-disabled ti-btn ti-btn-primary-full label-ti-btn"> <i class="ri-chat-smile-line label-ti-btn-icon  me-2"></i> Réserver </button>
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
                }else{
                    $('#annonces').append(`<div class="box custom-box">
					<div class="box-body">
						<div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                            <button type="button" data-id-trajet="${trajet.id_trajet}" data-id-etape-depart="${trajet.point_depart.id_etape}"  data-id-etape-arrive="${trajet.point_arrive.id_etape}" class="${full ? 'ti-btn-disabled' : ''} ti-btn ti-btn-primary-full label-ti-btn reservation_confirm_button"> <i class="ri-chat-smile-line label-ti-btn-icon  me-2"></i> Réserver </button>
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
                }
	               
	           })
	       })
	       .catch((error) => {
	           console.log(error)
	       });    
	})
</script>
<script>
    $(document).ready(function(){
        $('body').on('click', '.reservation_confirm_button', function(){
            $('#modal_id_trajet').val($(this).data('id-trajet'));
            $('#modal_etape_depart').val($(this).data('id-etape-depart'));
            $('#modal_etape_arrive').val($(this).data('id-etape-arrive'));
            $('#reservation_confirm_modal_opener').click();
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
<script>$('#sidebar-covoiturer').addClass('active');</script>
@stop