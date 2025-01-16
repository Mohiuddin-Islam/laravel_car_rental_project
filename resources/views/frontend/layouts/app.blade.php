<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="pixydrops">
        <meta name="description" content="Remons - Booking Rental HTML Template">
        <!-- ======== Page title ============ -->
        <title>Remons Car Rental Booking</title>
        @section('cssfiles')
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <!--<< DatePicker.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/datepickerboot.css')}}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

        <!-- App css -->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        @show
    </head>
    <body>

        <!-- Back To Top Start -->
        <div class="scroll-up">
            <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!-- Offcanvas Area Start -->
        @include('frontend.layouts.offcanvas')

        <!-- Header Section Start -->
        @include('frontend.layouts.header')

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

        <!-- Hero Section Start -->
        
        @yield('slider', '')
        @yield('breadcrumb', '')

        @yield('content', '')
        
        <!-- Testimonial Section Start -->
        
        <!-- Cta Cheap Rental Section Start -->
        <section class="cta-cheap-rental-section">
            <div class="container">
                <div class="cta-cheap-rental">
                    <div class="cta-cheap-rental-left wow fadeInUp" data-wow-delay="
                    .3s">
                        <div class="logo-thumb">
                            <a href="index.html">
                                <img src="{{asset('assets/img/logo/white-logo.svg')}}" alt="logo-img">
                            </a>
                        </div>
                        <h4 class="text-white">Save big with our cheap car rental</h4>
                    </div>
                    <div class="social-icon d-flex align-items-center wow fadeInUp" data-wow-delay="
                    .5s">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </section>
    <!-- Footer Section Start -->
        @include('frontend.layouts.footer')
        
        @section('jsfiles')
        <!--<< All JS Plugins >>-->
        <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{asset('assets/js/viewport.jquery.js')}}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{asset('assets/js/jquery.waypoints.js')}}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
        <!--<< Datepicker Js >>-->
        <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!--<< GSAP Animation Js >>-->
        <script src="{{asset('assets/js/animation.js')}}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <!--<< Main.js >>-->
        <script src="{{asset('assets/js/main.js')}}"></script>

        <!-- Vendor -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('assets/js/app.js')}}"></script>
        @show
    </body>
</html>