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
					<div class="box-title"> Ajouter un utilisateur sur l'intranet </div>
				</div>
                <form id="ajout_user_form" action="{{ route('parametrage.user_create') }}" method="POST">
                    @csrf
				<div class="box-body">
                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
                        <div class="mb-4">
                            <label class="form-label !text-[.875rem] text-black">Prénom</label>
                            <input type="text" id="prenom" name="prenom" class="form-control" id="form-text" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label class="form-label !text-[.875rem] text-black">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control" id="form-text" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label class="form-label !text-[.875rem] text-black">Utilisateur</label>
                            <input type="text" id="utilisateur" name="utilisateur" class="form-control" id="form-text" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label class="form-label !text-[.875rem] text-black">Email</label>
                            <input type="text" id="email" name="email" class="form-control" id="form-text" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label class="form-label !text-[.875rem] text-black">Mot de passe</label>
                            <input type="password" id="password" name="password" class="form-control" id="form-text" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label class="form-label !text-[.875rem] text-black">Confirmer le mot de passe</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control" id="form-text" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label class="form-label !text-[.875rem] text-black">Date de naissance</label>
                            <input type="date" id="dob" name="dob" class="form-control" id="form-text" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label class="form-label !text-[.875rem] text-black">Date d'embauche</label>
                            <input type="date" id="de" name="de" class="form-control" id="form-text" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label class="form-label !text-[.875rem] text-black">Agence</label>
                            <select id="agence" required class="form-control select2watch" name="agence"></select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label !text-[.875rem] text-black">Fonction</label>
                            <select required class="form-control select2watch" id="fonction" name="fonction">
                                @foreach($fonctions as $fonction)
                                    <option value="{{ $fonction->code_fonction }}">{{ $fonction->nom_fonction }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mx-auto w-1/2">
					    <button class="w-full ti-btn ti-btn-primary-full" type="submit">Ajouter</button> 
                    </div>
				</div>
                </form>
			</div>
		</div>
	</div>
    <script>
        	$(document).ready(function() {
	$('#agence').select2({
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
});
    </script>
	<script>
        $(document).ready(function () {
            $("#ajout_user_form").validate({
                rules: {
                    prenom: {
                        required: true,
                    },
                    nom: {
                        required: true,
                    },
                    utilisateur: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                    confirm_password: {
                        required: true,
                        equalTo: "#password"
                    },
                    dob: {
                        required: true,
                    },
                    de: {
                        required: true,
                    },
                    agence: {
                        required: true,
                    },
                    fonction: {
                        required: true,
                    }
                },
                messages: {
                    prenom: {
                        required: "Veuillez saisir le prénom.",
                    },
                    nom: {
                        required: "Veuillez saisir le nom.",
                    },
                    utilisateur: {
                        required: "Veuillez saisir l'utilisateur.",
                    },
                    email: {
                        required: "Veuillez saisir l'adresse mail.",
                    },
                    password: {
                        required: "Veuillez saisir le mot de passe.",
                    },
                    confirm_password: {
                        required: "Veuillez confirmer le mot de passe.",
                        equalTo: "Les deux mot de passe ne sont identiques",
                    },
                    dob: {
                        required: "Veuillez saisir la date de naissance.",
                    },
                    de: {
                        required: "Veuillez saisir la date d'embauche.",
                    },
                    agence: {
                        required: "Veuillez choisir une agence.",
                    },
                    fonction: {
                        required: "Veuillez choisir une fonction.",
                    },
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass("!border-red").removeClass("border-red");
                    // $(element.form).find("label[for=" + element.id + "]");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass("!border-red").addClass("border-red");
                    // $(element.form).find("label[for=" + element.id + "]");
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