<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_country', function (Blueprint $table) {

            $table->uuid('id_country_uniqueidentifier')->primary();

            $table->string('country_name', 255);

            $table->string('code1', 10)->nullable();

            $table->string('code2', 10)->nullable();

            $table->string('flag', 255)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_country');
    }
};
