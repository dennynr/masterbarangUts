<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id('kode_barang')->unique();
            $table->string('nama_barang');
            $table->integer('harga_barang');
            $table->string('deskripsi_barang');
            $table->unsignedBigInteger('satuan_barang')->constrained();
            $table->foreign('satuan_barang')->references('id')->on('satuan');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
