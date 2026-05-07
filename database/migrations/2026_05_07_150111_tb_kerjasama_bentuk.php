<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_kerjasama_bentuk', function (Blueprint $table) {
            $table->string('id_kerjasama_bentuk uniqeueidentifier', 50)->primary();
            $table->string('id_kerjasama_uniqeueidentifier', 50)->nullable();
            $table->string('keterangan_marchersama', 500)->nullable();
            $table->string('expired_date_date', 50)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            
            $table->foreign('id_kerjasama_uniqeueidentifier')
                ->references('id_kerjasama_uniqeueidentifier')
                ->on('tb_kerjasama');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_kerjasama_bentuk');
    }
};
