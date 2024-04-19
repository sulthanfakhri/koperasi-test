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
        Schema::create('tb_jns_pengajuan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pengajuan');
            $table->unsignedBigInteger('id_bank');
            $table->unsignedBigInteger('id_emergency');
            $table->unsignedBigInteger('id_cicilan');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('id_bank')
                ->references('id')->on('tb_schema_bank')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_emergency')
                ->references('id')->on('tb_schema_emergency')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_cicilan')
                ->references('id')->on('tb_schema_cicilan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_jns_pengajuan');
    }
};
