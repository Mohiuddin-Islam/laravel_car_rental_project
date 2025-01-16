<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Car Rental Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        @yield('css')

    </head>

    <!-- body start -->
    <body data-menu-color="light" data-sidebar="default"

        <!-- Begin page -->
        <div id="app-layout">


            <!-- Topbar Start -->
            @if(Auth()->guard('admin')->check())
			@include('backend.layouts.topbar')
			@elseif(Auth()->guard('client')->check())
			@include('backend.layouts.client_topbar')
			@endif
            <!-- end Topbar -->

            <!-- Left Sidebar Start -->
            @if(Auth()->guard('admin')->check())
			@include('backend.layouts.leftbar')
			@elseif(Auth()->guard('client')->check())
			@include('backend.layouts.client_leftbar')
			@endif
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                @yield('content')   <!-- content -->

                <!-- Footer Start -->
                @include('backend.layouts.footer')
                <!-- end Footer -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        @yield('js')

    </body>
</html>