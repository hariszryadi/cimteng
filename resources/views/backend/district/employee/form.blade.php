@extends('layouts.backend.master')

@section('title-header')
    Kepegawaian
@endsection

@section('menus')
    Kecamatan
@endsection

@section('submenus')
    Kepegawaian
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Kepegawaian Kecamatan</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.district.employee.'. (isset($employee) ? 'update' : 'store') )}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{(isset($employee) ? "$employee->id" : '')}}">
                </div>		

                <div class="form-group">
                    <label class="control-label col-lg-2">Nama</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama" value="{{(isset($employee) ? "$employee->name" : old('name'))}}" style="text-transform: uppercase">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Jabatan</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="position" id="position" placeholder="Jabatan" value="{{(isset($employee) ? "$employee->position" : old('position'))}}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2">Pangkat, Golongan</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="rank" id="rank" placeholder="Pangkat, Golongan" value="{{(isset($employee) ? "$employee->rank" : old('rank'))}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Pendidikan</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="education" id="education" placeholder="Pendidikan" value="{{(isset($employee) ? "$employee->education" : old('education'))}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Foto</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" name="avatar" id="avatar" value="{{(isset($employee) ? "$employee->avatar" : '')}}">
                        @if ($errors->has('avatar'))
                            <span class="help-block text-danger">{{ $errors->first('avatar') }}</span>
                        @endif
                        <span id="temp_avatar">
                            @if (isset($employee))
                                <img src="{{ asset('storage/'.$employee->avatar) }}" class="img-thumbnail img-employee" style="margin-top: 12px;"/>
                            @endif
                        </span>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.district.employee.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">{{(isset($employee) ? 'Update' : 'Simpan')}}</button>
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
                                    "class": "img-thumbnail img-employee",
                                    "style": "margin-top: 12px"
                                }).appendTo(previews);
                        };
                        reader.readAsDataURL(file);
                    })
            })
        });
    </script>
@endsection