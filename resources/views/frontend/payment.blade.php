@extends('frontend.layouts.app')

@section('cssfiles')
    @parent
@endsection

@section('jsfiles')
    @parent
@endsection


@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url({{asset('assets/img/banner.jpg')}})">
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li>
                    Payment
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">Payment</h1>
        </div>
    </div>
</div>

        <!-- Contact Section Start -->
        <section class="contact-section-1 fix section-padding pb-0">
            <div class="container">
                <div class="contact-wrapper-area">
                    <div class="row g-4">
                        <div class="col-lg-8 offset-2">
                            <div class="contact-content">
                                <div class="section-title">
                                    <img src="{{asset('assets/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">Payment us</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                        Drop us a Line
                                    </h2>
                                    @if (session('msg'))
                                    <div class="alert alert-success">{{ session('msg') }}</div>
                                @endif
                                </div>
                                <form action="{{route('paystore')}}" id="contact-form" method="post" class="contact-form-items mt-5 mt-md-0">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <label class="label-text">Customer ID</label>
                                                <input type="number" name="customer" value="{{$bookings->id}}" placeholder="Customer ID">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <label class="label-text">Amount</label>
                                                <input type="number" name="amount" value="{{$bookings->amount}}" placeholder="Your Amount">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <label class="label-text">Method</label>
                                                <select name="method" class="form-control">
                                                    <option value="">Select One</option>
                                                    <option value="bkash">Bkash</option>
                                                    <option value="nagad">Nagad</option>
                                                    <option value="rocket">Rocket</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <label class="label-text">Transaction ID</label>
                                                <input type="text" name="trxn" placeholder="Enter Transaction Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="theme-btn">
                                                Submit Payment
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

@endsection