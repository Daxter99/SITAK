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
                    <h4 class="float-md-start">Setting</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="table">
                        <thead>
                            <tr>
                                <th style="width:0px">No</th>
                                <th>Nama</th>
                                <th>Isi</th>
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