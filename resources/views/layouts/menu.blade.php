@extends('layouts.template')
@section('css')
<!-- css page -->
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
                    <h4 class="float-start">{{$title}}</h4>
                    <button class="btn btn-icon icon btn-primary float-end me-1">
                        <i class="bi bi-arrow-repeat"></i> Button
                    </button>
                </div>
                <div class="card-body">
                    Menu
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@section('js')
<!-- js page -->
@endsection