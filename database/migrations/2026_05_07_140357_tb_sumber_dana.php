<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_sumber_dana', function (Blueprint $table) {

            $table->uuid('id_sumber_dana_uniqueidentifier')->primary();

            $table->string('nama_sumber_dana', 150);

            $table->string('kode_sumber_dana', 50)->nullable();

            $table->text('keterangan')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_sumber_dana');
    }
};
