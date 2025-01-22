<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_transaksi', 
        'nama_peminjam', 
        'divisi', 
        'tgl_peminjaman', 
        'kode_barang', 
        'nama_barang', 
        'jumlah', 
        'keterangan'
    ];

    public function barang()
    {
        return $this->belongsTo(DataBarang::class, 'kode');
    }
}
