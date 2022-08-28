@extends('layouts.backend.master')

@section('title-header')
    Galeri Foto
@endsection

@section('menus')
    Kecamatan
@endsection

@section('submenus')
    Galeri Foto
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Galeri Foto</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.district.galleryPhoto.'. (isset($gallery) ? 'update' : 'store') )}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{(isset($gallery) ? "$gallery->id" : '')}}">
                </div>		

                <div class="form-group">
                    <label class="control-label col-lg-2">Judul</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Judul" value="{{(isset($gallery) ? "$gallery->title" : old('title'))}}">
                        @if ($errors->has('title'))
                            <span class="help-block text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Foto</label>
                    <div class="col-lg-10">
                        <div class="input-group control-group after-add-more">
                            <input type="file" name="photo[]" class="form-control" accept=".png, .jpg, .jpeg">
                            <div class="input-group-btn"> 
                                <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.district.galleryPhoto.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">{{(isset($gallery) ? 'Update' : 'Simpan')}}</button>
                </div>

            </form>

            <!-- Copy Fields -->
            <div class="copy hide">
                <div class="control-group input-group" style="margin-top:10px">
                <input type="file" name="photo[]" class="form-control" accept=".png, .jpg, .jpeg">
                <div class="input-group-btn"> 
                    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                </div>
                </div>
            </div>
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
                    'title' : {
                        validation : 'required, length, custom',
				        length : '2-255'
                    },
                }
            };
            
            $.validate({
                modules : 'jsconf, security',
                onModulesLoaded : function() {
                    $.setupValidation(config);
                }
            });

            $(".add-more").click(function(){ 
                var html = $(".copy").html();
                $(".after-add-more").after(html);
            });


            $("body").on("click",".remove",function(){ 
                $(this).parents(".control-group").remove();
            });
        });
    </script>
@endsection