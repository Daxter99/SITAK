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
        <div class="card-body"> 
            <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">PEMBIMBING 1</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control" name="fname"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nidn">NIDN</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="nidn" id="nidn" class="form-control" name="nidn"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="contact-info-horizontal">No HP</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="contact-info-horizontal" class="form-control" name="contact"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="password-horizontal">Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="password-horizontal" class="form-control" name="email"
                                                placeholder="">
                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">PEMBIMBING 2</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control" name="fname"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nidn">NIDN</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="nidn" id="nidn" class="form-control" name="nidn"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="contact-info-horizontal">No HP</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="contact-info-horizontal" class="form-control" name="contact"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="password-horizontal">Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="password-horizontal" class="form-control" name="email"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </div>
    </div>
</div>

@endsection
@section('js')
<!-- js page -->
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>