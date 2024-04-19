<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_unit')->insert([
            [
                'nama_unit' => 'superadmin',
                'status' => 0,
            ],
            [
                'nama_unit' => 'HCS',
                'status' => 0,
            ],
        ]);
    }
}
