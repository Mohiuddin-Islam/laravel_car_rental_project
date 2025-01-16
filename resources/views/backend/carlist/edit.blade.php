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

    <div class="col-lg-8 offset-2 mt-4">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Edit Car Post</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form action="{{ route('carlist.update', $carlist->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputBrand" class="form-label">Brand</label>
                        <input type="text" name="brand" value="{{$carlist->brand}}" class="form-control" id="exampleInputEmail1" aria-describedby="brandHelp" placeholder="Enter Brand Name">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputModel" class="form-label">Model</label>
                        <input type="text" name="model" value="{{$carlist->model}}" class="form-control" id="exampleInputEmail1" aria-describedby="modelHelp" placeholder="Enter Model Name">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEngine" class="form-label">Engine</label>
                        <input type="text" name="engine" value="{{$carlist->engine}}" class="form-control" id="exampleInputEmail1" aria-describedby="engineHelp" placeholder="Enter Engine Name">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPrice" class="form-label">Price</label>
                        <input type="number" name="price" value="{{$carlist->price_per_day}}" class="form-control" id="exampleInputEmail1" aria-describedby="priceHelp" placeholder="Enter Price">
                        
                    </div>
                    <div class="mb-3">
                        <label for="example-select" class="form-label">Status</label>
                        <select class="form-select" name="status" value="{{$carlist->status}}" id="example-select">
                            <option>Select One</option>
                            <option>Available</option>
                            <option>Unavailable</option>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" name="image" value="{{$carlist->image}}" type="file" id="formFile">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
        </div>
    </div>

</div>
    
@endsection