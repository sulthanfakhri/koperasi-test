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
        Schema::create('tb_trx_simpanan', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id_anggota');
            $table->string('nak');
            // $table->string('npp');
            $table->integer('tahun');
            $table->integer('bulan');
            $table->unsignedBigInteger('jenis_simpanan');
            // $table->integer('nilai_simpanan');
            $table->bigInteger('jlm_simpanan');
            $table->integer('status_dana');
            $table->integer('status');
            // $table->unsignedBigInteger('id_pengambilan');
            $table->timestamps();

            $table->foreign('nak')
                ->references('nak')->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('jenis_simpanan')
                ->references('id')->on('tb_jns_simpanan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_trx_simpanan');
    }
};
