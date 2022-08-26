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
					<li>Pelayanan Rekomendasi IMB</li>
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
					<h2>Surat Keterangan Pindah ke Luar Negeri</h2>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
                <p>Persyaratan :</p>
                <ol>
                    <li>Formulir Permohonan dari Kelurahan</li>
                    <li>Fotokopi KK dan KTP</li>
                    <li>Fotokopi Sertifikat Tanah/bukti kepemilikan tanah</li>
                    <li>Surat Pemberitahuan/izin tetangga yang ditanda tangani oleh 10 orang beserta fotokopi KTP</li>
                    <li>Denah Lokasi</li>
                </ol>
			</div>
		</div>
	</div>
</section>
<!-- Lakip End -->
@endsection
