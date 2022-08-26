@extends('layouts.frontend.master')

@section('content')
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>Layanan</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- Layanan Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>Layanan</h2>
					<p>Daftar Pelayanan Surat Menyurat Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6" style="padding-bottom: 18px;">
				<img class="" src="{{ asset('images/layanan.svg') }}" alt="e-layanan"/>
			</div>
            <div class="col-md-6" style="padding: 18px;">
                <select class="form-control title">
                    <option value="" selected disabled>Pilih Layanan</option>
                    @foreach ($service as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>
                <div class="description" style="margin-top: 20px;"></div>
            </div>
		</div>
	</div>
</section>
<!-- Layanan End -->
@endsection

@section('scripts')
<script>
    $('.title').on('change', function () {
        var id = $(this).val();

        $.ajax({
            url: '{{ route('get-service') }}',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}' 
            },
            data: {
                id:id
            },
            success: function (resp) {
                $('.description').html(resp.data.description)
            },
            error: function (xhr, status, error) {
                $('.description').html(xhr.responseText)
            }
        })
    })
</script>
@endsection
