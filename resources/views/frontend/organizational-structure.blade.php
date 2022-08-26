@extends('layouts.frontend.master')

@section('content')
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>STRUKTUR ORGANISASI</h3>
			</div>
			<div class="col-sm-6">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>Struktur Organisasi</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- Organizational Stucture Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>STRUKTUR ORGANISASI</h2>
					<p>Struktur Organisasi Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<img class="" src="{{ asset('images/organisasi.svg') }}" alt="struktur organisasi" />
			</div>
			<div class="col-md-6">
				<embed src= "{{ asset('storage/'.$org[0]->file.'#navpanes=0&scrollbar=0') }}" width= "100%" height= "375">
			</div>
		</div>
	</div>
</section>
<!-- Organizational Stucture End -->
@endsection
