<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'nama_barang' => 'Beras',
                'harga_barang' => 7000 ,
                'deskripsi_barang' => 'memiliki kualitas tinggi',
                'satuan_barang' => 1
            ],
            [
                'nama_barang' => 'susu',
                'harga_barang' => 10000 ,
                'deskripsi_barang' => 'memiliki kualitas tinggi',
                'satuan_barang' => 2
            ],
            [
                'nama_barang' => 'Penggaris',
                'harga_barang' => 1000 ,
                'deskripsi_barang' => 'memiliki kualitas tinggi',
                'satuan_barang' => 3
            ],
        ]);
    }
}
