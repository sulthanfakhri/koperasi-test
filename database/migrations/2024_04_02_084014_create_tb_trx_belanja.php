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
        Schema::create('tb_trx_belanja', function (Blueprint $table) {
            $table->id();
            $table->string('nak');
            // $table->unsignedBigInteger('id_anggota');
            // $table->string('npp');
            $table->integer('tahun');
            $table->integer('bulan');
            $table->unsignedBigInteger('jenis_belanja');
            $table->integer('jml_belanja');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('nak')
                ->references('nak')->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('jenis_belanja')
                ->references('id')->on('tb_jns_belanja')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_trx_belanja');
    }
};
