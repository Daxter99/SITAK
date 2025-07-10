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
                            <li class="breadcrumb-item active" aria-current="page">Kelola {{$title}}</li>
                        </ol>
                    </nav>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-md-start">Tambah Periode Seminar</h4>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-1">
                                    <div class="input-group">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Periode</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">GENAP</a></li>
                                            <li><a class="dropdown-item" href="#">GASAL</a></li>
                                            
                                        </ul>

                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Tahun</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">2025</a></li>
                                            <li><a class="dropdown-item" href="#">2026</a></li>
                                            <li><a class="dropdown-item" href="#">2027</a></li>
                                            <li><a class="dropdown-item" href="#">2028</a></li>
                                            <li><a class="dropdown-item" href="#">2029</a></li>
                                            <li><a class="dropdown-item" href="#">2030</a></li>
                                            
                                        </ul>

                                        <input type="text" class="form-control"
                                            aria-label="Text input with 2 dropdown buttons" placeholder="Tambah Keterangan">                               
                                    </div>
                                </div>
                            
                    </div>
                        <button class="btn btn-icon icon btn-primary float-md-end" id="btn-simpan">
                            <i class="bi bi-plus-lg"></i> Simpan
                        </button>
                    </div>
            </div>
        </section>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th style="width:0px">No</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Progres</th>
                                    <th>Peserta</th>
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
        </div>
    </div>

    

</div>

@endsection
@section('js')
<!-- js page -->
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>