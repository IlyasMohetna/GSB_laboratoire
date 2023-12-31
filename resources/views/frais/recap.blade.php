@extends('layout.app')
@section('content')
<div class="main-content">
<div class="p-6">
	<div class="box custom-box">
		<div class="box-header justify-between">
			<div class="box-title"> Récapitulatif annuel </div>
		</div>
        <div class="w-1/2 p-2 mx-auto">
            <div class="flex items-center justify-center  text-3xl font-extrabold">
                    <form action="{{ route('frais.recap_show_year', ['id_visiteur' => $visiteur->code_employe ]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="requested_year" value="{{ $requested_year-1 }}">
                        <button class="mt-4">
                            <span class="arrow mx-2">&larr;</span>
                        </button>
                    </form> 
                    <span class="year mx-2">{{ $requested_year }}</span>
                    <form action="{{ route('frais.recap_show_year', ['id_visiteur' => $visiteur->code_employe ]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="requested_year" value="{{ $requested_year+1 }}">
                        <button class="mt-4">
                            <span class="arrow mx-2">&rarr;</span>
                        </button>
                    </form> 
                </form>
            </div>
        </div>
		<div class="box-body">
			<div class="table-responsive">
				<table class="table whitespace-nowrap table-borderless min-w-full">
					<thead>
						<tr class="border-b border-defaultborder">
							<th scope="col" class="text-start">Mois</th>
							<th scope="col" class="text-start">Nombre de frais</th>
                            <th scope="col" class="text-start">Nombre de visites</th>
							<th scope="col" class="!text-center">Status du mois</th>
							<th scope="col" class="!text-end">Action</th>
						</tr>
					</thead>
					<tbody>
                        @foreach($months as $month)
						<tr class="border-b border-defaultborder @if ($month->date->month == now()->month) bg-warning/10 @endif text-center !p-0">
							<th scope="row">
								<div class="flex items-center space-x-2">
                                    @if ($month->date->month == now()->month && $month->date->year == now()->year)
                                        <i class="las la-flag-checkered text-xl"></i>
                                    @endif
                                    <b class="capitalize">{{ $month->date->translatedFormat('n - F') }}</b>
                                </div>
							</th>
							<td>{{ $month->frais_count }} Frais</td>
                            <td>{{ $month->visite_count }} Visite<?=($month->visite_count > 1) ? 's' : ''?></td>
                            <td class="!text-center" style="font-size:16px">
                                @if (($month->date->isCurrentMonth() && now()->day < 20 && (int) now()->year == $requested_year) )
                                <span class="badge bg-success/10 text-xl text-success" style="font-size:13px">Ouvert à la saisie</span>
                                @elseif ($month->date->isCurrentMonth() && now()->day >= 20)
                                <span class="badge bg-danger/10 text-xl text-warning" style="font-size:13px">Mois cloturé à la saisie</span>
                                @elseif (($month->date->gt(now()) && !$month->date->isCurrentMonth() && (int) now()->year == $requested_year) || $requested_year > (int) now()->year)
                                <span class="badge bg-info/10 text-xl text-info" style="font-size:13px">Non ouvert</span>
                                @else
                                <span class="badge bg-primary/10 text-xl text-danger" style="font-size:13px">Fermé à la saisie</span>
                                @endif
                            </td>
							<td class="!text-end">
                                <a href="{{ route('frais.frais_list_show', [
                                        'id_visiteur' => $visiteur->code_employe,
                                        'year' => $requested_year,
                                        'month' => $month->date->month
                                    ]) }}">
                                    <button class="badge bg-primary text-white" style="font-size:13px"><i class="las la-eye pr-2"></i> Voir</button>
                                </a>
							</td>
						</tr>
                        @endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="box-footer border-t-0 hidden">
		</div>
	</div>
</div>
<script>$('#sidebar-frais-recap_annuel').addClass('active');</script>
@stop