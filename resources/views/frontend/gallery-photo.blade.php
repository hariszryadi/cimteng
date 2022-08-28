@extends('layouts.frontend.master')

@section('content')
<style>
    .btn-gallery {
        height: 35px;
        font-size: 11px;
        border-radius: 10px;
    }
    /* .img-responsive {
        margin: 0 auto;
        margin-bottom: 5px;
    } */
    .extra-small-text > h6 {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* number of lines to show */
                line-clamp: 2; 
        -webkit-box-orient: vertical;
        height: 40px !important;
    }

    @media screen and (max-width: 600px) {
        .extra-small-text > h6 {
            height: 30px !important;
            margin-top: 12px;        
        }
    }
</style>
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>Galeri Foto</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- Galeri Foto Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>Galeri Foto</h2>
					<p>Galeri Foto Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
            @foreach ($gallery as $item)
                <div class="col-sm-6" style="margin-bottom: 24px;">
                    <div class="col-sm-4">
                        <img src="{{ asset('images/galeri.svg') }}" class="img-responsive" alt="Galeri Foto">
                    </div>
                    <div class="col-sm-8">
                        <div class="extra-small-text">
                            <h6 title="{{ $item->title }}">{{ $item->title }}</h6>
                            @php
                                $date = $item->created_at;
                                $date->settings(['formatFunction' => 'translatedFormat']);
                            @endphp
                            <p class="news-date"><i class="fa fa-calendar"></i>&nbsp;{{ $date->format('l, j F Y ') }}&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i>&nbsp;{{ $date->format('H:i') }}</p>
                            <a href="{{ route('profil.detailGalleryPhoto', ['id' => Crypt::encrypt($item->id)]) }}" class="btn btn-gallery">Lihat Gallery</a>
                        </div>
                    </div>
                </div>
            @endforeach
		</div>
	</div>
</section>
<!-- Galeri Foto End -->
@endsection
