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
        Schema::create('favorite_books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('NIM')->nullable(true);
            $table->unsignedBigInteger('NIK_dosen')->nullable(true);
            $table->unsignedBigInteger('ISBN');
            $table->string('Judul')->nullable(false);
            $table->string('Pengarang')->nullable(false);
            $table->string('Penerbit')->nullable(false);
            $table->timestamps();

            $table->foreign('NIM')->references('NIM')->on('penggunas')->onDelete('cascade');
            $table->foreign('NIK_dosen')->references('NIK_dosen')->on('pengguna_dosens')->onDelete('cascade');
            $table->foreign('ISBN')->references('ISBN')->on('bukus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorite_books');
    }
};