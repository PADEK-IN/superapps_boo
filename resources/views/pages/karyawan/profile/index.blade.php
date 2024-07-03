<x-karyawan-layout>
    <div class="row">
        <div class="col-12">
            <div class="card card-theme shadow-sm mb-4">
                <div class="card-body">
                    <div class="card card-light mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <figure class="avatar avatar-80 rounded mx-auto">
                                        <img src="{{ asset('assets/img/profile').'/'.Auth::user()->karyawan->foto }}" alt="">
                                    </figure>
                                </div>
                                <div class="col align-self-center">
                                    <h5 class="mb-0">{{ ucwords(Auth::user()->karyawan->nama) }}</h5>
                                    <p class="text-opac">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow-sm product">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded bg-danger text-white">
                                                <i class="bi bi-bar-chart-line"></i>
                                            </div>
                                        </div>
                                        <div class="col ps-0 align-self-center">
                                            <span class="small text-opac mb-0">Total Absen</span>
                                            <p class="mb-1">521 Kali</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm product">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded bg-success text-white">
                                                <i class="bi bi-file-earmark-text"></i>
                                            </div>
                                        </div>
                                        <div class="col ps-0 align-self-center">
                                            <span class="small text-opac mb-0">Total Izin</span>
                                            <p class="mb-1">62 Kali</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col d-grid">
            <button class="btn btn-default btn-lg shadow-sm">Edit Profile</button>
        </div>
    </div>

    <!-- experince -->
    <div class="row mb-3">
        <div class="col">
            <h5 class="mb-0">Detail Profile</h5>
        </div>
        <div class="col-auto pe-0">
            <a class="link text-color-theme" href="{{ url('profile/' . Auth::user()->id). '/edit' }}">Edit Profile <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-4">
                <ul class="list-group list-group-flush my-2 bg-none">
                    <li class="list-group-item border-0">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-50 rounded-circle">
                                    <img src="assets/img/googlelogo.png" alt="">
                                </figure>
                            </div>
                            <div class="col px-0">
                                <p>Sr. UX Designer<br><small class="text-opac">GooglesInc</small></p>
                            </div>
                            <div class="col-auto text-end">
                                <p>
                                    <small class="text-opac">2013-2021</small>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-50 rounded-circle">
                                    <img src="assets/img/microsoftlogo.png" alt="">
                                </figure>
                            </div>
                            <div class="col px-0">
                                <p>Sr. UX Designer<br><small class="text-opac">Micro Software</small></p>
                            </div>
                            <div class="col-auto text-end">
                                <p>
                                    <small class="text-opac">2012-2013</small>
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item border-0">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-50 rounded-circle">
                                    <img src="assets/img/applelogo.png" alt="">
                                </figure>
                            </div>
                            <div class="col px-0">
                                <p>Jr. UX Deigner<br><small class="text-opac">ApplesCorp</small></p>
                            </div>
                            <div class="col-auto text-end">
                                <p>
                                    <small class="text-opac">2005-2011</small>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-karyawan-layout>
