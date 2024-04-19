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
        Schema::create('tb_trx_pinjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nak');
            $table->integer('tahun');
            $table->integer('bulan');
            $table->bigInteger('jumlah_pembayaran');
            $table->integer('status_dana');
            $table->integer('jumlah_angsuran_ke');
            $table->bigInteger('sisa_angsuran');
            $table->integer('status');
            $table->unsignedBigInteger('id_pengajuan');
            $table->timestamps();

            $table->foreign('nak')
                ->references('nak')->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->foreign('id_pengajuan')
                ->references('id')->on('tb_trx_pengajuan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_trx_pinjaman');
    }
};
