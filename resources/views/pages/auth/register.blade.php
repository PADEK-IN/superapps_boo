<x-auth-layout>
    <div class="col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 mx-auto align-self-center">
        <h2 class="text-center mb-4">Sign Up</h2>
        <div class="card card-light shadow-sm mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" class="was-validated">
                    @csrf
                    <div class="form-floating mb-3">
                        <x-text-input type="text" id="nik" name="nik" placeholder="Masukan NIK" :value="old('nik')" required autofocus/>
                        <x-input-label for="nik" :value="__('NIK')" />
                        <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                    </div>
                    <div class="form-floating mb-3">
                        <x-text-input type="text" id="name" name="name" placeholder="Masukan Nama" :value="old('name')" required autocomplete="name" />
                        <x-input-label for="name" :value="__('Name')" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="form-floating mb-3">
                        <x-text-input type="email" id="emailaddress" name="email" placeholder="Masukan Email" :value="old('email')" required autocomplete="username" />
                        <x-input-label for="emailaddress" :value="__('Email')" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-floating mb-3">
                        <x-text-input type="password" id="password" name="password" placeholder="Masukan Password" required autocomplete="new-password" />
                        <x-input-label for="password" :value="__('Password')" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-floating mb-3">
                        <x-text-input type="password" id="password" name="password" placeholder="Masukan Konfirmasi Password" required autocomplete="new-password" />
                        <x-input-label for="password" :value="__('Confirm Password')" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <div class="d-grid">
                        <x-primary-button>{{ __('Sign Up') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-grid">
            <span>Have an account? <a href="/login" class="mb-3">Sign In</a></span>
        </div>
    </div>
</x-auth-layout>
