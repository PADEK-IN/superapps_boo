<form method="PATCH" action="/password/update">
    <!-- change password -->
    <div class="row mb-3">
        <div class="col">
            <h5 class="mb-0">Ganti Password</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-light shadow-sm mb-4">
                <div class="card-body">
                    <div class="row h-100">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-floating  mb-3">
                                <input type="password" class="form-control" value="asdasdasdsd" placeholder="Password"
                                    id="password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-floating ">
                                <input type="password" class="form-control" placeholder="Confirm Password" id="confirmpassword">
                                <label for="confirmpassword">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 text-center">
        <x-primary-button>Change Password</x-primary-button>
    </div>
</form>