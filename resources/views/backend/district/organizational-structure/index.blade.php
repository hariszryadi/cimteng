@extends('layouts.backend.master')

@section('title-header')
    Struktur Organisasi
@endsection

@section('menus')
    Kecamatan
@endsection

@section('submenus')
    Struktur Organisasi
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Struktur Organisasi</h5>
        </div>
        <div class="panel-body">
            
            <table class="table datatable-basic table-hover table-bordered striped">
                <thead>
                    <tr class="bg-teal-400">
                        <th>File</th>
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
                    url: "{{route('admin.district.organizationalStructure.index')}}",
                },
                columns: [
                    {
                        data: "file",
                        name: "file",
                        render: function (data, type, full, meta) {
                            return `<a href="{{ asset('storage/${data}') }}" target="_blank">Struktur Organisasi</a>`;
                        },
                        orderable: false
                    },
                    {data: "action", name: "action", orderable: false}
                ],
                columnDefs: [
                    { width: "10%", "targets": [1] },
                    { className: "text-center", "targets": [1] }
                ]
            });
        })
    </script>
@endsection