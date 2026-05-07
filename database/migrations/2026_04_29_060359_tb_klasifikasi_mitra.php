<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_klasifikasi_mitra', function (Blueprint $table) {

            $table->uuid('id_klasifikasi_mitra_uniqueidentifier')->primary();

            $table->string('jenis', 100)->nullable();

            $table->string('klasifikasi', 150)->nullable();

            $table->text('keterangan')->nullable();

            $table->date('expired_date')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('id_klasifikasi_mitra_uniqueidentifier')
                    ->references('id_klasifikasi_mitra_uniqueidentifier')
                    ->on('tb_kerjasama_bentuk');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_klasifikasi_mitra');
    }
};
