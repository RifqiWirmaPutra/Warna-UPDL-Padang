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
        Schema::create('arsips', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('kode');
            $table->string('judul');
            $table->string('jenis_permintaan_diklat');
            $table->string('jenis_pelaksanaan_diklat');
            $table->string('angkatan');
            $table->string('instruktur');
            $table->string('rencana_peserta');
            $table->string('realisasi_peserta');
            $table->string('kelas')->default('kelas belum ditentukan');
            $table->string('wisma')->default('wisma belum ditentukan');
            $table->string('persiapan');
            $table->string('pelaksanaan');
            $table->string('pasca');
            $table->decimal('realisasi_biaya', 12, 2);
            $table->string('arp_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsips');
    }
};
