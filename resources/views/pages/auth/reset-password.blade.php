<x-auth-layout>
    <div class="col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 mx-auto align-self-center">
        <h2 class="text-center mb-4">Sign in</h2>
        <div class="card card-light shadow-sm mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div class="form-floating mb-3">
                        <x-text-input type="email" id="emailaddress" name="email" placeholder="Masukan Email" :value="old('email', $request->email)" required autocomplete="username" />
                        <x-input-label for="emailaddress" :value="__('Email')" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="form-floating mb-3">
                        <x-text-input type="password" id="password" name="password" placeholder="Masukan Password" required autocomplete="new-password" />
                        <x-input-label for="password" :value="__('Password')" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-floating mb-3">
                        <x-text-input type="password" id="password" name="password" placeholder="Masukan Konfirmasi Password" required autocomplete="new-password" />
                        <x-input-label for="password" :value="__('Confirm Password')" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="d-grid">
                        <x-primary-button>{{ __('Reset Password') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-auth-layout>
