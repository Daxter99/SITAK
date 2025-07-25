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
                    <h4 class="float-md-start">Berkas {{$title}}</h4>
                </div>
                <div class="col-md-12 card-body"> 
                    <div class="form-group">
                            <label for="judul">Judul Skripsi</label>
                            <input type="text" class="form-control" id="basicInput" placeholder="Isi judul">
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Kesamaan</th>
                                    <th>Penulis</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label for="krs" class="form-label">KRS</label>
                                    <input class="form-control" type="file" id="krs" required>
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Permohonan Bimbingan</label>
                                    <input class="form-control" type="file" id="pbimbingan" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Transkip</label>
                                    <input class="form-control" type="file" id="transkip" required>
                                </div>
                                <a href="#" class="btn icon icon-left btn-success"><i data-feather="check-circle"></i>
                                Ajukan</a>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </div>
</div>

@endsection
@section('js')
<!-- js page -->
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>