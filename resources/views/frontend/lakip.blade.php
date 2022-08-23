@extends('layouts.frontend.master')

@section('content')
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>DATA LAKIP</h3>
			</div>
			<div class="col-sm-6">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>Data Lakip</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- Lakip Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>DATA LAKIP</h2>
					<p>Data Lakip Kecamatan Cimahi Tengah dapat di download disini. </p>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-9" style="padding-bottom: 18px;">
				<img class="" src="{{ asset('images/lakip.svg') }}" alt="lakip" />
			</div>
			<div class="col-md-3" style="background-color: #f4f4f4; padding-bottom: 18px;">
				@foreach ($lakip as $item)
					<div class="about-intro-text">
						<img class="image-responsive" src="{{ asset('images/pdf.svg') }}" alt="pdf" style="margin:0 auto;"/>
						<div class="text-center" style="margin-top: 12px;">
							<h6>Tahun {{ $item->year }}</h6>
							<a href="{{ $item->source }}" class="btn btn-warning btn-lakip" target="_blank">Download disini</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<!-- Lakip End -->
@endsection
