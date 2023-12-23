@extends('layout.app')
@section('content')
@php 
use Carbon\Carbon;
error_reporting(0);
@endphp
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<div class="main-content">
	<div class="grid grid-cols-12 gap-6 mt-6">
		<div class="xl:col-span-12 col-span-12">
			<div class="box custom-box">
				<div class="box-header justify-between">
					<div class="box-title">Les praticiens</div>
				</div>
				<div class="sortable-data p-6 bg-primary/50">
                    <span class="font-bold">Filtres de recherche : </span>
					<div class="w-full p-2 flex items-center">
                        <div class="ml-auto">
                            <input type="text" id="datatable-search" class="form-control" placeholder="Rechercher..." value="">
						</div>
					</div>
				</div>
				<div class="table-responsive p-4">
					<table class="table whitespace-nowrap min-w-full" id="adatatable">
						<thead>
							<tr class="border-b border-defaultborder">
								<th scope="col" class="text-start">Raison sociale</th>
                                <th scope="col" class="text-start">Prenom</th>
                                <th scope="col" class="text-start">Nom</th>
                                <th scope="col" class="text-start">Adresse</th>
                                <th scope="col" class="text-start">Code postale</th>
                                <th scope="col" class="text-start">Ville</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
			<div class="box-footer hidden border-t-0">
			</div>
		</div>
	</div>
</div>
</div>
<style>
    div.dataTables_wrapper div.dataTables_filter {
        display: none;
    }
</style>
<script>
	$(document).ready(function () {
	    var table = $('#adatatable').DataTable({
            processing: true,
            serverSide: true,
            lengthChange: false,
            ajax: "{{ route('visite.praticien_yajra') }}",
            columns: [
                {data: 'raison_sociale', name: 'raison_sociale'},
                {data: 'prenom', name: 'prenom'},
                {data: 'nom', name: 'nom'},
                {data: 'adresse', name: 'adresse'},
                {data: 'code_postal', name: 'code_postal'},
                {data: 'ville', name: 'ville'}
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
            },
            pageLength: 12
        });
        $('#datatable-search').on('keyup', function () {
	        table.search($(this).val()).draw();
	    });
	});
</script>
<script>$('#sidebar-praticiens').addClass('active');</script>
@stop