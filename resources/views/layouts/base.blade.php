<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset("test/KhassoDesign/logo1.jpeg")}}">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset("test/css/bootstrap.css")}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset("test/css/magnific-popup.min.css")}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("test/css/font-awesome.css")}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{asset("test/css/jquery.fancybox.min.css")}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset("test/css/themify-icons.css")}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset("test/css/niceselect.css")}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset("test/css/animate.css")}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset("test/css/flex-slider.min.css")}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset("test/css/owl-carousel.css")}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{asset("test/css/slicknav.min.css")}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{asset("test/css/reset.css")}}">
	<link rel="stylesheet" href="{{asset("test/style.css")}}">
    <link rel="stylesheet" href="{{asset("test/css/responsive.css")}}">

</head>
<body>
    @include('include.header')
    @yield('body')
    @include('include.footer')
    <!-- Jquery -->
    <script src="{{asset("test/js/jquery.min.js")}}"></script>
    <script src="{{asset("test/js/jquery-migrate-3.0.0.js")}}"></script>
	<script src="{{asset("test/js/jquery-ui.min.js")}}"></script>
	<!-- Popper JS -->
	<script src="{{asset("test/js/popper.min.js")}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset("test/js/bootstrap.min.js")}}"></script>
	<!-- Color JS -->
	<script src="{{asset("test/js/colors.js")}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset("test/js/slicknav.min.js")}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset("test/js/owl-carousel.js")}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset("test/js/magnific-popup.js")}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset("test/js/waypoints.min.js")}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset("test/js/finalcountdown.min.js")}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset("test/js/nicesellect.js")}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset("test/js/flex-slider.js")}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset("test/js/scrollup.js")}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset("test/js/onepage-nav.min.js")}}"></script>
	<!-- Easing JS -->
	<script src="{{asset("test/js/easing.js")}}"></script>
	<!-- Active JS -->
	<script src="{{asset("test/js/active.js")}}"></script>
</body>
</html>