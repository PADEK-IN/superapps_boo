<x-admin-layout>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List Requset Perizinan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">List Requset Perizinan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Requset Perizinan
                </div>
                <div class="card-body text-center">
                    <table id="datatablesSimple" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Jabatan</th>
                                <th>Jarak</th>
                                <th>Longitude</th>
                                <th>Latitude</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Joko Widodo</td>
                                <td>
                                    <span class="badge bg-primary">Laki-laki</span>
                                </td>
                                <td>Direktur</td>
                                <td>
                                    <span class="badge bg-info">At Location</span>
                                </td>
                                <td>110.3658812</td>
                                <td>-7.7925927</td>
                                <td>
                                    <input type="checkbox">
                                    <a href="#" class="btn btn-sm btn-info">Acept</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Putri Wulandari</td>
                                <td>
                                    <span class="badge bg-warning">Perempuan</span>
                                </td>
                                <td>Direktur</td>
                                <td>
                                    <span class="badge bg-danger">3KM</span>
                                </td>
                                <td>110.3658812</td>
                                <td>-7.7925927</td>
                                <td>
                                    <input type="checkbox">
                                    <a href="#" class="btn btn-sm btn-info">Acept</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>