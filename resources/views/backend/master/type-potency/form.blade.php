@extends('layouts.backend.master')

@section('title-header')
    Jenis Usaha
@endsection

@section('menus')
    Master
@endsection

@section('submenus')
    Jenis Usaha
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Jenis Usha</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.master.typePotency.'. (isset($type) ? 'update' : 'store') )}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" id="hidden_id" name="id" value="{{(isset($type) ? "$type->id" : '')}}">
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Jenis Usaha</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Jenis Usaha" value="{{(isset($type) ? "$type->name" : '')}}">
                        @if ($errors->has('name'))
                            <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.master.typePotency.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">{{(isset($type) ? 'Update' : 'Simpan')}}</button>
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
