@extends('layouts.frontend.master')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
<style>
    p.form_text>span {
        display: inline-block;
        min-width: 150px;
    }
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
    .img-avatar {
        cursor: pointer;
    }
</style>
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>KEPEGAWAIAN</h3>
			</div>
			<div class="col-sm-6">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>Kepegawaian</li>
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
					<h2>KEPEGAWAIAN</h2>
					<p>Data Kepegawaian Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12" style="padding-bottom: 18px;">
				<img class="" src="{{ asset('images/kepegawaian.svg') }}" alt="visi & misi" style="margin: 0 auto;"/>
			</div>
		</div>
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 18px;">
				<div class="about-intro-text">
                    <table class="table apt-table-wrapper" id="table-data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Data Kepegawaian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($employee as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('storage/'.$item->avatar) }}" alt="{{ $item->name }}" class="img-avatar" width="250px" height="150px" style="margin: 0 auto;" data-fancybox="images">
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="form_text"><span>Nama</span>: <b>{{ $item->name }}</b></p>
                                                <p class="form_text"><span>Jabatan</span>: {{ $item->position }}</p>
                                                <p class="form_text"><span>Pangkat, Golongan</span>: {{ $item->rank }}</p>
                                                <p class="form_text"><span>Pendidikan</span>: {{ $item->education }}</p>
                                            </div>
                                        </div>
                                    </td>
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
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script>
    $(document).ready(function(){
        $('#table-data').DataTable({
            pageLength: 2,
            lengthMenu: [
                [2, 10, 25, 50, -1],
                [2, 10, 25, 50, 'All'],
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
