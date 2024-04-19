<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JnsAnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_jenis_anggota')->insert([
            [
                'jenis_anggota' => 'Anggota Biasa',
                'status' => 0,
            ],
            [
                'jenis_anggota' => 'Anggota Luar Biasa',
                'status' => 0,
            ],
        ]);
    }
}
