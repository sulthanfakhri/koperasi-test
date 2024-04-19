<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemaCicilanMenurun extends Model
{
    use HasFactory;
    protected $table = 'tb_schema_cicilan_menurun';

    protected $fillable = [
        'pinjaman_pokok',
        'fee_admin',
        'jumlah_tempo',
        'status',
    ];
    public function cicilans()
    {
        return $this->hasMany(SchemaCicilan::class, 'id_menurun');
    }
}
