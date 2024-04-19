<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JnsPinjaman extends Model
{
    use HasFactory;
    protected $table = 'tb_jns_pinjaman';

    protected $primaryKey = 'id';

    protected $fillable = [
        'jenis_pinjaman',
        'bunga',
        'max_angsuran',
        'status',
    ];

    public function transaksiPinjaman()
    {
        return $this->hasMany(TrxPinjaman::class, 'jenis_pinjaman');
    }
}
