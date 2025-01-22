<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_role', 
        'role'
    ];

    // Anda bisa menambahkan relasi untuk menghubungkan dengan user
    public function users()
    {
        return $this->hasMany(User::class, 'role', 'kode_role');
    }
}
