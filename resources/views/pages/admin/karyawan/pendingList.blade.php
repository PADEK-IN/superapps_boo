<x-admin-layout>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List Karyawan Panding</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">List Karyawan Pandning</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Karyawan Pandning
                </div>
                <div class="card-body text-center">
                    <table id="datatablesSimple" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Jabatan</th>
                                <th>Actived</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>4267384249</td>
                                <td>Joko Widodo</td>
                                <td>
                                    <span class="badge bg-primary">Laki-laki</span>
                                </td>
                                <td>Direktur</td>
                                <td>
                                    <span class="badge bg-danger">Active</span>
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>4267384249</td>
                                <td>Putri Wulandari</td>
                                <td>
                                    <span class="badge bg-warning">Perempuan</span>
                                </td>
                                <td>Direktur</td>
                                <td>
                                    <span class="badge bg-danger">Active</span>
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>