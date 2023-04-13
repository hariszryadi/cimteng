@extends('layouts.frontend.master')

@section('content')
<style>
	.fa-info-circle {
		font-size: 42px;
	}
</style>
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
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
			<div class="col-md-6">
				<img class="img-center" src="{{ asset('images/lakip.svg') }}" alt="lakip" />
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-1">
						<i class="fa fa-info-circle"></i>
					</div>
					<div class="col-md-11">
						<p style="text-align: justify; font-size: 9pt;"> LKIP adalah Laporan Akuntabilitas Kinerja Instansi Pemerintahan. LKIP merupakan produk akhir SAKIP yang menggambarkan kinerja yang dicapai oleh suatu instansi pemerintah atas pelaksanaan program dan kegiatan yang dibiayai APBN/APBD. Penyusunan LKIP berdasarkan siklus anggraan yang berjalan 1 tahun. Dalam pembuatan LKIP suatu instansi pemerintah harus dapat menentukan besaran kinerja yang dihasilkan secara kuantitatif yaitu besaran dalam satuan jumlah atau persentase. Manfaat dari LKIP bisa dijadikan bahan evaluasi terhadap instansi pemerintah yang bersangkutan selama 1 tahun anggaran.</p>
					</div>
				</div>
				<div class="row">
					@foreach ($lakip as $item)
						<div class="about-intro-text col-md-6">
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
	</div>
</section>
<!-- Lakip End -->
@endsection
