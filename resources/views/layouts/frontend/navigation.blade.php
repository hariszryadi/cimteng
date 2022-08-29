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
						<li class="{{ request()->is('profil/monografi') ? 'active' : '' }}"><a href="{{ route('profil.monograph') }}">Monografi Kecamatan</a></li>
						<li class="{{ request()->is('profil/visi-misi') ? 'active' : '' }}"><a href="{{ route('profil.visionMission') }}">Visi & Misi</a></li>
						<li class="{{ request()->is('profil/struktur-organisasi') ? 'active' : '' }}"><a href="{{ route('profil.organizationalStructure') }}">Struktur Organisasi</a></li>
						<li class="{{ request()->is('profil/kepegawaian') ? 'active' : '' }}"><a href="{{ route('profil.employee') }}">Kepegawaian</a></li>
						<li class="{{ request()->is('profil/galeri-foto') || request()->is('profil/galeri-foto/*') ? 'active' : '' }}"><a href="{{ route('profil.galleryPhoto') }}">Galeri Foto</a></li>
					</ul>
				</li>
				<li class="dropdown {{ request()->is('kelurahan/*') ? 'active' : '' }}">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Kelurahan</a>
					<ul class="dropdown-menu">
						@foreach ($urban_village as $item)
							<li class="{{ request()->is('kelurahan/'.$item->slug) ? 'active' : '' }}"><a href="{{ route('urban-village', ['kelurahan' => $item->slug]) }}">{{ $item->name }}</a></li>
						@endforeach
					</ul>
				</li>
				<li class="dropdown {{ request()->is('berita') || request()->is('berita/*') ? 'active' : '' }}">
					<a href="{{ route('news') }}" class="">Berita</a>
				</li>
				<li class="dropdown {{ request()->is('layanan') ? 'active' : '' }}">
					<a href="{{ route('service') }}" class="">Layanan</a>
				</li>
				<li class="dropdown {{ request()->is('e-layanan') ? 'active' : '' }}">
					<a href="{{ route('e-layanan') }}" class="">E-Layanan</a>
				</li>
				<li class="dropdown">
					<a href="#" class="" data-toggle="dropdown" >E-Report</a>
				</li>
				<li class="dropdown {{ request()->is('skm') || request()->is('skm/*') ? 'active' : '' }}">
					<a href="{{ route('skm') }}" class="">SKM</a>
				</li>
				<li class="dropdown {{ request()->is('iumk') ? 'active' : '' }}">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Potensi</a>
					<ul class="dropdown-menu">
						<li class="{{ request()->is('iumk') ? 'active' : '' }}"><a href="{{ route('iumk') }}">IUMK</a></li>
					</ul>
				</li>
				<li class="dropdown {{ request()->is('komentar-saran') ? 'active' : '' }}">
					<a href="{{ route('comment') }}" class="">Komentar & Saran</a>
				</li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div> 
</nav>
