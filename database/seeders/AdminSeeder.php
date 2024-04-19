<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'npp' => 'admin',
                'nak' => 'admin',
                'nama' => 'Superadmin',
                'password' => Hash::make('JMBPusat2024!'),
                'role_id' => 1,
                'unit_kerja_id'  => 1,
                'jenis_anggota_id' => 1,
                'status' => 0,
                'status_keanggotaan' => 0,
                'status_payment' => 0,
                'simpanan_pokok' => 0,
                'nominal_wajib' => 0,
                'nominal_sukarela' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'npp' => '032429',
                'nak' => '10032429',
                'nama' => 'Adinda Azzahra',
                'password' => Hash::make('123'),
                'role_id' => 2,
                'unit_kerja_id'  => 2,
                'jenis_anggota_id' => 1,
                'status' => 0,
                'status_keanggotaan' => 0,
                'status_payment' => 0,
                'simpanan_pokok' => 0,
                'nominal_wajib' => 0,
                'nominal_sukarela' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
