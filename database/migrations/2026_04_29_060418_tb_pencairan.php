<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_pencapaian', function (Blueprint $table) {

            $table->uuid('id_pencapaian_uniqueidentifier')->primary();

            $table->uuid('id_unit_kerja_uniqueidentifier')->nullable();

            $table->uuid('id_kerjasama_uniqueidentifier')->nullable();

            $table->integer('persentase_pencapaian')->nullable();

            $table->string('penanggung_jawab', 100)->nullable();

            $table->integer('realisasi_mitra')->nullable();

            $table->string('tingkat_resiko', 50)->nullable();

            $table->string('kategori_resiko', 50)->nullable();

            $table->date('tanggal_resiko')->nullable();

            $table->string('tipe_output', 100)->nullable();

            $table->string('status', 50)->nullable();

            $table->text('catatan')->nullable();

            $table->string('surat_pengajuan', 255)->nullable();

            $table->string('bukti_transfer', 255)->nullable();

            $table->string('bukti_realisasi', 255)->nullable();

            $table->string('file_rab', 255)->nullable();

            $table->dateTime('proses_at')->nullable();

            $table->dateTime('finish_at')->nullable();

            $table->string('status_validasi', 50)->nullable();

                $table->text('catatan_validasi')->nullable();
    
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->useCurrent();

            $table->foreign('id_unit_kerja_uniqueidentifier')
                ->references('id_unit_kerja_uniqueidentifier')
                ->on('tb_unit_kerja')
                ->onDelete('cascade');

            $table->foreign('id_kerjasama_uniqueidentifier')
                ->references('id_kerjasama_uniqueidentifier')
                ->on('tb_kerjasama')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_pencapaian');
    }
};
