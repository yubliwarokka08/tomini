@extends('layouts.login')

@section('title', 'Please Register free Account')

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
                            <img src="{{ url('/frontend/images/logo.png') }}" alt="" class="w-50 mb-4 mt-2" />
                        </div>
                        <div class="text-center auth-logo-text">
                            <h6 class="text-muted mb-3">Let's Get Started</h6>  
                        </div> <!--end auth-logo-text-->  
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="username">{{ __('Username') }}</label>
                                <input id="username" type="text" class="form-control form-input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus placeholder="Masukan Username">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukan Nama Lengkap">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                            </div>

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

                            <div class="form-group mb-4">
                                <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control form-input" name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi Password">
                            </div>

                            <button type="submit" class="btn btn-login btn-block">
                                <i class="fas fa-sign-in-alt mr-2"></i>
                                {{ __('Register') }}
                            </button>
                            <p class="text-center mt-4">
                                Already registered? <a href="{{ route('login') }}">Login Now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
