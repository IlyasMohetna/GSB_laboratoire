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
					<div class="box-title">Mes visites</div>
				</div>
				<div class="sortable-data p-6 bg-primary/50">
                    <span class="font-bold">Filtres de recherche : </span>
					<div class="w-full p-2 flex items-center">
						<div>
							<div class="choices ml-2 cursor-pointer" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
								<select id="sort-praticien" class="w-full ti-form-select choices__input cursor-pointer">
									<option value="">Tout les praticiens  </option>
                                    @foreach($visites->pluck('praticien.raison_sociale')->unique() as $praticien)
                                        <option value="{{ $praticien }}">{{ $praticien }}</option>
                                    @endforeach
								</select>
							</div>
						</div>
						<div>
							<div class="choices ml-4 cursor-pointer" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
								<select id="sort-situation" class="ti-form-select choices__input cursor-pointer">
                                    <option value="">Toutes les situations</option>
                                    <option value="Terminée">Terminée</option>
                                    <option value="En cours">En cours</option>
                                </select>
							</div>
						</div>
                        <div class="ml-auto">
							<div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
								<input type="text" id="search" class="form-control" placeholder="Rechercher...">
							</div>
						</div>
					</div>
				</div>
				<div class="table-responsive p-4">
					<table class="table whitespace-nowrap min-w-full" id="adatatable">
						<thead>
							<tr class="border-b border-defaultborder">
								<th scope="col" class="text-start">Praticien</th>
								<th scope="col" class="text-start">Date debut visite</th>
								<th scope="col" class="text-start">Date de fin</th>
								<th scope="col" class="text-start">Situation</th>
								<th scope="col" class="text-start no-sort">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($visites as $visite)
							<tr class="border-b border-defaultborder">
								<td class="capitalize font-bold">{{ $visite->praticien->raison_sociale }}</td>
								<td class="text-center">{{ $visite->date_debut_visite->format('d/m/Y') }}</td>
								<td class="text-center">{{ optional($visite->date_fin_visite)->format('d/m/Y') ?? '--'}}</td>
								<td>
									@if(!empty($visite->rapport))
									<span class="badge bg-success text-white">Terminée</span>
									@else 
									<span class="badge bg-warning text-white">En cours</span>
									@endif
								</td>
								<td>
									<div class="hstack flex gap-3 text-[.9375rem]">
										<a aria-label="Voir" href="{{ route('visite.visite_show', ['id_visite' => $visite->id_visite]) }}" target="_blank" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info-full">
										<i class="las la-eye"></i>
										</a>
									</div>
								</td>
							</tr>
							@endforeach
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
            lengthChange: false,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
            },
			columnDefs: [
				{ targets: 'no-sort', orderable: false }
			],
            pageLength: 7
        });
	    $('#sort-praticien').on('change', function () {
	        table.column(0).search($(this).val()).draw();
	    });
        $('#sort-situation').on('change', function () {
	        table.column(3).search($(this).val()).draw();
	    });
        $('#search').on('keyup', function () {
	        table.search($(this).val()).draw();
	    });
	});
</script>
<script>$('#sidebar-visites').addClass('active');</script>
@stop