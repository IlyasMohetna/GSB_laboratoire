@extends('layout.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="{{ asset('assets/js/Polyline.encoded.js') }}"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<div class="main-content">
   <!-- Page Header --> 
   <div class="block justify-between page-header md:flex">
      <div>
         <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">Créer une annonce covoiturage</h3>
      </div>
   </div>
   <!-- End:: row-4 --> <!-- Start:: row-5 --> 
   <div class="grid grid-cols-12 gap-6">
      <div class="md:col-span-6 col-span-12" id="traject_details_row">
         <div class="box">
            <div class="box-header justify-between">
               <div class="box-title">Details de mon annonce</div>
            </div>
            <div class="box-body">
               <form class="sm:grid grid-cols-12 block gap-y-2 gap-x-4 items-center mb-4">
                    <div class="col-span-12 mb-4 sm:mb-0"> 
                       <label class="hidden" for="autoSizingInput">Ville de départ</label> 
                       <select id="startLocation" name="startLocation"></select>
                    </div>
                    <div id="steps_container"></div>
                    <div class="col-span-12 mb-4 sm:mb-0"> 
                       <label class="hidden" for="autoSizingInput">Ville d'arrivée</label> 
                       <select id="endLocation" name="endLocation"></select>
                    </div>
                  <div class="col-span-12">
                    <button type="button" id="generate_route">Generate</button> 
                </div>
               </form>
            </div>
         </div>
      </div>
      <div class="md:col-span-6 col-span-12 h-full" id="traject_map_row">
        <div id="map" class="w-full" style="height:80vh!important"></div>
      </div>
   </div>
</div>
<style>
    .popup-container {
  font-family: Arial, sans-serif;
  max-width: 300px;
}

.popup-title {
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 10px;
}

.popup-content {
  color: #333;
}

.popup-row {
  margin-bottom: 8px;
}

.popup-label {
  font-weight: bold;
  margin-right: 5px;
}

.popup-value {
  color: #007BFF; /* Customize the color as needed */
}

</style>
<script>$('#sidebar-accueil').addClass('active');</script>
<script src="{{ asset('assets/js/map/trajectory.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#startLocation').select2({
            placeholder: "Selectionner une ville",
            allowClear: true,
            ajax: {
                url: '/ville',
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

        $('#endLocation').select2({
            placeholder: "Selectionner une ville",
            allowClear: true,
            ajax: {
                url: '/ville',
                delay: 0,
                dataType: 'json',
                data: function (params) {
                    return {
                        q: params.term
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
            
        $('#startLocation,#endLocation').on('select2:select', function (e) {
            var startLocationData = $('#startLocation').select2('data')[0];
            var endLocationData = $('#endLocation').select2('data')[0];
            generateRoute(
                [
                    startLocationData.longitude+','+startLocationData.latitude
                ],
                [
                    endLocationData.longitude+','+endLocationData.latitude
                ]
                );
            });    
        });
</script>
@stop