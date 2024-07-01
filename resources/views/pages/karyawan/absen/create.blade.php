<x-karyawan-layout>
    <!-- main page content -->
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

    <!-- Camera Section -->
    <div class="text-center mt-3">
        <div>
            <video id="video" width="320" height="240" autoplay></video>
        </div>
        <button id="snap" class="btn btn-primary mt-2">Ambil Foto</button>
        <div class="row justify-content-center mt-2">
            <canvas id="canvas" width="280" height="200" style="display: none;" class="pr-lg-2 pl-lg-2"></canvas>
        </div>
        <form id="absenForm" action="" method="POST" enctype="multipart/form-data" class="text-center mt-2">
            @csrf
            <input type="hidden" name="image" id="image">
            <button type="submit" class="btn btn-success mt-2">Submit Absen</button>
        </form>
    </div>
    <script>
        // Akses kamera
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const snap = document.getElementById('snap');
        const imageInput = document.getElementById('image');
        const context = canvas.getContext('2d');

        // Mengakses media perangkat
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
            })
            .catch(err => {
                console.error("Error accessing the camera: ", err);
            });

        // Mengambil gambar saat tombol 'Ambil Foto' ditekan
        snap.addEventListener('click', () => {
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            const dataURL = canvas.toDataURL('image/png');
            imageInput.value = dataURL;
            canvas.style.display = 'block';
        });
    </script>
    <!-- main page content ends -->
</x-karyawan-layout>