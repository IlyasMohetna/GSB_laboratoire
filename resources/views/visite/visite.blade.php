@extends('layout.app')
@section('content')
@php use Illuminate\Support\Number; @endphp
<script src="https://cdn.quilljs.com/1.2.2/quill.min.js"></script>
<link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/quill.bubble.css') }}">
<script src="https://unpkg.com/quill-image-resize-module@3.0.0/image-resize.min.js"></script>
<div class="main-content">
	<!-- Page Header --> 
	<div class="block justify-between page-header md:flex">
		<div>
			<h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
				Visite #{{ $visite->id_visite }} 
				@if(!empty($visite->rapport))
				<span class="badge bg-success text-white">Terminée</span>
				@else 
				<span class="badge bg-warning text-white">En cours</span>
				@endif</h3>
			</div>
	</div>
	<!-- Page Header Close --> <!-- Start:: row-1 --> 
	<div class="w-full p-2 flex items-center">
		<div>
			<button type="button" id="visu1" class="ti-btn ti-btn-primary-full border border-1">Visuelle visite</button>
		</div>
		@if(empty($visite->date_fin_visite) || $visite->frais->isEmpty())
		<div>
			<button type="button" disabled class="cursor-not-allowed ti-btn ti-btn-light border border-1">Visuelle frais</button>
		</div>
		@else 
		<div>
			<button type="button" id="visu2" class="ti-btn ti-btn-light border border-1">Visuelle frais</button>
		</div>
		@endif
		<div class="ml-auto flex space-x-2">
			<a href="{{ route('visite.generer_ordre_mission', ['id_visite' => $visite->id_visite]) }}" class="hs-dropdown-toggle ti-btn !gap-0 !py-1 !px-2 !text-[0.9rem] !font-medium bg-primary text-white flex items-center justify-center" data-hs-overlay="#todo-compose">
			<i class="las la-download"></i>
			Ordre de mission
			</a>
			@if(empty($visite->date_fin_visite))
				<a href="#" title="Visite non cloturer" disabled class="cursor-not-allowed opacity-3 hs-dropdown-toggle ti-btn !gap-0 !py-1 !px-2 !text-[0.9rem] !font-medium bg-secondary text-white flex items-center justify-center" data-hs-overlay="#todo-compose2">
					<i class="ri-add-circle-line align-middle !me-1"></i>
					Déclarer un frais
				</a>
			@else
				<a href="{{ route('frais.frais_create_show', ['id_visite' => $visite->id_visite]) }}" class="hs-dropdown-toggle ti-btn !gap-0 !py-1 !px-2 !text-[0.9rem] !font-medium bg-secondary text-white flex items-center justify-center" data-hs-overlay="#todo-compose2">
					<i class="ri-add-circle-line align-middle !me-1"></i>
					Déclarer un frais
				</a>
			@endif
		</div>
	</div>
	<script>
		$('#visu1,#visu2').on('click', function(){
		    $('#visu1,#visu2').toggleClass('ti-btn-primary-full ti-btn-light');
		$('#visu1_container,#visu2_container').toggleClass('!hidden');
		})

		$(document).ready(function() {
			if (window.location.hash === '#frais') {
				$('#visu2').click();
			}
		});
	</script>
	<div class="grid grid-cols-12 gap-4" id="visu1_container">
		<div class="xl:col-span-3 md:col-span-6 col-span-12">
			<div class="box">
				<div class="box-header justify-between">
					<div class="box-title"> Médicament à présenter </div>
				</div>
				<div class="box-body">
					<ul class="list-none mb-0">
						@foreach($visite->medicaments as $medicament)
						<li class="mb-4">
							<a href="javascript:void(0);">
								<div class="flex tems-center">
									<div class="leading-none"> 
										<span class="inline-flex justify-center items-center avatar avatar-md">
										<img src="{{ $medicament->medicament->photo_medicament }}">
										</span> 
									</div>
									<div class="flex-grow ms-2">
										<p class="font-semibold mb-0">{{ $medicament->medicament->nom_medicament }}</p>
										<p class="text-[0.75rem] !text-[#8c9097] dark:text-white/50 mb-0">Catégorie : {{ $medicament->medicament->famille->nom_famille }}</p>
									</div>
								</div>
							</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		<div class="xl:col-span-3 md:col-span-6 col-span-12">
			<div class="box crm-highlight-card">
				<div class="box-body">
					<div class="flex items-center justify-between">
						<div>
							<div class="font-semibold text-[1.125rem] text-white mb-2">Praticien :</div>
							<div class="!block text-[0.85rem] text-white">
								<div><span>Raison sociale : <b>{{ $visite->praticien->raison_sociale }}</b></span></div>
								<div><span>Représentant : <b>{{ $visite->praticien->prenom.' '.$visite->praticien->nom }}</b></span></div>
								<div><span>Adresse : <b>{{ $visite->praticien->adresse }}</b></span></div>
								<div><span>Vile de rattachement : <b>{{ $visite->praticien->ville->nom }}</b></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="box-body">
					<div class="grid grid-cols-12">
						<div class="xxxl:col-span-3 col-span-4 flex items-center ecommerce-icon px-0">
							<span class="rounded-md p-4 bg-primary/10">
							<i class="las la-hourglass-start text-2xl"></i>
							</span>
						</div>
						<div class="xxxl:col-span-9 col-span-8">
							<div class="mb-2">Date de début</div>
							<div class="text-[#8c9097] dark:text-white/50 mb-1 text-[0.75rem]">
								<span class="text-defaulttextcolor font-semibold text-[1.25rem] leading-none vertical-bottom">{{ $visite->date_debut_visite->format('d/m/Y') }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="box-body">
					<div class="grid grid-cols-12">
						<div class="xxxl:col-span-3 col-span-4 flex items-center ecommerce-icon px-0">
							<span class="rounded-md p-4 bg-primary/10">
							<i class="las la-hourglass-end text-2xl"></i>
							</span>
						</div>
						<div class="xxxl:col-span-9 col-span-8">
							<div class="mb-2">Date de fin</div>
							<div class="text-[#8c9097] dark:text-white/50 mb-1 text-[0.75rem]">
								<span class="text-defaulttextcolor font-semibold text-[1.25rem] leading-none vertical-bottom">{{ optional($visite->date_fin_visite)->format('d/m/Y') ?? '--' }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="xl:col-span-6 col-span-12">
			<form action="{{ route('visite.visite_close') }}" method="POST" id="cloturer_visite_form">
			@csrf
			<div class="box">
				<div class="box-header">
					<div class="box-title">Rapport de visite</div>
				</div>
				<div class="box-body @if(!empty($visite->date_fin_visite)) cursor-not-allowed @endif">
					<div id="editor" style="max-height: 300px;overflow-y: auto;"></div>
				</div>
				<input type="hidden" name="id_visite" value="{{ $visite->id_visite }}">
				<input type="hidden" name="quill_content" id="quill_content">
				@if(empty($visite->date_fin_visite))
				<div class="w-1/2 mx-auto p-2">
					<button type="button" onclick="Cloturer()" class="ti-btn ti-btn-success w-full ti-btn-border-top">
					Cloturer la visite
					</button>
				</div>
				@endif
			</div>
			</form>
		</div>
	</div>
	<script>
		function Cloturer(){
			$quill_content = $('#quill_content').val();
			if($quill_content.length < 1){
				alert('Veuillez remplire le rapport !');
			}else{
				$('form#cloturer_visite_form').submit();
			}
		}
	</script>
	<div class="grid grid-cols-12 gap-4 !hidden" id="visu2_container">
		<div class="xl:col-span-3 col-span-12">
			<div class="box">
				<div class="box-header justify-between">
					<div class="box-title"> GED </div>
				</div>
				<div class="box-body">
					<ul class="list-none mb-0" id="ged">
						@forelse($visite->ged as $document)
						<li class="mb-4" data-id-frais="{{ $document->id_frais }}">
							<div class="grid grid-cols-12">
								<div class="col-span-9 flex tems-center">
									<div class="leading-none"> 
										<span class="inline-flex justify-center items-center avatar avatar-md">
										@switch($document->justif_extension)
										@case('jpg')
										<img width="60" height="60" src="https://img.icons8.com/papercut/60/jpg.png" alt="jpg"/>
										@break;
										@case('png')
										<img width="60" height="60" src="https://img.icons8.com/papercut/60/png.png" alt="png"/>
										@break;		
										@case('pdf')
										<img width="48" height="48" src="https://img.icons8.com/color/48/pdf.png" alt="pdf"/>
										@break;	
										@case('xlsx')
										<img width="48" height="48" src="https://img.icons8.com/color/48/ms-excel.png" alt="ms-excel"/>
										@break;	
										@endswitch
										</span> 
									</div>
									<div class="flex-grow ms-2">
										<p class="font-semibold mb-0">{{ $document->justif_nom }}</p>
										<p class="text-[0.75rem] !text-[#8c9097] dark:text-white/50 mb-0">Date d'ajout : {{ $document->created_at }}</p>
									</div>
								</div>
								<div class="col-span-3">
									<div class="float-right right-1 space-x-1">
										<a href="{{ route('document.downloader', ['justificativeId' => $document->id_justif]) }}"><i class="las la-save text-xl"></i></a>
										<a href="{{ route('document.viewer', ['justificativeId' => $document->id_justif]) }}" target="_blank"><i class="las la-eye text-xl"></i></a>
									</div>
								</div>
							</div>
						</li>
						@empty 
						<div>
							Aucun document n'est disponible sur votre GED
						</div>
						@endforelse
					</ul>
				</div>
			</div>
		</div>
		<div class="xl:col-span-9 col-span-12">
			<div class="box pl-4">
				<div class="box-header justify-between sm:flex block">
					<div class="box-title"> Frais </div>
					<div>
						<nav class="sm:flex block sm:mt-0 mt-2 space-x-2" aria-label="Tabs" id="filters">
							<button type="button" class="ti-btn ti-btn-info ti-btn-wave" data-filter="all">Voir tout</button>
							<button type="button" class="ti-btn ti-btn-primary ti-btn-wave" data-filter="1">Déclaré</button>
							<button type="button" class="ti-btn ti-btn-warning ti-btn-wave" data-filter="2">Traitement en cours</button>
							<button type="button" class="ti-btn ti-btn-danger ti-btn-wave" data-filter="3">Refusé</button>
							<button type="button" class="ti-btn ti-btn-success ti-btn-wave" data-filter="4">Remboursé</button>
						</nav>
					</div>
				</div>
				<div class="box-body !p-0">
					<div class="tab-content p-4">
						<div class="tab-pane show active text-[#8c9097] dark:text-white/50 !border-0 !p-0" id="taskactive" role="tabpanel">
							<table class="table min-w-full whitespace-nowrap table-hover border table-bordered">
								<thead>
									<tr class="border border-inherit border-solid  dark:border-defaultborder/10 ">
										<th scope="col" class="!text-start">Libelle</th>
										<th scope="col" class="!text-start">Date frais</th>
										<th scope="col" class="!text-start">Montant total</th>
										<th scope="col" class="!text-start">Quantité</th>
										<th scope="col" class="!text-start">Date d'appartenance</th>
										<th scope="col" class="!text-start">Commentaire</th>
										<th scope="col" class="!text-start">Situation</th>
										<th scope="col" class="!text-start">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($visite->frais as $frais)
									<tr class="border-y border-inherit border-solid dark:border-defaultborder/10 filter-{{ $frais->code_situation }}">
										<td>
											@if($frais->type_forfait == 'forfait')
											{{ $frais->nature->intitule_frais }}
											@else 
											{{ $frais->horsforfait_libelle }}
											@endif
										</td>
										<td>{{ $frais->date_frais->format('d/m/Y') }}</td>
										<td> <span class="font-semibold">{{ Number::currency($frais->montant_total, 'EUR') }}</span> </td>
										<td>{{ $frais->forfait_quantite }}</td>
										<td>{{ $frais->appartenance_mois.'/'.$frais->appartenance_annee }}</td>
										<td>{{ $frais->commentaire }}</td>
										<td>
											@if($frais->code_situation == 1)
											<span class="badge bg-primary/10 text-primary">{{ $frais->situation->libelle_situation }}</span>
											@elseif($frais->code_situation == 2)
											<span class="badge bg-warning/10 text-warning">{{ $frais->situation->libelle_situation }}</span>
											@elseif($frais->code_situation == 3)
											<span class="badge bg-danger/10 text-danger">{{ $frais->situation->libelle_situation }}</span>
											@elseif($frais->code_situation == 4)
											<span class="badge bg-success/10 text-success">{{ $frais->situation->libelle_situation }}</span>
											@else
											Erreur
											@endif
										</td>
										<td>
											<div class="flex space-x-1 cursor-pointer">
												@role('comptable')
													<button data-id-frais="{{ $frais->id_frais }}" type="button" class="frais-accept-btn"><i class="las la-check-circle text-xl text-green"></i></button>
													<button data-id-frais="{{ $frais->id_frais }}" type="button" class="frais-decline-btn"><i class="las la-ban text-xl text-red"></i></button>
												@endrole
												@role('visiteur') 
													@if($frais->code_situation == 1)
													<button type="button" data-id-frais="{{ $frais->id_frais }}" class="delete">
														<i class="las la-trash text-xl text-red"></i>
													</button>
													@else 
													<button type="button" title="Impossible de supprimer ce frais" class="opacity-4 cursor-not-allowed">
														<i class="las la-trash text-xl text-red"></i>
													</button>
													@endif
												@endrole
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="box-body">
   <button type="button" id="accept_frais_opener" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#accept_frais_modal" style="display:none"></button>
   <div id="accept_frais_modal" class="hs-overlay ti-modal hidden">
      <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
         <div class="ti-modal-content w-full">
            <div class="ti-modal-header">
               <h6 class="modal-title" id="staticBackdropLabel4">Confirmer votre action</h6>
               <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#accept_frais_modal">
                  <span class="sr-only">Close</span> 
                  <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                  </svg>
               </button>
            </div>
            <div class="ti-modal-body">
               <div>
                  Confirmez-vous le remboursement de ce frais ? <b>Cette action est irréversible et le visiteur sera notifié de la décision.</b>
               </div>
            </div>
            <div class="ti-modal-footer">
               <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-danger-full" data-hs-overlay="#accept_frais_modal"> Annuler </button>
               <form action="{{ route('frais.frais_accept') }}" method="POST">
                  @csrf
                  <input type="hidden" id="modal_id_frais" name="modal_id_frais">
                  <button class="mt-3 ti-btn ti-btn-success-full" type="submit">Rembourser ce frais</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="box-body">
   <button type="button" id="decline_frais_opener" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#decline_frais_modal" style="display:none"></button>
   <div id="decline_frais_modal" class="hs-overlay ti-modal hidden">
      <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
         <div class="ti-modal-content w-full">
            <div class="ti-modal-header">
               <h6 class="modal-title" id="staticBackdropLabel4">Confirmer votre action</h6>
               <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#decline_frais_modal">
                  <span class="sr-only">Close</span> 
                  <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                  </svg>
               </button>
            </div>
            <div class="ti-modal-body">
               <div>
                  Confirmez-vous le refus de ce frais ? <b>Cette action est irréversible et le visiteur sera notifié de la décision.</b>
               </div>
            </div>
            <div class="ti-modal-footer">
               <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-danger-full" data-hs-overlay="#decline_frais_modal"> Annuler </button>
               <form action="{{ route('frais.frais_decline') }}" method="POST">
                  @csrf
                  <input type="hidden" id="decline_id_frais" name="modal_id_frais">
                  <button class="ti-btn mt-3 ti-btn-success-full" type="submit">Refuser ce frais</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
    $(document).ready(function() {
        filterTableRows('all');
        $('#filters button').on('click', function() {
            var filter = $(this).data('filter');
            filterTableRows(filter);
        });
        function filterTableRows(filter) {
            $('.table tbody tr').show();
            if (filter !== 'all') {
				console.log($('.table tbody tr:not(.filter-' + filter + ')'));
                $('.table tbody tr:not(.filter-' + filter + ')').hide();
            }
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    $(document).ready(function(){
        $('body').on('click', '.frais-accept-btn', function(){
            $('#modal_id_frais').val($(this).data('id-frais'));
            $('#accept_frais_opener').click();
        });

		$('body').on('click', '.frais-decline-btn', function(){
            $('#decline_id_frais').val($(this).data('id-frais'));
            $('#decline_frais_opener').click();
        });
    })
</script>
<script>
	function DeleteFrais(id_frais)
	{
		$.ajax({
			url:"{{ route('frais.frais_delete') }}",
			method:'POST',
			headers: {
	            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
	        },
			data:'id_frais='+id_frais,
			success:function(response){
				$.toast({
					heading: 'Success',
					text: 'Ce frais et tout les documents relative ont été supprimer',
					showHideTransition: 'slide',
					position: 'top-right',
					icon: 'success'
				})
			}
		});
	}
	
	$('.delete').on('click', function(){
		$element = $(this);
		$element.closest('tr').hide();
		var id_frais = $element.data('id-frais');
		DeleteFrais(id_frais);
		$('#ged li').each(function(){
			if($(this).data('id-frais') == id_frais){
				$(this).slideUp();
			}
		})
	})
</script>
<script>
	(function () {
	'use strict';
	/* quill snow editor */
	var toolbarOptions = [
	    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
	    [{ 'font': [] }],
	    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
	    ['blockquote', 'code-block'],
	
	    [{ 'header': 1 }, { 'header': 2 }],               // custom button values
	    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
	    [{ 'script': 'sub' }, { 'script': 'super' }],      // superscript/subscript
	    [{ 'indent': '-1' }, { 'indent': '+1' }],          // outdent/indent
	    [{ 'direction': 'rtl' }],                         // text direction
	
	    [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
	
	    [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
	    [{ 'align': [] }],
	
	    ['image', 'video'],
	    ['clean']                                         // remove formatting button
	];
	var quill = new Quill('#editor', {
	    modules: {
	        toolbar: toolbarOptions,
			imageResize: {
          displaySize: true
        }
	    },
	    theme: 'snow'
	});

	@if(!empty($visite->date_fin_visite))
	quill.disable();
	@endif

	var content = {!! json_encode($visite->rapport) !!};
	   quill.root.innerHTML = content;
	
	   quill.on('text-change', function() {
    var quillContent = quill.root.innerHTML;

    // Check if the content is empty or contains only a newline
    if (!quillContent.trim() || quillContent.trim() === '<p><br></p>') {
        document.getElementById('quill_content').value = '';
    } else {
        document.getElementById('quill_content').value = quillContent;
    }
});


	
	})();
</script>
@stop