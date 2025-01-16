@extends('backend.layouts.app')

@section('css')

<!-- App favicon -->
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

<!-- Datatables css -->
<link href="{{asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />

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

<!-- Datatables js -->
<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<!-- dataTables.bootstrap5 -->
<script src="{{asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>

<!-- buttons.colVis -->
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>

<!-- buttons.bootstrap5 -->
<script src="{{asset('assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>

<!-- dataTables.keyTable -->
<script src="{{asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js')}}"></script>

<!-- dataTable.responsive -->
<script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>

<!-- dataTables.select -->
<script src="{{asset('assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-select-bs5/js/select.bootstrap5.min.js')}}"></script>

<!-- Datatable Demo App Js -->
<script src="{{asset('assets/js/pages/datatable.init.js')}}"></script>

<!-- App js-->
<script src="{{asset('assets/js/app.js')}}"></script>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0" style="color:black">All Contact List</h5>
                {{-- <a class="btn btn-warning mt-2" href="{{ route('contact.create') }}"> Add New Contact</a> --}}
                @if (session('msg'))
                    <div class="alert alert-success mt-2">{{ session('msg') }}</div>
                        @endif
            </div><!-- end card header -->

            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Phone</th>
                            <th>Details</th>
                            <th style="width: 230px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->subject}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->details}}</td>
                            <td>
                                
                                <form action="{{route('contact.destroy', $item->id)}}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <a class="btn btn-success"
                                        href="{{ route('contact.show', $item->id) }}">View</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endsection