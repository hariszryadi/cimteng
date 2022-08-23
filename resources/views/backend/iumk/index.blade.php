@extends('layouts.backend.master')

@section('title-header')
    IUMK
@endsection

@section('menus')
    IUMK
@endsection

@section('submenus')
    
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">List IUMK</h5>
        </div>
        <div class="panel-body">

            {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(9)->first()->create_right == true) --}}
                <div class="form-group text-left">
                    <a href="{{route('admin.iumk.create')}}" id="tambah"
                        class="btn btn-primary">
                        <i class="icon-file-plus"></i>
                        Tambah
                    </a>
                </div>
            {{-- @endif --}}

            <table class="table datatable-basic table-hover table-bordered striped">
                <thead>
                    <tr class="bg-teal-400">
                        <th>No</th>
                        <th>No IUMK</th>
                        <th>Nama Perusahaan</th>
                        <th>Lokasi Perusahaan</th>
                        <th>Barang Dagangan</th>
                        <th>Kelurahan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            var _token = '{{ csrf_token() }}';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': _token
                }
            });

            $('.datatable-basic').DataTable({
                processing: true,
                serverside: true,
                autoWidth: false,
                bLengthChange: false,
                pageLength: 10,
                ajax: {
                    url: "{{route('admin.iumk.index')}}",
                },
                columns: [
                    {data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {data: "no_iumk", name: "no_iumk"},
                    {data: "name_company", name: "name_company"},
                    {data: "location_company", name: "location_company"},
                    {data: "merchandise", name: "merchandise"},
                    {data: "urban_village.name", name: "urban_village_id"},
                    {data: "action", name: "action", orderable: false}
                ],
                columnDefs: [
                    { width: "5%", "targets": [0] },
                    { width: "10%", "targets": [6] },
                    { className: "text-center", "targets": [6] }
                ]
            });
            
            $(document).on('click', '#delete', function () {
                var id = $(this).attr('data-id');
                swal({
                    title: "Apakah Anda Yakin Akan Menghapus Data ini?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya, Hapus!",
                    cancelButtonText: "Kembali",
                    closeOnConfirm: false,
                    closeOnCancel: true
                    }, function(result) {
                        if (result) {
                            $.ajax({
                                url: "{{ route('admin.iumk.destroy') }}",
                                method: "POST",
                                data: {id:id},
                                success: function (resp) {
                                    $('.datatable-basic').DataTable().ajax.reload();
                                    swal('Sukses!', resp.message, 'success');
                                },
                                error: function (resp) {
                                    swal('Error!', resp.message, 'error');
                                }
                            })
                        }
                    }
                )
            })
        })
    </script>
@endsection
