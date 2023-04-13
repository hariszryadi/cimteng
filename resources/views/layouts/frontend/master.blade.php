<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Website Resmi Kecamatan Cimahi Tengah">
    <meta name="keywords" content="website cimahi tengah, portal cimahi tengah, kecamatan cimahi tengah, syantik, pelayanan cimahi tengah">
    <meta name="author" content="Kecamatan Cimahi Tengah">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>Selamat Datang di Website Resmi Kecamatan Cimahi Tengah</title>
    <!-- ========== Favicon Ico ========== -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Boots NAV CSS -->
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}"/>
    <!-- Fonts Awesome CSS -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Icofont CSS -->
    <link href="{{ asset('assets/css/icofont.css') }}" rel="stylesheet">
	<!-- Animate CSS -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
	<!-- Megnafic popup CSS -->
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- OwlCarousel CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}" />
    <!-- Modal video CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/modal-video.min.css') }}" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/colors/orange.css') }}">
	<!-- teamplate colors -->
	<!-- <link href="css/colors/blue.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/blue-gray.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/brown.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/cyan.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/indigo.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/blue.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/purple.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/red.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/teal.css" rel="stylesheet"> -->
    <!--	Comment out the CSS file you want to use	-->
    <style>
		.img-center {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>
<body>
<div class="loader">
    <div></div>
</div>

{{-- <div class="content-wrapper"> --}}
    <!-- ========== Header Start ========== -->
    @include('layouts.frontend.navigation')
    <!-- ========== Header End ========== -->
    
    @yield('content')
    
    <!-- ========== Footer Start ========== -->
    @include('layouts.frontend.footer')
    <!-- ========== Footer End ========== -->
{{-- </div> --}}

<!-- jquery -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Bootstrap NAV -->
<script src="{{ asset('assets/js/bootsnav.js') }}"></script>
<!-- materialize js -->
<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
<!-- sticky js -->
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<!-- isotope js -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- OwlCarousel js -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- counterup js -->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- Animated text -->
<script src="{{ asset('assets/js/jquery.textillate.js') }}"></script>
<script src="{{ asset('assets/js/jquery.lettering.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fittext.js') }}"></script>
<!-- Modal video js -->
<script src="{{ asset('assets/js/modal-video.min.js') }}"></script>
<!-- jquery.ajaxchimp.min.js -->
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<!-- GMAP3 js -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY_HEARE"></script>
<script src="{{ asset('assets/js/gmap3.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<script>
    $(window).on('load', function(){
        $('.loader').fadeOut(1000);
    })
</script>

@yield('scripts')
</body>
</html>