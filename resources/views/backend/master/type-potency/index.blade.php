@extends('layouts.backend.master')

@section('title-header')
    Jenis Usaha
@endsection

@section('menus')
    Master
@endsection

@section('submenus')
    Jenis Usaha
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">List Jenis Usaha</h5>
        </div>
        <div class="panel-body">

            {{-- @if (auth()->user()->roles()->first()->permission_role()->byId(9)->first()->create_right == true) --}}
                <div class="form-group text-left">
                    <a href="{{route('admin.master.typePotency.create')}}" id="tambah"
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
                        <th>Jenis Usaha</th>
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
                    url: "{{route('admin.master.typePotency.index')}}",
                },
                columns: [
                    {data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {data: "name", name: "name", orderable: false},
                    {data: "action", name: "action", orderable: false}
                ],
                columnDefs: [
                    { width: "5%", "targets": [0] },
                    { width: "10%", "targets": [2] },
                    { className: "text-center", "targets": [2] }
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
                                url: "{{ route('admin.master.typePotency.destroy') }}",
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
