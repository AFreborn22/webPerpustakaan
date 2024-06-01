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
        Schema::create('sekilas', function (Blueprint $table) {
            $table->id();
            $table->text('kontensatu');
            $table->text('kontendua');
            $table->text('URL_gambar');
            $table->unsignedBigInteger('NIK_Admin')->nullable();
            $table->foreign('NIK_Admin')->references('NIK_Admin')->on('admins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekilas');
    }
};
