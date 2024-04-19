<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JnsBelanja extends Model
{
    use HasFactory;
    protected $table = 'tb_jns_belanja';

    protected $fillable = [
        'jenis_belanja',
        'status',
    ];

    public function trxBelanjas()
    {
        return $this->hasMany(TrxBelanja::class, 'jenis_belanja');
    }
}
