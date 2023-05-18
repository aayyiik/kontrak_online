<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nik',7)->unique();
            $table->string('nama');
            $table->string('kode_role');
            $table->foreign('kode_role')->references('kode_role')->on('role');
            $table->string('kode_unit')->nullable();
            $table->foreign('kode_unit')->references('kode_unit')->on('unit_kerja');
            $table->integer('status');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
