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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_id'); // Tambahkan kolom kelas_id
            $table->foreign('kelas_id')->references('id')->on('daftar_kelas'); 
            $table->unsignedBigInteger('minggu_id')->references('id')->on('minggus');
            $table->date('tanggal');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
