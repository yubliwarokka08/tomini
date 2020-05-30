<!-- Navigation Start -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ url('frontend/images/logo.png') }}" alt="Banggai" width="120">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2"><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                <li class="nav-item mx-md-2"><a href="#" class="nav-link">Paket Travel</a></li>
                <li class="dropdown my-2 my-lg-0 d-none d-md-block">
                    <a class="nav-link nav-user" data-toggle="dropdown" href="javascript: void(0);" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <span class="ml-1 nav-user-name hidden-sm">Service<i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left">
                        <a class="dropdown-item" href="#"><i class="fab fa-cc-visa text-muted mr-2"></i> Visa</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-passport text-muted mr-2"></i> Passport</a>
                </li>
                <li class="nav-item mx-md-2"><a href="#" class="nav-link">Testimonial</a></li>
            </ul>

            <!-- Mobile Button -->
            @guest
            <form class="form-inline d-sm-block d-md-none">
                @csrf
                <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                    <i class="fas fa-user-lock mr-2"></i>
                    Masuk
                </button>
            </form>

            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                    <i class="fas fa-user-lock mr-2"></i>
                    Masuk
                </button>
            </form>
            @endguest

            @auth
            {{-- Mobile --}}
            <li class="dropdown d-sm-block d-md-none">
                <a class="nav-link dropdown-toggle-id nav-user" data-toggle="dropdown" href="javascript: void(0);" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}" alt="profile-user" class="rounded-circle" style="width: 25px" /> 
                    <span class="ml-1 nav-user-name hidden-sm">Hai, {{ Auth::user()->username }}<i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-item" href="#"><i class="fas fa-user-circle text-muted mr-2"></i> {{ Auth::user()->name }}</div>
                    <a class="dropdown-item" href="#"><i class="fas fa-cog text-muted mr-2"></i> Settings</a>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="javascript: void(0);" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt text-muted mr-2"></i> Logout</a>
                </div>
            </li>

            <!-- Desktop -->
            <li class="dropdown my-2 my-lg-0 d-none d-md-block">
                <a class="nav-link dropdown-toggle-id nav-user" data-toggle="dropdown" href="javascript: void(0);" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}" alt="profile-user" class="rounded-circle" style="width: 30px" /> 
                    <span class="ml-1 nav-user-name hidden-sm">Hai, {{ Auth::user()->username }}<i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fas fa-user-circle text-muted mr-2"></i> My Profile</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-cog text-muted mr-2"></i> Settings</a>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="javascript: void(0);" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt text-muted mr-2"></i> Logout</a>
                </div>
            </li>
            @endauth
        </div>
    </div>
</nav>
<!-- Navigation End -->

