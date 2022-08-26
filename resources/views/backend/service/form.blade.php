@extends('layouts.backend.master')

@section('title-header')
    Layanan
@endsection

@section('menus')
    Layanan
@endsection

@section('submenus')
    
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Layanan</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.service.'. (isset($service) ? 'update' : 'store') )}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{(isset($service) ? "$service->id" : '')}}">
                </div>		

                <div class="form-group">
                    <label class="control-label col-lg-2">Layanan</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Layanan" value="{{(isset($service) ? "$service->title" : old('title'))}}">
                        @if ($errors->has('title'))
                            <span class="help-block text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Deskripsi</label>
                    <div class="col-lg-10">
                        <textarea name="description" class="form-control" id="description" cols="30" rows="5">{{(isset($service) ? "$service->description" : old('description'))}}</textarea>
                        @if ($errors->has('description'))
                            <span class="help-block text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.service.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">{{(isset($service) ? 'Update' : 'Simpan')}}</button>
                </div>

            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('assets/admin/js/form-validator/jquery.form-validator.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#description').summernote();

            var previews = $('#temp_image');
            var config = {
                form : 'form',
                validate : {
                    'title' : {
                        validation : 'required, length, custom',
				        length : '2-150'
                    },
                    'description' : {
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