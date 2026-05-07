<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_kegiatan_bantuk', function (Blueprint $table) {
            $table->string('id_kegiatan_bantuk_uniqeueidentifier', 50)->primary();
            $table->string('id_kerjasama_bantuk_uniqeueidentifier', 50)->nullable();
            $table->string('penerima_bantuk_varchar', 100)->nullable();
            $table->string('volume_float', 50)->nullable();
            $table->string('satuan_varchar', 50)->nullable();
            $table->string('keterangan_varchar', 500)->nullable();
            $table->string('id_indikator_int', 50)->nullable();
            $table->string('hash_code_varchar', 100)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            
            $table->foreign('id_kerjasama_bantuk_uniqeueidentifier')
                ->references('id_kerjasama_uniqeueidentifier')
                ->on('tb_kerjasama');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_kegiatan_bantuk');
    }
};
