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
            $table->unsignedBigInteger('NIM')->nullable();
            $table->string('Nama')->nullable();
            $table->unsignedBigInteger('NIK_dosen')->nullable();
            $table->string('nama_dosen')->nullable();
            $table->unsignedBigInteger('ISBN');
            $table->string('Judul');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->enum('status', ['Diproses','Dipinjam', 'Dikembalikan']);
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
