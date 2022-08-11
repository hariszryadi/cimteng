@extends('layouts.backend.master')

@section('title-header')
    Sambutan Camat
@endsection

@section('menus')
    CMS
@endsection

@section('submenus')
    Sambutan Camat
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Sambutan Camat</h5>
        </div>
        <div class="panel-body">
            
            <table class="table datatable-basic table-hover table-bordered striped">
                <thead>
                    <tr class="bg-teal-400">
                        <th>Foto</th>
                        <th>Konten</th>
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
                bFilter: false,
                pageLength: 10,
                ajax: {
                    url: "{{route('admin.cms.greeting.index')}}",
                },
                columns: [
                    {
                        data: "photo",
                        name: "photo",
                        render: function (data, type, full, meta) {
                            return `<a href="{{ asset('storage/${data}') }}" data-fancybox="images">
                                            <img src="{{ asset('storage/${data}') }}" alt="" class="img-rounded img-preview" onerror="this.src='{{asset('assets/admin/images/placeholder.jpg')}}';">
                                       </a>`;
                        },
                        orderable: false
                    },
                    {
                        data: "content", 
                        name: "content",
                        render: function (data, type, full, meta) {
                            return $("<div/>").html(data).text(); 
                        }, 
                        orderable: false
                    },
                    {data: "action", name: "action", orderable: false}
                ],
                columnDefs: [
                    { width: "25%", "targets": [0] },
                    { width: "10%", "targets": [2] },
                    { className: "text-center", "targets": [0, 2] }
                ]
            });
        })
    </script>
@endsection