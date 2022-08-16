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
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="{{ $medsos[0]->facebook }}">
                    </div>
                    <label class="control-label col-lg-2">URL Facebook</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="url_facebook" id="url_facebook" placeholder="URL Facebook" value="{{ $medsos[0]->url_facebook }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Twitter</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter" value="{{ $medsos[0]->twitter }}">
                    </div>
                    <label class="control-label col-lg-2">URL Twitter</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="url_twitter" id="url_twitter" placeholder="URL Twitter" value="{{ $medsos[0]->url_twitter }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Instagram</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram" value="{{ $medsos[0]->instagram }}">
                    </div>
                    <label class="control-label col-lg-2">Instagram</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="url_instagram" id="url_instagram" placeholder="URL Instagram" value="{{ $medsos[0]->url_instagram }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Youtube</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="youtube" id="youtube" placeholder="Youtube" value="{{ $medsos[0]->youtube }}">
                    </div>
                    <label class="control-label col-lg-2">URL Youtube</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="url_youtube" id="url_youtube" placeholder="URL Youtube" value="{{ $medsos[0]->url_youtube }}">
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
