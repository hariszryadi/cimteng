@extends('layouts.frontend.master')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<style>
    table tr td {
        text-align: left;
    }
    .pagination li:first-child a, .pagination .active a, .pagination li:last-child a {
        border: none;
    }
    .pagination li.active a {
        color: #FF5D07;
    }
    .apt-table-wrapper thead {
        background-color: #FF5D07;
        color: #fff;
    }
</style>

<!-- ========== Slider Start ========== -->
<div class="slider fullscreen">
    <ul class="slides">
		@foreach ($banners as $banner)
			<li>
				<img src="{{ asset('storage/'.$banner->image) }}" alt="">
				<div class="caption white-text">
				<h1>{{ $banner->caption_primary }}</h1>
				<h2>{{ $banner->caption_secondary }}</h2>
				</div>
			</li>
		@endforeach
    </ul>
</div>
<!-- ========== Slider End ========== -->

<!-- Greeting Start -->
<section class="section-padding white-bg">
	<section class="features-section-2 content-half white-bg">
		<div class="container-half container-half-left gray-bg"></div>
		<div class="container-half container-half-left cover" style="background-image: url({{ asset('storage/'.$greeting[0]->photo) }});"></div>
		<div class="container">
			<div class="row section-padding">
				<div class="col-md-6 pull-right">
					<div class="inner">
						<h2 class="section-heading">Sambutan Camat Cimahi Tengah</h2>
						<div class="greeting-content">
							{!! $greeting[0]->content !!}
						</div>
						<a href="#" class="waves-effect waves-light">Baca selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
<!-- Greeting End -->

<!-- News Start -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>BERITA</h2>
					<p>Kumpulan berita terbaru di Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
				<div class="clients-carousel owl-carousel owl-theme">
					@foreach ($news as $item)
						<div class="each-box">
							<div class="inner white-bg">
								<img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" class="img-responsive img-news">
								<div class="detail">
									<a href="{{ route('detailNews', ['id' => Crypt::encrypt($item->id)]) }}" title="{{ $item->title }}"><p class="news-title">{{ $item->title }}</p></a>
									@php
										$date = $item->created_at;
										$date->settings(['formatFunction' => 'translatedFormat']);
									@endphp
									<p class="news-date"><i class="fa fa-calendar"></i>&nbsp;{{ $date->format('l, j F Y ') }}&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i>&nbsp;{{ $date->format('H:i') }}</p>
									<div class="text-right">
										<a href="{{ route('detailNews', ['id' => Crypt::encrypt($item->id)]) }}">Lihat Berita</a>
									</div>
								</div>
							</div> <!-- End: .inner -->
						</div>
						<!-- Single team box end -->
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- News End -->


<!-- Spacer start -->
<section class="section-padding parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="white-text call-to-intro text-center col-sm-8 col-sm-offset-2">
					<h2>KECAMATAN CIMAHI TENGAH</h2>
					<p>#cimahitengahkuat</p>
				</div>
			</div>
		</div>
	</div>
	
</section>
<!-- Spacer End-->

<!-- Video Start -->
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb50">
					<h2>VIDEO</h2>
					<p>Kumpulan video kegiatan di Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel owl-theme team-carousel">
					@foreach ($videos as $item)
						<div class="each-box">
							<div class="inner white-bg text-center">
								{{-- <div class="box-hover"> --}}
									@if ($item->source == '1')
										<div class="box-video" style="padding: 8px;">
											<video width="355" height="180" controls="controls">
												<source src="{{ asset('storage/'.$item->video) }}" type="video/mp4">
											</video>
										</div>
									@else
										<div class="box-video" style="padding: 8px;">
											<iframe width="355" height="180" src="http://www.youtube.com/embed/{{ $item->video }}" frameborder="0" allowfullscreen></iframe>
										</div>
									@endif
								{{-- </div> --}}
								<div class="clearfix"></div>
								<div class="detail">
									<h6 class="video-caption" title="{{ $item->caption }}">{{ $item->caption }}</h6>
									@php
										$date = $item->created_at;
										$date->settings(['formatFunction' => 'translatedFormat']);
									@endphp
									<p class="news-date"><i class="fa fa-calendar"></i>&nbsp;{{ $date->format('l, j F Y ') }}&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i>&nbsp;{{ $date->format('H:i') }}</p>
									<div class="video-description">
										<p>{{ $item->description }}</p>
									</div>
								</div>
									
							</div> <!-- End: .inner -->
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Video End -->

<!-- Spacer Start -->
<section id="how-it-works" class="section-padding parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
        <div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="section-title text-center light-text mb50">
							<h2>KECAMATAN CIMAHI TENGAH</h2>
							<p>#cimahitengahkuat</p>
						</div>
					</div>
				</div>
        </div> <!-- End: .container -->
</section>
<!-- Spacer End -->

<!-- ========== No Telp Important Start ========== -->
<section class="section-padding gray-bg" style="padding-top: 50px !important; padding-bottom: 50px !important;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb30">
					<h2>NO TELEPON PENTING</h2>
					<p>Nomor telepon penting di wilayah Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6">
				<img src="{{ asset('images/no_telp.svg') }}" alt="No Telepon" width="60%" style="margin: 0 auto;">
			</div>
			<div class="col-sm-6">
				<div class="table-responsive">
                    <table class="table apt-table-wrapper" id="table-data">
                        <thead>
                            <tr>
                                <th>Nama Instansi</th>
                                <th>No Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($no_telp as $item)
                                <tr>
                                    <td>{{ $item->agency }}</td>
                                    <td>{{ $item->no_telp }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== No Telp Important End ========== -->

<!-- ========== Location Start ========== -->
<section class="section-padding white-bg" style="padding-top: 50px !important; padding-bottom: 50px !important;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb30">
					<h2>LOKASI</h2>
					<p>Lokasi kantor Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
				<iframe style="border: 1px solid #dee2e6; border-radius: 0.25rem; padding: 0.25rem;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.151553318884!2d107.5440882140323!3d-6.872437595033727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e441138c3119%3A0x65b8ad189b446860!2sKantor%20Kecamatan%20Cimahi%20Tengah!5e0!3m2!1sid!2sid!4v1660294539229!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
        </div>
	</div>
</section>
<!-- ========== Location End ========== -->

<!-- Statistic Start -->
<section class="section-padding gray-bg" style="padding-top: 50px !important; padding-bottom: 50px !important;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb30">
					<h2>Statistik Pengunjung</h2>
					<p>Statistik pengunjung website Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<h6 class="counter">{{ $today }}</h6>
					<div class="section-divider divider-dashed"></div>
					<h6>Hari Ini</h6>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<h6 class="counter">{{ $this_week }}</h6>
					<div class="section-divider divider-dashed"></div>
					<h6>Minggu Ini</h6>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<h6 class="counter">{{ $this_month }}</h6>
					<div class="section-divider divider-dashed"></div>
					<h6>Bulan Ini</h6>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-fact text-center mb-xs-30 mb-sm-30">
					<h6 class="counter">{{ $visitor }}</h6>
					<div class="section-divider divider-dashed"></div>
					<h6>Total</h6>
				</div>
			</div>
        </div>
	</div>
</section>
<!-- Statistic End -->
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function(){
        $('#table-data').DataTable({
			bFilter: false,
			bLengthChange : false,
    		bInfo:false,
            pageLength: 5,
			order: [],
            language: {
                paginate: {
                    next: '&#8594;', // or '→'
                    previous: '&#8592;' // or '←' 
                }
            }
        });
    });
</script>
@endsection
