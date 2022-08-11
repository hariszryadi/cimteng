@extends('layouts.backend.master')

@section('title-header')
    Banner
@endsection

@section('menus')
    CMS
@endsection

@section('submenus')
    Banner
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Banner</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.cms.banner.'. (isset($banner) ? 'update' : 'store') )}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{(isset($banner) ? "$banner->id" : '')}}">
                </div>		

                <div class="form-group">
                    <label class="control-label col-lg-2">Gambar</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" name="image" id="image" value="{{(isset($banner) ? "$banner->image" : '')}}">
                        @if ($errors->has('image'))
                            <span class="help-block text-danger">{{ $errors->first('image') }}</span>
                        @endif
                        <span id="temp_image">
                            @if (isset($banner))
                                <img src="{{ asset('storage/'.$banner->image) }}" class="img-thumbnail img-banner" style="margin-top: 12px;"/>
                            @endif
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Caption 1</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="caption_primary" id="caption_primary" placeholder="Caption 1" value="{{(isset($banner) ? "$banner->caption_primary" : old('caption_primary'))}}">
                        @if ($errors->has('caption_primary'))
                            <span class="help-block text-danger">{{ $errors->first('caption_primary') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Caption 2</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="caption_secondary" id="caption_secondary" placeholder="Caption 2" value="{{(isset($banner) ? "$banner->caption_secondary" : old('caption_secondary'))}}">
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.cms.banner.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">{{(isset($banner) ? 'Update' : 'Simpan')}}</button>
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
                    'caption_primary' : {
                        validation : 'required, length, custom',
				        length : '2-50'
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
                                    "class": "img-thumbnail img-banner",
                                }).appendTo(previews);
                        };
                        reader.readAsDataURL(file);
                    })
            })
        });
    </script>
@endsection