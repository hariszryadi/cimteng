@extends('layouts.frontend.master')

@section('content')
<style>
    .image-wrapper {
        margin: 20px
    }
</style>
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li><a href="{{ route('profil.galleryPhoto') }}">Galeri Foto</a></li>
					<li>Detail</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- Detail Galeri Foto Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>{{ $gallery->title }}</h2>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
            @foreach ($gallery->detail as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="wrap-article">
                        <div class="feture-image">
                            <img src="{{ asset('storage/'.$item->photo) }}" class="img-responsive">
                        </div>
                    </div>
                </div>
            @endforeach
		</div>
	</div>
</section>
<!-- Detail Galeri Foto End -->
@endsection
