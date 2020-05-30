@extends('layouts.app')

@section('title')
    Tomini Tour & Travel
@endsection

@section('content')
<main>
    <!--Header Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100"
                    src="{{ url('frontend/images/bromo-mount.jpg') }}"
                    alt="Mount Bromo">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <div class="text-center">
                    <h1>
                        Mount Bromo is famous as a major tourist
                        <br>
                        attraction in East Java
                    </h1>
                    <p class="mt-3">
                        This mountain has an altitude of 2,329 meters
                        <br>
                        above sea level
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-get-started my-lg-0 my-2 my-sm-0 px-4">
                        <i class="fas fa-luggage-cart mr-2"></i>
                        Get started
                    </a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100"
                    src="{{ url('frontend/images/nusa-penida-island.jpg') }}"
                    alt="Nusa Penida">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <div class="text-center">
                    <h1>
                        Nusa Penida is an island part of
                        <br>
                        the Republic of Indonesia
                    </h1>
                    <p class="mt-3">
                        Located in the southeast of Bali
                        <br>
                        separated by the Badung Strait
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-get-started my-2 my-sm-0 px-4">
                        <i class="fas fa-luggage-cart mr-2"></i>
                        Get started
                    </a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100"
                    src="{{ url('frontend/images/lembongan.jpg') }}"
                    alt="Lembongan Island">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <div class="text-center">
                    <h1>
                        Lembongan Island or in Balinese language
                        <br>
                        is called Nusa Lembongan
                    </h1>
                    <p class="mt-3">
                        Adjacent to Nusa Ceningan and 2 km northwest of Nusa Penida
                        <br>
                        is located in the Badung Strait southeast of Bali
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-get-started my-2 my-sm-0 px-4">
                        <i class="fas fa-luggage-cart mr-2"></i>
                        Get started
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/.Slides-->
</div>

<!--/.Header Carousel Wrapper-->

<section class="section-statics-bg">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div class="counter">
                        <i class="fas fa-users fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="20000" data-speed="1500"></h2>
                        <p class="count-text ">Members</p>
                    </div>
                </div>
            <div class="col">
                <div class="counter">
                    <i class="fas fa-globe-asia fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="12" data-speed="1500"></h2>
                    <p class="count-text ">Countries</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <i class="fas fa-hotel fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="3000" data-speed="1500"></h2>
                    <p class="count-text ">Hotels</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <i class="fas fa-handshake fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="72" data-speed="1500"></h2>
                    <p class="count-text ">Partners</p>
                </div>
            </div>
        </div>
</section>


    <section class="section-popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>
                        Our Popular To Package
                    </h2>
                    <p>
                        Somethink that you never try
                        <br>
                        before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                        <div class="travel-country">{{ $item->location }}</div>
                        <div class="travel-location">{{ $item->title }}</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details my-2 my-sm-0 px-4">
                                <i class="fas fa-eye mr-2"></i>
                                View Explorer
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="section-partners" id="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Partners</h2>
                    <p>
                        Some partners who have worked
                        <br>
                        with us, to handle our traveler.
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{ url('frontend/images/our_parners.png') }}" alt="Logo Partner" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They're Loving Us</h2>
                    <p>
                        What do they say who have entrusted using
                        <br>
                        our travel services.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-testimonial-two">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box text-center">
                        <div class="user-pic">
                            <img src="{{ url('frontend/images/user-pic1@2x.png') }}" class="img-fluid" alt="User Pic">
                        </div>
                        <h3>Mark Austine</h3>
                        <img src="{{ url('frontend/images/star1.png') }}" alt="Rate" class="mb-6">
                        <div class="content-testimonial">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Dubai, Middle East
                        </p>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="card-box text-center">
                        <div class="user-pic">
                            <img src="{{ url('frontend/images/user-pic2@2x.png') }}" class="img-fluid" alt="User Pic">
                        </div>
                        <h3>Jhon August</h3>
                        <img src="{{ url('frontend/images/star2.png') }}" alt="Rate" class="mb-6">
                        <div class="content-testimonial">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Bromo, Indonesia
                        </p>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="card-box text-center">
                        <div class="user-pic">
                            <img src="{{ url('frontend/images/user-pic3@2x.png') }}" class="img-fluid" alt="User Pic">
                        </div>
                        <h3>Jane Doo</h3>
                        <img src="{{ url('frontend/images/star3.png') }}" alt="Rate" class="mb-6">
                        <div class="content-testimonial">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Deratan Bali, Indonesia
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-btn-get justify-content-center">
        <div class="row">
            <div class="col-12 text-center">
                <div class="my-2 my-lg-0">
                    <a href="https://api.whatsapp.com/send?phone=6281245536677" class="btn btn-need-help my-2 my-sm-0 px-4">
                        <i class="fab fa-whatsapp mr-2"></i>
                        I Need Help
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-get-started my-2 my-sm-0 px-4">
                        <i class="fas fa-user-lock mr-2"></i>
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection