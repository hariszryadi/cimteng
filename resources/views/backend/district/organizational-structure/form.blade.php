@extends('layouts.backend.master')

@section('title-header')
    Struktur Organisasi
@endsection

@section('menus')
    Kecamatan
@endsection

@section('submenus')
    Struktur Organisasi
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Struktur Organisasi</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.district.organizationalStructure.update' )}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{ $org->id }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">File</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" name="file" id="file" value="{{ $org->file }}" accept=".pdf">
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.district.organizationalStructure.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>
@endsection
