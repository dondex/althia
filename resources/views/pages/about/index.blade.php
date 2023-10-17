@extends('layouts.app')

@section('content')

<!-- About Satrt -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <img src="{{asset('assets/img/ev8.jpg')}}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">

                <h1 class="display-5 mb-4 pink">Trusted By 200 + satisfied clients</h1>
                <p class="mb-4">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eit esdioilore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullaemco laboeeiris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor iesdein reprehendeerit in voluptate velit esse cillum dolore.</p>
                <div class="row g-4 text-dark mb-5">
                    <div class="col-sm-6">
                        <i class="fas fa-share pink me-2"></i>Fresh and Fast food Delivery
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share pink me-2"></i>24/7 Customer Support
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share pink me-2"></i>Easy Customization Options
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share pink me-2"></i>Delicious Deals for Delicious Meals
                    </div>
                </div>
                <a href="" class="btn bg-pink py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Hero Start -->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('assets/img/ev6.jpg')}}" class="d-block w-100" alt="event-img">
        <div class="carousel-caption d-none d-md-block">
          <h1>Althia's Event Services</h1>
          {{-- <p>Some representative placeholder content for the first slide.</p> --}}
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/ev9.jpg')}}" class="d-block w-100" alt="event-img">
        <div class="carousel-caption d-none d-md-block">
            <h1>Althia's Event Services</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/ev7.jpg')}}" class="d-block w-100" alt="event-img">
        <div class="carousel-caption d-none d-md-block">
            <h1>Althia's Event Services</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/ev8.jpg')}}" class="d-block w-100" alt="event-img">
        <div class="carousel-caption d-none d-md-block">
            <h1>Althia's Event Services</h1>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Hero End -->



@endsection
