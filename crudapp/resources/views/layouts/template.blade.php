<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- title of site -->
    <title>Best | Touring</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('home/assets/logo/favicon.png') }}" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('home/assets/css/font-awesome.min.css') }}">

    <!--linear icon css-->
    <link rel="stylesheet" href="{{ asset('home/assets/css/linearicons.css') }}">

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('home/assets/css/animate.css') }}">

    <!--flaticon.css-->
    <link rel="stylesheet" href="{{ asset('home/assets/css/flaticon.css') }}">

    <!--slick.css-->
    <link rel="stylesheet" href="{{ asset('home/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/slick-theme.css') }}">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('home/assets/css/bootstrap.min.css') }}">

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/bootsnav.css') }}">

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('home/assets/css/style.css') }}">

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('home/assets/css/responsive.css') }}">

</head>

<body>

    <!--header-top start -->
    <x-header />
    <!--header-top end -->

    <!-- top-area Start -->
    <section class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <x-navigation />
            <!-- End Navigation -->
        </div><!--/.header-area-->
        <div class="clearfix"></div>

    </section>
    <!-- top-area End -->

    <!--Banner section start -->
    <x-banner-section />
    <!--Banner section end-->

    <!--works start -->
    <div class="section">
        @yield('content')
    </div>
    <!--subscription end -->

    <!--footer start-->
    <footer id="footer" class="footer">
        <x-footer-content />
    </footer>
    <!--footer end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="{{ asset('home/assets/js/jquery.js') }}"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="{{ asset('home/assets/js/bootstrap.min.js') }}"></script>

    <!-- bootsnav js -->
    <script src="{{ asset('home/assets/js/bootsnav.js') }}"></script>

    <!--feather.min.js-->
    <script src="{{ asset('home/assets/js/feather.min.js') }}"></script>

    <!-- counter js -->
    <script src="{{ asset('home/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/waypoints.min.js') }}"></script>

    <!--slick.min.js-->
    <script src="{{ asset('home/assets/js/slick.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="{{ asset('home/assets/js/custom.js') }}"></script>

</body>

</html>
