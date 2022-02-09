@extends('admin.app')

@section('tittle')

  Beranda
    
@endsection

@section('content-admin')

{{-- @section('content') --}}

    <!-- Small boxes (Stat box) -->
    <div class="row">
        
      {{-- Col Pemasukan --}}
        <div class="col">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><sup style="font-size: 20px">Rp.500.000</sup></h3>

              <p>Pemasukan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        {{-- Col Customer --}}
        <div class="col">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><sup style="font-size: 20px">29</sup></h3>

              <p>Customer</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        {{-- Col Pengeluaran --}}
        <div class="col">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
                <h3><sup style="font-size: 20px">Rp.300.000</sup></h3>

              <p>Pengeluaran</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <!-- BAR CHART -->
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Bar Chart</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
  

      <!-- /.row -->
      
      <!-- /.row (main row) -->
    
{{-- @endsection --}}
    
@endsection