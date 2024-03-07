<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <meta charset="utf-8" />
    <title>Sentiments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/brands/logo/TCS-Sentiments-logo-Pink_c612ca56-9d39-468a-8502-275d4d99643c_150x.webp') }}">
    @stack('styles')
  

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
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        @media (max-width: 767px) {
          .carousel-inner .carousel-item > div {
              display: none;
          }
          .carousel-inner .carousel-item > div:first-child {
              display: block;
          }
      }
      
      .carousel-inner .carousel-item.active,
      .carousel-inner .carousel-item-next,
      .carousel-inner .carousel-item-prev {
          display: flex;
      }
      
      /* medium and up screens */
      @media (min-width: 768px) {
          
          .carousel-inner .carousel-item-end.active,
          .carousel-inner .carousel-item-next {
            transform: translateX(25%);
          }
          
          .carousel-inner .carousel-item-start.active, 
          .carousel-inner .carousel-item-prev {
            transform: translateX(-25%);
          }
      }
      
      .carousel-inner .carousel-item-end,
      .carousel-inner .carousel-item-start { 
        transform: translateX(0);
      }
      
      
      </style>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
     @include('frontend.layout.navbar')
    @yield('content')
    @include('frontend.layout.footer')
             
    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->







    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    @stack('scripts')

    <!-- App js -->
 
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>