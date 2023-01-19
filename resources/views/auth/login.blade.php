@extends('layouts.app')

@section('content')
<main>
    <div class="container">

        <section
            class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto ">
                                <img src="{{url('backend/assets/img/logo.png')}}" alt="" style="width: 100%; height: 300px;">
                                {{-- <span class="d-none d-lg-block">Sipato</span> --}}
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Selamat Datang</h5>
                                    <p class="text-center small">Login dengan akun  anda</p>
                                </div>

                                <form class="row g-3 needs-validation" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" autocomplete="email"
                                                autofocus id="email" required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="yourPassword" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>


                                    {{-- <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div> --}}
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>

                                    {{-- <div class="col-12">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div> --}}
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->
@endsection
