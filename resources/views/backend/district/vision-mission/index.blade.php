@extends('layouts.backend.master')

@section('title-header')
    Visi dan Misi
@endsection

@section('menus')
    Kecamatan
@endsection

@section('submenus')
    Visi dan Misi
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Visi dan Misi</h5>
        </div>
        <div class="panel-body">
            
            <table class="table datatable-basic table-hover table-bordered striped">
                <thead>
                    <tr class="bg-teal-400">
                        <th>Visi</th>
                        <th>Misi</th>
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
                    url: "{{route('admin.district.visionMission.index')}}",
                },
                columns: [
                    {
                        data: "vision",
                        name: "vision",
                        render: function (data, type, full, meta) {
                            return $("<div/>").html(data).text(); 
                        }, 
                        orderable: false
                    },
                    {
                        data: "mission", 
                        name: "mission",
                        render: function (data, type, full, meta) {
                            return $("<div/>").html(data).text(); 
                        }, 
                        orderable: false
                    },
                    {data: "action", name: "action", orderable: false}
                ],
                columnDefs: [
                    { className: "text-center", "targets": [2] }
                ]
            });
        })
    </script>
@endsection