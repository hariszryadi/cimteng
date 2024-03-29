@extends('layouts.backend.master')

@section('title-header')
    User Admin
@endsection

@section('menus')
    User Config
@endsection

@section('submenus')
    User Admin
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form User Admin</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{ route('admin.userAdmin.update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$userAdmin->id}}">
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Nama</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $userAdmin->name }}" placeholder="Nama">
                        @if ($errors->has('name'))
                            <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" name="email" id="email" value="{{ $userAdmin->email }}" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Password Confirmation</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Avatar</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" name="avatar" id="avatar" value="{{$userAdmin->avatar}}">
                        <span class="help-block"></span>
                        <span id="temp_image">
                            @if ($userAdmin->avatar != '')
                                <img src="{{ asset('storage/'.$userAdmin->avatar) }}" class="img-thumbnail img-avatar" />
                            @endif
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Role</label>
                    <div class="col-lg-10">
                        <select class="form-control" name="role" id="">
                            <option value="null" selected disabled>Pilih Role</option>
                            @foreach ($role as $item)
                                <option value="{{$item->id}}" {{$userAdmin->roles->first()->id == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{ route('admin.userAdmin.index') }}">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('assets/admin/js/form-validator/jquery.form-validator.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            var previews = $('#temp_image');
            var config = {
                form : 'form',
                validate : {
                    'name' : {
                        validation : 'required'
                    }
                }
            };
            
            $.validate({
                modules : 'jsconf, security',
                onModulesLoaded : function() {
                    $.setupValidation(config);
                }
            });

            $("input[type=file]").on("change", function (e) {
                if (this.files[0].size > 2097152) {
                    bootbox.alert('Upload file max 2 MB');
                    this.value = null;
                }
                previews.empty();
                Array.prototype.slice.call(e.target.files)
                    .forEach(function (file, idx) {
                        var reader = new FileReader();
                        reader.onload = function (event) {
                            $("<img/>", {
                                    "src": event.target.result,
                                    "class": idx,
                                    "class": "img-thumbnail img-avatar",
                                }).appendTo(previews);
                        };
                        reader.readAsDataURL(file);
                    })
            })
        });
    </script>
@endsection
