<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_kerjasama_penggiat', function (Blueprint $table) {

            $table->uuid('id_kerjasama_penggiat_uniqueidentifier')->primary();

            $table->uuid('id_kerjasama_uniqueidentifier')->nullable();

            $table->uuid('id_mitra_uniqueidentifier')->nullable();

            $table->string('pihak', 100)->nullable();

            $table->date('tanggal_penandatanganan')->nullable();

            $table->string('jabatan_penandatangan', 100)->nullable();

            $table->string('nama_penandatangan', 100)->nullable();

            $table->string('email', 100)->nullable();

            $table->string('phone', 20)->nullable();

            $table->string('hash_code', 100)->nullable();

            $table->timestamps();

            $table->foreign('id_kerjasama_uniqueidentifier')
                ->references('id_kerjasama_uniqueidentifier')
                ->on('tb_kerjasama')
                ->onDelete('cascade');

            $table->foreign('id_mitra_uniqueidentifier')
                ->references('id_mitra_uniqueidentifier')
                ->on('tb_mitra')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_kerjasama_penggiat');
    }
};
