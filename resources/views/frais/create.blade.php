@extends('layout.app')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/libs/filepond/css/filepond.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/filepond/css/filepond-plugin-image-edit.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/filepond/css/filepond-plugin-image-preview.min.css') }}">
<div class="main-content">
	<div class="grid grid-cols-12 gap-x-6 mb-[3rem] mt-16">
		<div class="xl:col-span-12 col-span-12">
			<h5 class="font-semibold text-center text-[1.25rem] !text-defaulttextcolor">Saisie de frais pour tous</h5>
			<p class="text-[#8c9097] dark:text-white/50 mb-4 text-center">Choisissez le mode de saisie qui vous convient le mieux.</p>
		</div>
		<div class="xl:col-span-12 col-span-12 mt-8" id="choice_container">
			<div class="grid grid-cols-12 gap-6">
				<div class="col-span-3"></div>
				<div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 cursor-pointer" id="saisie_manuelle">
					<div class="box overflow-hidden">
						<div class="box-body !p-0">
							<div class="px-1 py-2 bg-primary band_color_indicator"></div>
							<div class="!p-6">
								<div class="flex justify-between items-center mb-4">
									<div class="text-[1.125rem] font-semibold">Saisie manuelle</div>
								</div>
								<div class="mb-1 text-[#8c9097] dark:text-white/50">Cette option vous offrira une palette étendue de possibilités pour personnaliser votre expérience selon vos préférences et besoins spécifiques.</div>
								<ul class="list-none mb-0">
									<li class="grid"> <button type="button" class="ti-btn ti-btn-light">Choisir</button> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 cursor-pointer" id="saisie_automatise">
					<div class="box overflow-hidden">
						<div class="box-body !p-0">
							<div class="px-1 py-2 bg-primary band_color_indicator"></div>
							<div class="!p-6">
								<div class="flex justify-between items-center mb-4">
									<div class="text-[1.125rem] font-semibold">Saisie automatisée</div>
								</div>
								<div class="mb-1 text-[#8c9097] dark:text-white/50">Alimentée par une intelligence artificielle, cette option vous permet simplement de soumettre une justification, et l'outil se chargera du reste.</div>
								<ul class="list-none mb-0">
									<li class="grid"> <button type="button" class="ti-btn ti-btn-light ">Choisir</button> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="xl:col-span-12 col-span-12 mt-8 w-1/2 mx-auto !hidden" id="proof_upload_ai">
			<div class="box">
				<div class="box-header">
					<h5 class="box-title">Veuillez mettre votre justificative</h5>
				</div>
				<div class="box-body">
					<div class="my-pond">
						<input type="file" name='file' class='filepond' id='proof_upload_ai_file_upload'/>
					</div>
				</div>
			</div>
		</div>
		<div class="xl:col-span-12 col-span-12 mt-6 w-1/2 mx-auto block text-center !hidden" id="ai_analyse_animation">
			<img src="{{ asset('assets/img/ai_analyse.gif') }}">
			<span class="text-center font-bold text-2xl">L'IA analyse votre justificative...</span>
		</div>
		<div class="xl:col-span-12 col-span-12 mt-6 w-3/5 mx-auto block text-center bg-white rounded-xl !hidden" id="frais_create_form">
			<form action="" method="POST">
				@csrf
				<div class="grid grid-cols-2 h-auto text-left">
					<div class="col-span-1 p-6 overflow-y-auto">
						<div class="mb-4">
							<label class="form-label">Nature du frais</label>
							<select id="frais_nature" class="form-select !py-[0.59rem]">
								<optgroup label="Forfait">
									@foreach($forfaits as $forfait)
									<option value="{{ $forfait->id_nature }}" data-quantite-label="{{ $forfait->intitule_quantite }}" data-forfait="true" data-amount="{{ $forfait->montant_forfait }}">{{ $forfait->intitule_frais }}</option>
									@endforeach
								</optgroup>
								<optgroup label="Hors Forfait">
									<option data-forfat="false">Hors forfait</option>
								</optgroup>
							</select>
						</div>
						<div class="mb-4">
							<label class="form-label">Date du frais</label>
							<input type="date" class="form-control" id="date_frais" name="date_frais" placeholder="Example input placeholder">
						</div>
						<div class="grid grid-cols-2 gap-2">
							<div class="mb-4">
								<label class="form-label">Quantité</label>
								<input type="number" id="forfait_quantite" class="form-control cursor-not-allowed" disabled value="1">
							</div>
							<div class="mb-4">
								<label class="form-label">Montant du frais </label>
								<input type="number" class="form-control" id="montant_reel" placeholder="Montant réel du frais">
							</div>
						</div>
						<div>
							<span>Montant à remboursée : <span id="remboursement_badge" class="badge bg-success/10 text-success font-bold">0,00 €</span></span>
						</div>
						<div class="mt-2">
							<label class="form-label">Commentaire </label>
							<textarea class="form-control" id="frais_commentaire"></textarea>
						</div>
					</div>
					<style>
						#frais_create_form_file_upload_container .filepond--root{
						height: 320px;
						}
					</style>
					<script>
						function UtilQuantity(action,label = null){
						    switch(action){
						        case'enable':
						            UtilQuantity('show');
						            $('#forfait_quantite').removeClass('cursor-not-allowed').val(1).prop('disabled', false);
						            break;
						        case'disable':
						            UtilQuantity('show');
						            $('#forfait_quantite').addClass('cursor-not-allowed').val(1).prop('disabled', true);
						            break;
						        case'rename':
						            UtilQuantity('enable');
						            $('#forfait_quantite').focus().prev("label").text(label);
						            break; 
						        case'show':
						            $('#forfait_quantite').parent().show();
						            break; 
						        case'hide':
						            $('#forfait_quantite').parent().hide();
						            break; 
						    }
						}
						
						$('#frais_nature').on('change', function(){
						    $selected = $(this).find(':selected');
						    var isforfait = $selected.data('forfait');
						    var quantite_label = $selected.data('quantite-label');
						    //
						    if($selected.val() == 6){
						        $('#montant_reel').prop('disabled', true).val($selected.data('amount')).prev("label").text('Tarif appliqué');
						    }else{
						        $('#montant_reel').prop('disabled', false).val('').prev("label").text('Montant réel');
						    }
						    if(isforfait){
						        if(quantite_label == ''){
						            UtilQuantity('disable');
						        }else{
						            UtilQuantity('rename', quantite_label);
						        }
						    }else{
						        UtilQuantity('hide');
						    }
						})
						
						$('#frais_nature').on('change', CalculateFinalAmount);
						$('#montant_reel, #forfait_quantite').on('input', CalculateFinalAmount);
						
						function CalculateFinalAmount(){
						    $badge = $('#remboursement_badge');
						    $selected = $('#frais_nature').find(':selected');
						    var isforfait = $selected.data('forfait');
						    var montant_reel = Number($('#montant_reel').val());
						    if(isforfait){
						        var quantite = Number($('#forfait_quantite').val());
						        if($selected.val() !== 6 && $selected.val() !== 7){
						            if(montant_reel > $selected.data('amount')){
						                montant_reel = $selected.data('amount');
						            }
						        }
						        var calculation = quantite * montant_reel;
						    }else{
						        var calculation = 1 * montant_reel;
						    }
						
						    var calculation_formatted = calculation.toLocaleString('fr-FR', { style: 'currency', currency: 'EUR' });
						    $badge.text(calculation_formatted);
						}
					</script>
					<div class="col-span-1 p-6">
						<div class="bg-white p-4 rounded-md" id="frais_create_form_file_upload_container" style="height: 320px;">
							<input type="file" class="filepond" multiple id="frais_create_form_file_upload">
						</div>
					</div>
				</div>
				<div class="w-1/2 mx-auto p-4">
					<button class="ti-btn ti-btn-primary-full ti-btn-wave w-full" type="button">Créer</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
	    $('#saisie_manuelle,#saisie_automatise').hover(function(){
	        $(this).find('.band_color_indicator').addClass('bg-success');
	    }, function(){
	        $(this).find('.band_color_indicator').removeClass('bg-success');
	    })
	})
	
	$('#saisie_automatise').on('click', function(){
	 $('#choice_container').hide();
	 $('#proof_upload_ai').removeClass('!hidden');
	})
</script>
<script src="{{ asset('assets/libs/filepond/dropzone-min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond/filepond-plugin-image-preview.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond/filepond-plugin-file-encode.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond/filepond-plugin-file-validate-size.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond/filepond-plugin-file-validate-type.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond/filepond-plugin-image-edit.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond/filepond-plugin-image-exif-orientation.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond/filepond-plugin-image-crop.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond/filepond-plugin-image-transform.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond/filepond.min.js') }}"></script>
<script src="https://adri-glez.github.io/filepond-plugin-pdf-preview/dist/filepond-plugin-pdf-preview.js"></script>
<script>
    const query1 = document.querySelector('#frais_create_form_file_upload');
    FilePond.registerPlugin(FilePondPluginImagePreview);
	FilePond.registerPlugin(FilePondPluginPdfPreview);
	const frais_create_form_file_upload = FilePond.create(query1, {
	 labelIdle: 'Glissez et déposez vos fichiers ici ou <span class="filepond--label-action">Parcourir</span>',
	 labelFileProcessing: 'Chargement...',
	 labelFileProcessingError: 'Une erreur est survenue pendant le chargement',
	 allowMultiple: true,
	 allowFileEncode: true,
	 pdfPreviewHeight: 320,
	 instantUpload: false,
	    allowRevert:false,
	    allowProcess:false,
	 pdfComponentExtraParams: 'toolbar=0&view=fit&page=1'
	});
</script>
<script>
	const query2 = document.querySelector('#proof_upload_ai_file_upload');
	FilePond.registerPlugin(FilePondPluginImagePreview);
	FilePond.registerPlugin(FilePondPluginPdfPreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);
	FilePond.setOptions({
	    server: {
	    process: {
	        url: '/frais/justificative/ia',
            contentType: "application/json",
	        headers: {
	            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
	        },
            onload: (response) => {
                var response = JSON.parse(response);
                console.log(response);
                var content = response.content;
                const formattedDate = new Date(content.date).toISOString().split('T')[0];
                $('#date_frais').val(formattedDate);
                $('#frais_commentaire').val(content.merchant.name+' '+content.merchant.address);
                switch(content.categorie){
                    case 'toll':
                        $('#frais_nature').val(7).change();
                        $('#montant_reel').val(content.totalAmount).trigger('input');
                    break;
                    
                    case'hotel':
                        $('#frais_nature').val(5).change();
                        $('#forfait_quantite').val()
                        $('#montant_reel').val(content.totalAmount).trigger('input');
                    break;
                
                    case 'restaurant':
                        $('#frais_nature').val(1).change();
                        $('#montant_reel').val(content.totalAmount).trigger('input');
                    break;
                }
                
            }
	    },
	}
	});
	
	const pond = FilePond.create(query2, {
	    labelIdle: 'Glissez et déposez vos fichiers ici ou <span class="filepond--label-action">Parcourir</span>',
	    labelFileProcessing: 'Chargement...',
	    labelFileProcessingError: 'Une erreur est survenue pendant le chargement',
        labelFileTypeNotAllowed: 'Le type de fichier n\'est pas autorisé.',
        fileValidateTypeLabelExpectedTypes: 'Les types de fichier pris en charge sont {allButLastType} ou {lastType}',
	    allowMultiple: false,
        allowFileTypeValidation: true,
        acceptedFileTypes: ['image/png', 'image/jpeg'],
	    allowFileEncode: true,
	    pdfPreviewHeight: 320,
	    instantUpload: true,
	    pdfComponentExtraParams: 'toolbar=0&view=fit&page=1'
	});
	
	pond.on('processfilestart', (error, file) => {
	    $('#proof_upload_ai').addClass('!hidden');
	    $('#ai_analyse_animation').removeClass('!hidden');
	});

    pond.on('processfile', (error, file) => {
	    $('#ai_analyse_animation').addClass('!hidden');
        $('#frais_create_form').removeClass('!hidden');
	});

    pond.on('addfile', (error, file) => {
      if (!error) {
        const duplicatedFile = frais_create_form_file_upload.addFile(file.file);
        duplicatedFile.allowRevert = false;
      }
    });
</script>

@stop