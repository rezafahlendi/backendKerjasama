<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_kegiatan', function (Blueprint $table) {

            $table->uuid('id_kegiatan_uniqueidentifier')->primary();
            $table->uuid('id_kerjasama_uniqueidentifier')->nullable();
            $table->string('judul_kegiatan', 100)->nullable();

            $table->text('deskripsi_kegiatan')->nullable();

            $table->date('tgl_kegiatan')->nullable();
            $table->integer('jumlah_anggaran')->nullable();
            $table->string('hasil_kegiatan', 255)->nullable();
            $table->integer('jumlah_dosen')->nullable();
            $table->integer('jumlah_mahasiswa')->nullable();
            $table->string('file_laporan', 255)->nullable();
            $table->string('status_validasi', 20)->nullable();

            $table->text('catatan_validasi')->nullable();
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
        Schema::dropIfExists('tb_kegiatan');
    }
};
