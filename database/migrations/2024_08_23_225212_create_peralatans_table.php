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
        Schema::create('peralatans', function (Blueprint $table) {
            $table->id();
            $table->string('namaAlat');
            $table->integer('jumlahTersedia');
            $table->decimal('harga', 10, 2); // Menggunakan tipe decimal untuk harga
            $table->date('tanggalPinjam')->nullable(); // Bisa null jika belum dipinjam
            $table->date('tanggalKembali')->nullable(); // Bisa null jika belum dikembalikan
            $table->boolean('booking')->default(false); // Menggunakan tipe boolean untuk booking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peralatans');
    }
};