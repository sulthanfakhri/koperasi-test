<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemaCicilanFlat extends Model
{
    use HasFactory;
    protected $table = 'tb_schema_cicilan_flat';

    protected $fillable = [
        'pinjaman_pokok',
        'angsuran_total',
        'angsuran_fee',
        'angsuran_tempo',
        'angsuran_pokok',
        'status',
    ];

    public function cicilans()
    {
        return $this->hasMany(SchemaCicilan::class, 'id_flat');
    }
}
