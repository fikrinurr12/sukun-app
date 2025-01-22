<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengembalian extends Model
{
    use HasFactory;

    protected $fillable = [
        'peminjaman_id',
        'jumlah_baik',
        'jumlah_rusak',
        'keterangan',
    ];

    public function peminjaman(){
        return $this->belongsTo(Peminjaman::class);
    }
}
