@extends('layout.app')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>.error{color:red}</style>
<div class="main-content">
	<!-- End:: row-4 --> <!-- Start:: row-5 --> 
	<div class="grid grid-cols-12 gap-6">
		<div class="col-span-12">
			<div class="box mx-auto w-4/5 mt-6">
				<div class="box-header justify-between">
					<div class="box-title"> Déclarer une visite </div>
				</div>
				<form id="ajout_vehicule_form" action="{{ route('visite.create_show') }}" method="POST">
					@csrf
					<div class="box-body !p-2">
						<div>
							<div class="grid grid-cols-2 gap-6">
								<div class="mb-2">
									<label for="form-text" class="form-label !text-[.875rem] text-black">Date programmé de visite</label>
									<input type="date" id="date_debut_visite" name="date_debut_visite" class="form-control" id="form-text" placeholder="">
								</div>
								<div class="mb-2">
									<label for="form-text" class="form-label !text-[.875rem] text-black">Praticien</label>
									<select name="id_praticien" id="id_praticien"></select>
								</div>
							</div>
						</div>
						<div class="rounded-xl" style="height:auto" >
							<div class="mb-4">
								<label for="form-text" class="form-label !text-[.875rem] text-black">Stock de médicament</label>
								<div class="relative flex rounded-sm w-1/2">
									<input type="text" id="medicament_search" placeholder="Recherche de médicament" class="ti-form-input pe-11 rounded-none rounded-e-sm focus:z-10">
									<div class="absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-4">
										<svg class="h-4 w-4 text-gray-500 dark:text-[#8c9097] dark:text-white/50" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
											<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
										</svg>
									</div>
								</div>
							</div>
							<div class="w-full">
								<div class="mx-auto w-1/2 text-center mt-12 flex flex-col items-center" id="no-elements-available">
									<img src="{{ asset('assets/img/not-result-found.gif') }}" style="width:40%" class="mx-auto">
									<span class="font-semibold text-md">Aucun résultat n'est disponible pour votre recherche</span>
								</div>
								<div class="grid grid-cols-2 gap-4" id="medicament_search_list"></div>
								<input type="hidden" id="id_medicament" name="id_medicament">
							</div>
							<div class="w-full">
								<button class="ti-btn ti-btn-primary-full float-right" type="submit">Déclarer</button> 
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
        
    </script>
	<script>
		var searchController = new AbortController();
		
		function PerformMedicamentSearch() {
		    // Get values from inputs
		    var id_famille = $('#famille').val();
		    var q = $('#medicament_search').val();
		
		    // Abort the previous request
		    searchController.abort();
		
		    // Create a new AbortController for the current request
		    searchController = new AbortController();
		
		    // Perform Ajax request with the new AbortSignal
		    PerformAjaxSearch(searchController.signal);
		}
		
		$(document).ready(function () {  
		    $('#medicament_search_list').on('click', '.amedicament', function(event) {
		    event.preventDefault();
		
		    var id_medicament = $(this).data('medicament-id');
		    var $id_medicament_input = $('#id_medicament');
		    var currentValue = $id_medicament_input.val();
		
		    var exists = currentValue.includes(id_medicament);
		
		    var updatedValue = exists
		        ? currentValue.replace(new RegExp(id_medicament + ','), '')
		        : currentValue + id_medicament + ',';
		
		    $id_medicament_input.val(updatedValue);
		    $(this).toggleClass('bg-primary/10 border-primary', !exists);
		});
		
		});
		    
		$(document).ready(function() {
		            $('#medicament_search').on('keyup', function(){
		                PerformMedicamentSearch();
		            })
				});
		
		        function PerformAjaxSearch(signal)
		        {
		            var id_famille = $('#famille').val();
		            var q = $('#medicament_search').val();
		
		            $.ajax({
		                url:'/api/visite/medicament',
		                method:'GET',
		                contentType: "application/json",
		                dataType: "json",
		                data:'id_famille='+id_famille+'&q='+q,
		                signal: signal,
		                success:function(medicaments){
		                    $('#medicament_search_list').empty();
		                    if(medicaments.length == 0){
		                        $('#no-elements-available').show();
		                    }else{
		                        $('#no-elements-available').hide();
		                        medicaments.forEach((medicament) => {
		                        $('#medicament_search_list').append(`
		                            <div>
		                                <div data-medicament-id="${medicament.id_medicament}" style="padding:1.5px" class="amedicament mb-0 border cursor-pointer border-2 rounded-xl hover:border-primary !hover:bg-primary/10">
		                                    <div class="form-check-label">
		                                        <div class="sm:flex block items-center justify-between">
		                                        <div class="me-2 leading-none">
		                                            <span class="avatar avatar-xl">
		                                                <img src="https://www.pharmacie-du-centre-albert.fr/resize/600x600/media/finish/img/normal/75/3400930001479-a-313-pommade-dermique-200-000-ui-tube-50g.jpg" alt="">
		                                            </span>
		                                        </div>
		                                            <div class="w-full">
		                                                <p class="mb-0 font-semibold">${medicament.nom_medicament}</p>
		                                                <p class="text-[#8c9097] dark:text-white/50 text-[0.6875rem] mb-0">Catagorie : ${medicament.famille.nom_famille}</p>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        `);
		                        });
		                    }
		                }
		            })
		        }
		    
	</script>
	<script>
		$(document).ready(function(){
		    $('#id_praticien').select2({
			    placeholder: "Raison sociale du praticien",
			    allowClear: true,
			    height:'44px',
			    ajax: {
			        url: '/api/visite/praticien',
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
		});
		    
	</script>
</div>
@stop