@extends('layouts.backend.master')

@section('title-header')
    Role
@endsection

@section('menus')
    User Config
@endsection

@section('submenus')
    Role
@endsection

@section('content')
    <style>
        .table tr th:nth-child(2),
        .table tr th:nth-child(3),
        .table tr th:nth-child(4),
        .table tr th:nth-child(5),
        .table tr td:nth-child(2),
        .table tr td:nth-child(3),
        .table tr td:nth-child(4),
        .table tr td:nth-child(5) {
            text-align: center;
            width: 10%;
        }
    </style>
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Role</h5>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" id="form" action="{{route('admin.role.'. (isset($role) ? 'update' : 'store') )}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" id="hidden_id" name="id" value="{{(isset($role) ? "$role->id" : '')}}">
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Nama Role</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama Role" value="{{ isset($role) ? "$role->name" : '' }}">
                        <span class="help-block"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-2">
                        <label for="control-label">Permission</label>
                    </div>
                    <div class="col-lg-10">
                        {{-- @foreach ($permissions as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $item->name }}" name="permission[]" id="{{ $item->name }}" {{ isset($role) ? $role->permissions->contains($item) ? 'checked' : '' : '' }}>
                                <label class="form-check-label" for="{{ $item->name }}">{{ $item->name }}</label>
                            </div>
                        @endforeach --}}
                        <table class="table table-hover table-bordered striped">
                            <thead>
                                <tr class="bg-teal-400">
                                    <th>Menu</th>
                                    <th>Lihat</th>
                                    <th>Buat</th>
                                    <th>Ubah</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CMS - Banner</td>
                                    <td><input class="form-check-input" type="checkbox" value="read banner" name="permission[]" id="read banner" {{ isset($role) ? $role->permissions->contains('name', 'read banner') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="create banner" name="permission[]" id="create banner" {{ isset($role) ? $role->permissions->contains('name', 'create banner') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit banner" name="permission[]" id="edit banner" {{ isset($role) ? $role->permissions->contains('name', 'edit banner') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="delete banner" name="permission[]" id="delete banner" {{ isset($role) ? $role->permissions->contains('name', 'delete banner') ? 'checked' : '' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>CMS - Berita</td>
                                    <td><input class="form-check-input" type="checkbox" value="read news" name="permission[]" id="read news" {{ isset($role) ? $role->permissions->contains('name', 'read news') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="create news" name="permission[]" id="create news" {{ isset($role) ? $role->permissions->contains('name', 'create news') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit news" name="permission[]" id="edit news" {{ isset($role) ? $role->permissions->contains('name', 'edit news') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="delete news" name="permission[]" id="delete news" {{ isset($role) ? $role->permissions->contains('name', 'delete news') ? 'checked' : '' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>CMS - Video</td>
                                    <td><input class="form-check-input" type="checkbox" value="read video" name="permission[]" id="read video" {{ isset($role) ? $role->permissions->contains('name', 'read video') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="create video" name="permission[]" id="create video" {{ isset($role) ? $role->permissions->contains('name', 'create video') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit video" name="permission[]" id="edit video" {{ isset($role) ? $role->permissions->contains('name', 'edit video') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="delete video" name="permission[]" id="delete video" {{ isset($role) ? $role->permissions->contains('name', 'delete video') ? 'checked' : '' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>CMS - Sambutan Camat</td>
                                    <td><input class="form-check-input" type="checkbox" value="read greeting" name="permission[]" id="read greeting" {{ isset($role) ? $role->permissions->contains('name', 'read greeting') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit greeting" name="permission[]" id="edit greeting" {{ isset($role) ? $role->permissions->contains('name', 'edit greeting') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan - Data Lakip</td>
                                    <td><input class="form-check-input" type="checkbox" value="read lakip" name="permission[]" id="read lakip" {{ isset($role) ? $role->permissions->contains('name', 'read lakip') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="create lakip" name="permission[]" id="create lakip" {{ isset($role) ? $role->permissions->contains('name', 'create lakip') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit lakip" name="permission[]" id="edit lakip" {{ isset($role) ? $role->permissions->contains('name', 'edit lakip') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="delete lakip" name="permission[]" id="delete lakip" {{ isset($role) ? $role->permissions->contains('name', 'delete lakip') ? 'checked' : '' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan - Monografi</td>
                                    <td><input class="form-check-input" type="checkbox" value="read district monograph" name="permission[]" id="read district monograph" {{ isset($role) ? $role->permissions->contains('name', 'read district monograph') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit district monograph" name="permission[]" id="edit district monograph" {{ isset($role) ? $role->permissions->contains('name', 'edit district monograph') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan - Visi & Misi</td>
                                    <td><input class="form-check-input" type="checkbox" value="read vision mission" name="permission[]" id="read vision mission" {{ isset($role) ? $role->permissions->contains('name', 'read vision mission') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit vision mission" name="permission[]" id="edit vision mission" {{ isset($role) ? $role->permissions->contains('name', 'edit vision mission') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan - Struktur Organisasi</td>
                                    <td><input class="form-check-input" type="checkbox" value="read organizational structure" name="permission[]" id="read organizational structure" {{ isset($role) ? $role->permissions->contains('name', 'read organizational structure') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit organizational structure" name="permission[]" id="edit organizational structure" {{ isset($role) ? $role->permissions->contains('name', 'edit organizational structure') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan - Kepegawaian</td>
                                    <td><input class="form-check-input" type="checkbox" value="read district employee" name="permission[]" id="read district employee" {{ isset($role) ? $role->permissions->contains('name', 'read district employee') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="create district employee" name="permission[]" id="create district employee" {{ isset($role) ? $role->permissions->contains('name', 'create district employee') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit district employee" name="permission[]" id="edit district employee" {{ isset($role) ? $role->permissions->contains('name', 'edit district employee') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="delete district employee" name="permission[]" id="delete district employee" {{ isset($role) ? $role->permissions->contains('name', 'delete district employee') ? 'checked' : '' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan - Galeri Foto</td>
                                    <td><input class="form-check-input" type="checkbox" value="read gallery photo" name="permission[]" id="read gallery photo" {{ isset($role) ? $role->permissions->contains('name', 'read gallery photo') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="create gallery photo" name="permission[]" id="create gallery photo" {{ isset($role) ? $role->permissions->contains('name', 'create gallery photo') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit gallery photo" name="permission[]" id="edit gallery photo" {{ isset($role) ? $role->permissions->contains('name', 'edit gallery photo') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="delete gallery photo" name="permission[]" id="delete gallery photo" {{ isset($role) ? $role->permissions->contains('name', 'delete gallery photo') ? 'checked' : '' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>Kelurahan - Monografi</td>
                                    <td><input class="form-check-input" type="checkbox" value="read urban village monograph" name="permission[]" id="read urban village monograph" {{ isset($role) ? $role->permissions->contains('name', 'read urban village monograph') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit urban village monograph" name="permission[]" id="edit urban village monograph" {{ isset($role) ? $role->permissions->contains('name', 'edit urban village monograph') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Kelurahan - Kepegawaian</td>
                                    <td><input class="form-check-input" type="checkbox" value="read urban village employee" name="permission[]" id="read urban village employee" {{ isset($role) ? $role->permissions->contains('name', 'read urban village employee') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="create urban village employee" name="permission[]" id="create urban village employee" {{ isset($role) ? $role->permissions->contains('name', 'create urban village employee') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit urban village employee" name="permission[]" id="edit urban village employee" {{ isset($role) ? $role->permissions->contains('name', 'edit urban village employee') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="delete urban village employee" name="permission[]" id="delete urban village employee" {{ isset($role) ? $role->permissions->contains('name', 'delete urban village employee') ? 'checked' : '' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>Kelurahan - Potensi</td>
                                    <td><input class="form-check-input" type="checkbox" value="read urban village potency" name="permission[]" id="read urban village potency" {{ isset($role) ? $role->permissions->contains('name', 'read urban village potency') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="create urban village potency" name="permission[]" id="create urban village potency" {{ isset($role) ? $role->permissions->contains('name', 'create urban village potency') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit urban village potency" name="permission[]" id="edit urban village potency" {{ isset($role) ? $role->permissions->contains('name', 'edit urban village potency') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="delete urban village potency" name="permission[]" id="delete urban village potency" {{ isset($role) ? $role->permissions->contains('name', 'delete urban village potency') ? 'checked' : '' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>Layanan</td>
                                    <td><input class="form-check-input" type="checkbox" value="read service" name="permission[]" id="read service" {{ isset($role) ? $role->permissions->contains('name', 'read service') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="create service" name="permission[]" id="create service" {{ isset($role) ? $role->permissions->contains('name', 'create service') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit service" name="permission[]" id="edit service" {{ isset($role) ? $role->permissions->contains('name', 'edit service') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="delete service" name="permission[]" id="delete service" {{ isset($role) ? $role->permissions->contains('name', 'delete service') ? 'checked' : '' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>Media Sosial</td>
                                    <td><input class="form-check-input" type="checkbox" value="read media social" name="permission[]" id="read media social" {{ isset($role) ? $role->permissions->contains('name', 'read media social') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit media social" name="permission[]" id="edit media social" {{ isset($role) ? $role->permissions->contains('name', 'edit media social') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Komentar & Saran</td>
                                    <td><input class="form-check-input" type="checkbox" value="read comment" name="permission[]" id="read comment" {{ isset($role) ? $role->permissions->contains('name', 'read comment') ? 'checked' : '' : '' }}></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>User Config - Role</td>
                                    <td><input class="form-check-input" type="checkbox" value="read role" name="permission[]" id="read role" {{ isset($role) ? $role->permissions->contains('name', 'read role') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="create role" name="permission[]" id="create role" {{ isset($role) ? $role->permissions->contains('name', 'create role') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit role" name="permission[]" id="edit role" {{ isset($role) ? $role->permissions->contains('name', 'edit role') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="delete role" name="permission[]" id="delete role" {{ isset($role) ? $role->permissions->contains('name', 'delete role') ? 'checked' : '' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>User Config - User Admin</td>
                                    <td><input class="form-check-input" type="checkbox" value="read user" name="permission[]" id="read user" {{ isset($role) ? $role->permissions->contains('name', 'read user') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="create user" name="permission[]" id="create user" {{ isset($role) ? $role->permissions->contains('name', 'create user') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="edit user" name="permission[]" id="edit user" {{ isset($role) ? $role->permissions->contains('name', 'edit user') ? 'checked' : '' : '' }}></td>
                                    <td><input class="form-check-input" type="checkbox" value="delete user" name="permission[]" id="delete user" {{ isset($role) ? $role->permissions->contains('name', 'delete user') ? 'checked' : '' : '' }}></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.role.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">{{(isset($role) ? 'Update' : 'Simpan')}}</button>
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
            var id = $('#hidden_id').val();

            var config = {
                form : 'form',
                validate : {
                    'name' : {
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

            // $('.table').DataTable({
            //     bLengthChange: false
            // });
        });
    </script>
@endsection
