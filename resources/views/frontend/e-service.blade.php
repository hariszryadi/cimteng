@extends('layouts.frontend.master')

@section('content')
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>E-Layanan</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- E-layanan Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>E-Layanan</h2>
					<p>E-Layanan Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6" style="padding-bottom: 18px;">
				<img class="" src="{{ asset('images/e-layanan.svg') }}" alt="e-layanan"/>
			</div>
            <div class="col-md-6" style="padding: 18px;">
                <h6>Aplikasi SYANTIK</h6>
                <p style="text-align: justify;">Aplikasi SYANTIK bertujuan untuk memberikan kemudahan
                pelayanan bagi masyarakat yang sifat dan prosesnya
                dilakukan oleh Kecamatan tanpa harus datang terlebih
                dahulu ke Kecamatan. </p>
                <p style="text-align: justify;">Cukup mengisi data dan melengkapi
                persyaratan serta akan diinformasikan kembali apabila
                sudah selesai. </p>
                <div class="row" style="padding-top: 12px;">
                    <div class="col-xs-6">
                        {{-- <h6 class="text-success">Dapatkan di Play Store</h6> --}}
                        <img class="image-responsive img-download" src="{{ asset('images/google-play.svg') }}" alt="google-play" style="cursor: pointer;" width="200"/>
                    </div>
                    <div class="col-xs-6">
                        {{-- <h6 class="text-danger">Segera Hadir di App Store</h6> --}}
                        <img class="image-responsive img-download" src="{{ asset('images/app-store.svg') }}" alt="app-store" style="cursor: not-allowed;" width="200"/>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>
<!-- E-layanan End -->
@endsection
