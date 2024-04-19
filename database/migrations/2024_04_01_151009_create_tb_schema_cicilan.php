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
        Schema::create('tb_schema_cicilan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_cicilan');
            $table->unsignedBigInteger('id_flat');
            $table->unsignedBigInteger('id_menurun');
            $table->integer('jumlah_tempo');
            $table->string('type_pinjaman');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('id_flat')
                ->references('id')->on('tb_schema_cicilan_flat')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_menurun')
                ->references('id')->on('tb_schema_cicilan_menurun')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_schema_cicilan');
    }
};
