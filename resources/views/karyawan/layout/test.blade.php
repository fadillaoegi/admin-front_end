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
            <h6 class="m-0 font-weight-bold">Data Barang</h6>
            <div class="float-right">
                <a href="#"
                class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Barang</a>
            </div>
        </div>
        
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-bordered" id="dataBarang">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Deskripsi barang</th>
                            <th>Foto</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Quantity</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Deskripsi barang</th>
                            <th>Foto</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Quantity</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {{-- @foreach ($portfolio as $item) --}}
                            <tr>
                                <td class="text-black">1dsvwbwbw</td>
                                <td class="text-black">1dsvwbwbw</td>
                                <td class="text-black">1dsvwbwbw</td>
                                <td class="text-black">1dsvwbwbw</td>
                                <td class="text-black">1dsvwbwbw</td>
                                <td class="text-black">1dsvwbwbw</td>
                                <td class="text-black">1dsvwbwbw</td>
                                <td>
                                    <a href="#"
                                        class="btn btn-primary"><i class="fas fa-edit"></i></a>

                                    <a href="#"
                                        class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                </td>
                            </tr>
                        {{-- @endforeach --}}

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
