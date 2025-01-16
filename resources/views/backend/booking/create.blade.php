@extends('backend.layouts.app')

@section('css')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('js')
    <!-- Vendor -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 offset-2 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0" style="color:black">Add New Booking</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="exampleInputEngine" class="form-label">Customer</label>
                            <select name="customer" class="form-control" class="category" id="exampleInputEmail1"
                                aria-describedby="engineHelp">
                                <option value="">Select One</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}" @selected(old('customer') == $customer->id)>
                                        {{ $customer->name }}</option>
                                @endforeach
                                
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEngine" class="form-label">CarList</label>
                            <select name="carlist" class="form-control" class="category" id="exampleInputEmail1"
                                aria-describedby="engineHelp">
                                <option value="">Choose Car</option>
                                @foreach ($carlists as $carlist)
                                    <option value="{{ $carlist->id }}" @selected(old('carlist') == $carlist->id)>
                                        {{ $carlist->brand }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEngine" class="form-label">Driver</label>
                            <select name="driver" class="form-control" class="category" id="exampleInputEmail1"
                                aria-describedby="engineHelp">
                                <option value="">Choose Driver</option>
                                @foreach ($drivers as $driver)
                                    <option value="{{ $driver->id }}" @selected(old('driver') == $driver->id)>
                                        {{ $driver->name }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputPrice" class="form-label">Pick-Up Date</label>
                            <input type="date" name="pick_up_date" class="form-control" id="exampleInputEmail1"
                                aria-describedby="priceHelp"></input>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPrice" class="form-label">Drop-off Date</label>
                            <input type="date" name="drop_off_date" class="form-control" id="exampleInputEmail1"
                                aria-describedby="priceHelp"></input>
                        </div>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection