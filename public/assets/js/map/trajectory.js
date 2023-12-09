let map;
let routeLayer;
let markers = [];

function initMap() {
    map = L.map('map').setView([0, 0], 2);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
}
initMap();

function generateRoute(traject_coordinates) {
    if (!map) {
        initMap();
    }

    if (routeLayer) {
        map.removeLayer(routeLayer);
    }

    markers.forEach(marker => map.removeLayer(marker));
    markers = [];

    const osrmApiUrl = `https://router.project-osrm.org/route/v1/driving/${traject_coordinates}?steps=true`;

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

                const steps = traject_coordinates.split(';');

                steps.forEach((step, index) => {
                    const [longitude, latitude] = step.split(',');

                    const markerColor = index === 0 ? 'green' : (index === steps.length - 1 ? 'red' : 'blue');
                    const marker = L.marker([latitude, longitude], { icon: getMarkerIcon(markerColor) }).addTo(map);

                    markers.push(marker);

                    // Bind a popup to each marker
                    const popupContent = `
                        <div class="popup-container">
                            <div class="popup-title">Step ${index + 1}</div>
                            <div class="popup-content">
                                <div class="popup-row">
                                    <span class="popup-label">Coordinates:</span>
                                    <span class="popup-value">${latitude}, ${longitude}</span>
                                </div>
                            </div>
                        </div>
                    `;
                    marker.bindPopup(popupContent);
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