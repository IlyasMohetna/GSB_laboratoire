@extends('layout.app')
@section('content')
@php 
use Carbon\Carbon;
error_reporting(0);
@endphp
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<div class="main-content">
	<div class="grid grid-cols-12 gap-6 mt-6">
		<div class="xl:col-span-12 col-span-12">
			<div class="box custom-box">
				<div class="box-header justify-between">
					<div class="box-title">Les medicaments</div>
				</div>
				<div class="sortable-data p-6 bg-primary/50">
                    <span class="font-bold p-2">Filtres de recherche : </span>
                    <div class="grid grid-cols-12 mt-2">
                        <div class="col-span-6">
                            <div class="grid grid-cols-3">
                                <div>
                                    <select id="sort-famille" style="width:300px">
                                        <option value="">Tout les praticiens  </option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 ml-auto">
							<div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
								<input type="text" id="datatable-search" class="form-control" placeholder="Rechercher...">
							</div>
                        </div>
                    </div>
				</div>
				<div class="table-responsive p-4">
					<table class="table whitespace-nowrap min-w-full" id="adatatable">
						<thead>
							<tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">Photo médicament</th>
								<th scope="col" class="text-start">Nom médicament</th>
                                <th scope="col" class="text-start">Famille médicament</th>
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
$(document).ready(function(){
    $('#sort-famille').select2({
        placeholder: "Tout les familles",
        allowClear: true,
        height: '44px',
        ajax: {
            url: '/api/visite/famille',
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
	    var table = $('#adatatable').DataTable({
            processing: true,
            serverSide: true,
            lengthChange: false,
            ajax: "{{ route('visite.medicaments_yajra') }}",
            columns: [
                {data: 'photo', name: 'photo', orderable: false, searchable: false},
                {data: 'nom_medicament', name: 'nom_medicament'},
                {data: 'famille', name: 'famille.nom_famille'}
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
            },
            pageLength: 7
        });
        $('#sort-famille').on('change', function () {
	        table.column(2).search($(this).val()).draw();
	    });
        $('#datatable-search').on('keyup', function () {
	        table.search($(this).val()).draw();
	    });
	});
</script>
<script>$('#sidebar-praticiens').addClass('active');</script>
@stop