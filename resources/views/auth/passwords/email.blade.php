@extends('layouts.login')

@section('title', 'Reset Password Your Account Tomini.ID')

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
                            <p class="text-muted mb-4">Enter your Email and instructions will be sent to you!</p>  
                        </div> <!--end auth-logo-text-->

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif  

                        <form method="POST" action="{{ route('password.email') }}">
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
                            <button type="submit" class="btn btn-login btn-block">
                                <i class="fas fa-envelope mr-2"></i>
                                {{ __('Send Password Reset Link') }}
                            </button>
                            <p class="text-center mt-4">
                                Remember It ? <a href="{{ route('login') }}">Login Now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
