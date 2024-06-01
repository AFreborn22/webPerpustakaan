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
        Schema::create('edit_carousels', function (Blueprint $table) {
            $table->id();
            $table->text('url_gambar');
            $table->timestamps();
            $table->unsignedBigInteger('NIK_Admin')->nullable();
            $table->foreign('NIK_Admin')->references('NIK_Admin')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edit_carousels');
    }
};
