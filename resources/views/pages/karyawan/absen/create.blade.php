<x-karyawan-layout>
    <!-- Main page content -->
    <div class="row h-100">
        <div class="col-auto align-self-center">
            <a href="/absen" class="btn btn-link back-btn text-color-theme">
                <i class="bi bi-arrow-left size-20"></i>
            </a>
        </div>
        <div class="col text-center align-self-center">
            <h3 class="mb-0">Buat Absens</h3>
        </div>
    </div>
        
    <div class="row h-100 text-center mt-4">
        <form method="POST" action="">
            @csrf
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4">
                    <div class="card shadow-sm">
                        {{-- maps start --}}
                        <div class="card-body">
                            <div id="map" class="h-190 w-100 rounded mb-3" style="height: 400px;"></div>
                        </div>
                        {{-- maps end --}}
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 text-center">
                    <div id="my_camera"></div>
                    <input type="button" class="btn btn-primary mt-2" value="Take Snapshot" onClick="takeSnapshot()">
                    <input type="hidden" name="image" class="image-tag">
                    <input type="button" id="retry-button" class="btn btn-secondary mt-2" value="Ulangi" onClick="retrySnapshot()" style="display: none;">
                    <input type="hidden" id="latitude" name="latitude">
                    <input type="hidden" id="longitude" name="longitude">
                </div>
            </div>
            {{-- Output start --}}
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4" id="output-card" style="display: none;">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h6 class="text-primary">Submit Absensi</h6>
                            <p class="text-opac">Joko Sabudi</p>
                            <p class="text-opac">Jam : <span id="time"></span></p>
                            <p class="text-opac">Latitude: <span id="latitude-output"></span></p>
                            <p class="text-opac">Longitude: <span id="longitude-output"></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <div id="results" hidden>Your captured image will appear here...</div>
                </div>
            </div>
            {{-- Output end --}}
            <button type="submit" class="btn btn-default btn-lg w-100">Absen</button>
        </form>
    </div>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
    <script language="JavaScript">
        // Initialize Webcam
        Webcam.set({
            width: 400,
            height: 300,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
    
        Webcam.attach('#my_camera');
    
        function takeSnapshot() {
            Webcam.snap(function(data_uri) {
                document.querySelector('.image-tag').value = data_uri;
                document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
                document.getElementById('results').removeAttribute('hidden');
                document.getElementById('output-card').style.display = 'block';
                document.getElementById('retry-button').style.display = 'inline-block';

                // Set current time
                var now = new Date();
                document.getElementById('time').innerText = now.toLocaleTimeString();
            });
        }

        function retrySnapshot() {
            document.getElementById('results').innerHTML = '';
            document.getElementById('results').setAttribute('hidden', true);
            document.getElementById('output-card').style.display = 'none';
            document.getElementById('retry-button').style.display = 'none';
            Webcam.attach('#my_camera');
        }

        // Initialize Map
        var map = L.map('map').setView([0, 0], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var marker = L.marker([0, 0]).addTo(map);

        function onLocationFound(e) {
            var radius = e.accuracy / 2;
            marker.setLatLng(e.latlng)
                .bindPopup("You are within " + radius + " meters from this point").openPopup();

            L.circle(e.latlng, radius).addTo(map);

            // Update hidden input fields and output card
            document.getElementById('latitude').value = e.latlng.lat;
            document.getElementById('longitude').value = e.latlng.lng;
            document.getElementById('latitude-output').innerText = e.latlng.lat;
            document.getElementById('longitude-output').innerText = e.latlng.lng;
        }

        function onLocationError(e) {
            alert(e.message);
        }

        map.on('locationfound', onLocationFound);
        map.on('locationerror', onLocationError);

        map.locate({setView: true, maxZoom: 16});
    </script>
    <!-- Main page content ends -->
</x-karyawan-layout>
