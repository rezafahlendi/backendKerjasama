<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_unit_kerja_simren', function (Blueprint $table) {
            $table->string('id_unit_kerja_simren_uniqeueidentifier', 50)->primary();
            $table->string('nama_unit_varchar', 150)->nullable();
            $table->string('akronim_varchar', 50)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_unit_kerja_simren');
    }
};
