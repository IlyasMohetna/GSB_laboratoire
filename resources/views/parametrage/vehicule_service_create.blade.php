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
			<div class="box mx-auto w-1/2 mt-14">
				<div class="box-header justify-between">
					<div class="box-title"> Ajouter un véhicule de service sur une agence </div>
				</div>
                <form id="ajout_vehicule_form" action="{{ route('parametrage.vehicule_service_create') }}" method="POST">
                    @csrf
				<div class="box-body">
					<div class="mb-4">
                        <label for="form-text" class="form-label !text-[.875rem] text-black">Immatriculation</label>
                        <input type="text" id="immatriculation" name="immatriculation" class="form-control" id="form-text" placeholder="">
                    </div>
                    <div class="mb-4">
                        <label for="form-text" class="form-label !text-[.875rem] text-black">Marque</label>
                        <input type="text" id="marque" name="marque" class="form-control" id="form-text" placeholder="">
                    </div>
                    <div class="mb-4">
                        <label for="form-text" class="form-label !text-[.875rem] text-black">Model</label>
                        <input type="text" id="model" name="model" class="form-control" id="form-text" placeholder="">
                    </div>
                    <div class="mb-4">
                        <label for="form-text" class="form-label !text-[.875rem] text-black">Année model</label>
                        <input type="text" id="annee_model" name="annee_model" class="form-control" id="form-text" placeholder="">
                    </div>
                    <div class="mb-4">
                        <label for="form-text" class="form-label !text-[.875rem] text-black">Photo</label>
                        <input type="text" id="photo" name="photo" class="form-control" id="form-text" placeholder="">
                    </div>
                    <div class="mb-4">
                        <label for="form-text" class="form-label !text-[.875rem] text-black">Agence</label>
                        <select id="agences" required class="form-control select2watch" name="agence"></select>
                    </div>
					<button class="ti-btn ti-btn-primary-full" type="submit">Ajouter</button> 
				</div>
                </form>
			</div>
		</div>
	</div>
    <script>
        	$(document).ready(function() {
	$('#agences').select2({
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
    $('#agences').val($('#agences option:first-child').val()).trigger('change');
});
    </script>
	<script>
        $(document).ready(function () {
            $("#immatriculation").inputmask("AA-999-AA");
            $("#ajout_vehicule_form").validate({
                rules: {
                    immatriculation: {
                        required: true,
                        pattern: '[A-Za-z]{2}-\\d{3}-[A-Za-z]{2}'
                    },
                    marque: {
                        required: true,
                    },
                    model: {
                        required: true,
                    },
                    annee_model: {
                        required: true,
                        digits: true,
                    },
                    photo: {
                        required: true,
                    },
                    agences: {
                        required: true,
                    }
                },
                messages: {
                    immatriculation: {
                        required: "Veuillez saisir l'immatriculation.",
                        pattern: "Veuillez respecter le format AA-000-AA."
                    },
                    marque: {
                        required: "Veuillez saisir la marque.",
                    },
                    model: {
                        required: "Veuillez saisir le modèle.",
                    },
                    annee_model: {
                        required: "Veuillez saisir l'année du modèle.",
                        digits: "Veuillez saisir une année valide.",
                    },
                    photo: {
                        required: "Veuillez saisir l'URL de la photo.",
                    },
                    agences: {
                        required: "Veuillez choisir une agence.",
                    },
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass("!border-red").removeClass("border-red");
                    $(element.form).find("label[for=" + element.id + "]");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass("!border-red").addClass("border-red");
                    $(element.form).find("label[for=" + element.id + "]");
                },
                submitHandler: function (form) {
                    // If the form is valid, perform the form post
                    // You can use Ajax or traditional form submission here
                    form.submit();
                },
                focusInvalid: false,
            });
        });
    </script>
    <script>$('#sidebar-parametrage-vehicule-service').addClass('active');</script>
</div>
@stop