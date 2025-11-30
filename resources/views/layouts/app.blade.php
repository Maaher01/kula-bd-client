<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kula</title>
    <!--Essential css files-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lenis.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />


    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
    <!-- preloader start -->
    <div class="preloader">
        <div class="hypnotic"></div>
    </div>
    <!-- preloader end -->

    <!-- cursor start -->
    <div class="cursor" id="cursor"></div>
    <div class="cursor2" id="cursor2">
        <div class="ball"></div>
    </div>
    <div class="cursor3" id="cursor3"></div>
    <!-- cursor end-->

    <!--Header Start-->
    @include('include.header')
    <!--Header End-->

    <!-- Main content Start -->
    @yield('content')

    <!-- Footer Start -->
    @include('include.footer')
    <!-- Footer End -->

    <!-- scroll to top -->
    <button type="button" class="scroll-top-btn">
        <i class="fa-solid fa-angles-up"></i>
    </button>

    <!--Essential Js Files-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/lenis.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/default-passive-events.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @yield('script')
</body>
