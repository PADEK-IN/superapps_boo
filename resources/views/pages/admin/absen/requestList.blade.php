<x-admin-layout>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List Request Absensi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">List Request Absensi</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <span><i class="fas fa-table me-1"></i>Tabel Request Absensi</span>
                        <div class="d-flex justify-content-end gap-2">
                            <span class=" pt-1"><input type="checkbox" id="check-all"><label for="check-all" class="px-2">Check all</label></span>
                            <button class="btn btn-sm btn-success" onclick="updateValidasiCheck('disetujui')">Terima</button>
                            <button class="btn btn-sm btn-danger" onclick="updateValidasiCheck('ditolak')">Tolak</button>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table table-striped " style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jarak</th>
                                    <th>Waktu</th>
                                    <th>Bukti</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($absens as $index => $absen)
                                    <tr>
                                        <td><input type="checkbox" class="checkbox-item" id="check-{{ $absen->hashid }}"></td>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $absen->karyawan->nama }}</td>
                                        <td>{{ $absen->jarak }}</td>
                                        <td>{{ $absen->waktu }}</td>
                                        <td><img src="{{ asset('assets/img/absen').'/'.$absen->bukti }}" alt="foto" width="30px"></td>
                                        <td>
                                            @if ($absen->status == 'disetujui')
                                            <span class="badge bg-primary">{{ $absen->status }}</span>
                                            @elseif($absen->status == 'tertunda')
                                            <span class="badge bg-warning">{{ $absen->status }}</span>
                                            @else
                                            <span class="badge bg-danger">{{ $absen->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-success" onclick="updateValidasi('{{ $absen->hashid }}', 'disetujui')">Terima</button>
                                            <button class="btn btn-sm btn-danger" onclick="updateValidasi('{{ $absen->hashid }}', 'ditolak')">Tolak</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Set CSRF token for every AJAX request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function showToast(type, title, message) {
            iziToast[type]({
                title: title,
                message: message,
                position: 'bottomRight'
            });
        }

        function updateValidasi(id, need){
            let isUpdate;
            if(need=='disetujui'){
                isUpdate = confirm(`Yakin ingin TERIMA absen karyawan ini?`);
            }else{
                isUpdate = confirm(`Yakin ingin TOLAK absen karyawan ini?`);
            }
            if(!isUpdate) return
            const ids = [];
            ids.push(id);
            $.ajax({
                url: `/admin/absen/validate`,
                method: "PATCH",
                contentType: "application/json",
                data: JSON.stringify({ids, need}),
                success: (response) => {
                    showToast('success', 'Success', `${response.status.message}`);
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                },
                error: (response) => {
                    const message = response.responseJSON.status.message;
                    showToast('error', 'Error', `${message}`);
                }
            });
        }

        // Event handler untuk checkbox "check all"
        $('#check-all').on('change', function() {
            $('.checkbox-item').prop('checked', $(this).prop('checked'));
            updateCheckedIds();
        });

        // Event handler untuk setiap checkbox item
        $('.checkbox-item').on('change', function() {
            if ($('.checkbox-item:checked').length === $('.checkbox-item').length) {
                $('#check-all').prop('checked', true);
            } else {
                $('#check-all').prop('checked', false);
            }
            updateCheckedIds();
        });

        // Fungsi untuk mengupdate array id checkbox yang dicentang
        function updateCheckedIds() {
            const checkedIds = [];
            $('.checkbox-item:checked').each(function() {
                const checkid = $(this).attr('id').split("-")
                checkedIds.push(checkid[1]);
            });
            return checkedIds // Tampilkan array ID di console
        }

        function updateValidasiCheck(need){
            const ids = updateCheckedIds();
            if(ids.length == 0) return alert("Maaf, tidak ada absen yang dipilih");
            const listIds = ids.join(", ")
            let isUpdate;
            if(need=='disetujui'){
                isUpdate = confirm(`Yakin ingin TERIMA absen karyawan dengan id absen: ${listIds}?`);
            }else{
                isUpdate = confirm(`Yakin ingin TOLAK absen karyawan dengan id absen: ${listIds}??`);
            }
            if(!isUpdate) return
            $.ajax({
                url: `/admin/absen/validate`,
                method: "PATCH",
                contentType: "application/json",
                data: JSON.stringify({ids, need}),
                success: (response) => {
                    showToast('success', 'Success', `${response.status.message}`);
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                },
                error: (response) => {
                    const message = response.responseJSON.status.message;
                    showToast('error', 'Error', `${message}`);
                }
            });
        }

    </script>
</x-admin-layout>
