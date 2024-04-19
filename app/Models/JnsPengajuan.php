<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JnsPengajuan extends Model
{
    use HasFactory;
    protected $table = 'tb_jns_pengajuan';

    protected $fillable = [
        'jenis_pengajuan',
        'id_bank',
        'id_emergency',
        'id_cicilan',
        'status',
    ];

    public function trxPengajuans()
    {
        return $this->hasMany(TrxPengajuan::class, 'jenis_pengajuan');
    }

    public function bank()
    {
        return $this->belongsTo(SchemaBank::class, 'id_bank');
    }

    public function emergency()
    {
        return $this->belongsTo(SchemaEmergency::class, 'id_emergency');
    }

    public function cicilans()
    {
        return $this->hasMany(SchemaCicilan::class, 'id_cicilan');
    }
}
