@extends('layouts.app')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 col-md-12">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Welcome to Althia Event Services</small>
                    <h1 class="display-1 mb-4 animated bounceInDown">Book <span class="text-primary">Althia</span>Serv For Your Dream Event</h1>
                    <a href="{{url('/add-booking')}}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Book Now</a>
                    <a href="{{url('/about')}}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Know More</a>
                </div>
                <div class="col-lg-5 col-md-12">
                    <img src="{{asset('assets/img/hero.png')}}" class="img-fluid rounded animated zoomIn" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Satrt -->
    <div class="container-fluid py-6">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About Us</small>
                    <h1 class="display-5 mb-4">Althia’s Event Services</h1>
                    <p class="mb-4">Althia Event Services specializes in providing a comprehensive range of event solutions, with a particular focus on catering and a multitude of other services. Our catering division is renowned for crafting exquisite culinary experiences that leave a lasting impression on guests. From mouthwatering appetizers to delectable main courses and indulgent desserts, our expert chefs curate menus that cater to diverse tastes and dietary preferences. Moreover, Althia's commitment to excellence extends beyond catering, as we offer an array of event services, including event planning, decor, entertainment, and audiovisual support. With our meticulous attention to detail and a passion for exceeding expectations, we transform every event into a memorable and seamless affair.</p>

                    <a href="{{ url('/about')}}" class="btn btn-primary py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
                </div>
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <img src="{{asset('assets/img/event-4.jpg')}}" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

     <!-- Fact Start-->
     <div class="container-fluid faqt py-6">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                   <div class="row g-4">
                        <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.3s">
                            <div class="faqt-item bg-primary rounded p-4 text-center">
                                <i class="fas fa-users fa-4x mb-4 text-white"></i>
                                <h1 class="display-4 fw-bold text-white" data-toggle="counter-up">689</h1>
                                <p class="text-white text-uppercase fw-bold mb-0">Happy Customers</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s">
                            <div class="faqt-item bg-primary rounded p-4 text-center">
                                <i class="fas fa-users-cog fa-4x mb-4 text-white"></i>
                                <h1 class="display-4 fw-bold text-white" data-toggle="counter-up">107</h1>
                                <p class="text-white text-uppercase fw-bold mb-0">Expert Chefs</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.7s">
                            <div class="faqt-item bg-primary rounded p-4 text-center">
                                <i class="fas fa-check fa-4x mb-4 text-white"></i>
                                <h1 class="display-4 fw-bold text-white" data-toggle="counter-up">253</h1>
                                <p class="text-white text-uppercase fw-bold mb-0">Events Complete</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="video">
                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- Service Start -->
    <div class="container-fluid service py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Services</small>
                <h1 class="display-5 mb-5">What We Offer</h1>
            </div>
            <div class="row gx-4 justify-content-center">
                @foreach ($all_events as $eventitem)


                        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                            <div class="blog-item">
                                <div class="overflow-hidden rounded">
                                    <img src="{{asset('uploads/event/'.$eventitem->image)}}" class="img-fluid w-100" style="height: 450px; object-fit: cover;" alt="">
                                </div>
                                <div class="blog-content mx-4 d-flex rounded bg-light">
                                    <div class="text-white bg-primary rounded-start">
                                        <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                            <p class="fw-bold mb-0">Book</p>
                                            <p class="fw-bold mbs-0">Now</p>
                                        </div>
                                    </div>
                                    <a href="#!" class="h5 lh-base my-auto h-100 p-3">{{ $eventitem->name}}</a>
                                </div>
                            </div>
                        </div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


@endsection
