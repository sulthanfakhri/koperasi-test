<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterHistory extends Model
{
    use HasFactory;
    protected $table = 'tb_master_history';

    protected $fillable = [
        'nak',
        'npp',
        'unit_kerja',
        'simpanan_wajib',
        'simpanan_sukarela',
        'pinjaman_rutin',
        'jumlah_pinjaman_rutin',
        'pinjaman_emergency',
        'jumlah_pinjaman_emergency',
        'pinjaman_bank',
        'jumlah_pinjaman_bank',
        'tagihan_belanja',
        'jumlah_tagihan_belanja',
        'saldo_wajib',
        'saldo_sukarela',
        'tahun',
        'bulan',
        'status',
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'nak');
    }
}
