<x-admin-layout>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Laporan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Laporan Absensi</li>
            </ol>
            <hr>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card-body">
                        <div class="container w-full">
                            <h5>Periode:</h5>
                            <form action="{{ url('admin/laporan') }}" method="POST" class="d-flex gap-2">
                                @csrf
                                <label for="month" class="pt-1">Bulan:</label>
                                <select name="month" id="month" class="form-control">
                                    @foreach(range(1, 12) as $m)
                                        <option value="{{ $m }}" {{ $m == (old('month') ?? date('n')) ? 'selected' : '' }}>
                                            {{ date('F', mktime(0, 0, 0, $m, 10)) }}
                                        </option>
                                    @endforeach
                                </select>

                                <label for="year" class="pt-1">Tahun:</label>
                                <select name="year" id="year" class="form-control">
                                    @foreach(range(2020, date('Y')) as $y)
                                        <option value="{{ $y }}" {{ $y == (old('year') ?? date('Y')) ? 'selected' : '' }}>
                                            {{ $y }}
                                        </option>
                                    @endforeach
                                </select>

                                <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                            </form>
                        </div>

                        @if(isset($absens))
                            <hr>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-sm btn-warning">Print</button>
                            </div>
                            <div class="text-center">
                                <h2>Laporan Kehadiran Karyawan Periode {{ date('F', mktime(0, 0, 0, $month, 10)) }} {{ $year }}</h2>
                                <table class="table" border="1">
                                   <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            @for($day = 1; $day <= \Carbon\Carbon::create($year, $month)->daysInMonth; $day++)
                                                <th>{{ $day }}</th>
                                            @endfor
                                        </tr>
                                   </thead>
                                    @foreach($absens as $employeeId => $data)
                                   <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data['nama'] }}</td>
                                            @foreach($data['days'] as $day => $time)
                                                <td>{{ $time }}</td>
                                            @endforeach
                                        </tr>
                                   </tbody>
                                    @endforeach
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>
