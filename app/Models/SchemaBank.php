<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemaBank extends Model
{
    use HasFactory;
    protected $table = 'tb_schema_bank';

    protected $fillable = [
        'nama_bank',
        'pinjaman_pokok',
        'angsuran',
        'jml_tempo',
        'status',
    ];

    public function jenisPengajuans()
    {
        return $this->hasMany(JnsPengajuan::class, 'id_bank');
    }
}
