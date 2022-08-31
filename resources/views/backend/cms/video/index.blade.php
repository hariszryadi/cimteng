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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <style>
        .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
        .toggle.ios .toggle-handle { border-radius: 20px; }
    </style>
    
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">List Video</h5>
        </div>
        <div class="panel-body">
            
            @can('create video')
                <div class="form-group text-left">
                    <a href="{{route('admin.cms.video.create')}}" id="tambah" 
                        class="btn btn-primary">
                        <i class="icon-file-plus"></i>
                        Tambah
                    </a>
                </div>       
            @endcan
            
            <table class="table datatable-basic table-hover table-bordered striped">
                <thead>
                    <tr class="bg-teal-400">
                        <th>No</th>
                        <th>Caption</th>
                        <th>Video</th>
                        <th>Sumber</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    
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
                    url: "{{route('admin.cms.video.index')}}",
                },
                columns: [
                    {data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {data: "caption", name: "caption"},
                    {
                        data: "video",
                        name: "video",
                        render: function (data, type, full, meta) {
                            console.log(full);
                            if (full.source == '1') {
                                return `<video width="360" height="180" controls="controls">
                                        <source src="{{ asset('storage/${data}') }}" type="video/mp4">
                                    </video>`;
                            } else {
                                return `<iframe width="360" height="180" style="margin-top: 6px;" src="http://www.youtube.com/embed/${data}" frameborder="0" allowfullscreen></iframe>`
                            }
                        },
                        orderable: false
                    },
                    {
                        data: "source", 
                        name: "source",
                        render: function (data) {
                            if (data == '1') {
                                return 'File';
                            } else {
                                return 'Link';
                            }
                        }
                    },
                    {
                        data: "status", 
                        name: "status",
                        render: function name(data, type, full, meta) {
                            if (data == '1') {
                                return '<input type="checkbox" class="switch" value="'+full.id+'" data-toggle="toggle" data-style="ios" checked>';
                            } else {
                                return '<input type="checkbox" class="switch" value="'+full.id+'" data-toggle="toggle" data-style="ios">'; 
                            }
                        }, 
                        orderable: false
                    },
                    {data: "action", name: "action", orderable: false}
                ],
                columnDefs: [
                    { width: "5%", "targets": [0] },
                    { width: "25%", "targets": [1] },
                    { width: "10%", "targets": [4] },
                    { className: "text-center", "targets": [1, 2, 3, 4] }
                ],
                "fnDrawCallback": function() {
                    $('.switch').bootstrapToggle({
                        on: 'On',
                        off: 'Off',
                        onstyle: "success",
                        offstyle:"danger" ,
                        size:"mini"
                    });
                }
            });

            $(document).on('click', '#delete', function () {
                var id = $(this).attr('data-id');
                var video = $(this).attr('data-video');
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
                                url: "{{ route('admin.cms.video.destroy') }}",
                                method: "POST",
                                data: {id:id, video:video},
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

            $(document).on('change', '.switch', function () {
                var id = $(this).val();
                $.ajax({
                    url: "{{ route('admin.cms.video.status') }}",
                    method: "POST",
                    data: {id:id},
                    success: function (resp) {
                        $('.datatable-basic').DataTable().ajax.reload();
                        swal('Sukses!', resp.message, 'success');
                    },
                    error: function (resp) {
                        $('.datatable-basic').DataTable().ajax.reload();
                        swal('Error!', resp.statusText, 'error');
                    }
                })
            })
        })
    </script>
@endsection