@extends('layouts.backend.master')

@section('title-header')
    Monografi
@endsection

@section('menus')
    Kelurahan
@endsection

@section('submenus')
    Monografi
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">List Monografi Kelurahan</h5>
        </div>
        <div class="panel-body">

            <table class="table datatable-basic table-hover table-bordered striped">
                <thead>
                    <tr class="bg-teal-400">
                        <th>No</th>
                        <th>Nama Kelurahan</th>
                        <th>Tanggal Update</th>
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
                bFilter: false,
                bPaginate: false,
                bInfo: false,
                // pageLength: 10,
                ajax: {
                    url: "{{route('admin.urbanVillage.monograph.index')}}",
                },
                columns: [
                    {data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {data: "urban_village.name", name: "name"},
                    {data: "updated_at", name: "updated_at"},
                    {data: "action", name: "action", orderable: false}
                ],
                columnDefs: [
                    { width: "5%", "targets": [0] },
                    { width: "10%", "targets": [3] },
                    { className: "text-center", "targets": [3] }
                ]
            });
        })
    </script>
@endsection
