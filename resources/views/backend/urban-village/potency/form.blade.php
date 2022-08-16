@extends('layouts.backend.master')

@section('title-header')
    Potensi
@endsection

@section('menus')
    Kelurahan
@endsection

@section('submenus')
    Potensi
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Potensi Kelurahan</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.urbanVillage.potency.'. (isset($potency) ? 'update' : 'store') )}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{(isset($potency) ? "$potency->id" : '')}}">
                </div>		

                <div class="form-group">
                    <label class="control-label col-lg-2">Lokasi</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="location" id="location" placeholder="Lokasi" value="{{(isset($potency) ? "$potency->location" : old('location'))}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">RT</label>
                    <div class="col-lg-4">
                        <input type="number" class="form-control" name="rt" id="rt" value="{{(isset($potency) ? "$potency->rt" : old('rt'))}}">
                    </div>
                    <label class="control-label col-lg-2">RW</label>
                    <div class="col-lg-4">
                        <input type="number" class="form-control" name="rw" id="rw" value="{{(isset($potency) ? "$potency->rw" : old('rw'))}}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2">Jenis Usaha</label>
                    <div class="col-lg-10">
                        <select name="type_potency_id" class="form-control">
                            <option value="" selected disabled>Pilih Jenis Usaha</option>
                            @foreach ($type_potency as $item)
                                <option value="{{ $item->id }}" {{ isset($potency) ? $potency->type_potency_id == $item->id ? 'selected' : '' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Kelurahan</label>
                    <div class="col-lg-10">
                        <select name="urban_village_id" class="form-control">
                            <option value="" selected disabled>Pilih Kelurahan</option>
                            @foreach ($urban_village as $item)
                                <option value="{{ $item->id }}" {{ isset($potency) ? $potency->urban_village_id == $item->id ? 'selected' : '' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('urban_village_id'))
                            <span class="help-block text-danger">{{ $errors->first('urban_village_id') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.urbanVillage.potency.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">{{(isset($potency) ? 'Update' : 'Simpan')}}</button>
                </div>

            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('assets/admin/js/form-validator/jquery.form-validator.min.js')}}"></script>
    
    <script>
        $(document).ready(function () {
            var previews = $('#temp_avatar');
            var config = {
                form : 'form',
                validate : {
                    'name' : {
                        validation : 'required',
                    }
                }
            };
            
            $.validate({
                modules : 'jsconf, security',
                onModulesLoaded : function() {
                    $.setupValidation(config);
                }
            });
        });
    </script>
@endsection