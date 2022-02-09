@extends('karyawan.app')

@section('tittle')
    Test
@endsection

@section('content')
<br>
<div class="container-fluid mt-lg-5">

    <div class="float-right align-items-center mb-4">
        {{-- <h1 class="h3 mb-0 text-gray-800">Data Barang</h1> --}}
        
    </div>

    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold">Data Customer</h4>
            <div class="float-right">
                <a href="#"
                class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Barang</a>
            </div>
        </div>
        
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-responsive-md table-bordered" id="dataBarang">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Limit</th>
                            <th>No Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Limit</th>
                            <th>No Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {{-- @foreach ($portfolio as $item) --}}
                            <tr>
                                <td class="text-black">1</td>
                                <td class="text-black">Sancoko Dinoyo</td>
                                <td class="text-black">Jl.Pemuda No.13, kec.wiro kel.sableng</td>
                                <td class="text-black">perempuan</td>
                                <td class="text-black">0897-2234-5674</td>
                                <td class="text-black">45</td>
                                <td>
                                    <a href="#"
                                        class="btn btn-success"><i class="fas fa-edit"></i></a>

                                    <a href="#"
                                        class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    
                                    <a href="#"
                                        class="btn btn-warning">Detail</a>

                                </td>
                            </tr>
                        {{-- @endforeach --}}

                        <tr>
                            <td class="text-black">1</td>
                            <td class="text-black">Sancoko Dinoyo</td>
                            <td class="text-black">Jl.Pemuda No.13, kec.wiro kel.sableng</td>
                            <td class="text-black">perempuan</td>
                            <td class="text-black">0897-2234-5674</td>
                            <td class="text-black">45</td>
                            <td>
                                <a href="#"
                                    class="btn btn-success"><i class="fas fa-edit"></i></a>

                                <a href="#"
                                    class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                
                                <a href="#"
                                    class="btn btn-warning">Detail</a>

                            </td>
                        </tr>

                        <tr>
                            <td class="text-black">1</td>
                            <td class="text-black">Sancoko Dinoyo</td>
                            <td class="text-black">Jl.Pemuda No.13, kec.wiro kel.sableng</td>
                            <td class="text-black">perempuan</td>
                            <td class="text-black">0897-2234-5674</td>
                            <td class="text-black">45</td>
                            <td>
                                <a href="#"
                                    class="btn btn-success"><i class="fas fa-edit"></i></a>

                                <a href="#"
                                    class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                
                                <a href="#"
                                    class="btn btn-warning">Detail</a>

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $('#dataBarang').DataTable();
    });
</script>
@endpush
