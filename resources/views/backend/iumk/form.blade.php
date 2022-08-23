@extends('layouts.backend.master')

@section('title-header')
    IUMK
@endsection

@section('menus')
    IUMK
@endsection

@section('submenus')
    
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form IUMK</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.iumk.'. (isset($iumk) ? 'update' : 'store') )}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" id="hidden_id" name="id" value="{{(isset($iumk) ? "$iumk->id" : '')}}">
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">No IUMK</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="no_iumk" id="no_iumk" placeholder="No IUMK" value="{{(isset($iumk) ? "$iumk->no_iumk" : '')}}">
                        @if ($errors->has('no_iumk'))
                            <span class="help-block text-danger">{{ $errors->first('no_iumk') }}</span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2">Nama Perusahaan</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="name_company" id="name_company" placeholder="Nama Perusahaan" value="{{(isset($iumk) ? "$iumk->name_company" : '')}}">
                        @if ($errors->has('name_company'))
                            <span class="help-block text-danger">{{ $errors->first('name_company') }}</span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2">Lokasi Perusahaan</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="location_company" id="location_company" placeholder="Lokasi Perusahaan" value="{{(isset($iumk) ? "$iumk->location_company" : '')}}">
                        @if ($errors->has('location_company'))
                            <span class="help-block text-danger">{{ $errors->first('location_company') }}</span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2">Barang Dagangan</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="merchandise" id="merchandise" placeholder="Barang Dagangan" value="{{(isset($iumk) ? "$iumk->merchandise" : '')}}">
                        @if ($errors->has('merchandise'))
                            <span class="help-block text-danger">{{ $errors->first('merchandise') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Kelurahan</label>
                    <div class="col-lg-10">
                        <select name="urban_village_id" class="form-control">
                            <option value="" selected disabled>Pilih Kelurahan</option>
                            @foreach ($urban_village as $item)
                                <option value="{{ $item->id }}" {{ isset($iumk) ? $iumk->urban_village_id == $item->id ? 'selected' : '' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('urban_village_id'))
                            <span class="help-block text-danger">{{ $errors->first('urban_village_id') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.iumk.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">{{(isset($iumk) ? 'Update' : 'Simpan')}}</button>
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
                    'no_iumk' : {
                        validation : 'required'
                    }
                    'name_company' : {
                        validation : 'required'
                    }
                    'location_company' : {
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
