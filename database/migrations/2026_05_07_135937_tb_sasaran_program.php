<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_sasaran_program', function (Blueprint $table) {

            $table->uuid('id_sasaran_program_uniqueidentifier')->primary();

            $table->string('sasaran', 150);

            $table->integer('level')->nullable();

            $table->text('keterangan')->nullable();

            $table->string('token', 40)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_sasaran_program');
    }
};
