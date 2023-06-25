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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('NIM');
            $table->unsignedBigInteger('NIK_dosen');
            $table->unsignedBigInteger('ISBN');
            $table->timestamp('tanggal_pinjam');
            $table->timestamp('tanggal_kembali')->nullable();
            $table->timestamps();

            $table->foreign('NIM')->references('NIM')->on('penggunas')->onDelete('cascade');
            $table->foreign('NIK_dosen')->references('NIK_dosen')->on('pengguna_dosens')->onDelete('cascade');
            $table->foreign('ISBN')->references('ISBN')->on('bukus')->onDelete('cascade')->onUpdate('cascade');
        });
    }


      
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
