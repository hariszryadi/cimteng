@extends('layouts.backend.master')

@section('title-header')
    Dashboard
@endsection

@section('menus')
    Dashboard
@endsection

@section('content')
    <style>
        .card {
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: .1875rem;
            cursor: pointer;
        }
        .card-body {
            padding: 1.25rem;
        }
        .media {
            display: flex; 
        }
        .media-body {
            flex: 1;
        }
        .align-self-center {
            margin-left: 1.25rem!important; 
            align-self: center!important;
        }
    </style>
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h1>Selamat Datang di Dashboard Admin Kec. Cimahi Tengah</h1>
        </div>
        <div class="panel-body">
            <h3 class="text-center">Statistik Pengunjung</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card card-body bg-danger-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">{{ $today }}</h3>
                                <span class="text-uppercase font-size-xs">Hari Ini</span>
                            </div>
    
                            <div class="ml-3 align-self-center">
                                <i class="icon-user icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-body bg-blue-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">{{ $this_week }}</h3>
                                <span class="text-uppercase font-size-xs">Minggu Ini</span>
                            </div>
    
                            <div class="ml-3 align-self-center">
                                <i class="icon-users2 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-body bg-success-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">{{ $this_month }}</h3>
                                <span class="text-uppercase font-size-xs">Bulan Ini</span>
                            </div>
    
                            <div class="ml-3 align-self-center">
                                <i class="icon-users icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-body bg-warning-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">{{ $visitor }}</h3>
                                <span class="text-uppercase font-size-xs">Total</span>
                            </div>
    
                            <div class="ml-3 align-self-center">
                                <i class="icon-users4 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
