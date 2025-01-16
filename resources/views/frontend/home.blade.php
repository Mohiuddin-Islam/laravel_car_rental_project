@extends('frontend.layouts.app')

@section('cssfiles')
    @parent
@endsection

@section('jsfiles')
    @parent
@endsection

@section('slider')
    @include('frontend.layouts.slider')
@endsection

@section('content')
    <!-- Search Booking Section Start -->
    <section class="search-booking-section section-padding">
        <div class="container">
            <div class="search-booking-wrapper">
                <div class="booking-man float-bob-x">
                    <img src="{{ asset('assets/img/booking-man.webp') }}" alt="img">
                </div>
                <div class="row g-4 justify-content-between">
                    <div class="col-xl-6 col-lg-6">
                        <div class="search-booking-content">
                            <div class="section-title">
                                <img src="{{ asset('assets/img/sub-icon.png') }}" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Search Book & <br>
                                    Rent Vehicle Easily
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".6s">
                                Automotive companies have a unique opportunity to leverage social media for storytelling, showcasing innovation, and building a passionate community of enthusiasts and customers. The dynamic and visually driven nature of the automotive industry makes it a perfect fit for engaging content on social media. Here are bespoke social media tips for automotive companies, enriched with creative social media ideas designed to turbocharge your brand’s online presence.
                            </p>
                            <div class="icon-area">
                                <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/feature-benefit/icon-1.png') }}" alt="icon-img">
                                    </div>
                                    <h4>
                                        Easier & <br>
                                        Faster Bookings
                                    </h4>
                                </div>
                                <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/feature-benefit/icon-2.png') }}" alt="icon-img">
                                    </div>
                                    <h4>
                                        Too Many <br>
                                        Pickup Locations
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="product-search-area">
                            <form action="#" id="contact-form" method="POST">
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Pickup Location</label>
                                            <div class="category-oneadjust">
                                                <select name="cate" class="category">
                                                    <option value="1">
                                                        Broklyn Street
                                                    </option>
                                                    <option value="1">
                                                        Houston
                                                    </option>
                                                    <option value="1">
                                                        Texas
                                                    </option>
                                                    <option value="1">
                                                        New York
                                                    </option>
                                                    <option value="1">
                                                        Other Location
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Pick-up Date</label>
                                            <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" placeholder="Check in" readonly>
                                                <span class="input-group-addon"> <i
                                                        class="fa-solid fa-calendar-days"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Drop-off Date</label>
                                            <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" placeholder="Check in" readonly>
                                                <span class="input-group-addon"> <i
                                                        class="fa-solid fa-calendar-days"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Car Type</label>
                                            <div class="category-oneadjust">
                                                <select name="cate" class="category">
                                                    <option value="1">
                                                        cars
                                                    </option>
                                                    <option value="1">
                                                        sedan
                                                    </option>
                                                    <option value="1">
                                                        sports
                                                    </option>
                                                    <option value="1">
                                                        jeep
                                                    </option>
                                                    <option value="1">
                                                        limousine
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <button type="submit" class="theme-btn">
                                                Find a Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Rentals Section Start -->
    <section class="car-rentals-section-2 section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="{{ asset('assets/img/sub-icon.png') }}" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Checkout our new cars</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Cars We’re Offering <br>
                    for Rentals
                </h2>
            </div>
            <div class="row">
                @foreach ($carlists as $carlist)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="car-rentals-items">
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
                                            <img src="{{ asset('assets/img/car/seat.svg') }}" alt="img"
                                                class="me-1">
                                            6 Seats
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/car/door.svg') }}" alt="img"
                                                class="me-1">
                                            2 Doors
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="{{ asset('assets/img/car/automatic.svg') }}" alt="img"
                                                class="me-1">
                                            Automatic
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/car/petrol.svg') }}" alt="img"
                                                class="me-1">
                                            Petrol
                                        </li>
                                    </ul>
                                </div>
                                {{-- @if (Auth()->guard('customer')->check()) --}}
                                <a href="{{ route('book.create') }}" class="theme-btn bg-color w-100 text-center">Book
                                    Now <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                    {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Gallery Section Start -->
    <div class="gallery-section-2 fix">
        <div class="gallery-wrapper">
            <div class="row g-4">
                <div class="col-xxl-5 col-xl-6 col-lg-7">
                    <div class="row g-3">
                        <div class="col-lg-6 col-md-6">
                            <div class="gallery-image">
                                <img src="{{ asset('assets/img/gallery/g-10.webp') }}" alt="img">
                                <div class="icon-box">
                                    <a href="{{ asset('assets/img/gallery/g-10.webp') }}" class="icon img-popup-2">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                                <div class="mask"></div>
                                <div class="mask-second"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div class="gallery-image">
                                        <img src="{{ asset('assets/img/gallery/g-11.webp') }}" alt="img">
                                        <div class="icon-box">
                                            <a href="{{ asset('assets/img/gallery/g-webp') }}" class="icon img-popup-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="mask"></div>
                                        <div class="mask-second"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="gallery-image">
                                        <img src="{{ asset('assets/img/gallery/g-12.webp') }}" alt="img">
                                        <div class="icon-box">
                                            <a href="{{ asset('assets/img/gallery/g-12.webp') }}"
                                                class="icon img-popup-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="mask"></div>
                                        <div class="mask-second"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-5 col-md-6">
                    <div class="gallery-image style-width">
                        <img src="{{ asset('assets/img/gallery/g-13.webp') }}" alt="img">
                        <div class="icon-box">
                            <a href="{{ asset('assets/img/gallery/g-13.webp') }}" class="icon img-popup-2">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                        <div class="mask"></div>
                        <div class="mask-second"></div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6">
                    <div class="gallery-content">
                        <div class="icon">
                            <img src="{{ asset('assets/img/gallery/icon.png') }}" alt="img">
                        </div>
                        <h2>
                            Trusted & Reliable
                            Car Rentals <br>
                            Gallery
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
