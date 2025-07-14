@extends('layouts.template')
@section('css')
<!-- css page -->
<link rel="stylesheet" href="{{url('/template')}}/assets/compiled/css/iconly.css">
@endsection
@section('content')
<div id="main-content">
    <div class="page-heading">
        <h3>Sistem Cerdas Tugas Akhir</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Mahasiswa Bimbingan</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
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
<!-- Need: Apexcharts -->
<script src="{{url('/template')}}/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="{{url('/template')}}/assets/static/js/pages/dashboard.js"></script>
@endsection