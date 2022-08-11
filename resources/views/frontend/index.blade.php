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
<!-- What we do Start -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb50">
					<h2>WHAT WE DO?</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. </p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="featured-box text-center white-bg">
					<div class="icon">
						<i class="icofont icofont-idea"></i>
					</div>
					<h3>Strategic planing</h3>
					<p>Parish so enable innate in formed missed. Hand two was eat busy fail. Stand smart grave would in so. Be acceptance at precaution.</p>
				</div>
			</div>
			<!-- Single featured box end -->
			<div class="col-md-4 col-sm-6">
				<div class="featured-box text-center white-bg">
					<div class="icon">
						<i class="icofont icofont-growth"></i>
					</div>
					<h3>Online Marketing</h3>
					<p>Parish so enable innate in formed missed. Hand two was eat busy fail. Stand smart grave would in so. Be acceptance at precaution.</p>
				</div>
			</div>
			<!-- Single featured box end -->
			<div class="col-md-4 col-sm-6">
				<div class="featured-box text-center white-bg">
					<div class="icon">
						<i class="icofont icofont-coins"></i>
					</div>
					<h3>Business planing</h3>
					<p>Parish so enable innate in formed missed. Hand two was eat busy fail. Stand smart grave would in so. Be acceptance at precaution.</p>
				</div>
			</div>
			<!-- Single featured box end -->
			<div class="col-md-4 col-sm-6">
				<div class="featured-box text-center white-bg">
					<div class="icon">
						<i class="icofont icofont-smart-phone"></i>
					</div>
					<h3>App development</h3>
					<p>Parish so enable innate in formed missed. Hand two was eat busy fail. Stand smart grave would in so. Be acceptance at precaution.</p>
				</div>
			</div>
			<!-- Single featured box end -->
			<div class="col-md-4 col-sm-6">
				<div class="featured-box text-center white-bg">
					<div class="icon">
						<i class="icofont icofont-camera-alt"></i>
					</div>
					<h3>Photography</h3>
					<p>Parish so enable innate in formed missed. Hand two was eat busy fail. Stand smart grave would in so. Be acceptance at precaution.</p>
				</div>
			</div>
			<!-- Single featured box end -->
			<div class="col-md-4 col-sm-6">
				<div class="featured-box text-center white-bg">
					<div class="icon">
						<i class="icofont icofont-laptop"></i>
					</div>
					<h3>Web design</h3>
					<p>Parish so enable innate in formed missed. Hand two was eat busy fail. Stand smart grave would in so. Be acceptance at precaution.</p>
				</div>
			</div>
			<!-- Single featured box end -->
		</div>
	</div>
</section>
<!-- What we do End -->

<!-- Team members Start -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>TELANTED TEAM MEMBERS</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. </p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel owl-theme team-carousel">
					<div class="each-box">
						<div class="inner white-bg text-center">
							<div class="box-hover">
								<img src="{{ asset('assets/img/team/team-1.jpg') }}" alt="Our Members" class="img-responsive">
								<div class="mask">
									<div class="mask-inner">
										<p class="pera-text">Consectetur adipiscing elit. Donec aliquet quis, cursus interdum orci cras ullamcorper tellus a massa ornare, luctus at augue id tincidunt.</p>
										<div class="title">Get Connected</div>
										<ul class="nav social-icon">
											<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="detail">
								<h6 class="name">Marina Jhon</h6>
								<p class="position">FOUNDER CEO</p>
							</div>
								
						</div> <!-- End: .inner -->
					</div>
					<!-- Single team box end -->
					<div class="each-box">
						<div class="inner white-bg text-center">
							<div class="box-hover">
								<img src="{{ asset('assets/img/team/team-2.jpg') }}" alt="Our Members" class="img-responsive">
								<div class="mask">
									<div class="mask-inner">
										<p class="pera-text">Consectetur adipiscing elit. Donec aliquet quis, cursus interdum orci cras ullamcorper tellus a massa ornare, luctus at augue id tincidunt.</p>
										<div class="title">Get Connected</div>
										<ul class="nav social-icon">
											<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="detail">
								<h6 class="name">Wilson Hell.</h6>
								<p class="position">CTO</p>
							</div>
								
						</div> <!-- End: .inner -->
					</div>
					<!-- Single team box end -->
					<div class="each-box">
						<div class="inner white-bg text-center">
							<div class="box-hover">
								<img src="{{ asset('assets/img/team/team-3.jpg') }}" alt="Our Members" class="img-responsive">
								<div class="mask">
									<div class="mask-inner">
										<p class="pera-text">Consectetur adipiscing elit. Donec aliquet quis, cursus interdum orci cras ullamcorper tellus a massa ornare, luctus at augue id tincidunt.</p>
										<div class="title">Get Connected</div>
										<ul class="nav social-icon">
											<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="detail">
								<h6 class="name">Nur e jannat</h6>
								<p class="position">HEAD OF IDEAS</p>
							</div>
								
						</div> <!-- End: .inner -->
					</div>
					<!-- Single team box end -->
					
					<div class="each-box">
						<div class="inner white-bg text-center">
							<div class="box-hover">
								<img src="{{ asset('assets/img/team/team-4.jpg') }}" alt="Our Members" class="img-responsive">
								<div class="mask">
									<div class="mask-inner">
										<p class="pera-text">Consectetur adipiscing elit. Donec aliquet quis, cursus interdum orci cras ullamcorper tellus a massa ornare, luctus at augue id tincidunt.</p>
										<div class="title">Get Connected</div>
										<ul class="nav social-icon">
											<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="detail">
								<h6 class="name">Marina Jhon</h6>
								<p class="position">FRONTEND DEVELOPER</p>
							</div>
								
						</div> <!-- End: .inner -->
					</div>
					<!-- Single team box end -->
					<div class="each-box">
						<div class="inner white-bg text-center">
							<div class="box-hover">
								<img src="{{ asset('assets/img/team/team-5.jpg') }}" alt="Our Members" class="img-responsive">
								<div class="mask">
									<div class="mask-inner">
										<p class="pera-text">Consectetur adipiscing elit. Donec aliquet quis, cursus interdum orci cras ullamcorper tellus a massa ornare, luctus at augue id tincidunt.</p>
										<div class="title">Get Connected</div>
										<ul class="nav social-icon">
											<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="detail">
								<h6 class="name">Wilson Hell.</h6>
								<p class="position">SOFTWARE DEVELOPER</p>
							</div>
								
						</div> <!-- End: .inner -->
					</div>
					<!-- Single team box end -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Team members End -->
<!-- Featured Start -->
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

<!-- Featured End -->

<!-- Latest works Start -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>LATEST WORKS</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. </p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
			<ul class="portfolio-filter text-center">
				<li><a class="btn btn-default waves-effect active" href="#" data-filter="*">All</a></li>
				<li><a class="btn btn-default waves-effect" href="#" data-filter=".branded">Branded</a></li>
				<li><a class="btn btn-default waves-effect" href="#" data-filter=".design">Design</a></li>
				<li><a class="btn btn-default waves-effect" href="#" data-filter=".folio">Folio</a></li>
				<li><a class="btn btn-default waves-effect" href="#" data-filter=".logos">Logos</a></li>
				<li><a class="btn btn-default waves-effect" href="#" data-filter=".mobile">Mobile</a></li>
				<li><a class="btn btn-default waves-effect" href="#" data-filter=".mockup">Mockup</a></li>
			</ul><!--/#portfolio-filter-->
			
			<div class="portfolio-boxes">
				<div class="each-box col-md-4 col-sm-6 col-xs-12 portfolio-box branded mobile">
					<div class="inner gray-bg text-center">
						<div class="box-hover">
							<img src="{{ asset('assets/img/portfolios/portfolio-1.jpg') }}" alt="Our Members" class="img-responsive">
							<div class="mask">
								<div class="mask-inner">
									<h3 class="title">Project name</h3>
									<p class="pera-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									<ul class="nav social-icon">
										<li><a class="waves-effect" href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
										<li><a href="{{ asset('assets/img/portfolios/portfolio-1.jpg') }}" class="portfolio-lightbox waves-effect" title="Porject name"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- End: .inner -->
				</div>
				<!-- Single portfolio box box end -->
				<div class="each-box col-md-4 col-sm-6 col-xs-12 portfolio-box design">
					<div class="inner gray-bg text-center">
						<div class="box-hover">
							<img src="{{ asset('assets/img/portfolios/portfolio-2.jpg') }}" alt="Our Members" class="img-responsive">
							<div class="mask">
								<div class="mask-inner">
									<h3 class="title">Project name</h3>
									<p class="pera-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									<ul class="nav social-icon">
										<li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
										<li><a href="{{ asset('assets/img/portfolios/portfolio-2.jpg') }}" class="portfolio-lightbox" title="Porject name"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- End: .inner -->
				</div>
				<!-- Single portfolio box box end -->
				<div class="each-box col-md-4 col-sm-6 col-xs-12 portfolio-box folio">
					<div class="inner gray-bg text-center">
						<div class="box-hover">
							<img src="{{ asset('assets/img/portfolios/portfolio-3.jpg') }}" alt="Our Members" class="img-responsive">
							<div class="mask">
								<div class="mask-inner">
									<h3 class="title">Project name</h3>
									<p class="pera-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									<ul class="nav social-icon">
										<li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
										<li><a href="{{ asset('assets/img/portfolios/portfolio-3.jpg') }}" class="portfolio-lightbox" title="Porject name"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- End: .inner -->
				</div>
				<!-- Single portfolio box box end -->
				<div class="each-box col-md-4 col-sm-6 col-xs-12 portfolio-box logos">
					<div class="inner gray-bg text-center">
						<div class="box-hover">
							<img src="{{ asset('assets/img/portfolios/portfolio-4.jpg') }}" alt="Our Members" class="img-responsive">
							<div class="mask">
								<div class="mask-inner">
									<h3 class="title">Project name</h3>
									<p class="pera-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									<ul class="nav social-icon">
										<li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
										<li><a href="{{ asset('assets/img/portfolios/portfolio-4.jpg') }}" class="portfolio-lightbox" title="Porject name"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- End: .inner -->
				</div>
				<!-- Single portfolio box box end -->
				<div class="each-box col-md-4 col-sm-6 col-xs-12 portfolio-box design">
					<div class="inner gray-bg text-center">
						<div class="box-hover">
							<img src="{{ asset('assets/img/portfolios/portfolio-5.jpg') }}" alt="Our Members" class="img-responsive">
							<div class="mask">
								<div class="mask-inner">
									<h3 class="title">Project name</h3>
									<p class="pera-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									<ul class="nav social-icon">
										<li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
										<li><a href="{{ asset('assets/img/portfolios/portfolio-5.jpg') }}" class="portfolio-lightbox" title="Porject name"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- End: .inner -->
				</div>
				<!-- Single portfolio box box end -->
				<div class="each-box col-md-4 col-sm-6 col-xs-12 portfolio-box mockup">
					<div class="inner gray-bg text-center">
						<div class="box-hover">
							<img src="{{ asset('assets/img/portfolios/portfolio-6.jpg') }}" alt="Our Members" class="img-responsive">
							<div class="mask">
								<div class="mask-inner">
									<h3 class="title">Project name</h3>
									<p class="pera-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									<ul class="nav social-icon">
										<li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
										<li><a href="{{ asset('assets/img/portfolios/portfolio-6.jpg') }}" class="portfolio-lightbox" title="Porject name"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- End: .inner -->
				</div>
				<!-- Single portfolio box box end -->
				<div class="each-box col-md-4 col-sm-6 col-xs-12 portfolio-box logos">
					<div class="inner gray-bg text-center">
						<div class="box-hover">
							<img src="{{ asset('assets/img/portfolios/portfolio-7.jpg') }}" alt="Our Members" class="img-responsive">
							<div class="mask">
								<div class="mask-inner">
									<h3 class="title">Project name</h3>
									<p class="pera-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									<ul class="nav social-icon">
										<li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
										<li><a href="{{ asset('assets/img/portfolios/portfolio-7.jpg') }}" class="portfolio-lightbox" title="Porject name"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- End: .inner -->
				</div>
				<!-- Single portfolio box box end -->
				<div class="each-box col-md-4 col-sm-6 col-xs-12 portfolio-box design">
					<div class="inner gray-bg text-center">
						<div class="box-hover">
							<img src="{{ asset('assets/img/portfolios/portfolio-8.jpg') }}" alt="Our Members" class="img-responsive">
							<div class="mask">
								<div class="mask-inner">
									<h3 class="title">Project name</h3>
									<p class="pera-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									<ul class="nav social-icon">
										<li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
										<li><a href="{{ asset('assets/img/portfolios/portfolio-8.jpg') }}" class="portfolio-lightbox" title="Porject name"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- End: .inner -->
				</div>
				<!-- Single portfolio box box end -->
				<div class="each-box col-md-4 col-sm-6 col-xs-12 portfolio-box mockup">
					<div class="inner gray-bg text-center">
						<div class="box-hover">
							<img src="{{ asset('assets/img/portfolios/portfolio-9.jpg') }}" alt="Our Members" class="img-responsive">
							<div class="mask">
								<div class="mask-inner">
									<h3 class="title">Project name</h3>
									<p class="pera-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									<ul class="nav social-icon">
										<li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
										<li><a href="{{ asset('assets/img/portfolios/portfolio-9.jpg') }}" class="portfolio-lightbox" title="Porject name"><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- End: .inner -->
				</div>
				<!-- Single portfolio box box end -->
			</div>
			<div class="text-center">
				<a class="waves-effect waves-light btn-large mt50">Load more</a>
			</div>
		<!-- 
			<div class="col-sm-12">
				<div class="portfolio-pagination">
					<ul class="pagination">
					  <li><a class="waves-effect" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
					  <li><a class="waves-effect" href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li class="active"><a class="waves-effect" href="#">3</a></li>
					  <li><a class="waves-effect" href="#">4</a></li>
					  <li><a class="waves-effect" href="#">5</a></li>
					  <li><a class="waves-effect" href="#">6</a></li>
					  <li><a class="waves-effect" href="#">7</a></li>
					  <li><a class="waves-effect" href="#">8</a></li>
					  <li><a class="waves-effect" href="#">9</a></li>
					  <li><a class="waves-effect" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>-->
			</div>
        </div>
	</div>
</section>
<!-- Latest works End -->


<!-- Call to action start -->

<section class="section-padding parallax-bg color-overlay" style="background-image:url({{ asset('assets/img/cta-bg.jpg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="white-text call-to-intro text-center col-sm-8 col-sm-offset-2">
					<h5>IS NOT AWESOME?</h5>
					<h2>This is a heading text goes here...</h2>
					<p>Here will be appear some paragraph text for this awesome background parallax section. You may change this text by customizing this template very easily.</p>
					
					<a class="waves-effect waves-light btn-large" href="">Read more</a>
					<a class="waves-effect waves-light btn-large btn-transparent" href="">Contact us</a>
				</div>
			</div>
		</div>
	</div>
	
</section>

<!-- Call to action End-->

<!-- Testimonials Start -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>TESTIMONIALS</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel owl-theme feedback-two-col slide-feedback">
					<div class="feedback-content white-bg clearfix">
						<div class="q-sign top">“</div>
						<blockquote class="clearfix">
							<p class="text-left">
								Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership equity series A financing network effects user experience crowdsource. Burn rate stock bootstrapping direct mailing release client traction creative facebook monetization crowdfunding rockstar.
							</p>

						<div class="author-info pull-left text-left">
							<div class="client-image">
								<img src="{{ asset('assets/img/avater-1.jpg') }}" class="img-responsive" alt="">
							</div>

							<div class="client-details">
								<h6 class="dark-text">Jesica J.</h6>
								<div class="extra-small-text">
									Founder, <a href="#">ColorLab</a>
								</div>

							</div>

						</div>
						</blockquote>

						<div class="q-sign bottom">
							”
						</div>
					</div>

					<div class="feedback-content white-bg clearfix">
						<div class="q-sign top">“</div>

						<blockquote class="clearfix">
							<p class="text-left">
								Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership equity series A financing network effects user experience crowdsource. Burn rate stock bootstrapping direct mailing release client traction creative facebook monetization crowdfunding rockstar.
							</p>

						<div class="author-info pull-left text-left">
							<div class="client-image">
								<img src="{{ asset('assets/img/avater-2.jpg') }}" class="img-responsive" alt="">
							</div>

							<div class="client-details">
								<h6 class="dark-text">Maria J.</h6>
								<div class="extra-small-text">
									Founder, <a href="#">Sandy</a>
								</div>

							</div>

						</div>
						</blockquote>

						<div class="q-sign bottom">
							”
						</div>
					</div>

					<div class="feedback-content white-bg clearfix">
						<div class="q-sign top">“</div>

						<blockquote class="clearfix">
							<p class="text-left">
								Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership equity series A financing network effects user experience crowdsource. Burn rate stock bootstrapping direct mailing release client traction creative facebook monetization crowdfunding rockstar.
							</p>

						<div class="author-info pull-left text-left">
							<div class="client-image">
								<img src="{{ asset('assets/img/avater-3.jpg') }}" class="img-responsive" alt="">
							</div>

							<div class="client-details">
								<h6 class="dark-text">John Deo</h6>
								<div class="extra-small-text">
									Founder, <a href="#">TheCompany</a>
								</div>

							</div>

						</div>
						</blockquote>

						<div class="q-sign bottom">
							”
						</div>
					</div>

					<div class="feedback-content white-bg clearfix">
						<div class="q-sign top">“</div>

						<blockquote class="clearfix">
							<p class="text-left">
								Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership equity series A financing network effects user experience crowdsource. Burn rate stock bootstrapping direct mailing release client traction creative facebook monetization crowdfunding rockstar.
							</p>

						<div class="author-info pull-left text-left">
							<div class="client-image">
								<img src="{{ asset('assets/img/avater-4.jpg') }}" class="img-responsive" alt="">
							</div>

							<div class="client-details">
								<h6 class="dark-text">Celia M.</h6>
								<div class="extra-small-text">
									Founder, <a href="#">ThemeAtelier</a>
								</div>

							</div>

						</div>
						</blockquote>

						<div class="q-sign bottom">
							”
						</div>
					</div>
				</div>
			</div>
        </div>
	</div>
</section>
<!-- Testimonials End -->

<!-- How we work Start -->
<section id="how-it-works" class="section-padding parallax-bg color-overlay" style="background-image:url({{ asset('assets/img/how-works.jpg') }})">
        <div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="section-title text-center light-text mb50">
							<h2>How we work</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
					</div>
				</div>
                    <div class="row section-separator light-text">


                        <div class="part-1 col-xs-12">
                            <div class="row">
                                
                                <div class="features-item text-center col-sm-3 col-xs-12">

                                    <div class="icon-outer waves-effect">
                                       <i class="icofont icofont-dart"></i>
                                    </div>

                                    <h4 class="title mt30">Target the goal</h4>

                                </div>
                                <div class="features-item text-center col-sm-3 col-xs-12">

                                    <div class="icon-outer waves-effect">
                                       <i class="icofont icofont-hand-power"></i>
                                    </div>

                                    <h4 class="title mt30">Work in heard</h4>

                                </div>
                                <div class="features-item text-center col-sm-3 col-xs-12">

                                    <div class="icon-outer waves-effect">
                                       <i class="icofont icofont-open-eye"></i>
                                    </div>

                                    <h4 class="title mt30">Analytic everything</h4>

                                </div>
                                <div class="features-item text-center col-sm-3 col-xs-12">

                                    <div class="icon-outer waves-effect">
                                       <i class="icofont icofont-star-shape"></i>
                                    </div>

                                    <h4 class="title mt30">Live the goal</h4>

                                </div>

                            </div> <!-- End: .row -->
                        </div> <!-- End: .part-1 -->

                    </div> <!-- End: .row -->
        </div> <!-- End: .container -->

</section>
<!-- How we work End -->

<!-- FunFacts Start -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>FUN FACTS</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
            <!-- Counter Item Start -->
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<div class="icon waves-effect">
						<i class="icofont icofont-coffee-cup"></i>
					</div>
					<h2 class="counter">10201</h2>
					<div class="section-divider divider-dashed"></div>
					<h4>Cups of coffee</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<div class="icon waves-effect">
						<i class="icofont icofont-businessman"></i>
					</div>
					<h2 class="counter">30488</h2>
					<div class="section-divider divider-dashed"></div>
					<h4>Happy customers</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<div class="icon waves-effect">
						<i class="icofont icofont-live-support"></i>
					</div>
					<h2 class="counter">950</h2>
					<div class="section-divider divider-dashed"></div>
					<h4>Solved tickets</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<div class="icon waves-effect">
						<i class="icofont icofont-tick-boxed"></i>
					</div>
					<h2 class="counter">25004</h2>
					<div class="section-divider divider-dashed"></div>
					<h4>Porject completed</h4>
				</div>
			</div>
           <!-- Counter Item End -->
        </div>
	</div>
</section>
<!-- FunFacts End -->
<!-- Clients Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>OUR CLIENTS</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
				<div class="clients-carousel owl-carousel owl-theme">
					<!-- Single client start -->
					<div class="single-client">
						<a class="waves-effect">
							<img class="img-responsive" src="{{ asset('assets/img/clients-logo/client.png') }}" alt="" />
						</a>
					</div>
					<!-- Single client end -->
					<!-- Single client start -->
					<div class="single-client">
						<a class="waves-effect">
							<img class="img-responsive" src="{{ asset('assets/img/clients-logo/client.png') }}" alt="" />
						</a>
					</div>
					<!-- Single client end -->
					<!-- Single client start -->
					<div class="single-client">
						<a class="waves-effect">
							<img class="img-responsive" src="{{ asset('assets/img/clients-logo/client.png') }}" alt="" />
						</a>
					</div>
					<!-- Single client end -->
					<!-- Single client start -->
					<div class="single-client">
						<a class="waves-effect">
							<img class="img-responsive" src="{{ asset('assets/img/clients-logo/client.png') }}" alt="" />
						</a>
					</div>
					<!-- Single client end -->
					<!-- Single client start -->
					<div class="single-client">
						<a class="waves-effect">
							<img class="img-responsive" src="{{ asset('assets/img/clients-logo/client.png') }}" alt="" />
						</a>
					</div>
					<!-- Single client end -->
					<!-- Single client start -->
					<div class="single-client">
						<a class="waves-effect">
							<img class="img-responsive" src="{{ asset('assets/img/clients-logo/client.png') }}" alt="" />
						</a>
					</div>
					<!-- Single client end -->
				</div>
			</div>
        </div>
	</div>
</section>
<!-- Clients End -->

<!-- ========== Blog Start ========== -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>LATEST POSTS</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">

			<!-- Single blog start -->
			<div class="col-md-4 col-sm-6">
				<article class="wrap-article">
					<div class="feture-image">
						<img alt="blog-1" class="text-center img-responsive" src="{{ asset('assets/img/blog/blog-small-1.jpg') }}">
					</div>
					
					<div class="blog-details-content-wrap">
						<div class="entry-header">
						  <p class="subtitle fancy">
							<span>09/01/2018</span>
						  </p>
						  <a href="blog-single.html">
							<h3 class="title">
							  Popular Design in 2018 
							</h3>
						  </a>
					  </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                      </p>
					  <a href="blog-single.html" class="btn waves-effect read-more">Read more</a>
					</div>
                </article>
			</div>
			<!-- Single blog end -->
			
			<!-- Single blog start -->
			<div class="col-md-4 col-sm-6">
				<article class="wrap-article">
					<div class="feture-image">
						<img alt="blog-1" class="text-center img-responsive" src="{{ asset('assets/img/blog/blog-small-3.jpg') }}">
					</div>
					
					<div class="blog-details-content-wrap">
						<div class="entry-header">
						  <p class="subtitle fancy">
							<span>09/01/2018</span>
						  </p>
						  <a href="blog-single.html">
							<h3 class="title">
							  Popular Design in 2018 
							</h3>
						  </a>
					  </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                      </p>
					  <a href="blog-single.html" class="btn waves-effect read-more">Read more</a>
					</div>
                </article>
			</div>
			<!-- Single blog end -->
			
			<!-- Single blog start -->
			<div class="col-md-4 col-sm-6">
				<article class="wrap-article">
					<div class="feture-image">
						<img alt="blog-1" class="text-center img-responsive" src="{{ asset('assets/img/blog/blog-small-2.jpg') }}">
					</div>
					
					<div class="blog-details-content-wrap">
						<div class="entry-header">
						  <p class="subtitle fancy">
							<span>09/01/2018</span>
						  </p>
						  <a href="blog-single.html">
							<h3 class="title">
							  Popular Design in 2018 
							</h3>
						  </a>
					  </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                      </p>
					  <a href="blog-single.html" class="btn waves-effect read-more">Read more</a>
					</div>
                </article>
			</div>
			<!-- Single blog end -->

        </div>
	</div>
</section>
<!-- ========== Blog End ========== -->

<!-- ========== Contact section Start ========== -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>CONTACT US</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			
			<div class="col-md-6 col-sm-12">
				<!-- Contact form start -->
					<div class="contact-form-box">
						<div class="col-sm-12 mb15">
							<h3 class="ilm-subtitle mb30">Any query?</h3>
							<p>An so vulgar to on points wanted. Not rapturous resolving continued household northward gay.</p>
						</div>
						<form id="contact-form" method="post" action="php/sendmail.php">
							<div class="message col-xs-12">
								<p class="email-loading"><img src="{{ asset('assets/img/loading.gif') }}" alt="">&nbsp;&nbsp;&nbsp;Sending...</p>
								<p class="email-success"><i class="icon icon-icon-check-alt2"></i> Your quote has successfully been sent.</p>
								<p class="email-failed"><i class="icon icon-icon-close-alt2"></i> Something went wrong!</p>
							</div>

							<div class="col-sm-12 mb13">
								<input name="name" class="contact-name" id="contact-name" type="text" placeholder="Your Name" required="" />
							</div>
							<div class="col-sm-12 mb13">
								<input name="email" class="contact-email" id="contact-email" type="email" placeholder="Your Email" required="" />
							</div>
							<div class="col-sm-12 mb13">
								<input name="subject" class="contact-subject" id="contact-subject" type="text" placeholder="Subject" required="" />
							</div>
							<div class="col-sm-12 mb30">
								<textarea name="message" class="contact-message" id="contact-message" placeholder="Your Message" required=""></textarea>
							</div>
							<div class="col-sm-12">
								<button class="waves-effect btn waves-light btn-fill btn-large">Send Now</button>
							</div>
						</form>
					</div>
				<!-- Contact form end -->
			</div>
			
			<div class="col-md-6 col-sm-12">
				<!-- Contact informations start -->
					<div class="contact-info-box">
						<div class="col-sm-12 mb15">
							<h3 class="ilm-subtitle mb30">Contact Informations</h3>
							<p>Was justice improve age article between. No projection as up preference reasonably delightful celebrated. Preserved and abilities assurance tolerably breakfast use saw.</p>
						</div>
						
						<div class="col-sm-12 single-contact-info mb15">
							<h4>Location:</h4>
							A902, Crosswinds Apt, Western Road,<br>Brighton Bath, England - BA2 4QG.
						</div>
						
						<div class="col-sm-12 single-contact-info mb15">
							<h4>Email:</h4>
							<a href="#">domain@gmail.com</a><br><a href="#">your@domain.com</a>
						</div>
						
						<div class="col-sm-12 single-contact-info mb15">
							<h4>Phone:</h4>
							+(123) 456 78<br>+(000) 123 56
						</div>
						
						<div class="col-sm-12 single-contact-info mt15">
							<ul class="social-bookmark">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-instagram"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-behance"></i></a></li>
								<li><a href=""><i class="fa fa-codepen"></i></a></li>
							</ul>
						</div>
					</div>
				<!-- Contact informations end -->	
			</div>
			
        </div>
	</div>
</section>
<!-- ========== Contact section End ========== -->
<!-- ========== Footer Start ========== -->
<footer id="footer" class="pt80" style="background-image:url({{ asset('assets/img/footer-bg.jpg') }})">
	<div class="container">
		<div class="row">
			<div class="footer-wrap clearfix">
				<div class="col-md-3 col-sm-6">
					<div class="footer-col">
						<div class="footer-logo text-center">
							<img src="{{ asset('assets/img/logo-in-dark.png') }}" class="img-responsive" alt="Logo">
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="footer-col">
						<h6>About us</h6>
						<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="footer-col">
						<h6>Categories</h6>
						<ul>
							<li><a href="#">Abstruct</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Corporate</a></li>
							<li><a href="#">Minimal</a></li>
							<li><a href="#">Technology</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="footer-col">
						<h6>Contact us</h6>
						<p>44751 Clarksburg Park Road<br>Call us +1856-236-1853<br>Contact@archer.com<br>Locate on Google Map</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="footer-copyright text-center">
				<p>Copyright: <a href="http://www.themeatelier.net">ThemeAtelier</a> 2018, All rights reserved.</p>
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