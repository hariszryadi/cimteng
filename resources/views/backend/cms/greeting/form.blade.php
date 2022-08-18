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
            <h5 class="panel-title">Form Sambutan Camat</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.cms.greeting.update' )}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{ $greeting->id }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Foto</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" name="photo" id="photo" value="{{ $greeting->photo }}" accept=".png, .jpg, .jpeg">
                        @if ($errors->has('photo'))
                            <span class="help-block text-danger">{{ $errors->first('photo') }}</span>
                        @endif
                        <span id="temp_photo">
                            <img src="{{ asset('storage/'.$greeting->photo) }}" class="img-thumbnail img-greeting" style="margin-top: 12px;"/>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Konten</label>
                    <div class="col-lg-10">
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5">{{ $greeting->content }}</textarea>
                        @if ($errors->has('content'))
                            <span class="help-block text-danger">{{ $errors->first('content') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.cms.greeting.index')}}">Kembali</a>
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
            $('#content').summernote();

            var previews = $('#temp_photo');
            var config = {
                form : 'form',
                validate : {
                    'content' : {
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
                                    "class": "img-thumbnail img-greeting",
                                    "style": "margin-top: 12px"
                                }).appendTo(previews);
                        };
                        reader.readAsDataURL(file);
                    })
            })
        });
    </script>
@endsection