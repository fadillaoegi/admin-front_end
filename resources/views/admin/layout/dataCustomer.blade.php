@extends('admin.app')

@section('tittle')
    dataCustomer
@endsection

@section('content-admin')

<div class="row">
    <div class="col-md-12">
      <div class="card mt-lg-5">
        <div class="card-header">
          <h3 class="card-title text-success"><strong>Tabel Customer</strong></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>jenis kelamin</th>
                <th>Limit</th>
                <th>No. Telp</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>1</td>
                <td>Sukirman sumantolo</td>
                <td>
                  {{-- <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                  </div> --}} Jln. belitung no.13, kel.wono kec.kromo
                </td>
                <td>Perempuan</td>
                <td>100</td>
                <td>0821-3452-9110</td>
                <td>

                  <button class="btn btn-warning">Detail</button>
                  
                </td>
              </tr>

              <tr>
                <td>2</td>
                <td>Sukirman sumantolo</td>
                <td>
                  {{-- <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                  </div> --}} Jln. belitung no.13, kel.wono kec.kromo
                </td>
                <td>Perempuan</td>
                <td>100</td>
                <td>0821-3452-9110</td>
                <td>

                  <button class="btn btn-warning">Detail</button>
                  
                </td>
              </tr>

              <tr>
                <td>3</td>
                <td>Sukirman sumantolo</td>
                <td>
                  {{-- <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                  </div> --}} Jln. belitung no.13, kel.wono kec.kromo
                </td>
                <td>Perempuan</td>
                <td>100</td>
                <td>0821-3452-9110</td>
                <td>

                  <button class="btn btn-warning">Detail</button>
                  
                </td>
              </tr>

              

              {{-- <tr>
                <td>2.</td>
                <td>Clean database</td>
                <td>
                  <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" style="width: 70%"></div>
                  </div>
                </td>
                <td><span class="badge bg-warning">70%</span></td>
              </tr> --}}

              {{-- <tr>
                <td>3.</td>
                <td>Cron job running</td>
                <td>
                  <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-primary" style="width: 30%"></div>
                  </div>
                </td>
                <td><span class="badge bg-primary">30%</span></td>
              </tr>

              <tr>
                <td>4.</td>
                <td>Fix and squish bugs</td>
                <td>
                  <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 90%"></div>
                  </div>
                </td>
                <td><span class="badge bg-success">90%</span></td>
              </tr> --}}
              
            </tbody>
          </table>
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
        <!-- /.card-body -->
    </div>
    
@endsection