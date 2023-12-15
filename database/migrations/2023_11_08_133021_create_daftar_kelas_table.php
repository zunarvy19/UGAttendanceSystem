<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('daftar_kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas');
            $table->timestamps();
        });

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npm');
            $table->string('kelas');
            $table->unsignedBigInteger('kelas_id')->nullable(); // Tambahkan nullable jika perlu

            $table->foreign('kelas_id')->references('id')->on('daftar_kelas');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('students');
        Schema::dropIfExists('daftar_kelas');
    }
};

