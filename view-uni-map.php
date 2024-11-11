<h1>University Locations Map</h1>

<div id="map" style="height: 400px;"></div>

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
const map = L.map('map').setView([37.8, -96], 4);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

const universities = [
<?php
$locations = selectUniversityLocations();
while ($location = $locations->fetch_assoc()) {
    echo "{ name: '" . $location['university_name'] . "', location: '" . $location['university_location'] . "' },";
}
?>
];

universities.forEach(university => {
    fetch(`https://nominatim.openstreetmap.org/search?q=${university.location}&format=json`)
    .then(response => response.json())
    .then(data => {
        if (data[0]) {
            const lat = data[0].lat;
            const lon = data[0].lon;
            // Place marker for each university
            L.marker([lat, lon]).addTo(map)
                .bindPopup(`<b>${university.name}</b><br>${university.location}`)
                .openPopup();
        }
    });
});
</script>
