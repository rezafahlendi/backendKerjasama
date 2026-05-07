<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_users', function (Blueprint $table) {

            $table->uuid('id_users_uniqueidentifier')->primary();

            $table->string('sso_id', 100)->nullable()->unique();

            $table->string('email', 255)->unique();

            $table->string('name', 150);

            $table->string('password', 255)->nullable();

            $table->uuid('id_unit_kerja_uniqueidentifier')->nullable();

            $table->string('role', 50)->nullable();

            $table->string('jabatan', 100)->nullable();

            $table->string('phone', 20)->nullable();

            $table->string('photo', 255)->nullable();

            $table->boolean('is_active')->default(true);

            $table->rememberToken();

            $table->timestamps();

            $table->foreign('id_unit_kerja_uniqueidentifier')
                ->references('id_unit_kerja_uniqueidentifier')
                ->on('tb_unit_kerja')
                ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_users');
    }
};
