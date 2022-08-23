@extends('layouts.backend.master')

@section('title-header')
    Lakip
@endsection

@section('menus')
    Kecamatan
@endsection

@section('submenus')
    Lakip
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Lakip</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.district.lakip.'. (isset($lakip) ? 'update' : 'store') )}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" id="hidden_id" name="id" value="{{(isset($lakip) ? "$lakip->id" : '')}}">
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Tahun</label>
                    <div class="col-lg-10">
                        @php
                            $year = date('Y');
                        @endphp
                        <select name="year" id="year" class="form-control">
                            <option value="" selected disabled>Pilih Tahun</option>
                            @foreach (range($year -2, $year + 3) as $item)
                                <option value="{{ $item }}" {{ isset($lakip) ? $lakip->year == $item ? 'selected' : '' : '' }}>{{ $item }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('year'))
                            <span class="help-block text-danger">{{ $errors->first('year') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Sumber</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="source" id="source" placeholder="Sumber" value="{{(isset($lakip) ? "$lakip->source" : '')}}">
                        <span class="help-block">masukkan link sumber lakip, contoh: https://drive.google.com/file/d/1yYp78i4LbIVOtUQ0QZmqv-HfBlp-vaCb/view</span>
                        @if ($errors->has('source'))
                            <span class="help-block text-danger">{{ $errors->first('source') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.district.lakip.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">{{(isset($lakip) ? 'Update' : 'Simpan')}}</button>
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
                    'year' : {
                        validation : 'required'
                    },
                    'source' : {
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
