<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_indikator', function (Blueprint $table) {
            $table->uuid('id_indikator_uniqueidentifier')->primary();
            $table->uuid('id_sasaran_program_uniqueidentifier')->nullable();
            $table->string('indikator_varchar', 100)->nullable();
            $table->string('volume_float', 50)->nullable();
            $table->string('satuan_varchar', 50)->nullable();
            $table->string('keterangan_marchersama', 255)->nullable();
            $table->string('bulan_varchar', 50)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            
            $table->foreign('id_sasaran_program_uniqueidentifier')
                ->references('id_sasaran_program_uniqueidentifier')
                ->on('tb_sasaran_program');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_indikator');
    }
};
