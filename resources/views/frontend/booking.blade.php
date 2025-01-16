@extends('frontend.layouts.app')

@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url({{asset('assets/img/banner.jpg')}});">
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
                <h1 class="wow fadeInUp" data-wow-delay=".5s">Single Car</h1>
            </div>
        </div>
    </div>

    <!-- Car Details Section Start -->
    <section class="car-details fix section-padding">
        <div class="container">
            <div class="car-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="car-details-items">
                            <div class="car-image">
                                <img src="{{asset('assets/img/car/honda_crv.png')}}" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h3>Hyundai Accent Limited</h3>
                                <h6>$70.00 <span>/ Day</span></h6>
                                <p class="mt-4 mb-4">
                                    To deliver on the promise of technology and human We help our clients become sions of
                                    themselves. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    orem ipsum has been the industry’s standard dummy text ever since the 1500s.
                                </p>
                                <div class="icon-details-area">
                                    <h4>Key Features</h4>
                                    <div class="icon-details-main-items">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{asset('assets/img/car/icon/07.png')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>body:</h6>
                                                <p>Sedan</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{asset('assets/img/car/icon/07.png')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Mileage:</h6>
                                                <p>70.000 (Mi)</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{asset('assets/img/car/icon/07.png')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Year:</h6>
                                                <p>2024</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{asset('assets/img/car/icon/07.png')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Engine:</h6>
                                                <p>2500 cc</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-details-main-items">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{asset('assets/img/car/door.svg')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Passengers:</h6>
                                                <p>6 Seats</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{asset('assets/img/car/seat.svg')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Gear:</h6>
                                                <p>Automatic</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{asset('assets/img/car/automatic.svg')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Gear:</h6>
                                                <p>Automatic</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{asset('assets/img/car/petrol.svg')}}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Fuel:</h6>
                                                <p>Petrol</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="car-booking-items">
                            <div class="booking-header">
                                @if (session('msg'))
                            <div class="alert alert-success">{{ session('msg') }}</div>
                        @endif

                        @if (session('msg1'))
                            <div class="alert alert-danger">{{ session('msg1') }}</div>
                        @endif

                                <h3>Request for Booking</h3>
                                <p>Send your requirement to us. We will check email and contact you soon.</p>
                            </div>
                            <form action="{{ route('book.store') }}" id="contact-form" method="POST"
                                class="contact-form-items">
                                @csrf
                                <div class="row g-4">
                                    
                                    <div class="col-lg-3">
                                        <div class="form-clt">
                                            <label class="label-text">CarList</label>
                                            <div class="category-oneadjust">
                                                <select name="carlist" class="category" style="display: none;">
                                                    <option value="">Choose Car</option>
                                                    @foreach ($carlists as $carlist)
                                                        <option value="{{ $carlist->id }}" @selected(old('carlist') == $carlist->id)>
                                                            {{ $carlist->brand }}->{{ $carlist->model }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-clt">
                                            <label class="label-text">Driver</label>
                                            <div class="category-oneadjust">
                                                <select name="driver" class="category" style="display: none;">
                                                    <option value="">Choose Driver</option>
                                                    @foreach ($drivers as $driver)
                                                        <option value="{{ $driver->id }}" @selected(old('driver') == $carlist->id)>
                                                            {{ $driver->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                            <div class="col-lg-3">
                                                <div class="form-clt">
                                                    <label for="pick_up_date" class="label-text">Pick-up Date</label>
                                            <input type="date" id="pick_up_date" name="pick_up_date" value="{{ old('pick_up_date') }}"
                                                class="form-control">
                                        </div>
                                        @error('pick_up_date')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-clt">
                                            <label for="drop_off_date" class="label-text">Drop-of Date</label>
                                    <input type="date" id="drop_off_date" name="drop_off_date" value="{{ old('drop_off_date') }}"
                                        class="form-control">
                                </div>
                                @error('drop_off_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                                    
                                    <div class="col-lg-12">
                                        <button class="theme-btn" type="submit">
                                            Book Now
                                        </button>
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
    <section class="car-rentals-section-2 section-padding fix pt-0">
        <div class="container">
            <div class="section-title text-center">
                <img src="{{asset('assets/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Checkout our new cars</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Similar Cars Available
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
                                {{$carlist->model}}
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>2 Reviews</span>
                            </div>
                            <h4><a href="car-details.html">{{$carlist->brand}}</a></h4>
                            <h6>{{ $carlist->price_per_day }} <span>/ Day</span></h6>
                            <div class="icon-items">
                                <ul>
                                    <li>
                                        <img src="{{asset('assets/img/car/seat.svg')}}" alt="img" class="me-1">
                                        6 Seats
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/car/door.svg')}}" alt="img" class="me-1">
                                        2 Doors
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="{{asset('assets/img/car/automatic.svg')}}" alt="img" class="me-1">
                                        Automatic
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/car/petrol.svg')}}" alt="img" class="me-1">
                                        Petrol
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('book.create') }}" class="theme-btn bg-color w-100 text-center">Book Now <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </section>
@endsection
