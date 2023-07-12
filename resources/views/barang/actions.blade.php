<div class="d-flex">
    <a href="{{ route('barang.show', ['barang' => $barangku->kode_barang]) }}" class="btn text-light btn-sm me-2 shadow" style="background-color: #78c0a8"><i class="bi bi-eye"></i></i></a>
    <a href="{{ route('barang.edit', ['barang' => $barangku->kode_barang]) }}" class="btn text-light btn-sm me-2 shadow" style="background-color: #248cfc"><i
            class="bi-pencil-square"></i></a>
    <div>
        <form action="{{ route('barang.destroy', ['barang' => $barangku->kode_barang]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger shadow btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
