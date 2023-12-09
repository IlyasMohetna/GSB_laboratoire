let map;
let routeLayer;
let markers = [];

function initMap() {
    map = L.map('map').setView([0, 0], 2);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
}
initMap();

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