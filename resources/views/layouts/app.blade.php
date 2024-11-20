<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>Sign In | Pharma</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Pharma" name="description" />
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

</head>

<body>

@yield('auth_content')

<!-- JAVASCRIPT -->
<script src="{{url('public/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('public/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{url('public/libs/node-waves/waves.min.js')}}"></script>
<script src="{{url('public/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{url('public/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{url('public/js/plugins.js')}}"></script>

<!-- particles js -->
<script src="{{url('public/libs/particles.js/particles.js')}}"></script>
<!-- particles app js -->
<script src="{{url('public/js/pages/particles.app.js')}}"></script>
<!-- password-addon init -->
<script src="{{url('public/js/pages/password-addon.init.js')}}"></script>
</body>

</html>
