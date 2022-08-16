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
    <title>Kec. Cimahi Tengah</title>
    <!-- ========== Favicon Ico ========== -->
    <link rel="icon" href="favicon.ico">
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
</head>
<body>
<!-- ========== Header Start ========== -->
    <!-- Start Navigation -->

<nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav" style="background-color:rgba(239, 230, 230, 0.5);">
	<div class="header-top primary-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="top-cta">
						<ul>
							<li>
								@if ($medsos[0]->email != null)
									<a href="#"><i class="fa fa-envelope"></i>{{ $medsos[0]->email }}</a>
								@endif
							</li>
							<li>
								@if ($medsos[0]->facebook != null)
									<a href="#"><i class="fa fa-facebook"></i>{{ $medsos[0]->facebook }}</a>
								@endif
							</li>
							<li>
								@if ($medsos[0]->twitter != null)
									<a href="#"><i class="fa fa-twitter"></i>{{ $medsos[0]->twitter }}</a>
								@endif
							</li>
							<li>
								@if ($medsos[0]->facebook != null)
									<a href="#"><i class="fa fa-instagram"></i>{{ $medsos[0]->instagram }}</a>
								@endif
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<ul class="social-link pull-right">
						<li><a href="{{ route('login') }}"><i class="fa fa-user"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    <div class="container"> 
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/icon-100.png') }}" class="logo logo-display" alt="" width="100px">
                <img src="{{ asset('images/icon-100.png') }}" class="logo logo-scrolled" alt="" width="100px">
            </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp" style="margin-top: 21px;">
				<li class="dropdown active">
					<a href="#" class="" data-toggle="dropdown" >Beranda</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Profil</a>
					<ul class="dropdown-menu">
						<li><a href="#">Data Lakip</a></li>
						<li><a href="#">Monografi Kecamatan</a></li>
						<li><a href="#">Visi & Misi</a></li>
						<li><a href="#">Struktur Organisasi</a></li>
						<li><a href="#">Kepegawaian</a></li>
						<li><a href="#">Galeri Foto</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Kelurahan</a>
					<ul class="dropdown-menu">
						<li><a href="#">Baros</a></li>
						<li><a href="#">Cigugur Tengah</a></li>
						<li><a href="#">Cimahi</a></li>
						<li><a href="#">Karang Mekar</a></li>
						<li><a href="#">Padasuka</a></li>
						<li><a href="#">Setiamanah</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="" data-toggle="dropdown" >Berita</a>
				</li>
				<li class="dropdown megamenu-fw">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan</a>
					<ul class="dropdown-menu megamenu-content" role="menu">
						<li>
							<div class="row">
								<div class="col-menu col-md-3">
									<div class="content">
										<ul class="menu-col">
											<li><a href="#">Pelayanan KTP</a></li>
											<li><a href="#">Pelayanan KK (Kartu Keluarga)</a></li>
											<li><a href="#">Surat Keterangan Domisili Perusahaan</a></li>
											<li><a href="#">Surat Keterangan Domisili Yayasan</a></li>
											<li><a href="#">Surat Pengantar Pindah Ke Luar Negeri</a></li>
											<li><a href="#">Pelayanan Rekomendasi IMB</a></li>
											<li><a href="#">Surat Keterangan Tidak Mampu</a></li>
											<li><a href="#">Surat Pengantar Perubahan Data Kependudukan</a></li>
										</ul>
									</div>
								</div>
								<div class="col-menu col-md-3">
									<div class="content">
										<ul class="menu-col">
											<li><a href="#">Surat Keterangan Pindah Antar Kecamatan</a></li>
											<li><a href="#">Legalisir KK/KTP</a></li>
											<li><a href="#">Surat Keterangan Orang Yang Sama</a></li>
											<li><a href="#">Surat Pengantar Pindah Ke Luar Kota</a></li>
											<li><a href="#">Surat Keterangan Menetap</a></li>
											<li><a href="#">Surat Keterangan Kelahiran</a></li>
											<li><a href="#">Surat Keterangan / Legalisir Ahli Waris</a></li>
										</ul>
									</div>
								</div>  
								<div class="col-menu col-md-3">
									<div class="content">
										<ul class="menu-col">
											<li><a href="#">Pelayanan Akta Jual Beli (Langsung Ke Camat)</a></li>
											<li><a href="#">Pelayanan Surat Keterangan Ahli Waris Langsung</a></li>
											<li><a href="#">Surat Keterangan Tanggungan / Susunan Keluarga</a></li>
											<li><a href="#">Surat Keterangan Belum Menikah</a></li>
											<li><a href="#">Surat Keterangan Usaha</a></li>
											<li><a href="#">Izin Usaha Mikro</a></li>
											<li><a href="#">Surat Izin Keramaian</a></li>
										</ul>
									</div>
								</div>    

								<div class="col-menu col-md-3">
									<div class="content">
										<ul class="menu-col">
											<li><a href="#">Surat Keterangan Bersih Diri</a></li>
											<li><a href="#">Surat Keterangan Catatan Kepolisian</a></li>
											<li><a href="#">Surat Keterangan Domisili Partai</a></li>
											<li><a href="#">Surat Keterangan Domisili Haji</a></li>
											<li><a href="#">Surat Pengajuan Dan Perpanjang Izin Operasional</a></li>
											<li><a href="#">Surat Rekomendasi Pembangunan / Renovasi Masjid</a></li>
											<li><a href="#">Surat Rekomendasi Kegiatan Masyarakat</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="" data-toggle="dropdown" >E-Layanan</a>
				</li>
				<li class="dropdown">
					<a href="#" class="" data-toggle="dropdown" >E-Report</a>
				</li>
				<li class="dropdown">
					<a href="#" class="" data-toggle="dropdown" >SKM</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Potensi</a>
					<ul class="dropdown-menu">
						<li><a href="#">IUMK</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="" data-toggle="dropdown" >Komentar & Saran</a>
				</li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div> 
</nav>
<!-- ========== Header End ========== -->

<!-- ========== Slider Start ========== -->

<div class="slider fullscreen">
    <ul class="slides">
		@foreach ($banners as $banner)
			<li>
				<img src="{{ asset('storage/'.$banner->image) }}" alt="">
				<div class="caption white-text">
				<h1>{{ $banner->caption_primary }}</h1>
				<h2>{{ $banner->caption_secondary }}</h2>
				</div>
			</li>
		@endforeach
    </ul>
  </div>
<!-- ========== Slider End ========== -->

<!-- Greeting Start -->
<section class="section-padding gray-bg">
	<section class="features-section-2 content-half white-bg">
		<div class="container-half container-half-left gray-bg"></div>
		<div class="container-half container-half-left cover" style="background-image: url({{ asset('storage/'.$greeting[0]->photo) }});"></div>
		<div class="container">
			<div class="row section-padding">
				<div class="col-md-6 pull-right">
					<div class="inner">
						<h2 class="section-heading">Sambutan Camat Cimahi Tengah</h2>
						{!! $greeting[0]->content !!}
						<a class="waves-effect waves-light">Baca selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
<!-- Greeting End -->

<!-- News Start -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>BERITA</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. </p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
				<div class="clients-carousel owl-carousel owl-theme">
					@foreach ($news as $item)
						<div class="each-box">
							<div class="inner white-bg text-center">
								<img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" class="img-responsive img-news">
								<div class="detail" style="height: 350px;">
									<a href="#"><p class="news-title">{{ $item->title }}</p></a>
									@php
										$date = $item->created_at;
										$date->settings(['formatFunction' => 'translatedFormat']);
									@endphp
									<p class="news-date">{{ $date->format('l, j F Y ') }}</p>
									<div class="news-content">
										<p>{!! $item->content !!}</p>
									</div>
									<div class="text-right">
										<a href="#">Baca selengkapnya</a>
									</div>
								</div>
							</div> <!-- End: .inner -->
						</div>
						<!-- Single team box end -->
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- News End -->


<!-- Call to action start -->
<section class="section-padding parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="white-text call-to-intro text-center col-sm-8 col-sm-offset-2">
					<h5>IS NOT AWESOME?</h5>
					<h2>This is a heading text goes here...</h2>
					<p>Here will be appear some paragraph text for this awesome background parallax section. You may change this text by customizing this template very easily.</p>
				</div>
			</div>
		</div>
	</div>
	
</section>
<!-- Call to action End-->

<!-- What we do Start -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb50">
					<h2>VIDEO</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. </p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row scrollmenu">
			@foreach ($videos as $video)
				@if ($video->source == '1')
					<div class="box-video">
						<video width="360" height="180" controls="controls">
							<source src="{{ asset('storage/'.$video->video) }}" type="video/mp4">
						</video>
					</div>
				@else
					<div class="box-video">
						<iframe width="360" height="180" src="http://www.youtube.com/embed/{{ $video->video }}" frameborder="0" allowfullscreen></iframe>
					</div>
				@endif
			@endforeach
		</div>
	</div>
</section>
<!-- What we do End -->

<!-- How we work Start -->
<section id="how-it-works" class="section-padding parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
        <div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="section-title text-center light-text mb50">
							<h2>How we work</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
					</div>
				</div>
        </div> <!-- End: .container -->
</section>
<!-- How we work End -->

<!-- ========== Location Start ========== -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>LOKASI</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			
			<div class="col-md-6 col-sm-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.151553318884!2d107.5440882140323!3d-6.872437595033727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e441138c3119%3A0x65b8ad189b446860!2sKantor%20Kecamatan%20Cimahi%20Tengah!5e0!3m2!1sid!2sid!4v1660294539229!5m2!1sid!2sid" width="100%" height="370" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			
			<div class="col-md-6 col-sm-12">
				<img src="{{ asset('images/maps.svg') }}" alt="lokasi" width="370" height="370" class="image-center" style="margin-top: 36px;">
			</div>
			
        </div>
	</div>
</section>
<!-- ========== Location End ========== -->

<!-- Statistic Start -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>Statistik Pengunjung</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<h6 class="counter">10201</h6>
					<div class="section-divider divider-dashed"></div>
					<h6>Hari Ini</h6>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<h6 class="counter">30488</h6>
					<div class="section-divider divider-dashed"></div>
					<h6>Minggu Ini</h6>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<h6 class="counter">950</h6>
					<div class="section-divider divider-dashed"></div>
					<h6>Bula Ini</h6>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<h6 class="counter">25004</h6>
					<div class="section-divider divider-dashed"></div>
					<h6>Total</h6>
				</div>
			</div>
        </div>
	</div>
</section>
<!-- Statistic End -->

<!-- ========== Footer Start ========== -->
<footer id="footer" class="pt80" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="footer-wrap clearfix">
				<div class="col-md-3 col-sm-6">
					<div class="footer-col">
						<div class="footer-logo text-center">
							<img src="{{ asset('images/icon-100.png') }}" class="img-responsive" alt="Logo">
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-6">
					<div class="footer-col">
						<h6>Tentang Kami</h6>
						<p> Kami memiliki komitmen untuk memberikan layanan terbaik kepada Anda dan selalu berusaha untuk menyediakan produk dan layanan terbaik yang Anda butuhkan. Apabila untuk alasan tertentu Anda merasa tidak puas dengan pelayanan kami, Anda dapat menyampaikan kritik dan saran Anda kepada kami. Kami akan menidaklanjuti masukan yang Anda berikan dan bila perlu mengambil tindakan untuk mencegah masalah yang sama terulang kembali..</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="footer-copyright text-center">
				<p>Copyright: <a href="#">Kec. Cimahi Tengah</a> {{ date('Y') }}, All rights reserved.</p>
			</div>
		</div>
	</div>
</footer>
<!-- ========== Footer End ========== -->

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
</body>
</html>