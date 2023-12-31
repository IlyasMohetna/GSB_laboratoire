@extends('layout.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
	.select2-container .select2-selection--single, .select2-container--default .select2-selection--single .select2-selection__arrow{
	height:44px!important;
	}
	.select2-selection__rendered{
	margin-top:5px;
	}
</style>
<link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}">
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
<div class="main-content">
	<!-- Page Header --> 
	<div class="block justify-between page-header md:flex">
		<div>
			<h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">Planning des salles</h3>
		</div>
	</div>
	<!-- Page Header Close --> <!-- Start::row-1 --> 
	<div class="grid grid-cols-12 gap-6">
		<div class="xl:col-span-3 col-span-12">
			<div class="box custom-box">
				<div class="box-header">
					<div class="box-title">Filtre de recherche</div>
				</div>
				<div class="box-body !p-0">
					<div id="external-events" class="border-b dark:border-defaultborder/10 p-4 space-y-4">
						<div>
							<select id="agences" class="form-control select2watch" name="agence"></select>
						</div>
						<div>
							<select id="batiments" class="form-control select2watch" name="batiment"></select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="xl:col-span-9 col-span-12">
			<div class="box custom-box">
				<div class="box-header">
					<div class="box-title">Calendrier</div>
				</div>
				<div class="box-body">
					<div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End::row-1 --> 
</div>
<script>
	document.addEventListener('DOMContentLoaded', function () {
	    var calendarEl = document.getElementById('calendar');
        
	    var calendar = new FullCalendar.Calendar(calendarEl, {
	        locale: 'fr',
            headerToolbar: {
	            left: 'prev,next today',
	            center: 'title',
	            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
	        },
	        initialView: 'timeGridDay',
	        defaultView: 'month',
	        events: {
	            url: '/salle/planning/events',
	            method: 'GET',
                extraParams: function() {
                    return {
                        id_agence: $('#agences').val(),
                        id_batiment: $('#batiments').val()
                    };
                },
                failure: function () {
	                alert('There was an error while fetching events!');
	            },
	            success: function (events) {
	                events.forEach(function (event) {
	                    event.color = getRandomColor();
	                });
	                calendar.render();
	            }
	        }
	    });
        
       $('#agences,#batiments').on('change', function(){
            calendar.refetchEvents();
	   });
	
	    function getRandomColor() {
	        var letters = '0123456789ABCDEF';
	        var color = '#';
	        for (var i = 0; i < 6; i++) {
	            color += letters[Math.floor(Math.random() * 16)];
	        }
	        return color;
	    }
	});
</script>
<script>
	$(document).ready(function() {
	$('#agences').select2({
	    placeholder: "Tout les agences",
	    allowClear: true,
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
	
	$('#batiments').select2({
	    placeholder: "Tout les batiments",
	    allowClear: true,
	    ajax: {
	        url: '/batiments',
	        delay: 0,
	        dataType: 'json',
	        data: function (params) {
	            return {
	                q: params.term,
	                   id_agence: $('#agences').val()
	            };
	        },
	        processResults: function (data) {
	            var formattedResults = data.results.map(function (result) {
	                return {
	                    id: result.id,
	                    text: result.text,
	                    longitude: result.longitude,
	                    latitude: result.latitude
	                };
	            });
	            return {
	                results: formattedResults
	            };
	        }
	    }
	}); 
	
	   $('#agences').on('change', function(){
	       $('#batiments').val(null).trigger('change'); // Reset the selected values in the batiments dropdown
	   });
	});
</script>
<script>$('#sidebar-planning-salle').addClass('active');</script>
@stop