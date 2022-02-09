@extends('karyawan.app')

@section('tittle')
    Input Customer
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary mt-lg-5">
          <div class="card-header">
            <h3 class="card-title">Input Customer</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" name="namaLengkap" class="form-control" id="namaLengkap" placeholder="Nama Lengkap">
                    </div>

                    <div class="col">
                        <label for="noTelp">Nomer Telp</label>
                        <input type="number" name="noTelp" class="form-control" id="noTelp" placeholder="0821-2312-9346">
                    </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="hargaBeli">Alamat</label>
                        {{-- <div class="container-fluid"> --}}
                            <textarea class="form-control" placeholder="jl.pemuda No.13, surabaya" name="alamat" id="alamat" cols="70" rows="4"></textarea>
                        {{-- </div> --}}
                    </div>

                    <div class="col">
                        <label for="jenisKelamin">Jenis Kelamin</label>
                        <select class="custom-select rounded-0" id="jenisKelamin">
                            <option>Jenis kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="peremmpuan">Perempuan</option>
                        </select>
                    </div>
                </div>
              </div>

              <div class="form-group">
                
                <div class="row">

                    <div class="col">
                        <label for="limit">Quantity</label>
                        <input type="number" class="form-control" id="limit" name="limit" placeholder="Limit">
                    </div>
                    
                    <div class="col">

                    </div>
                          {{-- <div class="input-group-append mt-3">
                            <span class="input-group-text">Upload</span>
                          </div> --}}
                    </div>

                    
                </div>

              </div>

              <div class="form-group ml-lg-3">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            <!-- /.card-body -->
            
              
            </div>
          </form>
        </div>
      </div>
    </div>
    
@endsection