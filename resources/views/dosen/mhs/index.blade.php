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
                </div>
                <div class="col-md-4 card-body">
                            <label>Proses</label>
                            <div class="input-group input-sm">
                                <select name="status" ng-model="input.status" ng-value="input.status" class="form-control input-sm" ng-change="search()" required>
                                    <option value="2">Semua</option>
                                    <option value="3">Bimbingan</option>
                                    <option value="4">Daftar Ujian</option>
                                    <option value="5">Selesai</option>
                                </select>
                            </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th style="width:0px">No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>No Hp</th>
                                    <th>Pembimbing</th>
                                    <th>Waktu Daftar</th>
                                    <th>Status</th>
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
@endsection
@section('js')
<!-- js page -->
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>