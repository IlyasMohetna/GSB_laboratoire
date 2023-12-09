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
                       <select id="startLocation" class="select2watch" name="startLocation"></select>
                    </div>
                    <div id="steps_container" class="col-span-12 mb-4 sm:mb-0 mb-2">
                        <div id="steps_list" class="space-y-2"></div>
                        <div id="steps_add" class="flex items-center space-x-2">
                            <button type="button" id="steps_add_btn" class="ti-btn ti-btn-icon bg-success/10 text-success hover:bg-success hover:text-white !rounded-full ti-btn-wave">
                                <i class="ri-add-line"></i>
                            </button>
                            <span class="justify-center align-center">Ajouté une étape et augmenter vos possibilités</span>
                        </div>
                    </div>
                    <div class="col-span-12 mb-4 sm:mb-0 mt-2"> 
                       <label class="hidden" for="autoSizingInput">Ville d'arrivée</label> 
                       <select id="endLocation" class="select2watch" name="endLocation"></select>
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
 var uniqueIdCounter = 1; // Initialize a counter

function addNewStep() {
    var newSelectId = 'step_select_' + uniqueIdCounter;
    uniqueIdCounter++;
    var newSelectHtml = '<div class="col-span-12 mb-4 sm:mb-0 flex items-center space-x-2" id="' + newSelectId + '_container"><select id="' + newSelectId + '" name="' + newSelectId + '" class="step-select w-80"></select><button type="button" aria-label="button" class="ti-btn ti-btn-icon bg-danger/10 text-danger hover:bg-danger hover:text-white !rounded-full ti-btn-wave w-20" onclick="removeStep(\'' + newSelectId + '_container\')"><i class="ri-delete-bin-line"></i></button></div>';
    
    // Append the new select element to the steps_list container
    $('#steps_list').append(newSelectHtml);

    // Apply Select2 to the new select element
    $('#' + newSelectId).select2({
        placeholder: "Sélectionner une étape",
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
}

        
$('#steps_add_btn').on('click', function(){
    addNewStep();
})
  
function removeStep(containerId) {
    // Remove the corresponding container when the remove button is clicked
    $('#' + containerId).remove();
}
</script>
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