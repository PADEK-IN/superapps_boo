<x-karyawan-layout>
    <!-- main page content -->
        <div class="col-auto align-self-center">
            <a href="/izin" class="btn btn-link back-btn text-color-theme">
                <i class="bi bi-arrow-left size-20"></i>
            </a>
        </div>
        
        <div class="col-12">
            <div class="card card-light shadow-sm">
                <div class="col text-center align-self-center mt-4">
                    <h3>Buat Izin</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="form-group form-floating">
                                <input type="text" class="form-control" value="Maxartkiller" id="nama"
                                    placeholder="Nama">
                                <label class="form-control-label" for="nama">Nama</label>
                            </div>
                        </div>
                        {{-- keterangan --}}
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="form-group form-floating">
                                <select class="form-control" id="keterangan">
                                    <option value="sakit">Sakit</option>
                                    <option value="cuti">Cuti</option>
                                </select>
                                <label class="form-control-label" for="keterangan">Keterangan</label>
                            </div>
                        </div>
                        
                        {{-- waktu mulai --}}
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="form-group form-floating">
                                <input type="date" class="form-control" id="waktu-mulai">
                                <label class="form-control-label" for="waktu-mulai">Waktu Mulai</label>
                            </div>
                        </div>
                        {{-- waktu selsai --}}
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="form-group form-floating">
                                <input type="date" class="form-control" id="waltu-selesai">
                                <label class="form-control-label" for="waltu-selesai">Waktu Selesai</label>
                            </div>
                        </div>
                        {{-- Alasan --}}
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="form-group form-floating">
                                <input type="text" class="form-control" id="alasan">
                                <label class="form-control-label" for="alasan">Alasan</label>
                            </div>
                        </div>
                        
                    </div>

                    <x-primary-button>Submit</x-primary-button>
                    </div>
                </div>
            </div>
        </div>
     <!-- main page content ends -->
</x-karyawan-layout>