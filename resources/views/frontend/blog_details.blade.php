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
                    blog details
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">blog details</h1>
        </div>
    </div>
</div>
    <!-- News Details Section Start -->
    <section class="news-details-section fix section-padding">
        <div class="container">
            <div class="news-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="news-details-items">
                            <div class="news-image">
                                <img src="assets/img/news/news-details.webp" alt="news-img">
                            </div>
                            <div class="news-details-content">
                                <ul class="list-admin">
                                    <li>
                                        <i class="fa-solid fa-circle-user"></i>
                                        by Admin
                                    </li>
                                    <li>
                                        /
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-comments"></i>
                                        2 Comments
                                    </li>
                                </ul>
                                <h3>The best fastest and most powerful road car</h3>
                                <p class="mt-3">
                                    Now in its second year of production, the S650 Mustang GT has established itself as the most affordable of the V-8 muscle cars as well as one of the most powerful muscle cars. The fastback Mustang GT is an absolute bargain with its fourth-generation 5.0-liter Coyote V-8. Output now sits at 486 hp, allowing the sole remaining American front-engine V-8 coupe to propel the 3,800-lb missile from 0 to 60 mph in about 4 seconds. With a base price of just $42,860, that’s a lot of performance for the money, and for the foreseeable future it’s unlikely that any competitor in the V-8 muscle car arena is going to break into that segment, let alone beat it. The “why” is perhaps the biggest story here. Ford is the only domestic manufacturer with enough economical four-cylinders, hybrids, and EVs to be able to support the profitable production of an everyman’s V-8 coupe without having to pay enormous EPA fines behind the scenes. Ford saw this coming, made the decision that Mustang was important, and took steps to preserve the one of the highest-horsepower cars at a price we could all afford. If we’re completely honest with ourselves, the Mustang GT (and Dark Horse) really is the only true remaining American V-8 muscle car—the others are technically near misses due to either their price, configuration, or limited availability. 
                                </p>
                                <p class="mt-4">
                                    t’s been a minute since we updated our list of highest horsepower muscle cars for hot-rodders. A lot has changed: GM no longer offers any V-8 muscle cars in the traditional sense, as the Chevy Camaro is now gone.
                                </p>
                                <p class="mt-4">
                                    That, of course, doesn’t mean GM fans stop buying GM cars, they will simply need to choose from the Corvette or the Cadillac CT5-V Blackwing sedan. At Dodge, the Challenger and Charger are gone, along with the Hemi V-8s that powered them.
                                </p>
                            </div>
                        </div>
                        <div class="tag-share-wrap mt-4 mb-4">
                            <div class="tagcloud">
                                <span>Tags</span>
                                <a href="{{route('blog_details')}}">Off Road</a>
                                <a href="{{route('blog_details')}}">Luxury</a>
                            </div>
                            <div class="social-share d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="news-rental-servce-items">
                                    <h4>
                                        Looking for the best car rental service
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="news-rental-servce-items style-2">
                                    <h4>
                                        Looking for the best car rental service
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="comment-reviews">
                            <h3>2 Reviews</h3>
                            <div class="single-comment d-flex gap-4 pb-5">
                                <div class="image">
                                    <img src="assets/img/car/comment01.webp" alt="image">
                                </div>
                                <div class="content">
                                    <div class="head d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                        <div class="con">
                                            <h4>Kevin Martin</h4>
                                        </div>
                                        <a href="{{route('blog_details')}}" class="reply">Reply</a>
                                    </div>
                                    <p class="mt-4">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting simply fee text aunchanged. It was popularised in the sheets containing
                                        lorem ipsum is simply free text.
                                    </p>
                                </div>
                            </div>
                            <div class="single-comment d-flex gap-4 pt-5 pb-5">
                                <div class="image">
                                    <img src="assets/img/car/comment02.webp" alt="image">
                                </div>
                                <div class="content">
                                    <div class="head d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                        <div class="con">
                                            <h4>Sarah Albert</h4>
                                        </div>
                                        <a href="{{route('blog_details')}}" class="reply">Reply</a>
                                    </div>
                                    <p class="mt-4">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting simply fee text aunchanged. It was popularised in the sheets containing
                                        lorem ipsum is simply free text.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form-wrap pt-5">
                            <h3>Leave a comments</h3>
                            <form action="#" id="contact-form" method="POST">
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
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Write a Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="theme-btn">
                                            Submit Comment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="main-sidebar">
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Recent Post</h3>
                                </div>
                                <div class="recent-post-area">
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp1.webp" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-comments"></i>
                                                    2 Comments
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="{{route('blog_details')}}">
                                                    Hassle-free Rental
                                                    Experience
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp2.webp" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-comments"></i>
                                                    2 Comments
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="{{route('blog_details')}}">
                                                    Hassle-free Rental
                                                    Experience
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp3.webp" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-comments"></i>
                                                    2 Comments
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="{{route('blog_details')}}">
                                                    Hassle-free Rental
                                                    Experience
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul>
                                        <li><a href="{{route('blog_details')}}">Rental <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="{{route('blog_details')}}">Luxury Cars <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li class="active"><a href="{{route('blog_details')}}">Dream Cars <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="{{route('blog_details')}}">Dream Cars <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="{{route('blog_details')}}">Off Road <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Tags</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <div class="tagcloud">
                                        <a href="news-standard.html">Off Road</a>
                                        <a href="{{route('blog_details')}}">Luxury</a>
                                        <a href="{{route('blog_details')}}">Cars</a>
                                        <a href="{{route('blog_details')}}">Rentals</a>
                                        <a href="{{route('blog_details')}}">Engine</a>
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
