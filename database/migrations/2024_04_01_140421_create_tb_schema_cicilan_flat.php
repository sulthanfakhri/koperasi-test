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
        Schema::create('tb_schema_cicilan_flat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pinjaman_pokok');
            $table->bigInteger('angsuran_total');
            $table->bigInteger('angsuran_fee');
            $table->integer('angsuran_tempo');
            $table->bigInteger('angsuran_pokok');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_schema_cicilan_flat');
    }
};
