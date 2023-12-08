let map;
let routeLayer;
let markers = [];

function initMap() {
    map = L.map('map').setView([0, 0], 2);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
}
initMap();

function generateRoute(startLocationCoordinates, endLocationCoordinates) {
if (!map) {
    initMap();
}

// Remove existing route and markers
if (routeLayer) {
    map.removeLayer(routeLayer);
}

markers.forEach(marker => map.removeLayer(marker));
markers = [];

const osrmApiUrl = `https://router.project-osrm.org/route/v1/driving/${startLocationCoordinates};${endLocationCoordinates}?steps=true`;

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
color: 'blue',  // Change the color to your preference
weight: 5,      // Increase the weight for a thicker line
dashArray: '10, 10'  // Experiment with dash patterns
}).addTo(map);

// POPUP DISTANCE
// Extract distance and duration from the API response
const distanceInMeters = data.routes[0].distance;
const durationInSeconds = data.routes[0].duration;

// Convert meters to kilometers
const distanceInKilometers = (distanceInMeters / 1000).toFixed(2);

// Convert seconds to hours and minutes
const hours = Math.floor(durationInSeconds / 3600);
const minutes = Math.floor((durationInSeconds % 3600) / 60);

// Format the popup content with improved appearance
const popupContent = `
<div class="popup-container">
<div class="popup-title">Trajet</div>
<div class="popup-content">
  <div class="popup-row">
    <span class="popup-label">Distance:</span>
    <span class="popup-value">${distanceInKilometers} km</span>
  </div>
  <div class="popup-row">
    <span class="popup-label">Durée:</span>
    <span class="popup-value">${hours} heure(s) ${minutes} minutes</span>
  </div>
</div>
</div>
`;

// Bind the formatted popup content to the polyline
polyline.bindPopup(popupContent).openPopup();

// POPUP DISTANCE

            const startMarker = L.marker(polyline.getLatLngs()[0]).addTo(map);
            const endMarker = L.marker(polyline.getLatLngs()[polyline.getLatLngs().length - 1]).addTo(map);
            

            // Add the markers to the markers array
            markers.push(startMarker, endMarker);

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


function createMarkerIcon(color) {
    return L.divIcon({ className: 'custom-marker', html: `<div style="background-color: ${color};" class="marker-color"></div>` });
}