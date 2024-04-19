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
        Schema::create('tb_trx_pengajuan', function (Blueprint $table) {
            $table->id();
            $table->string('nak');
            $table->bigInteger('jml_pinjaman');
            $table->integer('jml_tempo');
            $table->date('tgl_pinjaman');
            $table->integer('status_dana');
            $table->integer('status');
            $table->unsignedBigInteger('jenis_pengajuan');
            $table->timestamps();

            $table->foreign('jenis_pengajuan')
                ->references('id')->on('tb_jns_pengajuan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_trx_pengajuan');
    }
};
