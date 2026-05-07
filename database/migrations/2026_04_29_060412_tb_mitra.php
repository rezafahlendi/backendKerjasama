<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_mitra', function (Blueprint $table) {

            $table->uuid('id_mitra_uniqueidentifier')->primary();

            $table->uuid('id_klasifikasi_mitra_uniqueidentifier')->nullable();

            $table->string('nama', 150)->nullable();

            $table->integer('id_country')->nullable();

            $table->string('provinsi', 50)->nullable();

            $table->string('alamat', 100)->nullable();

            $table->string('tlp', 20)->nullable();

            $table->string('fax', 50)->nullable();

            $table->string('email', 100)->nullable();

            $table->string('NPWP', 50)->nullable();

            $table->string('id_bidang_usaha', 50)->nullable();

            $table->string('web', 100)->nullable();

            $table->timestamps();

            $table->foreign('id_klasifikasi_mitra_uniqueidentifier')
                ->references('id_klasifikasi_mitra_uniqueidentifier')
                ->on('tb_klasifikasi_mitra')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_mitra');
    }
};
