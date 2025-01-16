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
                    <h5 class="card-title mb-0" style="color:black">Make Payment</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <form action="{{ route('payment.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="exampleInputEngine" class="form-label">Customer</label>
                            <select name="customer" class="form-control" class="category" id="exampleInputEmail1"
                                aria-describedby="engineHelp">
                                <option value="">Select One</option>
                                @foreach ($items as $item)
                                    <option value="{{ $item->id }}" @selected(old('customer') == $item->id)>
                                        {{ $item->customer->name }}</option>
                                @endforeach
                                
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEngine" class="form-label">Payment Method</label>
                            <select name="method" class="form-control" class="category" id="exampleInputEmail1"
                                aria-describedby="engineHelp">
                                <option value="">Select One</option>
                                <option value="bkash">Bkash</option>
                                <option value="nagad">Nagad</option>
                                <option value="rocket">Rocket</option>
                                
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputPrice" class="form-label">Transaction ID</label>
                            <input type="text" name="trxn" class="form-control" id="exampleInputEmail1"
                                aria-describedby="priceHelp" placeholder="Enter Transaction ID"></input>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPrice" class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control" id="exampleInputEmail1"
                                aria-describedby="priceHelp" placeholder="Enter Amount"></input>
                        </div>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection