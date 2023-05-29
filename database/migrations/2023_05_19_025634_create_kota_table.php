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
        Schema::create('kota', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kota',3)->unique();
            $table->string('nama_kota');
            $table->string('kode_negara');
            $table->foreign('kode_negara')->references('kode_negara')->on('negara');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kota');
    }
};
