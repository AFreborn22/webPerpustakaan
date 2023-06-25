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
        Schema::create('majalahs', function (Blueprint $table) {
            $table->unsignedBigInteger('ISSN')->primary();
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->string('tahun_terbit');

            $table->unsignedBigInteger('NIK_Staff');
            $table->foreign('NIK_Staff')->references('NIK_Staff')->on('staffs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('majalahs');
    }
};
