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

    <!-- App js-->
    <script src="{{asset('assets/js/app.js')}}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Driver Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('driver.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 d-flex align-items-center justify-content-center display-6">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $driver->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 d-flex align-items-center justify-content-center display-6">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $driver->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 d-flex align-items-center justify-content-center display-6">
            <div class="form-group">
                <strong>Phone:</strong>
                {{ $driver->phone}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 d-flex align-items-center justify-content-center display-6">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $driver->details }}
            </div>
        </div>
        
    </div>
@endsection