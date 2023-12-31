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
					<div class="box-title">Mes reservations de salles</div>
				</div>
				<div class="sortable-data p-6 bg-primary/50">
					<div class="w-full p-2 flex items-center">
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
								<th scope="col" class="text-start">Salle</th>
								<th scope="col" class="text-start">Date debut reservation</th>
								<th scope="col" class="text-start">Date fin reservation</th>
                                <th scope="col" class="text-start">Batiment</th>
                                <th scope="col" class="text-start">Agence</th>
								<th scope="col" class="text-start">Situation</th>
                                <th scope="col" class="text-start">Extra</th>
							</tr>
						</thead>
						<tbody>
							@foreach($reservations as $reservation)
							<tr class="border-b border-defaultborder">
								<td class="capitalize font-bold">Salle {{ ucfirst($reservation->salle->nom_salle) }}</td>
								<td class="text-center">{{ $reservation->date_debut_reservation->format('d/m/Y H:i') }}</td>
								<td class="text-center">{{ $reservation->date_fin_reservation->format('d/m/Y H:i') }}</td>
                                <td class="text-center">{{ $reservation->salle->batiment->nom_batiment }}</td>
                                <td class="text-center">{{ $reservation->salle->batiment->agence->nom_agence }}</td>
								<td>
                                    @if($reservation->date_fin_reservation->isPast())
                                        <span class="badge bg-success text-white">Terminé</span>
                                    @elseif(Carbon::now()->between($reservation->date_debut_reservation,$reservation->date_fin_reservation))
                                        <span class="badge bg-warning text-white">En cours</span>
                                    @elseif(Carbon::now()->lt($reservation->date_debut_reservation))
                                        <span class="badge bg-primary text-white">A venir</span>
                                    @else 
                                        <span>ERREUR !</span>
                                    @endif
								</td>
								<td class="text-center">{{ $reservation->extra->libelle_extra ?? 'Aucun' }}</td>
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
<script>$('#sidebar-salles-reservations').addClass('active');</script>
@stop