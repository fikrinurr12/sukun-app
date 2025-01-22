<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengembalian extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaksi_keluar_id', 
        'kondisi_baik', 
        'kondisi_rusak', 
        'jumlah', 
        'keterangan'
    ];

    public function transaksiKeluar()
    {
        return $this->belongsTo(Peminjaman::class);
    }
}
