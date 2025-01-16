@extends('frontend.layouts.app')

@section('content')
<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/contact_us.jpeg');">
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
                    Contact
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">Contact</h1>
        </div>
    </div>
</div>
<!-- Contact Section Start -->
<section class="contact-section-1 fix section-padding pb-0">
    <div class="container">
        <div class="contact-wrapper-area">
            <div class="row g-4">
                <div class="col-lg-9">
                    <div class="contact-content">
                        <div class="section-title">
                            <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                            <span class="wow fadeInUp" data-wow-delay=".2s">contact us</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                Drop us a Line
                            </h2>
                            @if (session('msg'))
                            <div class="alert alert-success">{{ session('msg') }}</div>
                        @endif
                        </div>
                        <form action="{{route('contact.store')}}" id="contact-form" method="POST" class="contact-form-items mt-5 mt-md-0">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="email" id="email2" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="phone" id="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <textarea name="details" id="message" placeholder="Write a Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="theme-btn">
                                        Send a Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-right-items">
                        <div class="contact-img">
                            <img src="assets/img/contact.webp" alt="img">
                        </div>
                        <div class="icon-items">
                            <div class="icon">
                                <img src="assets/img/question.png" alt="img">
                            </div>
                            <div class="content">
                                <p>Have Question?</p>
                                <h6><a href="tel:+923076806860">+88(01567980553)</a></h6>
                            </div>
                        </div>
                        <div class="icon-items">
                            <div class="icon">
                                <img src="assets/img/email.png" alt="img">
                            </div>
                            <div class="content">
                                <p>Write Email</p>
                                <h6><a href="mailto:info@example.com" class="link">remons@gmail.com</a></h6>
                            </div>
                        </div>
                        <div class="icon-items">
                            <div class="icon">
                                <img src="assets/img/location.png" alt="img">
                            </div>
                            <div class="content">
                                <p>Visit Office</p>
                                <h6>
                                    54 Paltan, Inner Circular Road <br>
                                    Dhaka
                                </h6>
                            </div>
                        </div>
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
    </div>
</section>

<!--<< Map Section Start >>-->
<div class="map-section">
    <div class="map-items">
        <div class="googpemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1826.1506139658284!2d90.41055393832363!3d23.736635299981142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPurana%20Paltan%20scout%20market!5e0!3m2!1sen!2sbd!4v1733233166798!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@endsection