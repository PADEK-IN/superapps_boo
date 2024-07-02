<x-karyawan-layout>
    <!-- main page content -->
    <div class="col-auto align-self-center">
        <a href="{{ route('izin') }}" class="btn btn-link back-btn text-color-theme">
            <i class="bi bi-arrow-left size-20"></i>
        </a>
    </div>

    <div class="col-12">
        <div class="card card-light shadow-sm">
            <div class="col text-center align-self-center mt-4">
                <h3>Buat Izin</h3>
            </div>
            <div class="card-body">
                <form class="row" method="POST" action="/izin/store">
                    @csrf
                    <input type="hidden" name="id_karyawan" value="{{ Auth::user()->id }}">
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="form-group form-floating">
                            <select class="form-control" id="keterangan" name="keterangan" required>
                                <option value="sakit">Sakit</option>
                                <option value="cuti">Cuti</option>
                            </select>
                            <label class="form-control-label" for="keterangan">Keterangan</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="form-group form-floating">
                            <input type="date" class="form-control" id="mulai" name="mulai" required>
                            <label class="form-control-label" for="mulai">Waktu Mulai</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="form-group form-floating">
                            <input type="date" class="form-control" id="selesai" name="selesai" required>
                            <label class="form-control-label" for="selesai">Waktu Selesai</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan" required>
                            <label class="form-control-label" for="alasan">Alasan</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="form-group form-floating">
                            <select class="form-control" id="status" name="status" required>
                                <option value="tertunda">Tertunda</option>
                                <option value="disetujui">Disetujui</option>
                                <option value="ditolak">Ditolak</option>
                            </select>
                            <label class="form-control-label" for="status">Status</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <x-primary-button>Submit</x-primary-button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <!-- main page content ends -->
</x-karyawan-layout>
