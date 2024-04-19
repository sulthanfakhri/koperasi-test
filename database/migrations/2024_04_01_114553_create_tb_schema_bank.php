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
        Schema::create('tb_schema_bank', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bank');
            $table->bigInteger('pinjaman_pokok');
            $table->bigInteger('angsuran');
            $table->integer('jml_tempo');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_schema_bank');
    }
};
