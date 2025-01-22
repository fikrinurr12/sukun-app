<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_transaksi',
        'tgl_transaksi',
        'no_invoice',
        'kode_barang',
        'jumlah_stok_baik',
        'harga',
        'keterangan',
    ];
}
