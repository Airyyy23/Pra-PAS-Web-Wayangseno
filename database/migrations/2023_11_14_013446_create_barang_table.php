<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('kategori');
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->date('tanggal_masuk');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
