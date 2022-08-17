@extends('layouts.frontend.master')

@section('content')
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>VISI & MISI</h3>
			</div>
			<div class="col-sm-6">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>Visi & Misi</li>
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
					<h2>VISI & MISI</h2>
					<p>Visi & Misi Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6" style="padding-bottom: 18px;">
				<img class="" src="{{ asset('images/cimahi-vm.svg') }}" alt="visi & misi" style="margin: 0 auto;"/>
				<img class="" src="{{ asset('images/vm.svg') }}" alt="visi & misi" />
			</div>
			<div class="col-md-6" style="padding-bottom: 18px;">
				<div class="about-intro-text">
                    <h6>Visi</h6>
                    {!! $vm[0]->vision !!}
				</div>
				<div class="about-intro-text">
                    <h6>Misi</h6>
                    {!! $vm[0]->mission !!}
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Lakip End -->
@endsection
