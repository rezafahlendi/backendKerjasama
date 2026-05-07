<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_kerjasama', function (Blueprint $table) {

            // PRIMARY KEY
            $table->uuid('id_kerjasama_uniqueidentifier')->primary();

            // DATA UTAMA
            $table->string('hash_code', 100)->nullable();
            $table->string('id_status', 50)->nullable();

            // FOREIGN KEY
            $table->uuid('id_kerjasama_usulan_uniqueidentifier')->nullable();

            // TANGGAL
            $table->date('tgl_mou')->nullable();
            $table->date('tgl_berakhir')->nullable();

            // INFORMASI DOKUMEN
            $table->string('tgl_penandatanganan', 100)->nullable();
            $table->string('tempat_penandatanganan', 150)->nullable();
            $table->string('id_dibuat_oleh', 50)->nullable();
            $table->string('nomor_dokumen', 100)->nullable();

            // DESKRIPSI
            $table->text('disaksikan_kerjasama')->nullable();
            $table->text('visi_kerjasama')->nullable();
            $table->text('misi_kerjasama')->nullable();
            $table->text('tujuan_kerjasama')->nullable();

            // FILE
            $table->string('file_kontrak', 255)->nullable();
            $table->string('file_rab', 255)->nullable();
            $table->string('file_dokumen_kerjasama', 255)->nullable();

            // ANGGARAN
            $table->integer('anggaran')->nullable();
            $table->integer('anggaran_luar')->nullable();

            // PENELITIAN
            $table->integer('pengalaman_tahun')->nullable();
            $table->string('judul_penelitian', 255)->nullable();

            // PIHAK TERLIBAT
            $table->string('nama_jd_admin', 100)->nullable();
            $table->string('id_unit_jd_simeren', 50)->nullable();

            $table->text('dosen_anggota_kerjasama')->nullable();

            // TERMIN / BULAN
            $table->integer('bulan_termin1')->nullable();
            $table->integer('bulan_termin2')->nullable();
            $table->integer('bulan_termin3')->nullable();
            $table->integer('bulan_termin4')->nullable();

            // ANGGARAN TERMIN
            $table->integer('anggaran_termin1')->nullable();
            $table->integer('anggaran_termin2')->nullable();
            $table->integer('anggaran_termin3')->nullable();
            $table->integer('anggaran_termin4')->nullable();

            // LAINNYA
            $table->string('disclaimer', 255)->nullable();
            $table->text('catatan')->nullable();
            $table->string('email', 255)->nullable();
            $table->string('verif_note', 255)->nullable();

            // TIMESTAMP
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            // FOREIGN KEY
            $table->uuid('id_indicator_uniqueidentifier')->nullable();
            $table->uuid('id_unit_kerja_uniqueidentifier')->nullable();
            $table->uuid('id_users_uniqueidentifier')->nullable();


            $table->foreign('id_kerjasama_usulan_uniqueidentifier')
                ->references('id_kerjasama_usulan_uniqueidentifier')
                ->on('tb_kerjasama_usulan')
                ->onDelete('cascade');

            $table->foreign('id_indicator_uniqueidentifier')
                ->references('id_indicator_uniqueidentifier')
                ->on('tb_indikator')
                ->onDelete('cascade');

            $table->foreign('id_unit_kerja_uniqueidentifier')
                ->references('id_unit_kerja_uniqueidentifier')
                ->on('tb_unit_kerja')
                ->onDelete('cascade');

            $table->foreign('id_users_uniqueidentifier')
                ->references('id_users_uniqueidentifier')
                ->on('tb_users')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_kerjasama');
    }
    
};
