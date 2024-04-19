<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxPengajuan extends Model
{
    use HasFactory;
    protected $table = 'tb_trx_pengajuan';

    protected $fillable = [
        'nak',
        'jml_pinjaman',
        'jml_tempo',
        'tgl_pinjaman',
        'status_dana',
        'status',
        'jenis_pengajuan',
    ];

    public function trxPinjaman()
    {
        return $this->belongsTo(TrxPinjaman::class, 'id_pengajuan');
    }

    public function jenisPengajuan()
    {
        return $this->belongsTo(JnsPengajuan::class, 'jenis_pengajuan');
    }
}
