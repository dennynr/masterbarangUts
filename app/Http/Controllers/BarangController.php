<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Stock Barang';

        $barang = Barang::leftJoin('satuan', 'barang.satuan_barang', '=', 'satuan.id')
            ->select('barang.*', 'barang.kode_barang as barang_id', 'satuan.nama_satuan as satuan_name')
            ->get();

        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barang' => $barang,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    // ...

    public function create()
    {
        $pageTitle = 'Create Barang';
        $satuan = Satuan::all();
        return view('barang.create', compact('pageTitle', 'satuan'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_barang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $barang = new Barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_barang = $request->satuan_barang;
        $barang->save();

        return redirect()->route('barang.index');
    }





    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Barang Detail';
        // RAW SQL QUERY
        $barang = Barang::leftJoin('satuan', 'barang.satuan_barang', '=', 'satuan.id')
            ->select('barang.*', 'barang.kode_barang as barang_id', 'satuan.nama_satuan as satuan_name')
            ->where('barang.kode_barang', $id)
            ->first();

        return view('barang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';
        // ELOQUENT
        $satuan = Satuan::all();
        $barang = Barang::find($id);
        return view(
            'barang.edit',
            compact(
                'pageTitle',
                'satuan',
                'barang'

            )
        );
    }
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan' => 'required' // tambahkan validasi untuk kolom 'satuan'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = Barang::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_barang = $request->satuan;
        $barang->save();
        return redirect()->route('barang.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT
        Barang::find($id)->delete();
        return redirect()->route('barang.index');
    }

}
