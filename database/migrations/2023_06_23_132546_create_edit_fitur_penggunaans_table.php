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
        Schema::create('edit_fitur_penggunaans', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Gambar');
            $table->text('URL_Gambar');
            $table->unsignedBigInteger('NIK_Admin');
            $table->foreign('NIK_Admin')->references('NIK_Admin')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edit_fitur_penggunaans');
    }
};
