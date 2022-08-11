@extends('layouts.backend.master')

@section('title-header')
    Media Sosial
@endsection

@section('menus')
    Media Sosial
@endsection

@section('submenus')
    
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Media Sosial</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{ route('admin.mediaSocial.update') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" id="hidden_id" name="id" value="{{ $medsos[0]->id }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{ $medsos[0]->email }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Facebook</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="{{ $medsos[0]->facebook }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Twitter</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter" value="{{ $medsos[0]->twitter }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Instagram</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram" value="{{ $medsos[0]->instagram }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Youtube</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="youtube" id="youtube" placeholder="Youtube" value="{{ $medsos[0]->youtube }}">
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
