<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxBelanja extends Model
{
    use HasFactory;
    protected $table = 'tb_trx_belanja';

    protected $fillable = [
        'nak',
        'tahun',
        'bulan',
        'jenis_belanja',
        'jml_belanja',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'nak');
    }

    public function jenisBelanja()
    {
        return $this->belongsTo(JnsBelanja::class, 'jenis_belanja');
    }
}
