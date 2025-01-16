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
                    Gallery
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">Gallery</h1>
        </div>
    </div>
</div>

<!--<< Gallery Section Start >>-->
<div class="gallery-section-3 fix section-padding">
    <div class="container">
        <div class="galley-wrapper-2">
            <div class="gallery-items">
                <div class="g-items">
                    <img src="assets/img/gallery/gly6.png" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/gly6.png" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="assets/img/gallery/gly5.png" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/gly5.png" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="assets/img/gallery/Nissan-Micra.png" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/Nissan-Micra.png" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
            </div>
            <div class="gallery-items gallery-items-two">
                <div class="g-items">
                    <img src="assets/img/gallery/gly.png" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/gly.png" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="assets/img/gallery/gly2.webp" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/gly2.webp" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
            </div>
            <div class="gallery-items gallery-items-three">
                <div class="g-items">
                    <img src="assets/img/gallery/gly3.webp" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/gly3.webp" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="assets/img/gallery/gly4.png" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/gly4.png" class="icon img-popup-2">
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
    
@endsection