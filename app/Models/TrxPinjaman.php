<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxPinjaman extends Model
{
    use HasFactory;
    protected $table = 'tb_trx_pinjaman';

    protected $fillable = [
        'nak',
        'tahun',
        'bulan',
        'jumlah_pembayaran',
        'status_dana',
        'jumlah_angsuran_ke',
        'sisa_angsuran',
        'status',
        'id_pengajuan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'nak');
    }

    public function trxPengajuans()
    {
        return $this->hasMany(TrxPengajuan::class, 'id_pengajuan');
    }
}
