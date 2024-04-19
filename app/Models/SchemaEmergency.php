<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemaEmergency extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_jaminan',
        'pinjaman_pokok',
        'jumlah_tempo',
        'status',
    ];

    public function jenisPengajuans()
    {
        return $this->hasMany(JnsPengajuan::class, 'id_emergency');
    }
}
