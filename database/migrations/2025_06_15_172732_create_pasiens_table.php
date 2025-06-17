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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('klinik_id'); // relasi ke klinik
            $table->string('nama');
            $table->enum('status', ['not started', 'in progress', 'completed'])->default('not started');
            $table->date('tanggal');
            $table->text('keluhan');
            $table->string('nik', 16); // bisa NIK pasien, tidak harus unique karena bisa beberapa kali datang
            $table->timestamps();

            $table->foreign('klinik_id')->references('id')->on('kliniks')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
