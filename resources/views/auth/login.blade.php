@extends('layouts.login')

@section('title', 'Please Login To Continue Tomini.Id')

@section('content')
<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-left col-12 col-md-6">
                <h1 class="mb-4">
                    We explore the new <br> live much better
                </h1>
                <img src="{{ url('/frontend/images/pictures.png') }}" alt="Gambar 1" class="w-75 d-none d-sm-flex">
            </div>
            <div class="section-right col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ url('/frontend/images/logo.png') }}" alt="" class="w-50 mb-2 mt-2" />
                        </div>
                        <div class="text-center auth-logo-text">
                            <h6 class="text-muted mb-4">Login to continue Tomini.Id</h6>  
                        </div> <!--end auth-logo-text-->  
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukan Email">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukan Password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-check mb-4 mt-4">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="float-right"><i class="fas fa-lock mr-0"></i> {{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-login btn-block">
                                <i class="fas fa-sign-in-alt mr-2"></i>
                                {{ __('Login') }}
                            </button>
                            <p class="text-center mt-4">
                                Don't have an account ? <a href="{{ route('register') }}">Free Register</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection