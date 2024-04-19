<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $table = 'tb_unit';

    protected $fillable = [
        'nama_unit',
        'status',
    ];

    // Relasi dengan tabel tb_anggota
    public function users()
    {
        return $this->hasMany(User::class, 'unit_kerja_id');
    }
}
