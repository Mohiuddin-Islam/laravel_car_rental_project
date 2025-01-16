@extends('backend.layouts.app')

@section('css')
<!-- App favicon -->
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

<!-- App css -->
<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons -->
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

@endsection


@section('js')
<!-- Vendor -->
<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>

<!-- Apexcharts JS -->
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- for basic area chart -->
<script src="{{asset('https://apexcharts.com/samples/assets/stock-prices.js')}}"></script>

<!-- Widgets Init Js -->
<script src="{{asset('assets/js/pages/crm-dashboard.init.js')}}"></script>

<!-- App js-->
<script src="{{asset('assets/js/app.js')}}"></script>

@endsection

@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
            </div>
        </div>

        <!-- start row -->
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title text-black mb-0">Client Dashboard</h5>

                            <div class="ms-auto"> 
                                
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <img src="{{asset('images/welcome.jpg')}}" style="width: 100%">
                    </div>
                </div>
            </div>

            
        </div>
        <!-- end start -->

        <!-- Start Monthly Sales -->
        
        <!-- End Monthly Sales -->

    </div> <!-- container-fluid -->
</div>
    
@endsection