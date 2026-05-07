<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_kerjasama_usulan', function (Blueprint $table) {
            $table->uuid('id_kerjasama_usulan_uniqueidentifier')->primary();
            $table->uuid('id_unit_kerja_uniqueidentifier')->nullable();
            $table->uuid('id_mitra_uniqueidentifier')->nullable();
            $table->uuid('id_users_uniqueidentifier')->nullable();
            $table->string('nama_pengusul', 100)->nullable();
            $table->string('instansi_pengusul', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('telp', 50)->nullable();

            $table->string('nama', 100)->nullable();

            $table->string('unit_kerja', 100)->nullable();

            $table->string('kontak', 100)->nullable();

            $table->string('judul', 200)->nullable();

            $table->integer('id_bentuk')->nullable();

            $table->integer('id_bidang')->nullable();

            $table->string('mitra', 100)->nullable();

            $table->string('lingkup', 50)->nullable();

            $table->uuid('id_country_uniqueidentifier')->nullable();

            $table->text('deskripsi')->nullable();
            $table->string('file_kerjasama', 150)->nullable();
            $table->string('file_rab', 150)->nullable();
            $table->string('file_dokumen_kerjasama', 150)->nullable();
            $table->timestamps();
            $table->foreign('id_unit_kerja_uniqueidentifier')
                ->references('id_unit_kerja_uniqueidentifier')
                ->on('tb_unit_kerja')
                ->onDelete('cascade');

            $table->foreign('id_mitra_uniqueidentifier')
                ->references('id_mitra_uniqueidentifier')
                ->on('tb_mitra')
                ->onDelete('cascade');

            $table->foreign('id_users_uniqueidentifier')
                ->references('id_users_uniqueidentifier')
                ->on('tb_users')
                ->onDelete('cascade');

            $table->foreign('id_country_uniqueidentifier')
                ->references('id_country_uniqueidentifier')
                ->on('tb_country')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_kerjasama_usulan');
    }
};
