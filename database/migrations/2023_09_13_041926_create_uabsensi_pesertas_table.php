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
        Schema::create('uabsensi_pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama');
            $table->string('judul');
            $table->string('jenis_permintaan_diklat');
            $table->date('tanggal_absensi');
            $table->string('penggantian_kuota');
            $table->string('no_hp');
            $table->string('absensi');
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
        Schema::dropIfExists('uabsensi_pesertas');
    }
};
