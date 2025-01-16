<header class="header-section">
    <div class="header-top-section style-two">
        <div class="container-fluid">
            <div class="header-top-wrapper style-2">
                <ul class="contact-list">
                    @if (Auth::check())
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@example.com" class="link">{{ Auth::user()->name }}</a>
                        </li>
                    @else
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@example.com" class="link">Guest</a>

                        </li>
                    @endif
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        54 Inner Circular Road, Purana Paltan. Dhaka-Bangladesh
                    </li>
                </ul>
                <div class="header-top-right">
                    <ul class="top-list">
                        @if (!Auth()->guard('customer')->check())
                            <li><a href="{{ route('customer.login') }}" style="color:rgb(27, 184, 27)">Login</a></li>
                            <li><a href="{{ route('customer.register') }}"
                                    style="color:rgb(44, 150, 211)">Registration</a>
                            </li>
                        @endif
                        {{-- <li><a href="{{route('customer.logout')}}">LogOut</a></li> --}}
                        @if (Auth()->guard('customer')->check())
                            <li>
                                <form action="{{ route('myprofile') }}" method="get">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success ">My Profile</button>

                                </form>
                            </li>
                            <li>
                                <form action="{{ route('customer.logout') }}" method="post">
                                    @csrf
                                    <a href="{{ route('customer.logout') }}"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                        style="color:rgb(235, 24, 24)">
                                        LogOut
                                    </a>
                                </form>
                            </li>
                        @endif
                    </ul>
                    <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="header-3">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="#" class="header-logo-1">
                                <img src="{{ asset('assets/img/logo/white-logo-2.svg') }}" alt="logo-img">
                            </a>
                            <a href="#" class="header-logo-2">
                                <img src="{{ asset('assets/img/logo/black-logo.svg') }}" alt="logo-img">
                            </a>
                        </div>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="{{ route('home') }}">
                                                Home </a>

                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}">About Us</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="{{ route('gallery') }}">
                                                Feature
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                                <li><a href="{{ route('faq') }}">Faq's</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('car') }}">CarList</a>

                                        </li>
                                        <li>
                                            <a href="{{ route('blog') }}">
                                                Blog
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">

                                                <li><a href="{{ route('blog_details') }}">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact_us') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="icon-items">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <p>Call Anytime</p>
                                <h6><a href="tel:+9288009850">+92 (8800) - 9850</a></h6>
                            </div>
                        </div>
                        <a href="#0" class="search-trigger search-icon"><i
                                class="fa-regular fa-magnifying-glass"></i></a>
                        <div class="header-button">
                            <a href="{{ route('book.create') }}" class="theme-btn">
                                Book a Car
                            </a>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
