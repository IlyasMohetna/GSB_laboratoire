let map;
let routeLayer;
let markers = [];

function initMap() {
    map = L.map('map').setView([0, 0], 2);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
}
initMap();

function calculateEndDate(startDateString, durationInSeconds) {
    var parts = startDateString.split(' ');
    var dateParts = parts[0].split('/');
    var timeParts = parts[1].split(':');

    var day = parseInt(dateParts[0], 10);
    var month = parseInt(dateParts[1], 10) - 1; // JavaScript months are 0-indexed
    var year = parseInt(dateParts[2], 10);
    var hours = parseInt(timeParts[0], 10);
    var minutes = parseInt(timeParts[1], 10);
    var start = new Date(year, month, day, hours, minutes);

    var end = new Date(start.getTime() + durationInSeconds * 1000);

    return end;
}

function formatDuration(seconds) {
    var hours = Math.floor(seconds / 3600);
    var minutes = Math.floor((seconds % 3600) / 60);
    
    if (hours > 0) {
        console.log(hours + " h " + (minutes > 0 ? minutes + " min" : ""));
        return hours + " h " + (minutes > 0 ? minutes + " min" : "");
    } else {
        console.log(minutes + " min");
        return minutes + " min";
    }
}

function formatDistance(meters) {
    var kilometers = (meters / 1000).toFixed(2);
    console.log(kilometers+' km');
    return kilometers + " km";
}

function generateRoute(trajectory_data) {
    if (!map) {
        initMap();
    }

    if (routeLayer) {
        map.removeLayer(routeLayer);
    }

    markers.forEach(marker => map.removeLayer(marker));
    markers = [];

    const traject_coordinates = trajectory_data.map(data => data.coordinates).join(';');
    const osrmApiUrl = `https://router.project-osrm.org/route/v1/driving/${traject_coordinates}?steps=false`;

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

                const polyline = L.Polyline.fromEncoded(encoded, {
                    color: 'blue',
                    weight: 5,
                    dashArray: '10, 10'
                }).addTo(map);

                // Legs
                $('#arriving_dates').html('');
                const legs = data.routes[0].legs;

                var currentStartTime = $('#DateTimeDepart').val();
                legs.forEach(leg => {
                    var endDate = calculateEndDate(currentStartTime, leg.duration);
                    $('#arriving_dates').append('<input type="hidden" name="arriving_dates[]" value="'+endDate.toLocaleString()+'">');
                    currentStartTime = endDate.toLocaleString();
                });

                // Recap

                $('#recap_distance').text(formatDistance(data.routes[0].distance));
                $('#recap_duree').text(formatDuration(data.routes[0].duration));

                // Markers

                trajectory_data.forEach((step, index) => {
                    const [longitude, latitude] = step['coordinates'].split(',');
                
                    let popupTitle = '';
                    let markerColor = '';
                
                    if (index === 0) {
                        popupTitle = 'Départ';
                        markerColor = 'green';
                    } else if (index === trajectory_data.length - 1) {
                        popupTitle = 'Arrivé';
                        markerColor = 'red';
                    } else {
                        popupTitle = `Etape ${index}`;
                        markerColor = 'blue';
                    }
                
                    const marker = L.marker([latitude, longitude], { icon: getMarkerIcon(markerColor) }).addTo(map);
                
                    markers.push(marker);
                
                    // Create a popup with the customized content
                    const popupContent = `
                        <div class="popup-container">
                            <div class="popup-title">${popupTitle}</div>
                            <div class="popup-content">
                                <div class="popup-row">
                                    <span class="popup-label">Ville:</span>
                                    <span class="popup-value">${step.cityName}</span>
                                </div>
                            </div>
                        </div>
                    `;
                
                    // Bind the popup to the marker and show on hover
                    marker.bindPopup(popupContent);
                
                    marker.on('mouseover', function () {
                        this.openPopup();
                    });
                
                    marker.on('mouseout', function () {
                        this.closePopup();
                    });
                });
                
                

                // Set the routeLayer to the new polyline
                routeLayer = polyline;

                map.fitBounds(polyline.getBounds());
            } else {
                console.error('No valid route found. Check the response structure.');
            }
        })
        .catch(error => {
            console.error('Error fetching route:', error);
        });
}

function getMarkerIcon(color) {
    return L.divIcon({
        className: 'custom-marker',
        iconSize: [20, 20],
        iconAnchor: [10, 10],
        html: `<div style="background-color: ${color}; width: 20px; height: 20px; border-radius: 50%;"></div>`
    });
}


function createMarkerIcon(color) {
    return L.divIcon({
        className: 'custom-marker',
        html: `<div style="background-color: ${color};" class="marker-color"></div>`
    });
}