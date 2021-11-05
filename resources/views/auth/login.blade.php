@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image">
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <input
                                            type="email"
                                            class="form-control form-control-user @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}"
                                            id="email"
                                            aria-describedby="emailHelp"
                                            name="email"
                                            placeholder="Enter Email Address..."
                                            required
                                            autocomplete="email"
                                            autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <input
                                            type="password"
                                            class="form-control form-control-user  @error('password') is-invalid @enderror"
                                            id="password"
                                            name="password"
                                            placeholder="Password"
                                            required
                                            autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                name="remember"
                                                id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="custom-control-label" for="remember">{{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                    <a href="{{ route('google.redirect') }}" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="{{ route('facebook.redirect')}}" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
