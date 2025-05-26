<div id="map" style="width: 155%; height: 90vh;"></div>

<script>
    var peta1 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        attribution: '© Google Maps',
        maxZoom: 20,
    });


    var peta2 = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });


   


    var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });


   
    var peta4 = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://carto.com/attributions">CARTO</a>'
    });


   
    var peta5 = L.tileLayer('https://{s}.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
    });

  
    const map = L.map('map', {
	center: [-7.599430107968352, 110.96119845337199],
	zoom: 15,
	layers: [peta2]
    });

    const baseLayers = {
	    'peta1': peta1,
	    'peta2': peta2,
        'peta3': peta3,
        'peta4': peta4,
        'peta5': peta5,
    };

    const layerControl = L.control.layers(baseLayers).addTo(map);

    //===marker===
    var marker = L.marker([-7.602147754229003, 110.9512281415966]).addTo(map)
    .bindPopup('<b>SMAN 1 KARANGANYAR</b><br />subjek-objek').openPopup();
    var marker = L.marker([-7.595894601563977, 110.9541893004193]).addTo(map)
    .bindPopup('<b>SMPN1 KARANGANYAR</b><br />subjek-objek').openPopup();
    var marker = L.marker([-7.595766985267546, 110.95989704113275]).addTo(map)
    .bindPopup('<b>Gedung Olahraga</b><br />subjek-objek').openPopup();
    var marker = L.marker([-7.5990684175761976, 110.96126276132489]).addTo(map)
    .bindPopup('<b>Kantah Karanganyar</b><br />subjek-objek').openPopup();
    var marker = L.marker([-7.602471479856453, 110.97078996774324]).addTo(map)
    .bindPopup('<b>SPBU Bejen</b><br />subjek-objek').openPopup();
    
</script>