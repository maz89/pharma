<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">
<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('public/images/favicon.ico')}}">

    <!-- Layout config Js -->
    <script src="{{url('public/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('public/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('public/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{url('public/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    @yield('css')

</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">

    @include('admin.layouts.header')

    <!-- ========== App Menu ========== -->
    @include('admin.layouts.navbar')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        @include('admin.layouts.content')

        @include('admin.layouts.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!-- JAVASCRIPT -->
<script src="{{url('public/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('public/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{url('public/libs/node-waves/waves.min.js')}}"></script>
<script src="{{url('public/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{url('public/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{url('public/js/plugins.js')}}"></script>

<!-- apexcharts -->
<script src="{{url('public/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- Dashboard init -->
<script src="{{url('public/js/pages/dashboard-crm.init.js')}}"></script>

<!-- App js -->
<script src="{{url('public/js/app.js')}}"></script>

@yield('js')
</body>


</html>
