<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JnsAnggota extends Model
{
    use HasFactory;
    protected $table = 'tb_jenis_anggota';

    protected $fillable = [
        'jenis_anggota',
        'status',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'jenis_anggota_id');
    }
}
