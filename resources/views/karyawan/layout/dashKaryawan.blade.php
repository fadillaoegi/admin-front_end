@extends('karyawan.app')

@section('tittle')
  dashboard
@endsection

@section('content')

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset('./adminLTE/dist/img/fadil.jpg') }}" alt="" height="60" width="60">
  </div>
    <!-- Info boxes -->
<div class="row mt-lg-2">

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  {{-- Row Card --}}
  <div class="col-6 col-sm-6 col-md-6 mt-lg-4 mb-lg-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

      {{-- Data Barang --}}
      <div class="info-box-content">
        <span class="info-box-text">Data Barang</span>
        <span class="info-box-number">760</span>
      </div>

    </div>
    
  </div>
  {{-- End Data Barang --}}

  {{-- Data Customer --}}
  <div class="col-6 col-sm-6 col-md-6 mt-lg-4 mb-lg-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Data Customer</span>
        <span class="info-box-number">450</span>
      </div>
      
    </div>
    
  </div>
  {{-- End Data Customer --}}
</div>
<!-- End row card -->

<!-- BAR CHART -->
<div class="card card-success">
  {{-- <div class="card-header">
    <h3 class="card-title">Bar Chart</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div> --}}
  <div class="card-body">
    <div class="chart">
      <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
    </div>
  </div>
  <!-- /.card-body -->
</div>
{{-- End Bar Chart --}}
@endsection
  {{-- fdlml_ --}}