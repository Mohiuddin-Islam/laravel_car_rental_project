<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="24">
                    </span>
                </a>
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/black-logo.svg') }}" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul id="side-menu">

                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ url('/admin/dashboard') }}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                        <span class="menu-arrow"></span>
                    </a>

                </li>


                <li class="menu-title">Customer Information</li>

                <li>
                    <a href="#client" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span>Customer</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="client">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('customer.create') }}" class="tp-link">Add Customer</a>
                            </li>
                            <li>
                                <a href="{{ route('customer.index') }}" class="tp-link">Manage Customer</a>
                            </li>

                        </ul>
                    </div>
                    
                </li>

                <li class="menu-title">Car Category</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span>CarList </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('carlist.create') }}" class="tp-link">New Car</a>
                            </li>
                            <li>
                                <a href="{{ route('carlist.index') }}" class="tp-link">All CarList</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="menu-title">Driver Manage</li>

                <li>
                    <a href="#driv" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span>Driver </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="driv">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('driver.create') }}" class="tp-link">Add Driver</a>
                            </li>
                            <li>
                                <a href="{{ route('driver.index') }}" class="tp-link">All Driver List</a>
                                
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="menu-title">Booking Manage</li>

                <li>
                    <a href="#book1" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span>Bookings</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="book1">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('booking.create') }}" class="tp-link">New Booking</a>
                            </li>
                            <li>
                                <a href="{{ route('booking.index') }}" class="tp-link">All Booking List</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="menu-title">Payment Information</li>

                <li>
                    <a href="#pay" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span>Payment</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="pay">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('payment.create') }}" class="tp-link">Make Payment</a>
                            </li>
                            <li>
                                <a href="{{ route('payment.index') }}" class="tp-link">Payment List</a>
                            </li>

                        </ul>
                    </div>
                    
                </li>

                <li class="menu-title">Contact Information</li>

                <li>
                    <a href="#cont" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span>Message</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="cont">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('contact.index') }}" class="tp-link">All Message</a>
                            </li>
                            <li>
                                {{-- <a href="{{ route('contact.create') }}" class="tp-link">New Contact</a> --}}
                            </li>

                        </ul>
                    </div>
                    
                </li>
                
            </ul>
        </div>
        <!-- End Sidebar -->
        
    </div>
</div>
