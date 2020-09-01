@extends('layouts.app')


@section('title')
NOMADS
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
    <h1>
        Explore The Beautiful World
        <br />
        As Easy One Click
    </h1>
    <p class="mt-3">
        You will see beautiful
        <br />
        moment you never see before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4"> Get Started </a>
</header>

<!-- Main Content -->
<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-sm-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-sm-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-sm-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-sm-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>
    <section class="section-popular" id="popular">
        <div class="cotainer">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>
                        Something that you never try
                        <br />
                        before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popular-content">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="
                                        background-image: url('/frontend/images/Mask\ Group\ 2.jpg');
                                    ">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">DERATAN, BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="
                                        background-image: url('/frontend/images/Mask\ Group\ 3.jpg');
                                    ">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">BROMO, MALANG</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="
                                        background-image: url('/frontend/images/Mask\ Group\ 4.jpg');
                                    ">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">
                            DERAWAN, BERAU
                        </div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="
                                        background-image: url('/frontend/images/Mask\ Group\ 5.jpg');
                                    ">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">SEMERU, JATIM</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>
                        Companies are trusted us
                        <br />
                        more than just a trip
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{url('frontend/images/Partner.png')}}" alt="Logo Partner" class="img-partner" />
                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonials-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>
                        Moments were giving them
                        <br />
                        the best experience
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-testimonials-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonials text-center">
                        <div class="testimonials-content">
                            <img src="{{url('frontend/images/Mask Group 6.png')}}" alt="user"
                                class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Muhammad Ichsan</h3>
                            <p class="testimonial">
                                " It was glorious and I could not stop
                                to say wohooo for every single moment
                                Dankeeeee "
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">Trip to Ubud</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonials text-center">
                        <div class="testimonials-content">
                            <img src="{{url('frontend/images/Mask Group 7.png')}}" alt="user"
                                class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Anselma Putri</h3>
                            <p class="testimonial">
                                " The trip was amazing and I saw
                                something beautiful in that island that
                                makes me want to learn more "
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">Trip to Derawan</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonials text-center">
                        <div class="testimonials-content">
                            <img src="{{url('frontend/images/Mask Group 8.png')}}" alt="user"
                                class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Anselma Putri</h3>
                            <p class="testimonial">
                                " I really like the mountain,so I want
                                to try to explore Bromo and it is really
                                amazing "
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">Trip to Bromo</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
