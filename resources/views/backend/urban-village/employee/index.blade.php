@extends('layouts.backend.master')

@section('title-header')
    Kepegawaian
@endsection

@section('menus')
    Kelurahan
@endsection

@section('submenus')
    Kepegawaian
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">List Kepegawaian Kelurahan</h5>
        </div>
        <div class="panel-body">
            
            {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(7)->first()->create_right == true) --}}
                <div class="form-group text-left">
                    <a href="{{route('admin.urbanVillage.employee.create')}}" id="tambah" 
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
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Pangkat</th>
                        <th>Pendidikan</th>
                        <th>Kelurahan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

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
                    url: "{{route('admin.urbanVillage.employee.index')}}",
                },
                columns: [
                    {data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {
                        data: "avatar",
                        name: "avatar",
                        render: function (data, type, full, meta) {
                            return `<a href="{{ asset('storage/${data}') }}" data-fancybox="images">
                                            <img src="{{ asset('storage/${data}') }}" alt="" class="img-rounded img-preview">
                                       </a>`;
                        },
                        orderable: false
                    },
                    {data: "name", name: "name"},
                    {data: "position", name: "position"},
                    {data: "rank", name: "rank"},
                    {data: "education", name: "education"},
                    {data: "urban_village.name", name: "urban_village_id", orderable: false},
                    {data: "action", name: "action", orderable: false}
                ],
                columnDefs: [
                    { width: "5%", "targets": [0] },
                    { width: "20%", "targets": [1] },
                    { width: "10%", "targets": [7] },
                    { className: "text-center", "targets": [1, 7] }
                ]
            });

            $(document).on('click', '#delete', function () {
                var id = $(this).attr('data-id');
                var avatar = $(this).attr('data-avatar');
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
                                url: "{{ route('admin.urbanVillage.employee.destroy') }}",
                                method: "POST",
                                data: {id:id, avatar:avatar},
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