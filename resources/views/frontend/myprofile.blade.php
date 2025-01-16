@extends('frontend.layouts.app')

@section('cssfiles')
    @parent
@endsection

@section('jsfiles')
    @parent
@endsection


@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/small/user-image.jpg') }}" class="rounded-top-2 img-fluid" alt="image data" />
                        <div class="card-body">
                            <div class="align-items-center">
                                <div class="silva-main-sections">
                                    <div class="silva-profile-main">
                                        <img src="{{ asset('assets/images/users/user-11.jpg') }}"
                                            class="rounded-circle img-fluid avatar-xxl img-thumbnail float-start"
                                            alt="image profile" />

                                        <span class="sil-profile_main-pic-change img-thumbnail">
                                            <i class="mdi mdi-camera text-white"></i>
                                        </span>
                                    </div>
                                    <div class="overflow-hidden ms-md-4 ms-0">
                                        <h3 class="mdi mdi-name"> {{ Auth::user()->name }}</h3>
                                        <h5 class="mdi mdi-email"> {{ Auth::user()->email }}</h5>
                                        <h5 class="mdi mdi-account"> {{ Auth::user()->phone }}</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body pt-0">
                            <ul class="nav nav-underline border-bottom pt-2" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active p-2" id="profile_about_tab" data-bs-toggle="tab"
                                        href="#profile_about" role="tab">
                                        <span class="d-block d-sm-none"><i class="mdi mdi-information"></i></span>
                                        <span class="d-none d-sm-block">My Booking</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content text-muted bg-white">
                                <div class="tab-pane active show pt-4" id="profile_about" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <table id="example" class="table table-hover display  pb-30">
                                                <thead>
                                                    <tr>
                                                        <th>SN</th>
                                                        <th>Name</th>
                                                        <th>Brand</th>
                                                        <th>Model</th>
                                                        <th>Car Image</th>
                                                        <th>Driver</th>
                                                        <th>Amount</th>
                                                        <th>Pick Up Date</th>
                                                        <th>Drop off Date</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>SN</th>
                                                        <th>Name</th>
                                                        <th>Brand</th>
                                                        <th>Model</th>
                                                        <th>Car Image</th>
                                                        <th>Driver</th>
                                                        <th>Amount</th>
                                                        <th>Pick Up Date</th>
                                                        <th>Drop off Date</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                </tfoot>
                                                <tbody>

                                                    @foreach ($items as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ Auth::user()->name }}</td>
                                                            <td>{{ $item->car_list->brand }}</td>
                                                            <td>{{ $item->car_list->model }}</td>
                                                            <td><img src="{{ asset($item->car_list->image) }}" alt=""
                                                            width="100"></td>

                                                            <td>{{ $item->driver->name }}</td>
                                                            <td>{{ $item->amount }}</td>
                                                            <td>{{ $item->pick_up_date }}</td>
                                                            <td>{{ $item->drop_off_date }}</td>
                                                            <td
                                                                class="{{ $item->status == 'confirm' ? 'text-success' : 'text-warning' }}">
                                                                {{ $item->status }}</td>
                                                            <td>
                                                                @if($item->status == 'pending')
                                                                <a href="{{route('payment', $item->id)}}"
                                                                    class="btn btn-outline-primary">Payment</a>
                                                                @endif
                                                                @if($item->status == 'confirm')
                                                                    <a href="{{route('invoices', $item->id)}}"
                                                                    class="btn btn-outline-success">Invoice</a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
    @endsection
