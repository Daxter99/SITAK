@extends('layouts.template')
@section('css')
<!-- css page -->
<link rel="stylesheet" href="{{url('/')}}/template/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />
<link rel="stylesheet" href="{{url('/')}}/template/assets/compiled/css/table-datatable-jquery.css" />
@endsection
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h3>{{$title}}</h3>
                </div>
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcrumb-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-md-start">Kelola Data {{$title}}</h4>
                    <button class="btn btn-icon icon btn-primary float-md-end" id="btn-tambah">
                        <i class="bi bi-plus-lg"></i> Tambah
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th style="width:0px">No</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="modal fade text-left modal-borderless" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah {{$title}}</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form-vertical" id="form-tambah" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nama_persyaratan">Nama Mahasiswa</label>
                                <input type="text" class="form-control" name="nama_persyaratan">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary ml-1" id="btn-submit">Submit</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade text-left modal-borderless" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit {{$title}}</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form-vertical" id="form-edit" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nama_persyaratan">Nama Mahasiswa</label>
                                <input type="text" class="form-control" name="nama_persyaratan">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary ml-1" id="btn-update">Update</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- js page -->
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script>
    $(function() {
        // form related
        const modalTambah = new bootstrap.Modal('#modal-tambah', {
            backdrop: 'static'
        });
        $('#btn-tambah').click(function() {
            modalTambah.show();
        })
        const modalEdit = new bootstrap.Modal('#modal-edit', {
            backdrop: 'static'
        });

        $(document.body).on('click', '.btn-edit', function() {
            $('#form-edit input[name=nama_persyaratan]').val($(this).attr('data-nama_persyaratan'));
            $('#btn-update').attr('data-id', $(this).attr('data-id'));
            modalEdit.show();
        })

        // tabel related
        const setTableColor = () => {
            document.querySelectorAll('.dataTables_paginate .pagination').forEach(dt => {
                dt.classList.add('pagination-primary')
            })
        }
        setTableColor()

        let table = $('#table').DataTable({
            serverSide: true,
            ajax: {
                url: '{{url("/")}}/model/persyaratan',
                type: 'GET',
            },
            autoWidth: false,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'nama_persyaratan',
                    name: 'nama_persyaratan'
                },
                {
                    data: 'action',
                    name: 'action',
                    render: function(data, type, row) {
                        return `<div class="text-nowrap"><button class="btn icon btn-sm me-1 btn-warning btn-edit" data-id="${row.id}" data-nama_persyaratan="${row.nama_persyaratan}"><i class="bi bi-pencil-fill"></i></button><button class="btn icon btn-sm me-1 btn-danger btn-delete" data-id="${row.id}"><i class="bi bi-trash-fill"></i></button></div>`

                    },
                    orderable: false,
                    searchable: false,
                    class: 'text-start'
                },
            ]
        });
        table.on('draw', setTableColor)

        // submit related
        $('#btn-submit').click(function() {
            $('#form-tambah :input').each(function() {
                this.classList.remove('is-invalid')
            })
            $('.invalid-feedback').each(function() {
                $(this).remove();
            })
            $.ajax({
                url: '{{url("/")}}/model/persyaratan',
                data: new FormData(document.querySelector('#form-tambah')),
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(response) {
                    if (response == "sukses") {
                        modalTambah.hide();
                        Toastify({
                            text: `Berhasil menambah data!`,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "#34A853",
                        }).showToast()
                        $('#table').DataTable().ajax.reload();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: JSON.stringify(response)
                        })
                    }
                },
                error: function(response) {
                    let obj = JSON.parse(response.responseText);
                    $.each(obj.errors, function(index, value) {
                        $(`#form-tambah [name='${index}']`).addClass('is-invalid');
                        $(`#form-tambah [name='${index}']`).after(`<div class="invalid-feedback"><i class="bx bx-radio-circle"></i>${value[0]}</div>`)
                    })
                }
            });
        })

        $('#btn-update').click(function() {
            $('#form-edit :input').each(function() {
                this.classList.remove('is-invalid')
            })
            $('.invalid-feedback').each(function() {
                $(this).remove();
            })
            let data = new FormData(document.querySelector('#form-edit'));
            let id = $(this).attr('data-id');
            $.ajax({
                url: `{{url("/")}}/model/persyaratan/${id}`,
                data: data,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(response) {
                    if (response == "sukses") {
                        modalEdit.hide();
                        Toastify({
                            text: `Berhasil mengubah data!`,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "#34A853",
                        }).showToast()
                        $('#table').DataTable().ajax.reload(null, false)
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: JSON.stringify(response)
                        })
                    }
                },
                error: function(response) {
                    let obj = JSON.parse(response.responseText);
                    $.each(obj.errors, function(index, value) {
                        $(`#form-edit [name='${index}']`).addClass('is-invalid');
                        $(`#form-edit [name='${index}']`).after(`<div class="invalid-feedback"><i class="bx bx-radio-circle"></i>${value[0]}</div>`)
                    })
                }
            });
        })

        $(document.body).on('click', '.btn-delete', function() {
            let id = $(this).attr('data-id');
            Swal.fire({
                title: 'Yakin?',
                text: "Data akan dihapus dari sistem",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{url("/")}}/model/persyaratan/${id}`,
                        type: 'DELETE',
                        data: {
                            _token: '{{csrf_token()}}',
                            id: id
                        },
                        success: function(data) {
                            if (data == "sukses") {
                                Toastify({
                                    text: `Berhasil menghapus data!`,
                                    duration: 3000,
                                    close: true,
                                    gravity: "top",
                                    position: "center",
                                    backgroundColor: "#34A853",
                                }).showToast()
                                $('#table').DataTable().ajax.reload(null, false)
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: JSON.stringify(data)
                                })
                            }
                        },
                    });
                }
            })
        })
    })
</script>
@endsection