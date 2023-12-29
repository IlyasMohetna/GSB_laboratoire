@extends('layout.app')
@section('content')
@php 
use Carbon\Carbon;
use Illuminate\Support\Number;
@endphp
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<div class="main-content">
   <div class="grid grid-cols-12 gap-6 mt-6">
      <div class="xl:col-span-12 col-span-12">
         <div class="box custom-box">
            <div class="box-header justify-between">
               @if(auth()->user()->code_employe == $visiteur->code_employe)
               <div class="box-title">Mes frais # @if(!$requested_year || !$requested_month) Aucun filtre de période @elseif(now()->month == $requested_month && now()->year == $requested_year) Récap mensuel @else {{$requested_month}}-{{$requested_year}} @endif</div>
               @else
               <div class="box-title">{{ $visiteur->prenom.' '.$visiteur->nom }} # @if(!$requested_year || !$requested_month) Aucun filtre de période @elseif(now()->month == $requested_month && now()->year == $requested_year) Récap mensuel @else {{$requested_month}}-{{$requested_year}} @endif</div>
               @endif
            </div>
            <div class="sortable-data p-6 bg-primary/50">
               <span class="font-bold">Filtres de recherche : </span>
               <div class="w-full p-2 flex items-center">
                  <div>
                     <div class="choices ml-4" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                        <select id="sort-situation" class="ti-form-select choices__input">
                           <option value="">Toutes les situations</option>
                           @foreach($situations as $situation)
                           <option value="{{ $situation->libelle_situation }}">{{ $situation->libelle_situation }}</option>
                           @endforeach
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
                        <th scope="col" class="text-start">Libelle</th>
                        <th scope="col" class="text-start">Date</th>
                        <th scope="col" class="text-start">Montant</th>
                        <th scope="col" class="text-start">Quantité</th>
                        <th scope="col" class="text-start">Situation</th>
						<th scope="col" class="text-start">Date d'ajout</th>
                        <th scope="col" class="text-start">Mission</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($lesfrais as $frais)
                     <tr class="border-b border-defaultborder">
                        <td class="capitalize font-bold">
                           @if($frais->type_forfait == 'forfait')
                           {{ $frais->nature->intitule_frais }}
                           @else 
                           {{ $frais->horsforfait_libelle }}
                           @endif
                        </td>
                        <td class="text-center">{{ $frais->date_frais->format('d/m/Y') }}</td>
                        <td class="text-center">{{ Number::currency($frais->montant_total, 'EUR') }}</td>
                        <td class="text-center">{{ $frais->forfait_quantite }}</td>
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
						<td>{{ $frais->created_at }}</td>
                        <td>
                           <a href="{{ route('visite.visite_show', ['id_visite' => $frais->id_visite]) }}">
                           <button type="button" aria-label="button"  class="ti-btn ti-btn-icon ti-btn-facebook ti-btn-wave">
                           <i class="las la-eye text-xl"></i>
                           </button>
                           </a>
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
              pageLength: 7,
			  order: [[5, 'desc']]
          });
          $('#sort-situation').on('change', function () {
           table.column(4).search($(this).val()).draw();
       });
          $('#search').on('keyup', function () {
           table.search($(this).val()).draw();
       });
   });
</script>
@if(now()->month == $requested_month && now()->year == $requested_year) 
<script>$('#sidebar-frais-recap_mensuel').addClass('active');</script>
@else 
<script>$('#sidebar-mesfrais').addClass('active');</script>
@endif
@stop