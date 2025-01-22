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
        Schema::create('telat_absens', function (Blueprint $table) {
            $table->id();
            $table->time('waktu_absensi');
            $table->string('nip');
            $table->string('nama');
            $table->string('judul');
            $table->string('absensi');
            $table->string('jenis_permintaan_diklat');
            $table->string('tanggal_absensi');
            $table->string('penggantian_kuota');
            $table->string('no_hp');
            $table->string('alasan');
            $table->string('user_id');
            $table->string('arp_id');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telat_absens');
    }
};
