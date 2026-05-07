<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_target', function (Blueprint $table) {

            $table->uuid('id_target_uniqueidentifier')->primary();

            $table->uuid('id_kerjasama_uniqueidentifier')->nullable();

            $table->string('nama_target', 150)->nullable();

            $table->text('deskripsi_target')->nullable();

            $table->integer('target_capaian')->nullable();

            $table->integer('realisasi_capaian')->nullable();

            $table->date('tanggal_mulai')->nullable();

            $table->date('tanggal_selesai')->nullable();

            $table->string('indikator_keberhasilan', 255)->nullable();

            $table->string('status_target', 50)->nullable();

            $table->text('catatan')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('id_kerjasama_uniqueidentifier')
                ->references('id_kerjasama_uniqueidentifier')
                ->on('tb_kerjasama')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_target');
    }
};
