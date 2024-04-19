<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemaCicilan extends Model
{
    use HasFactory;

    protected $table = 'tb_schema_cicilan';

    protected $fillable = [
        'nama_cicilan',
        'id_flat',
        'id_menurun',
        'jumlah_tempo',
        'type_pinjaman',
        'status',
    ];


    public function jenisPengajuan()
    {
        return $this->belongsTo(JnsPengajuan::class, 'id_cicilan');
    }

    public function cicilanFlat()
    {
        return $this->belongsTo(SchemaCicilanFlat::class, 'id_flat');
    }

    public function cicilanMenurun()
    {
        return $this->belongsTo(SchemaCicilanMenurun::class, 'id_menurun');
    }
}
