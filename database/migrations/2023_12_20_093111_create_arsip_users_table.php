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
        Schema::create('arsip_users', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai');
            $table->string('kode')->nullable();
            $table->string('judul')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('konfirmasi')->nullable();
            $table->string('arp_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsip_users');
    }
};
