@extends('frontend.layouts.app')

@section('breadcrumb')

<!-- Search Area Start -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
</div>

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
                    About Us
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">About Us</h1>
        </div>
    </div>
</div>

<!-- About Section Start -->
<section class="about-section fix section-padding">
    <div class="container">
        <div class="about-wrapper-2">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-image">
                        <img src="{{asset('assets/img/about/aboutus.webp')}}" alt="about-image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <img src="{{asset('assets/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                            <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                Trusted & Leading in 
                                Car Rent Services
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".6s">
                            A leading car rental service in Bangladesh with a fleet of over 100 premium cars. They offer a variety of vehicles, including cars, micro buses, pick ups, ambulances, trucks, covered vans, and commercial vehicles. They also provide airport and railway transfers.
                        </p>
                        <div class="about-list-wrapper">
                            <div class="about-list-items wow fadeInUp" data-wow-delay=".3s">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i>
                                        National
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i>
                                        Enterprise
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i>
                                        Advantage Rent A Car
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i>
                                        Ace Rent A Car
                                    </li>
                                </ul>
                                <a href="#" class="theme-btn">Discover More</a>
                            </div>
                            <div class="author-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <p>Need help? Talk to an <br> Expert</p>
                                <h6><a href="tel:01567980553">+8801567980553</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section Start -->
<section class="team-section fix section-padding pt-0">
    <div class="container">
        <div class="section-title text-center">
            <img src="{{asset('assets/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
            <span class="wow fadeInUp" data-wow-delay=".2s">Our expert people</span>
            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                Meet Our Professional <br>
                Team Members
            </h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="team-card-items">
                    <div class="border-shape">
                        <img src="{{asset('assets/img/team/border.png')}}" alt="img">
                    </div>
                    <div class="team-image">
                        <img src="{{asset('assets/img/team/team-01.webp')}}" alt="team-img">
                    </div>
                    <div class="team-content">
                        <h3><a href="#">Mike Hardson</a></h3>
                        <p>manager</p>
                        <div class="social-icon d-flex align-items-center justify-content-center">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="team-card-items">
                    <div class="border-shape">
                        <img src="{{asset('assets/img/team/border.png')}}" alt="img">
                    </div>
                    <div class="team-image">
                        <img src="{{asset('assets/img/team/team-02.webp')}}" alt="team-img">
                    </div>
                    <div class="team-content">
                        <h3><a href="#">Aleesha Brown</a></h3>
                        <p>manager</p>
                        <div class="social-icon d-flex align-items-center justify-content-center">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="team-card-items">
                    <div class="border-shape">
                        <img src="{{asset('assets/img/team/border.png')}}" alt="img">
                    </div>
                    <div class="team-image">
                        <img src="{{asset('assets/img/team/team-03.webp')}}" alt="team-img">
                    </div>
                    <div class="team-content">
                        <h3><a href="#">David Jhonson</a></h3>
                        <p>manager</p>
                        <div class="social-icon d-flex align-items-center justify-content-center">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Funfact Section Start -->
<section class="funfact-section section-padding fix bg-cover mt-0" style="background-image: url('assets/img/banner7.jpg');">
    <div class="container">
        <div class="funfact-wrapper mt-0">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="section-title mb-0">
                        <img src="{{asset('assets/img/sub-icon-2.png')}}" alt="icon-img" class="wow fadeInUp">
                        <span class="wow fadeInUp" data-wow-delay=".2s">fun facts</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">
                            Save Time & Money <br>
                            with Top Car Rent <br>
                            Services
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="funfact-counter-area">
                        <div class="funfact-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <img src="{{asset('assets/img/icon/car.png')}}" alt="img">
                            </div>
                            <h2><span class="count">990</span></h2>
                            <p>
                                Cars <br>
                                rentouts
                            </p>
                        </div>
                        <div class="funfact-items wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon">
                                <img src="{{asset('assets/img/icon/center.png')}}" alt="img">
                            </div>
                            <h2><span class="count">230</span></h2>
                            <p>
                                Center <br>
                                solutions
                            </p>
                        </div>
                        <div class="funfact-items wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon">
                                <img src="{{asset('assets/img/icon/like.png')}}" alt="img">
                            </div>
                            <h2><span class="count">660</span></h2>
                            <p>
                                happy <br>
                                customers
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section Start -->
<section class="testimonial-section fix section-padding">
    <div class="testimonial-bg-shape">
        <img src="{{asset('assets/img/testimonial/bg-testimonial-home3.png')}}" alt="shape-img">
    </div>
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <img src="{{asset('assets/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">our testimonials</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    What They’re Talking <br>
                    About Remons
                </h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay=".5s">
                I was very impresed by the remons service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
            </p>
        </div>
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card-items">
                        <div class="testimoni-bg-shape">
                            <div class="testimonial-items-top">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p>
                                    I was very impresed by the remons service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                </p>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="client-info-items d-flex align-items-center gap-3">
                            <div class="client-img bg-cover" style="background-image: url('assets/img/testimonial/client3.png');"></div>
                            <div class="content">
                                <h5>
                                    Jessica Brown
                                </h5>
                                <span>Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card-items">
                        <div class="testimoni-bg-shape">
                            <div class="testimonial-items-top">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p>
                                    I was very impresed by the remons service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                </p>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="client-info-items d-flex align-items-center gap-3">
                            <div class="client-img bg-cover" style="background-image: url('assets/img/testimonial/client4.png');"></div>
                            <div class="content">
                                <h5>
                                    Kevin Martin
                                </h5>
                                <span>Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card-items">
                        <div class="testimoni-bg-shape">
                            <div class="testimonial-items-top">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p>
                                    I was very impresed by the remons service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                </p>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="client-info-items d-flex align-items-center gap-3">
                            <div class="client-img bg-cover" style="background-image: url('assets/img/testimonial/client5.png');"></div>
                            <div class="content">
                                <h5>
                                    Jessica Brown
                                </h5>
                                <span>Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Car Sale Section Start -->
<section class="car-sale-section fix section-padding pt-0">
    <div class="container-fluid">
        <div class="car-sale-wrapper">
            <div class="sale-shape">
                <img src="{{asset('assets/img/bg-shape-saleoff.png')}}" alt="shape-img">
            </div>
            <div class="badge-shape">
                <img src="{{asset('assets/img/bagde.png')}}" alt="shape-img">
            </div>
            <div class="car-shape">
                <img src="{{asset('assets/img/car-slideshow-2.webp')}}" alt="img">
            </div>
            <div class="car-sale-content">
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Sale 50% Off</h2>
                <h3 class="wow fadeInUp" data-wow-delay=".5s">on all rental cars for 1 month</h3>
                <a href="{{route('book.create')}}" class="theme-btn bg-header wow fadeInUp" data-wow-delay=".7s">Book Your Car</a>
            </div>
        </div>
    </div>
</section>

@endsection
