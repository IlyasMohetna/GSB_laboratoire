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
        <div class="md:col-span-6 col-span-12">
            <div class="box" id="step1">
            <div class="box-header justify-between">
               <div class="box-title">Mon trajet</div>
            </div>
            <div class="box-body sm:grid grid-cols-12 block gap-y-2 gap-x-4 items-center">
                <div class="col-span-12 mb-4 sm:mb-0"> 
                    <label class="hidden" for="autoSizingInput">Ville de départ</label> 
                    <select id="startLocation" class="select2watch" name="startLocation"></select>
                </div>
                <div id="steps_container" class="col-span-12 mb-4 mt-4 sm:mb-0 mb-2">
                    <div id="steps_list" class="space-y-2"></div>
                    <div id="steps_add" class="flex items-center space-x-2">
                        <button type="button" id="steps_add_btn" class="ti-btn ti-btn-icon bg-success/10 text-success hover:bg-success hover:text-white !rounded-full ti-btn-wave">
                            <i class="ri-add-line"></i>
                        </button>
                        <span class="justify-center align-center">Ajouté une étape et augmenter vos possibilités</span>
                    </div>
                </div>
                <div class="col-span-12 sm:mb-0 mt-2"> 
                    <label class="hidden" for="autoSizingInput">Ville d'arrivée</label> 
                    <select id="endLocation" class="select2watch" name="endLocation"></select>
                </div>
                <hr>
            </div>
            </div>
            <div class="box !hidden" id="step2">
                <div class="box-header justify-between">
                    <div class="box-title">Selectionner un véhicule</div>
                </div>
                <div class="box-body block items-center space-y-3">
                    <div class="grid grid-cols-2">
                        <div class="mx-auto">
                            <button type="button" class="px-4 py-4 text-md border border-1 font-medium text-center bg-white hover:text-white items-center text-black rounded-lg hover:bg-blue-800">
                                <i class='bx bx-car'></i>
                                Véhicules personneles
                            </button>
                        </div>
                        <div class="mx-auto">
                            <button type="button" class="px-4 py-4 text-md border border-1 font-medium text-center bg-white hover:text-white items-center text-black rounded-lg hover:bg-blue-800">
                                <i class='bx bxs-buildings' ></i>   
                                Véhicules de service
                            </button>
                        </div>
                    </div>
                    <div id="vehicule_perso_list">
                        @if($vehicules_perso->isEmpty())
                        <div class="mx-auto text-center">Vous n'avez aucun véhicule personnel disponible pour le moment</div>
                        @else 
                        <select id="car-select" name="color_select">
                            @foreach($vehicules_perso as $vehicule_perso)
                            <option value="{{ $vehicule_perso->id_vehicule }}" data-marque="{{ $vehicule_perso->marque }}" data-immatriculation="{{ $vehicule_perso->immatriculation }}" data-model="{{ $vehicule_perso->model }}" data-annee_model="{{ $vehicule_perso->annee_model }}">{{ $vehicule_perso->marque }} - {{ $vehicule_perso->immatriculation }}</option>
                            @endforeach
                        </select>
                        @endif
                    </div>
                </div>
            </div>
            <div class="box !hidden" id="step3">
                <div class="box-header justify-between">
                    <div class="box-title">Details de mon annonce</div>
                </div>
                <div class="box-body block items-center space-y-3">
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <div class="relative">
                                <input type="text" id="hs-trailing-icon" name="hs-trailing-icon" class="ti-form-input rounded-sm pe-11 focus:z-10" placeholder="Date de départ"> 
                                <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-4"> 
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="relative">
                                <input type="text" id="hs-trailing-icon" name="hs-trailing-icon" class="ti-form-input rounded-sm pe-11 focus:z-10" placeholder="Nombre de place"> 
                                <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-4"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="float-right py-2 px-3 inline-flex flex-shrink-0 justify-center items-center gap-2 rounded-e-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                            <span class="hidden animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-white rounded-full" role="status" aria-label="loading">
                            </span>
                            <i class='bx bx-car' ></i>
                            Créer 
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div>
                    <button id="prevBtn" type="button" aria-label="button" class="!hidden float-left ti-btn ti-btn-icon text-md bg-danger text-white !rounded-full ti-btn-wave me-5">
                        <i class='bx bx-left-arrow-alt' ></i>
                    </button>                
                </div>
                <div>
                    <button id="nextBtn" type="button" aria-label="button" class="float-right  ti-btn ti-btn-icon text-md bg-success text-white !rounded-full ti-btn-wave">
                        <i class='bx bx-right-arrow-alt' ></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="md:col-span-6 col-span-12 h-full" id="traject_map_row">
            <div id="map" class="w-full" style="height:80vh!important"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
      var currentStep = 1;

      $('#nextBtn').on('click', function() {
        if (currentStep < 3) {
          $('#step' + currentStep).addClass('!hidden');
          currentStep++;
          $('#step' + currentStep).removeClass('!hidden');
          $('#prevBtn').removeClass('!hidden');
        }

        // Toggle NEXT and PREVIOUS button visibility based on the current step
        if (currentStep === 3) {
          $('#nextBtn').addClass('!hidden');
        } else {
          $('#nextBtn').removeClass('!hidden');
        }
      });

      $('#prevBtn').on('click', function() {
        if (currentStep > 1) {
          $('#step' + currentStep).addClass('!hidden');
          currentStep--;
          $('#step' + currentStep).removeClass('!hidden');
          $('#nextBtn').removeClass('!hidden');
        }

        // Toggle NEXT and PREVIOUS button visibility based on the current step
        if (currentStep === 1) {
          $('#prevBtn').addClass('!hidden');
        } else {
          $('#prevBtn').removeClass('!hidden');
        }
      });
    });
  </script>
<script>
    $(document).ready(function() {
      // Initialize car-select select2 with preloaded data and custom template
      $("#car-select").select2({
        templateResult: formatCarState,
      });
    });

    // Custom template for car-select
    function formatCarState(car) {
      var marque = $(car.element).data('marque');
      var immatriculation = $(car.element).data('immatriculation');
      var model = $(car.element).data('model');
      var annee_model = $(car.element).data('annee_model');

      var $state = $(
        '<div style="display: flex; justify-content: space-between; align-items: center;">' +
          '<div style="flex-grow: 1;">' +
            '<strong>' + marque + '</strong> - '+ model +'<br>' +
            'Immatriculation: ' + immatriculation +
          '</div>' +
          '<div style="float: right;">' +
            'Annee Model: ' + annee_model +
          '</div>' +
        '</div>'
      );
      return $state;
    }
  </script>
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
    var newSelectHtml = '<div class="col-span-12 mb-4 sm:mb-0 flex items-center space-x-2" id="' + newSelectId + '_container"><select id="' + newSelectId + '" name="' + newSelectId + '" class="select2watch w-80"></select><button type="button" aria-label="button" class="ti-btn ti-btn-icon bg-danger/10 text-danger hover:bg-danger hover:text-white !rounded-full ti-btn-wave w-20" onclick="removeStep(\'' + newSelectId + '_container\')"><i class="ri-delete-bin-line"></i></button></div>';
    
    $('#steps_list').append(newSelectHtml);

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
    $('#' + containerId).remove();
    updateSelect2Watch();
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
    });
    function updateSelect2Watch() {
    var trajectory_data = [];
    
    $('.select2watch').each(function () {
        var element = $(this).select2('data')[0];
        if (element && element.longitude && element.latitude) {
            trajectory_data.push({
                cityName: element.text,
                coordinates: element.longitude + ',' + element.latitude
            });
        }
    });

    if (trajectory_data.length >= 2) {
        // console.log(trajectory_data);
        // const traject_coordinates = trajectory_data.map(data => data.coordinates).join(';');
        // trajectory_data.forEach((step, index) => {
        //     console.log(step['coordinates'].split(','));
        //     // console.log(step,index);
        // });
        // return false;
        generateRoute(trajectory_data);
    }
}
$(document).on('select2:select', '.select2watch', function (e) {
    updateSelect2Watch();
});
</script>
@stop