<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_schema_cicilan_menurun', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pinjaman_pokok');
            $table->float('fee_admin');
            $table->integer('jumlah_tempo');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_schema_cicilan_menurun');
    }
};
