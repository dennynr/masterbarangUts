<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'kode_satuan' => 'kg',
                'nama_satuan' => 'Kilogram'
            ],
            [
                'kode_satuan' => 'l',
                'nama_satuan' => 'liter',
            ],
            [
                'kode_satuan' => 'm',
                'nama_satuan' => 'meter',
            ],
        ]);
    }
}
