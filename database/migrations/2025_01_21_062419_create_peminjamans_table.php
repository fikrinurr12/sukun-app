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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id(); // Ini akan menghasilkan unsignedBigInteger
            $table->string('no_transaksi')->unique();
            $table->string('nama_peminjam');
            $table->string('divisi');
            $table->date('tgl_peminjaman');
            $table->foreignId('kode_barang')->constrained('data_barangs');
            $table->string('nama_barang');
            $table->integer('jumlah');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};
