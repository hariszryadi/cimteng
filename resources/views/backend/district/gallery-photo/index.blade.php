@extends('layouts.backend.master')

@section('title-header')
    Galeri Foto
@endsection

@section('menus')
    Kecamatan
@endsection

@section('submenus')
    Galeri Foto
@endsection

@section('content')
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <style>
        .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
        .toggle.ios .toggle-handle { border-radius: 20px; }
    </style>
    
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">List Galeri Foto</h5>
        </div>
        <div class="panel-body">
            
            @can('create gallery photo')
                <div class="form-group text-left">
                    <a href="{{route('admin.district.galleryPhoto.create')}}" id="tambah" 
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
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Modal header</h3>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                    url: "{{route('admin.district.galleryPhoto.index')}}",
                },
                columns: [
                    {data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {data: "title", name: "title"},
                    {data: "created_at", name: "created_at"},
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
                    { width: "25%", "targets": [2] },
                    { width: "10%", "targets": [4] },
                    { className: "text-center", "targets": [3, 4] }
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

            $(document).on('click', '#show', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: "{{ route('admin.district.galleryPhoto.show') }}",
                    method: "POST",
                    data: {id:id},
                    success: function (resp) {
                        // console.log(resp.data);
                        var images = [];
                        $.each(resp.data, function (k, v) {
                            images.push({src: `{{ asset('storage/${v.photo}') }}`, opts: {thumb: `{{ asset('storage/${v.photo}') }}`}})
                        })
                        // console.log(images);
                        $.fancybox.open(images, {
                            loop : false,
                            thumbs : {
                                autoStart : true,
                            }
                        });
                    },
                    error: function (xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                })    
            })

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
                                url: "{{ route('admin.district.galleryPhoto.destroy') }}",
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

            $(document).on('change', '.switch', function () {
                var id = $(this).val();
                $.ajax({
                    url: "{{ route('admin.district.galleryPhoto.status') }}",
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