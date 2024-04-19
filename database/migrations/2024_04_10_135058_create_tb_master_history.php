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
        Schema::create('tb_master_history', function (Blueprint $table) {
            $table->id();
            $table->string('nak');
            $table->string('npp');
            $table->string('unit_kerja');
            $table->bigInteger('simpanan_wajib');
            $table->bigInteger('simpanan_sukarela');
            $table->json('pinjaman_rutin');
            $table->bigInteger('jumlah_pinjaman_rutin');
            $table->json('pinjaman_emergency');
            $table->bigInteger('jumlah_pinjaman_emergency');
            $table->json('pinjaman_bank');
            $table->bigInteger('jumlah_pinjaman_bank');
            $table->json('tagihan_belanja');
            $table->bigInteger('jumlah_tagihan_belanja');
            $table->bigInteger('saldo_wajib');
            $table->bigInteger('saldo_sukarela');
            $table->integer('tahun');
            $table->integer('bulan');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('nak')
                ->references('nak')->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_master_history');
    }
};
