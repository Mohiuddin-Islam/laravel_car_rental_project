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
                        blog
                    </li>
                </ul>
                <h1 class="wow fadeInUp" data-wow-delay=".5s">blog</h1>
            </div>
        </div>
    </div>

    <!-- News Section Start -->
    <section class="news-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/01.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    20 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Mike Hardson</span>
                                <h3><a href="{{route('blog_details')}}">The best fastest and most powerful road car</a></h3>
                                <p>Now in its second year of production, the S650 Mustang GT has established itself... </p>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-comments"></i>
                                    2 Comments
                                </li>
                                <li>
                                    <a href="{{route('blog_details')}}">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/02.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    26 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Mike Hardson</span>
                                <h3><a href="{{route('blog_details')}}">2025 Corvette Stingray | 490 HP </a></h3>
                                <p>For decades, going all the way back to Zora Arkus-Duntov’s involvement,</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-comments"></i>
                                    2 Comments
                                </li>
                                <li>
                                    <a href="{{route('blog_details')}}">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/03.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    29 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Mike Hardson</span>
                                <h3><a href="{{route('blog_details')}}">2025 Mustang Dark Horse | 500 HP</a></h3>
                                <p>The Dark Horse Mustang carries an additional $18,000 premium over the base Mustang GT, and </p>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-comments"></i>
                                    2 Comments
                                </li>
                                <li>
                                    <a href="{{route('blog_details')}}">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/04.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    20 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Mike Hardson</span>
                                <h3><a href="{{route('blog_details')}}">25 Most Powerful Cars In the World</a></h3>
                                <p>Whether they're electric, gas, or both—these performance cars in the world</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-comments"></i>
                                    2 Comments
                                </li>
                                <li>
                                    <a href="{{route('blog_details')}}">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/05.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    26 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Mike Hardson</span>
                                <h3><a href="{{route('blog_details')}}">The Coolest Hot Hatch in the World Has a Ferrari</a></h3>
                                <p>This funky hatchback is a one-off creation called the Sbarro Super</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-comments"></i>
                                    2 Comments
                                </li>
                                <li>
                                    <a href="{{route('blog_details')}}">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/06.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    29 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Mike Hardson</span>
                                <h3><a href="{{route('blog_details')}}">You Can Now Build Your Own Rolls-Royce at Home</a></h3>
                                <p>The Cameo has self-leveling Rolls-Royce center caps, just like the</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-comments"></i>
                                    2 Comments
                                </li>
                                <li>
                                    <a href="{{route('blog_details')}}">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
