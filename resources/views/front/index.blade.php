@extends('front.master')
@section('home-active' , 'active')
@section('title' , 'Home')

@section('hero')
<div class="container-xxl bg-primary hero-header">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated zoomIn">We Help To Push Your Business To The Top Level</h1>
                <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                <a href="" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn More</a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid animated zoomIn" src="{{asset('assets-front')}}/img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
@section('about')
<!-- About start -->

@include('front.partilas.about')

<!-- About End -->


<!-- Newsletter Start -->

@include('front.partilas.newsletter')

<!-- Newsletter End -->

<!-- Service Start -->

@include('front.partilas.services')

<!-- Service End -->


<!-- Features Start -->

@include('front.partilas.feature')

<!-- Features End -->


<!-- Client Start -->
@include('front.partilas.client')

<!-- Client End -->


<!-- Testimonial Start -->

@include('front.partilas.testmonial')

<!-- Testimonial End -->

<!-- Team Start -->

@include('front.partilas.team')

<!-- Team End -->
@endsection
