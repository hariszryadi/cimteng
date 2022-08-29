@extends('layouts.frontend.master')

@section('content')
<style>
    .form-check-label {
        font-weight: normal !important;
    }
    .btn-success {
        background-color: #5cb85c !important;
    }
</style>
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>SKM</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- SKM Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>SKM</h2>
					<p>Survey Kepuasan Masyarakat untuk pelayanan di Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12" style="padding-bottom: 18px;">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form action="{{ route('post.skm') }}" method="POST">
                    @csrf
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($skm as $item)
                        <div class="form-group">
                            <label style="font-size: 1rem !important;">{{ $i++ . '. ' . $item->question }}</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer[][{{ $item->id }}]" id="very_good{{ $item->id }}" value="1">
                                <label class="form-check-label" for="very_good{{ $item->id }}">Sangat Baik</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer[][{{ $item->id }}]" id="good{{ $item->id }}" value="2">
                                <label class="form-check-label" for="good{{ $item->id }}">Baik</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer[][{{ $item->id }}]" id="enough{{ $item->id }}" value="3">
                                <label class="form-check-label" for="enough{{ $item->id }}">Cukup Baik</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="answer[][{{ $item->id }}]" id="not_good{{ $item->id }}" value="4">
                                <label class="form-check-label" for="not_good{{ $item->id }}">Kurang Baik</label>
                            </div>
                        </div>
                    @endforeach
                    <div class="">
                        <button type="submit" class="btn">Vote</button>
                        <a href="{{ route('result.skm') }}" class="btn btn-success">Lihat Hasil Poling</a>
                    </div>
                </form>
			</div>
		</div>
	</div>
</section>
<!-- SKM End -->
@endsection
