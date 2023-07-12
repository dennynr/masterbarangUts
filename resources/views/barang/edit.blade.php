@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('barang.update', ['barang' => $barang->kode_barang]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light shadow rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-box-seam fs-1"><i class="bi bi-pencil"></i></i>
                        <h4>Edit barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input class="form-control
        @error('nama_barang') is-invalid @enderror rounded-4" type="text"
                                name="nama_barang" id="nama_barang"
                                value="{{ $errors->any() ? old('nama_barang') : $barang->nama_barang }}"
                                placeholder="Masukkan barang">
                            @error('nama_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('harga_barang')
        is-invalid @enderror rounded-4" type="text"
                                name="harga_barang" id="harga_barang"
                                value="{{ $errors->any() ? old('harga_barang') : $barang->harga_barang }}"
                                placeholder="Masukkan Harga Barang">
                            @error('harga_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control @error('deskripsi_barang')
        is-invalid @enderror rounded-4" type="text "
                                name="deskripsi_barang" id="deskripsi_barang"
                                value="{{ $errors->any() ? old('deskripsi_barang') : $barang->deskripsi_barang }}"
                                placeholder="Enter Deskripsi barang">
                            @error('deskripsi_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-select rounded-4">
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('satuan');
                                    } else {
                                        $selected = $barang->satuan_barang;
                                    }
                                @endphp
                                @foreach ($satuan as $satuanku)
                                    <option value="{{ $satuanku->id }}"
                                        {{ $selected == $satuanku->id ? 'selected' : '' }}>
                                        {{ $satuanku->kode_satuan .
                                            ' -
                                                ' .
                                            $satuanku->nama_satuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-danger rounded-5 shadow btn-lg mt-3"><i
                                    class="bi-arrow-left-circle
        me-2"></i>Kembali</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-success shadow btn-lg mt-3 rounded-5"><i
                                    class="bi-check-circle me-2"></i> Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
    @endsection
