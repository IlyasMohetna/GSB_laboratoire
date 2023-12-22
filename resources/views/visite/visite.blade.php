@extends('layout.app')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/quill.bubble.css') }}">
<div class="main-content">
	<!-- Page Header --> 
	<div class="block justify-between page-header md:flex">
		<div>
			<h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">Visite #{{ $visite->id_visite }}</h3>
		</div>
	</div>
	<!-- Page Header Close --> <!-- Start:: row-1 --> 
    <div class="w-full p-2 flex items-center">
		<div>
			<button type="button" id="visu1" class="ti-btn ti-btn-primary-full border border-1">Visuelle visite</button>
		</div>
		<div>
			<button type="button" id="visu2" class="ti-btn ti-btn-light border border-1">Visuelle frais</button>
		</div>
		<div class="ml-auto">
			TEST
		</div>
	</div>
		
    <script>
        $('#visu1,#visu2').on('click', function(){
            $('#visu1,#visu2').toggleClass('ti-btn-primary-full ti-btn-light');
        })
    </script>
	<div class="grid grid-cols-12 gap-4">
		<div class="col-span-3">
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
		<div class="col-span-3">
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
		<div class="col-span-6">
            <form action="{{ route('visite.visite_close') }}" method="POST"> 
                @csrf
			<div class="box">
				<div class="box-header">
					<div class="box-title">Rapport de visite</div>
				</div>
				<div class="box-body">
					<div id="editor" style="max-height: 300px;overflow-y: auto;"></div>
				</div>
				<input type="hidden" name="id_visite" value="{{ $visite->id_visite }}">
                <input type="hidden" name="quill_content" id="quill_content">

				@if(!empty($visite->date_fin_visite))
                <div class="w-1/2 mx-auto p-2">
					<div class="hs-tooltip ti-main-tooltip w-full"> 
						<button type="button" disabled class="hs-tooltip-toggle ti-btn ti-btn-warning w-full ti-btn-border-top opacity-[0.6]"> 
							Cloturer la visite
							<span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm hidden" role="tooltip"> 
								Vous avez déja cloturer cette visite
							</span> 
						</button> 
					</div>
                </div>
				@else 
				<div class="w-1/2 mx-auto p-2">
					<button type="submit" class="ti-btn ti-btn-warning w-full ti-btn-border-top">
						Cloturer la visite
					</button>
                </div>
				@endif
			</div>
		</div>
	</div>
</div>
<script src="{{ asset('assets/js/quill.min.js') }}"></script>
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
	        toolbar: toolbarOptions
	    },
	    theme: 'snow'
	});

	var content = {!! json_encode($visite->rapport) !!};
    quill.root.innerHTML = content;

    quill.on('text-change', function() {
        var quillContent = quill.root.innerHTML;
        document.getElementById('quill_content').value = quillContent;
    });
	
	})();


</script>
@stop