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
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peminjaman_id')->constrained('peminjamans'); // Merujuk ke tabel peminjamans
            $table->integer('kondisi_baik')->default(0); // Jumlah barang yang dikembalikan dalam kondisi baik
            $table->integer('kondisi_rusak')->default(0); // Jumlah barang yang dikembalikan dalam kondisi rusak
            $table->integer('jumlah'); // Jumlah total barang yang dikembalikan
            $table->text('keterangan')->nullable(); // Keterangan tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};
