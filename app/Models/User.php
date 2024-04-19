<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'npp',
        'nak',
        'nama',
        'password',
        'role_id',
        'unit_kerja_id',
        'jenis_anggota_id',
        'status',
        'status_keanggotaan',
        'status_payment',
        'simpanan_pokok',
        'nominal_wajib',
        'nominal_sukarela',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
    ];

    public function unitKerja()
    {
        return $this->belongsTo(Unit::class, 'unit_kerja_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function jenisAnggota()
    {
        return $this->belongsTo(JnsAnggota::class, 'jenis_anggota_id');
    }

    public function trxSimpanans()
    {
        return $this->hasMany(TrxSimpanan::class, 'nak');
    }

    public function trxBelanjas()
    {
        return $this->hasMany(TrxBelanja::class, 'nak');
    }

    public function trxPinjamans()
    {
        return $this->hasMany(TrxPinjaman::class, 'nak');
    }

    public function masterHis()
    {
        return $this->hasMany(MasterHistory::class, 'nak');
    }
}
