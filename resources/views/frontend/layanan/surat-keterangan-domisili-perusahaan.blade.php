@extends('layouts.frontend.master')

@section('content')
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
			</div>
			<div class="col-sm-6">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>Layanan</li>
					<li>Surat Keterangan Domisili Perusahaan</li>
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
					<h2>Surat Keterangan Domisili Perusahaan</h2>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
                <p>Persyaratan :</p>
                <ol>
                    <li>Formulir dari Kelurahan</li>
                    <li>Fotokopi Sertifikat tanah / AJB Perusahan</li>
                    <li>Fotokopi IMB</li>
                    <li>Fotokopi KTP dan KK</li>
                    <li>Persetujuan tetangga (minimal 6, maksimal 10 orang disertai Fotokopi KTP)</li>
                </ol>
			</div>
		</div>
	</div>
</section>
<!-- Lakip End -->
@endsection
