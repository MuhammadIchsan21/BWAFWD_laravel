@extends('layouts.app')
@section('title', 'Detail Travel')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Bromo</h1>
                        <p>Republic of Indonesia Raya</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{url('frontend/images/Mask Group 9.jpg')}}" class="xzoom" id="xzoom-default"
                                    xoriginal="{{url('frontend/images/Mask Group 9.jpg')}}" />
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="{{url('frontend/images/Mask Group 9.jpg')}}">
                                    <img src="{{url('frontend/images/Mask Group 9.jpg')}}" class="xzoom-gallery"
                                        width="128" xpreview="{{url('frontend/images/Mask Group 9.jpg')}}" />
                                </a>
                                <a href="{{url('frontend/images/maskgroup10.jpg')}}"> <img
                                        src="{{url('frontend/images/maskgroup10.jpg')}}" class="xzoom-gallery"
                                        width="128" xpreview="{{url('frontend/images/maskgroup10.jpg')}}" />
                                </a>
                                <a href="{{url('frontend/images/maskgrup11.jpg')}}">
                                    <img src="{{url('frontend/images/maskgrup11.jpg')}}" class="xzoom-gallery"
                                        width="128" xpreview="{{url('frontend/images/maskgrup11.jpg')}}" />
                                </a>
                                <a href="{{url('frontend/images/maskgrup12.jpg')}}">
                                    <img src="{{url('frontend/images/maskgrup12.jpg')}}" class="xzoom-gallery"
                                        width="128" xpreview="{{url('frontend/images/maskgrup12.jpg')}}" />
                                </a>
                                <a href="{{url('frontend/images/maskgrup13.jpg')}}"> <img
                                        src="{{url('frontend/images/maskgrup13.jpg')}}" class="xzoom-gallery"
                                        width="128" xpreview="{{url('frontend/images/maskgrup13.jpg')}}" />
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>
                            Mount Bromo (Indonesian: Gunung Bromo), is
                            an active volcano and part of the Tengger
                            massif, in East Java, Indonesia. At 2,329
                            meters (7,641 ft) it is not the highest peak
                            of the massif, but is the best known. The
                            massif area is one of the most visited
                            tourist attractions in East Java Indonesia.
                            The volcano belongs to the Bromo Tengger
                            Semeru National Park.
                        </p>
                        <p>
                            Mount Bromo, is an active volcano and part
                            of the Tenggermassif, in East Java,
                            Indonesia. At 2,329 meters (7,641 ft) it is
                            not the highest peak of the massif.
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="{{url('frontend/images/ic_event.png')}}" alt="" class="features-image" />
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Tari Beskalan</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{url('frontend/images/ic_bahasa.png')}}" alt="" class="features-image" />
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{url('frontend/images/ic_foods.png')}}" alt="" class="features-image" />
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="{{url('./frontend/images/ansel 1.png')}}" alt="" class="member-image mr-1" />
                            <img src="{{url('./frontend/images/novita 1.png')}}" alt="" class="member-image mr-1" />
                            <img src="{{url('./frontend/images/bajur orange.png')}}" alt="" class="member-image mr-1" />
                            <img src="{{url('./frontend/images/simerah.png')}}" alt="" class="member-image mr-1" />
                            <img src="{{url('./frontend/images/9+.png')}}" alt="" class="member-image mr-1" />
                        </div>
                        <hr />
                        <h2>Trip Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">
                                    28 Augustus 2020
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">
                                    4D 3N
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">
                                    Open Trip
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">
                                    $80,00 / person
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-5 py-2">
                            Join Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}" />
@endpush

@push('addon-script')
<script src="{{url ('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function () {
                $(".xzoom, .xzoom-gallery").xzoom({
                    zoomWidth: 500,
                    title: false,
                    tint: "#333",
                    Xoffset: 15,
                });
            });

</script>
@endpush
