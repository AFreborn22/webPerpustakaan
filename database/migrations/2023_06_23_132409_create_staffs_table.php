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
        Schema::create('staffs', function (Blueprint $table) {
            $table->unsignedBigInteger('NIK_Staff')->primary();
            $table->string('Nama');
            $table->string('Username');
            $table->string('Password');
            
            $table->unsignedBigInteger('NIK_Admin');
            $table->foreign('NIK_Admin')->references('NIK_Admin')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
