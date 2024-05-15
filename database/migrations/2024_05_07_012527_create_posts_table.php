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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Jurusan');
            $table->string('NoHp');
            $table->string('Email');
            $table->string('Alamat');
            $table->string('image');
            $table->timestamps();
        });
    }
    // Nama, Jurusan, No Hp, Email, Alamat < foto

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
