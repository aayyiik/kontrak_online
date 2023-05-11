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
            $table->char('id_kota',4);
            $table->string('nama_kota');
            $table->char('id_negara',4);
            $table->foreign('id_negara')->references('id_kota')->on('negara');
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
