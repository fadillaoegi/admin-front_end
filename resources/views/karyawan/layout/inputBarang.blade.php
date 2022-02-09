@extends('karyawan.app')

@section('tittle')
    Input Barang
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary mt-lg-5">
          <div class="card-header">
            <h3 class="card-title">Input Barang</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="namabarang">Nama Barang</label>
                        <input type="text" name="namaBarang" class="form-control" id="namabarang" placeholder="Nama Barang">
                    </div>

                    <div class="col">
                        <label for="hargaBeli">Harga Beli</label>
                        <input type="number" name="hargaBeli" class="form-control" id="hargaBeli" placeholder="Rp.200.000">
                    </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="deskripsiBarang">Deskripsi Barang</label>
                        <textarea placeholder="contoh : Ayam petelur adalah jenis ayam yang selalu bertelur" name="deskripsiBarang" id="deskripsiBarang" cols="78" rows="4"></textarea>
                    </div>

                    <div class="col">
                        <label for="hargaJual">Harga Jual</label>
                        <input type="number" name="hargaBJual" class="form-control" id="hargaJual" placeholder="Rp.400.000">
                    </div>
                </div>
              </div>

              <div class="form-group">
                
                <div class="row">

                    <div class="col">
                        <label for="quantity">Quantity</label>
                        <input type="text" class="form-control" id="quantity" placeholder="quantity">
                    </div>
    
                    <div class="col">
                        <label for="gambarBarang">Gambar Barang</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambarBarang">
                            <label class="custom-file-label nv-hoverValue" for="gambarBarang">Choose file</label>
                          </div>
                          {{-- <div class="input-group-append mt-3">
                            <span class="input-group-text">Upload</span>
                          </div> --}}
                    </div>

                    
                </div>

              </div>

              <div class="form-group">
               
              </div>
            <!-- /.card-body -->

            
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection