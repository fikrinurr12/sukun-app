<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'foto',
        'nama',
        'merk',
        'kategori',
        'spesifikasi',
        'keterangan',
        'harga_terakhir',
        'stok_total_baik',
        'stok_total_rusak',
        'stok_tersedia'
    ];

    protected $casts = [
        'harga_terakhir' => 'decimal:2',
        'stok_total_baik' => 'integer',
        'stok_total_rusak' => 'integer',
        'stok_tersedia' => 'integer',
    ];
}
