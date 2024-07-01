<x-admin-layout>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List Semua Karyawan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">List Karyawan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Karyawan
                </div>
                <div class="card-body text-center">
                    <table id="datatablesSimple" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>No HP</th>
                                <th>Jabatan</th>
                                <th>Status</th>
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
                                <td>08263728123</td>
                                <td>Direktur</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4267384249</td>
                                <td>Putri Wulandari</td>
                                <td>
                                    <span class="badge bg-warning">Perempuan</span>
                                </td>
                                <td>08263728123</td>
                                <td>Direktur</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>