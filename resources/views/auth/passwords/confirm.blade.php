@extends('layouts.login')

@section('title', 'Request Password Confirmation Your Account Tomini.ID')

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
                            <p class="text-muted mb-4">Request Password Confirmation!</p>  
                        </div> <!--end auth-logo-text-->
                        {{ __('Please confirm your password before continuing.') }}
                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukan Password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                            </div>
                            <button type="submit" class="btn btn-login btn-block">
                                <i class="fas fa-envelope mr-2"></i>
                                {{ __('Confirm Password') }}
                            </button>
                            @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="float-right"><i class="fas fa-lock mr-0"></i> {{ __('Forgot Your Password?') }}</a>
                                @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
