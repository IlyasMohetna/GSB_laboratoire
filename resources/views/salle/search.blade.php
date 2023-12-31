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
			<div class="box col-span-12 mx-auto w-1/2 mt-24 p-4 pb-0" id="search_container">
				<div class="grid grid-cols-12 gap-4 items-center mb-6" >
					<!-- Page Header --> 
					<div class="col-span-12 block justify-between page-header md:flex">
						<div class="text-center w-full">
							<h3 class="text-center !text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.2rem] font-semibold">Réserver une salle</h3>
						</div>
					</div>
					<!-- Page Header Close --> 
					<div class="lg:col-span-12 col-span-12 space-y-3">
                        <div>
                            <select id="agences" class="form-control select2watch" name="agence"></select>
                        </div>
                        <div>
                            <select id="batiments" class="form-control select2watch" name="batiment"></select>
                        </div>
						<div class="grid grid-cols-2 gap-4">
                            <div>							
                                <input type="text" class="form-control flatpickr-input" id="startDate" name="startDate" placeholder="Date de début" readonly="readonly">
                            </div>
                            <div>
                                <input type="text" class="form-control flatpickr-input" id="endDate" name="endDate" placeholder="Date de fin" readonly="readonly">
                            </div>
                            <script>
                                    $("#startDate").flatpickr({
                                        enableTime: true,
                                        minDate: new Date().setHours(new Date().getHours() + 1, 0, 0, 0),
                                        time_24hr: true,
                                        dateFormat: "d/m/Y H:i",
                                        onClose: function () {
                                            this.config.onChange(this.selectedDates, this.input.value, this);
                                        },
                                        onChange: function (selectedDates, dateStr, instance) {
                                            $("#endDate").flatpickr().clear();
                                            const minEndDate = new Date(selectedDates[0].setHours(selectedDates[0].getHours() + 1, 0, 0, 0));
                                            $("#endDate").flatpickr({
                                                enableTime: true,
                                                time_24hr: true,
                                                dateFormat: "d/m/Y H:i",
                                                minDate: minEndDate,
                                                defaultDate: minEndDate,
                                            });
                                        },
                                    });
                                </script>
                                <script>
                                    $("#endDate").flatpickr({
                                        enableTime: true,
                                        time_24hr: true,
                                        dateFormat: "d/m/Y H:i",
                                    });
                                </script>
						</div>
                        <div>
                            <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1rem]">Choix du materiels :</h3>
                        </div>
                        <div class="grid md:grid-cols-5 sm:grid-cols-1 gap-6">
                            <div class="cursor-pointer">
                                <div class="bg-white border border-primary w-full rounded-xl justify-center text-center align-center h-full type_materiel" data-id=1>
                                    <div class="mx-auto text-center justify-center block text-primary p-4">
                                        <div><i class="las la-handshake text-4xl"></i></div>
                                        <div><b>Table de réunion</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer">
                                <div class="bg-white border border-primary w-full rounded-xl justify-center text-center align-center h-full type_materiel" data-id=2>
                                    <div class="mx-auto text-center justify-center block text-primary p-4">
                                        <div><i class="las la-chair text-4xl"></i></div>
                                        <div><b>Chaises</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer">
                                <div class="bg-white border border-primary w-full rounded-xl justify-center text-center align-center h-full type_materiel" data-id=3>
                                    <div class="mx-auto text-center justify-center block text-primary p-4">
                                        <div><i class="las la-chalkboard text-4xl"></i></div>
                                        <div><b>Tableau blanc</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer">
                                <div class="bg-white border border-primary w-full rounded-xl justify-center text-center align-center h-full type_materiel" data-id=4>
                                    <div class="mx-auto text-center justify-center block text-primary p-4">
                                        <div><i class="las la-film text-4xl"></i></div>
                                        <div class="whitespace-normal break-all"><b>Vidéoprojecteur</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer">
                                <div class="bg-white border border-primary w-full rounded-xl justify-center text-center align-center h-full type_materiel" data-id=5>
                                    <div class="mx-auto text-center justify-center block text-primary p-4">
                                        <div><i class="las la-tv text-4xl"></i></div>
                                        <div><b>Télévision</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer">
                                <div class="bg-white border border-primary w-full rounded-xl justify-center text-center align-center h-full type_materiel" data-id=6>
                                    <div class="mx-auto text-center justify-center block text-primary p-4">
                                        <div><i class="las la-video text-4xl"></i></div>
                                        <div class="whitespace-normal break-all"><b>Visioconférence</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer">
                                <div class="bg-white border border-primary w-full rounded-xl justify-center text-center align-center h-full type_materiel" data-id=7>
                                    <div class="mx-auto text-center justify-center block text-primary p-4">
                                        <div><i class="las la-laptop text-4xl"></i></div>
                                        <div><b>Ordinateur portable</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer">
                                <div class="bg-white border border-primary w-full rounded-xl justify-center text-center align-center h-full type_materiel" data-id=8>
                                    <div class="mx-auto text-center justify-center block text-primary p-4">
                                        <div><i class="las la-plug text-4xl"></i></div>
                                        <div><b>Prises électriques</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer">
                                <div class="bg-white border border-primary w-full rounded-xl justify-center text-center align-center h-full type_materiel" data-id=9>
                                    <div class="mx-auto text-center justify-center block text-primary p-4">
                                        <div><i class="las la-wifi text-4xl"></i></div>
                                        <div><b>Réseau Wi-Fi</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cursor-pointer">
                                <div class="bg-white border border-primary w-full rounded-xl justify-center text-center align-center h-full type_materiel" data-id=10>
                                    <div class="mx-auto text-center justify-center block text-primary p-4">
                                        <div><i class="las la-lightbulb text-4xl"></i></div>
                                        <div><b>Lampes de bureau</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display:none">
                        <input id="material_1" name="type_material[1]" type="hidden" value=0>
                        <input id="material_2" name="type_material[2]" type="hidden" value=0>
                        <input id="material_3" name="type_material[3]" type="hidden" value=0>
                        <input id="material_4" name="type_material[4]" type="hidden" value=0>
                        <input id="material_5" name="type_material[5]" type="hidden" value=0>
                        <input id="material_6" name="type_material[6]" type="hidden" value=0>
                        <input id="material_7" name="type_material[7]" type="hidden" value=0>
                        <input id="material_8" name="type_material[8]" type="hidden" value=0>
                        <input id="material_9" name="type_material[9]" type="hidden" value=0>
                        <input id="material_10" name="type_material[10]" type="hidden" value=0>
                        </div>
                        <script>
                            $('.type_materiel').on('mouseenter', function () {
                                $(this).addClass('!bg-primary/10');
                            });

                            $('.type_materiel').on('mouseleave', function () {
                                if (!$(this).hasClass('clicked')) {
                                    $(this).removeClass('!bg-primary/10');
                                }
                            });
                            
                            $('.type_materiel').on('click', function () {
                                $(this).toggleClass('clicked');
                                var id = $(this).data('id');
                                var hiddenInput = $('#material_' + id);
                                hiddenInput.val(hiddenInput.val() == 0 ? 1 : 0);
                            });
                        </script>
                        <div class="col-span-1 w-1/2 mx-auto mt-2">
                            <button type="button" aria-label="button" id="search-perform" class="mt-4 ti-btn ti-btn-primary-full w-full !mb-0 !rounded-s-none">Rechercher <i class="ri-search-line"></i></button> 
                        </div>
					</div>
				</div>
			</div>
            <div class="col-span-12 w-1/2 mx-auto !hidden" id="loading_annonce">
                <div class="mt-36 ml-6 mx-auto w-1/2 text-center">
                    <img src="{{ asset('assets/img/building_lookup.gif') }}">
                    <b class="text-[1.2rem]">Recherche en cours...</b>
                </div>
            </div>
		</div>
        <div class="w-1/2 mx-auto mt-12 space-y-2 !hidden" id="response_container">
            <div>
                <button type="button" id="reset_search" class="ti-btn ti-btn-dark ti-btn-wave"><i class="las la-arrow-left"></i>Retour vers la recherche</button>
            </div>
            <div class="box custom-box" id="annonce_metric">
                <div class="box-body">
                    <div class="sm:flex items-center">
                        <h5 class="font-semibold mb-0 flex-grow"><b id="salle_count"></b> <span class="font-normal text-[1.125rem]">Salle(s) correspond à votre recherche.</span> </h5>
                    </div>
                </div>
            </div>
            <div id="annonces"></div>
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
                            Confirmez-vous la réservation de cette salle ? Si oui, veuillez appuyer sur <b>Reserver</b>.Dans le cas contraire, merci d'annuler cette réservation.
							</div>
                            <form action="{{ route('salle.reserver') }}" method="POST">
                                @csrf
                                <div>
                                <label>Vous vous des extras ?</label>
                                <select name="extra">
                                    <option value="">Aucun</option>
                                    @foreach($extras as $extra)
                                        <option value="{{ $extra->id_extra }}">{{ $extra->libelle_extra }}</option>
                                    @endforeach
                                </select>
                                </div>
						</div>
						<div class="ti-modal-footer">
                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-danger-full" data-hs-overlay="#reservation_confirm_modal"> Annuler </button>
                                <input type="hidden" id="modal_id_salle" name="id_salle">
                                <input type="hidden" id="modal_debut" name="debut">
                                <input type="hidden" id="modal_fin" name="fin">
                                <button class="mt-3 ti-btn ti-btn-success-full" type="submit">Reserver</button>
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
	    $('#search_container,#response_container').addClass('!hidden');
        $('#loading_annonce').removeClass('!hidden');
	       // Perform search
	       const url = '/api/salle/search?' +
                        'agence=' + $('#agences').val() +
                        '&batiment=' + $('#batiments').val() +
                        '&debut=' + $('#startDate').val() +
                        '&fin=' + $('#endDate').val() +
                        '&material_1=' + $('#material_1').val() +
                        '&material_2=' + $('#material_2').val() +
                        '&material_3=' + $('#material_3').val() +
                        '&material_4=' + $('#material_4').val() +
                        '&material_5=' + $('#material_5').val() +
                        '&material_6=' + $('#material_6').val() +
                        '&material_7=' + $('#material_7').val() +
                        '&material_8=' + $('#material_8').val() +
                        '&material_9=' + $('#material_9').val() +
                        '&material_10=' + $('#material_10').val();
	       fetch(url).then((response) => {
	           if (response.ok) {
	               return response.json();
	           }
	           throw new Error('Something went wrong');
	       })
	       .then((responseJson) => {
	           $('#loading_annonce').addClass('!hidden');
               $('#response_container').removeClass('!hidden');
	           $('#salle_count').text(responseJson.length);
	           responseJson.forEach(salle => {
                    $('#annonces').append(`<div class="box custom-box">
				 	<div class="box-body">
				 		<div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                             <button type="button" data-id="${salle.id}" data-debut="${salle.debut}" data-fin="${salle.fin}" class="ti-btn ti-btn-primary-full label-ti-btn reservation_confirm_button"> <i class="ri-chat-smile-line label-ti-btn-icon  me-2"></i> Réserver </button>
				 		</div>
				 		<div class="flex mb-3 items-center">
				 			<div class="ms-2">
				 				<h5 class="font-semibold mb-0 flex items-center">
	                                    <span> 
                                            Salle : ${salle.numero}
	                                        <i class="bi bi-check-circle-fill text-success text-base"></i>
	                                    </span>
	                                </h5>
				 				<div class="sm:flex gap-2">
				 					<a href="javascript:void(0);">${salle.batiment}</a> 
				 					<p class="text-xs text-[#8c9097] dark:text-white/50 mt-0.5"><i class="bi bi-geo-alt text-[.6875rem]"></i> Agence : ${salle.agence} ,<span class="uppercase">${salle.ville}</span></p>
				 				</div>
				 			</div>
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
    $(document).ready(function(){
        $('body').on('click', '.reservation_confirm_button', function(){
            $('#modal_id_salle').val($(this).data('id'));
            $('#modal_debut').val($(this).data('debut'));
            $('#modal_fin').val($(this).data('fin'));
            $('#reservation_confirm_modal_opener').click();
        });

        $('#reset_search').on('click', function(){
            $('#response_container').addClass('!hidden');
            $('#search_container').removeClass('!hidden');
        });
    })
</script>
<script>
	$(document).ready(function() {
	$('#agences').select2({
	    placeholder: "Tout les agences",
	    allowClear: true,
	    height:'44px',
	    ajax: {
	        url: '/agences',
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
	
	$('#batiments').select2({
	    placeholder: "Tout les batiments",
	    allowClear: true,
	    ajax: {
	        url: '/batiments',
	        delay: 0,
	        dataType: 'json',
	        data: function (params) {
	            return {
	                q: params.term,
                    id_agence: $('#agences').val()
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

    $('#agences').on('change', function(){
        $('#batiments').val(null).trigger('change'); // Reset the selected values in the batiments dropdown
    });
	});
</script>
<script>$('#sidebar-recherche-salle').addClass('active');</script>
@stop