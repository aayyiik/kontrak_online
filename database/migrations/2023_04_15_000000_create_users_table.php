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
            $table->bigIncrements('nik')->nullable();
            $table->string('nama');
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role')->references('id_role')->on('role');
            $table->unsignedBigInteger('id_unit')->nullable();
            $table->foreign('id_unit')->references('id_unit')->on('unit_kerja');
            $table->integer('status');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
