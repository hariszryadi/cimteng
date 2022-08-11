@extends('layouts.backend.master')

@section('title-header')
    Video
@endsection

@section('menus')
    CMS
@endsection

@section('submenus')
    Video
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Video</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.cms.video.'. (isset($video) ? 'update' : 'store') )}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{(isset($video) ? "$video->id" : '')}}">
                </div>		

                <div class="form-group">
                    <label class="control-label col-lg-2">Caption</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="caption" id="caption" placeholder="Judul" value="{{(isset($video) ? "$video->caption" : old('caption'))}}">
                        @if ($errors->has('caption'))
                            <span class="help-block text-danger">{{ $errors->first('caption') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Sumber</label>
                    <div class="col-lg-10">
                        <select name="source" id="source" class="form-control" {{ isset($video) ? 'disabled' : '' }}>
                            <option value="" selected disabled>Pilih Sumber</option>
                            <option value="1" {{ isset($video) ? $video->source == '1' ? 'selected' : '' : '' }}>File</option>
                            <option value="2" {{ isset($video) ? $video->source == '2' ? 'selected' : '' : '' }}>Link</option>
                        </select>
                        @if ($errors->has('source'))
                            <span class="help-block text-danger">{{ $errors->first('source') }}</span>
                        @endif
                    </div>
                </div>

                @if (isset($video))
                    @if ($video->source == '1')
                        <input type="hidden" name="source" value="1">
                        <div class="form-group" id="form-group-file">
                            <label class="control-label col-lg-2">Video</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="video" id="video" value="{{(isset($video) ? "$video->video" : '')}}" accept=".mp4">
                                <span class="help-block">Upload video max 8MB</span>
                                @if ($errors->has('video'))
                                    <span class="help-block text-danger">{{ $errors->first('video') }}</span>
                                @endif
                                <video width="400" controls style="margin-top: 6px;">
                                    <source src="{{  asset('storage/'.$video->video)  }}" id="video_here">
                                    Your browser does not support HTML5 video.
                                </video>
                            </div>
                        </div>
                    @else
                        <input type="hidden" name="source" value="2">
                        <div class="form-group" id="form-group-link">
                            <label class="control-label col-lg-2">Video</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="video" id="video-youtube" placeholder="Link Video" value="{{(isset($video) ? "https://youtu.be/".$video->video : old('video'))}}">
                                <span class="help-block">Masukkan link youtube, contoh : https://youtu.be/M0Ki7Pel0N0</span>
                                @if ($errors->has('video'))
                                    <span class="help-block text-danger">{{ $errors->first('video') }}</span>
                                @endif
                                <iframe width="400" height="200" style="margin-top: 6px;" src="http://www.youtube.com/embed/{{ $video->video }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endif
                    
                @else
                    <div class="form-group" id="form-group-link" hidden>
                        <label class="control-label col-lg-2">Video</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="video" id="video-youtube" placeholder="Link Video" value="{{(isset($video) ? "$video->video" : old('video'))}}">
                            <span class="help-block">Masukkan link youtube, contoh : https://youtu.be/M0Ki7Pel0N0</span>
                            @if ($errors->has('video'))
                                <span class="help-block text-danger">{{ $errors->first('video') }}</span>
                            @endif
                            <iframe width="400" height="200" style="margin-top: 6px;" src="http://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="form-group" id="form-group-file" hidden>
                        <label class="control-label col-lg-2">Video</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="video" id="video" value="{{(isset($video) ? "$video->video" : '')}}" accept=".mp4">
                            <span class="help-block">Upload video max 8MB</span>
                            @if ($errors->has('video'))
                                <span class="help-block text-danger">{{ $errors->first('video') }}</span>
                            @endif
                            <video width="400" controls style="margin-top: 6px;">
                                <source src="mov_bbb.mp4" id="video_here">
                                Your browser does not support HTML5 video.
                            </video>
                        </div>
                    </div>
                @endif

                <div class="form-group">
                    <label class="control-label col-lg-2">Deskripsi</label>
                    <div class="col-lg-10">
                        <textarea name="description" class="form-control" id="description" cols="30" rows="5">{{(isset($video) ? "$video->description" : old('description'))}}</textarea>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.cms.video.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">{{(isset($video) ? 'Update' : 'Simpan')}}</button>
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
                    'caption' : {
                        validation : 'required, length, custom',
				        length : '2-50'
                    },
                    'source' : {
                        validation : 'required'
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
                if (this.files[0].size > 8388608) {
                    bootbox.alert('Upload file max 8 MB');
                    this.value = null;
                }
                var $source = $('#video_here');
                $source[0].src = URL.createObjectURL(this.files[0]);
                $source.parent()[0].load();
            })

            $('#video-youtube').on('change',function(e){
                var regex = /(\?v=|\&v=|\/\d\/|\/embed\/|\/v\/|\.be\/)([a-zA-Z0-9\-\_]+)/;
                var youtubeurl = $(this).val();
                var regexyoutubeurl = youtubeurl.match(regex);
                if (regexyoutubeurl) {
                    $('iframe').attr('src', 'http://www.youtube.com/embed/'+regexyoutubeurl[2])
                }
            });
        });

        $('#source').on('change', function () {
            if ($(this).val() == '1') {
                $('#form-group-file').removeAttr('hidden');
                $('#form-group-link').attr('hidden', true);
            } else if ($(this).val() == '2') {
                $('#form-group-link').removeAttr('hidden');
                $('#form-group-file').attr('hidden', true);
            }
        })
    </script>
@endsection