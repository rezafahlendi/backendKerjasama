<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_unit_kerja', function (Blueprint $table) {

            $table->uuid('id_unit_kerja_uniqueidentifier')->primary();

            $table->integer('level')->nullable();

            $table->integer('id_unit_utama')->nullable();

            $table->uuid('id_unit_parent_uniqueidentifier')->nullable();

            $table->string('nama_pejabat', 100)->nullable();

            $table->string('nama_pendek', 50)->nullable();

            $table->string('nama_lengkap', 150)->nullable();

            $table->string('alamat', 255)->nullable();

            $table->string('telepon', 20)->nullable();

            $table->string('website', 100)->nullable();

            $table->string('email', 100)->nullable();

            $table->string('sk', 100)->nullable();

            $table->uuid('id_country_uniqueidentifier')->nullable();

            $table->text('deskripsi')->nullable();

            $table->timestamps();

            $table->foreign('id_country_uniqueidentifier')
                ->references('id_country_uniqueidentifier')
                ->on('tb_country')
                ->onDelete('cascade');

            $table->foreign('id_unit_parent_uniqueidentifier')
                ->references('id_unit_kerja_uniqueidentifier')
                ->on('tb_unit_kerja')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_unit_kerja');
    }
};
