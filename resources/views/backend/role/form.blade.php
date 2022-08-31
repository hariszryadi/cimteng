@extends('layouts.backend.master')

@section('title-header')
    Role
@endsection

@section('menus')
    User Config
@endsection

@section('submenus')
    Role
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Role</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.role.'. (isset($role) ? 'update' : 'store') )}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" id="hidden_id" name="id" value="{{(isset($role) ? "$role->id" : '')}}">
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Nama Role</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama Role" value="{{ isset($role) ? "$role->name" : '' }}">
                        <span class="help-block"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-2">
                        <label for="control-label">Permission</label>
                    </div>
                    <div class="col-lg-10">
                        @foreach ($permissions as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $item->name }}" name="permission[]" id="{{ $item->name }}" {{ isset($role) ? $role->permissions->contains($item) ? 'checked' : '' : '' }}>
                                <label class="form-check-label" for="{{ $item->name }}">{{ $item->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.role.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">{{(isset($role) ? 'Update' : 'Simpan')}}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('assets/admin/js/form-validator/jquery.form-validator.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            var _token = '{{ csrf_token() }}';
            var id = $('#hidden_id').val();

            var config = {
                form : 'form',
                validate : {
                    'name' : {
                        validation : 'required'
                    }
                }
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': _token
                }
            });

            $.validate({
                modules : 'jsconf, security',
                onModulesLoaded : function() {
                    $.setupValidation(config);
                }
            });
        });
    </script>
@endsection
