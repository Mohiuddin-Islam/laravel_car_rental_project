@extends('frontend.layouts.app')

@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/banner.jpg');">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                    <li>
                        <a href="{{route('home')}}">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        Cars
                    </li>
                </ul>
                <h1 class="wow fadeInUp" data-wow-delay=".5s">Grid Style</h1>
            </div>
        </div>
    </div>

    <!-- Car Rentals Section Start -->
    <section class="car-rentals-section-2 section-padding fix">
        <div class="container">
            <div class="row g-4">
                @foreach ($carlists as $carlist)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="car-rentals-items mt-0">
                        <div class="car-image">
                            <img src="{{ asset($carlist->image) }}" alt="img">
                        </div>
                        <div class="car-content">
                            <div class="post-cat">
                                {{ $carlist->model }}
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>2 Reviews</span>
                            </div>
                            <h4><a href="#">{{ $carlist->brand }}</a></h4>
                            <h6>{{ $carlist->price_per_day }} <span>/ Day</span></h6>
                            <div class="icon-items">
                                <ul>
                                    <li>
                                        <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                        6 Seats
                                    </li>
                                    <li>
                                        <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                        2 Doors
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                        Automatic
                                    </li>
                                    <li>
                                        <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                        Petrol
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('book.create') }}" class="theme-btn bg-color w-100 text-center">Book Now <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection