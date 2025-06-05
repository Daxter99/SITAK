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
                    <h4 class="float-md-start">{{$title}} Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th style="width:0px">No</th>
                                    <th>Log Name</th>
                                    <th>Description</th>
                                    <th>Event</th>
                                    <th>Created At</th>
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
<script>
    $(function() {
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
                url: '{{url("/")}}/model/activity',
                type: 'GET',
            },
            autoWidth: false,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'log_name',
                    name: 'log_name'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'event',
                    name: 'event'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
            ]
        });
        table.on('draw', setTableColor)
    })
</script>
@endsection