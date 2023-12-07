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
                       <select id="startLocation" name="state" data-select2-id="select2-data-1-v94p" tabindex="-1" aria-hidden="true">
                        <option value="s-1" data-select2-id="select2-data-3-bum8">Selection-1</option>
                        <option value="s-2">Selection-2</option>
                        <option value="s-3">Selection-3</option>
                        <option value="s-4">Selection-4</option>
                        <option value="s-5">Selection-5</option>
                    </select>
                    </div>
                    <div id="steps_container"></div>
                    <div class="col-span-12 mb-4 sm:mb-0"> 
                       <label class="hidden" for="autoSizingInput">Ville d'arrivée</label> 
                       <input type="text" class="form-control border border-2" id="endLocation" placeholder="Ville" value="6.84,47.64"> 
                    </div>
                  <div class="col-span-12">
                    <button type="button" id="generate_route">Generate</button> 
                </div>
               </form>
            </div>
         </div>
      </div>
      <div class="md:col-span-6 col-span-12 h-full" id="traject_map_row">
        <div id="map" class="w-full" style="height:100vh!important"></div>
      </div>
   </div>
</div>
<script>$('#sidebar-accueil').addClass('active');</script>
<script>
    let map;
    let routeLayer;
    let markers = [];

    function initMap() {
        map = L.map('map').setView([0, 0], 2);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
    }

    function generateRoute() {
        if (!map) {
            console.error('Map is not initialized.');
            return;
        }
        const startLocation = document.getElementById('startLocation').value;
        const endLocation = document.getElementById('endLocation').value;

        if (routeLayer) {
            map.removeLayer(routeLayer);
            markers.forEach(marker => map.removeLayer(marker));
            markers = [];
        }

        const osrmApiUrl = `https://router.project-osrm.org/route/v1/driving/${startLocation};${endLocation}?steps=true`;

        fetch(osrmApiUrl)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Network response was not ok (${response.status} ${response.statusText})`);
                }
                return response.json();
            })
            .then(data => {
                if (data && data.code === 'Ok' && data.routes && data.routes.length > 0) {
                    const encoded = data.routes[0].geometry;
                    const polyline = L.Polyline.fromEncoded(encoded).addTo(map);
                    const startMarker = L.marker(polyline.getLatLngs()[0]).addTo(map);
                    const endMarker = L.marker(polyline.getLatLngs()[polyline.getLatLngs().length - 1]).addTo(map);

                    map.fitBounds(polyline.getBounds());
                } else {
                    console.error('No valid route found. Check the response structure.');
                }
            })
            .catch(error => {
                console.error('Error fetching route:', error);
            });
    }

    function createMarkerIcon(color) {
        return L.divIcon({ className: 'custom-marker', html: `<div style="background-color: ${color};" class="marker-color"></div>` });
    }

    $(document).ready(function(){
        initMap();
        $('#generate_route').on('click', function(){
            generateRoute();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#startLocation').select2({
            ajax: {
                url: '/ville',
                data: function (params) {
                    var query = {
                        search: params.term,
                        page: params.page || 1
                    }
                    
                    // Query parameters will be ?search=[term]&page=[page]
                    return query;
                },
                processResults: function (data) {
                    return {
                        results: data.items
                    };
                }
            }

        });
    });
</script>
@stop