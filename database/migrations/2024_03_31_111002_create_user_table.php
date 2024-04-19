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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('npp')->unique();
            $table->string('nak')->unique();
            $table->string('nama');
            $table->string('password');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('unit_kerja_id');
            $table->unsignedBigInteger('jenis_anggota_id');
            $table->integer('status');
            $table->integer('status_keanggotaan');
            $table->integer('status_payment');
            $table->bigInteger('simpanan_pokok');
            $table->bigInteger('nominal_wajib');
            $table->bigInteger('nominal_sukarela');
            $table->timestamps();

            $table->foreign('unit_kerja_id')
                ->references('id')->on('tb_unit')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('role_id')
                ->references('id')->on('tb_role')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('jenis_anggota_id')
                ->references('id')->on('tb_jenis_anggota')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
