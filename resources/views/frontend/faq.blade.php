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
                    Faqs
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">Faqs</h1>
        </div>
    </div>
</div>

<!--<< Faq Section Start >>-->
<section class="faq-section-2 fix section-padding">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="faq-sidebar">
                    <div class="search-widget">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <h3>
                        Still have Questions? <br>
                        Call Now!
                    </h3>
                    <div class="icon-items">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="content">
                            <p>Call Anytime</p>
                            <h6><a href="tel:+923076806860">+88(01567980553)</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="faq-content">
                    <div class="section-title">
                        <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                        <span class="wow fadeInUp" data-wow-delay=".2s">Frequently asked questions</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                            Question & Answers
                        </h2>
                    </div>
                    <div class="faq-accordion mt-4 mt-md-0">
                        <div class="accordion" id="accordion">
                            <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay=".3s">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                        How to process the funtion for construction?
                                    </button>
                                </h5>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay=".5s">
                                <h5 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                        Where should I incorporate my business?
                                    </button>
                                </h5>
                                <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow mb-4 fadeInUp" data-wow-delay=".7s">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                        How there are many variations of passages
                                    </button>
                                </h5>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay=".3s">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="true" aria-controls="faq4">
                                        How to process the funtion for construction?
                                    </button>
                                </h5>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow mb-4 fadeInUp" data-wow-delay=".7s">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                        How to process the funtion for construction?
                                    </button>
                                </h5>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow mb-4 fadeInUp" data-wow-delay=".7s">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                        How there are many variations of passages
                                    </button>
                                </h5>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb wow fadeInUp" data-wow-delay=".3s">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="true" aria-controls="faq7">
                                        How to process the funtion for construction?
                                    </button>
                                </h5>
                                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection