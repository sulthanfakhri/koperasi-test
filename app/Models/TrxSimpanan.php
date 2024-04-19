<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxSimpanan extends Model
{
    use HasFactory;

    protected $table = 'tb_trx_simpanan';

    protected $fillable = [
        'nak',
        'tahun',
        'bulan',
        'jenis_simpanan',
        'jlm_simpanan',
        'status_dana',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'nak');
    }

    public function jenisSimpanan()
    {
        return $this->belongsTo(JnsSimpanan::class, 'jenis_simpanan');
    }
}
