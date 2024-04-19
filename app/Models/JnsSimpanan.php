<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JnsSimpanan extends Model
{
    use HasFactory;
    protected $table = 'tb_jns_simpanan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'jenis_simpanan',
        'status',
    ];

    public function trxSimpanans()
    {
        return $this->hasMany(TrxSimpanan::class, 'jenis_simpanan');
    }
}
