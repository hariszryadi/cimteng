@extends('layouts.backend.master')

@section('title-header')
    Sambutan Camat
@endsection

@section('menus')
    CMS
@endsection

@section('submenus')
    Sambutan Camat
@endsection

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Visi Misi</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.visionMission.update' )}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{ $vm->id }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Visi</label>
                    <div class="col-lg-10">
                        <textarea name="vision" class="form-control" id="vision" cols="30" rows="3">{{ $vm->vision }}</textarea>
                        @if ($errors->has('vision'))
                            <span class="help-block text-danger">{{ $errors->first('vision') }}</span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2">Misi</label>
                    <div class="col-lg-10">
                        <textarea name="mission" class="form-control" id="mission" cols="30" rows="5">{{ $vm->mission }}</textarea>
                        @if ($errors->has('mission'))
                            <span class="help-block text-danger">{{ $errors->first('mission') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.visionMission.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
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
            $('#vision').summernote();
            $('#mission').summernote();

            var previews = $('#temp_photo');
            var config = {
                form : 'form',
                validate : {
                    'vision' : {
                        validation : 'required',
                    },
                    'mission' : {
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