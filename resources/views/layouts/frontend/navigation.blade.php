@if (request()->is('/'))
<nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav" style="background-color:rgba(239, 230, 230, 0.5);">    
@else
<nav class="navbar navbar-default navbar-sticky bootsnav">
@endif
	
    @include('layouts.frontend.header')

    <div class="container"> 
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">
                @if (request()->is('/'))
                    <img src="{{ asset('images/icon-100.png') }}" class="logo logo-display" alt="" width="100px">
                    <img src="{{ asset('images/icon-100.png') }}" class="logo logo-scrolled" alt="" width="100px">
                @else
                    <img src="{{ asset('images/icon-100.png') }}" class="logo" alt="" width="100px">
                @endif
            </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp" style="margin-top: 21px;">
				<li class="dropdown {{ request()->is('/') ? 'active' : '' }}">
					<a href="{{ route('home') }}" class="">Beranda</a>
				</li>
				<li class="dropdown {{ request()->is('profil/*') ? 'active' : '' }}">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Profil</a>
					<ul class="dropdown-menu">
						<li class="{{ request()->is('profil/lakip') ? 'active' : '' }}"><a href="{{ route('profil.lakip') }}">Data Lakip</a></li>
						<li><a href="#">Monografi Kecamatan</a></li>
						<li class="{{ request()->is('profil/visi-misi') ? 'active' : '' }}"><a href="{{ route('profil.visiMisi') }}">Visi & Misi</a></li>
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
