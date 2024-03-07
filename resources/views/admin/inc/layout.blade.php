<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin " name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/brands/logo/TCS-Sentiments-logo-Pink_c612ca56-9d39-468a-8502-275d4d99643c_150x.webp ') }}">

    <!-- Dragula css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/dragula/dragula.min.css') }}" />
    

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js') }}"></script>
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet') }}" type="text/css" />

    @stack('style')


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin.inc.topbar')
        <!-- ========== App Menu ========== -->
        @include('admin.inc.sidebar')
        <div class="vertical-overlay"></div>
        <div class="main-content">
            @yield('content')
            <!-- End Page-content -->
            @include('admin.inc.footer')
        </div>






        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>

        @stack('scripts')
        <!-- App js -->

</body>


</html
