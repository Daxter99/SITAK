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
                    <h4 class="float-md-start">Berkas Akhir</h4>
                </div>
                
                <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-8">
                                <div class="mb-3">
                                    <label for="krs" class="form-label">Manuskrip (Laporan)</label>
                                    <input class="form-control" type="file" id="krs" required>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-8">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Publikasi Ilmiah</label>
                                    <input class="form-control" type="file" id="pbimbingan" required>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-8">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Poster</label>
                                    <input class="form-control" type="file" id="transkip" required>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-md-start">Detail Jurnal</h4>
                </div>
                <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <textarea class="form-control" id="judul" rows="1"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Judul dalam English</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Penulis</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Abstrak</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>
                        <button class="btn btn-icon icon btn-primary float-md-end" id="btn-simpan">
                            <i class="bi bi-plus-lg"></i> Simpan
                        </button>
                </div>
                
            </div>
        </section>
    </div>
</div>


@endsection
@section('js')
<!-- js page -->
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>