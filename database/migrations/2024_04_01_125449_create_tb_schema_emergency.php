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
        Schema::create('tb_schema_emergency', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jaminan');
            $table->bigInteger('pinjaman_pokok');
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
        Schema::dropIfExists('tb_schema_emergency');
    }
};
