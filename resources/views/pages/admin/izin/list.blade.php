<x-admin-layout>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List Semua Perizinan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">List Perizinan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Perizinan
                </div>
                <div class="card-body text-center">
                    <table id="datatablesSimple" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Alasan</th>
                                <th>Mulai</th>
                                <th>Sampai</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Joko Widodo</td>
                                <td>
                                    <span class="badge bg-primary">Sakit</span>
                                </td>
                                <td>Masuk Angin</td>
                                <td>22-Januari-2020</td>
                                <td>22-Januari-2020</td>
                                <td>
                                    <span class="badge bg-success">Disetujui</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Putri Wulandari</td>
                                <td>
                                    <span class="badge bg-warning">Cuti</span>
                                </td>
                                <td>Pulang Kampung</td>
                                <td>22-Januari-2020</td>
                                <td>22-Januari-2020</td>
                                <td>
                                    <span class="badge bg-dark">Tertunda</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Putri Wulandari</td>
                                <td>
                                    <span class="badge bg-primary">Sakit</span>
                                </td>
                                <td>Cantengan</td>
                                <td>22-Januari-2020</td>
                                <td>22-Januari-2020</td>
                                <td>
                                    <span class="badge bg-danger">Ditolak</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>