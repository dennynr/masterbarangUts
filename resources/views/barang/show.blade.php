    @extends('layouts.app')
@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light shadow rounded-3 border col-xl-4">
                <div class="mb-3 text-center">
                    <i class="bi bi-box-seam fs-1"></i>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="namaBarang" class="form-label">Nama Barang :</label>
                        <h5>{{ $barang->nama_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="hargaBarang" class="form-label">Harga Barang :</label>
                        <h5>{{ $barang->harga_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Barang :</label>
                        <h5>{{ $barang->deskripsi_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Satuan :</label>
                        <h5>{{ $barang->satuan_name }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('barang.index') }}" class="btn btn-danger rounded-5 shadow btn-lg mt-3"><i
                                class="bi-arrow-left-circle
me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
