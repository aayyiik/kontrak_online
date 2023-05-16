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
        Schema::create('rekanan', function (Blueprint $table) {
            $table->char('no_rekanan',7)->unique();
            $table->string('nama_rekanan');
            $table->string('alamat');
            $table->string('no_sap');
            $table->string('nama_direktur');
            $table->string('email_perusahaan');
            $table->tinyInteger('status_rekanan')->default('0');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekanan');
    }
};
