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
        Schema::create('favorits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ISBN');
            $table->unsignedBigInteger('NIM');
            $table->unsignedBigInteger('NIK_dosen');
            $table->timestamps();

            $table->foreign('ISBN')->references('ISBN')->on('bukus');
            $table->foreign('NIM')->references('NIM')->on('penggunas');
            $table->foreign('NIK_dosen')->references('NIK_dosen')->on('pengguna_dosens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorits');
    }
};
