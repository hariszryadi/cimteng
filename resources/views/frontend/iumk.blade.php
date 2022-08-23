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
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>IUMK</h3>
			</div>
			<div class="col-sm-6">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>IUMK</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- Visi Misi Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>IUMK</h2>
					<p>Daftar Izin Usaha Mikro Kecil di Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12" style="padding-bottom: 18px;">
				<div class="about-intro-text table-responsive">
                    <table class="table apt-table-wrapper" id="table-data">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No IUMK</th>
                                <th>Nama Perusahaan</th>
                                <th>Lokasi Perusahaan</th>
                                <th>Barang Dagangan</th>
                                <th>Kelurahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($iumk as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->no_iumk }}</td>
                                    <td>{{ $item->name_company }}</td>
                                    <td>{{ $item->location_company }}</td>
                                    <td>{{ $item->merchandise }}</td>
                                    <td>{{ $item->urban_village->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Visi Misi End -->
@endsection

@section('scripts')
@section('scripts')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function(){
        $('#table-data').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, 'All'],
            ],
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
@endsection
