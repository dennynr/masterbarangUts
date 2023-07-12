@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3 text-light">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('barang.create') }}" class="btn btn-sm shadow text-light fs-5" style="background-color: #78c0a8">+ <i class="bi bi-box-seam"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive rounded-4 bg-light p-4">
            <table class="table table-striped mb-2 bg-white shadow">
                <thead style="background-color:#f07818" class="text-light">
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Barang</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $barangku)
                        <tr>
                            <td>{{ $barangku->nama_barang }}</td>
                            <td>{{ $barangku->harga_barang }}</td>
                            <td>{{ $barangku->deskripsi_barang }}</td>
                            <td>{{ $barangku->satuan_name }}</td>
                            <td>@include('barang.actions')</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
