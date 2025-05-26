<div id="map" style="width: 155%; height: 90vh;"></div>
<script>
    const map = L.map('map').setView([-7.599430107968352, 110.96119845337199], 15);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>