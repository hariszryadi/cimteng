@extends('layouts.frontend.master')

@section('content')
<style>
    .img-responsive {
        /* margin: 0 auto; */
        margin-bottom: 5px;
    }
    .content-news {
        margin-top: 52px;
    }
    .content-news > p { 
        text-indent: 30px; 
    }
    @media screen and (max-width: 600px) {
        .detail-news-date {
            font-size: 7pt;      
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
					<li>Sambutan Camat</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- Detail Berita Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title">
					<h4>Sambutan Camat Cimahi Tengah</h4>
				</div>
			</div>
		</div>
		
		<div class="row">
            <div class="col-sm-12" style="margin-bottom: 24px;">
                @php
                    $date = $greeting[0]->updated_at;
                    $date->settings(['formatFunction' => 'translatedFormat']);
                    @endphp
                <p class="detail-news-date"><i class="fa fa-calendar"></i>&nbsp;{{ $date->format('l, j F Y ') }}&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i>&nbsp;{{ $date->format('H:i') }}</p>
                <img src="{{ asset('storage/'.$greeting[0]->photo) }}" class="img-responsive" alt="Detail Berita">
                <div class="content-news">{!! $greeting[0]->content !!}</div>
            </div>
		</div>
	</div>
</section>
<!-- Detail Berita End -->
@endsection
