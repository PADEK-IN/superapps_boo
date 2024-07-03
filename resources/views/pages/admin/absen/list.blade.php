<x-admin-layout>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List History Absensi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">List History Absensi</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel History Absensi
                </div>
                <div class="card-body text-center">
                    <table id="datatablesSimple" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Jarak</th>
                                <th>Waktu</th>
                                <th>Bukti</th>
                                <th>Status Absen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absens as $index => $absen)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $absen->karyawan->nama }}</td>
                                        <td>{{ $absen->karyawan->jabatan }}</td>
                                        <td>{{ $absen->jarak }}</td>
                                        <td>{{ $absen->waktu }}</td>
                                        <td><img src="{{ asset('assets/img/absen').'/'.$absen->bukti }}" alt="foto" width="30px"></td>
                                        <td>
                                            @if ($absen->status == 'disetujui')
                                            <span class="badge bg-success">{{ ucwords($absen->status) }}</span>
                                            @elseif($absen->status == 'tertunda')
                                            <span class="badge bg-warning">{{ ucwords($absen->status) }}</span>
                                            @else
                                            <span class="badge bg-danger">{{ ucwords($absen->status) }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>
