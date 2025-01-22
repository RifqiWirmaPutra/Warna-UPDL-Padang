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
        Schema::create('ruangans', function (Blueprint $table) {
            $table->id();
            $table->string('tipeLab');
            $table->integer('jumlahPeserta');
            $table->integer('harga');
            $table->string('foto');
            $table->string('keterangan');
            // user
            $table->date('tanggalMasuk');
            $table->date('tanggalKeluar');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('noHP', 15); // Menggunakan string untuk nomor telepon
            $table->string('uploadKTP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangans');
    }
};