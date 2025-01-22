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
        Schema::create('arp', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->string('kode')->nullable();
            $table->string('judul')->nullable();
            $table->string('jenis_permintaan_diklat')->nullable();
            $table->string('jenis_pelaksanaan_diklat')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('instruktur')->nullable();
            $table->string('rencana_peserta')->nullable();
            $table->string('realisasi_peserta')->nullable();
            $table->string('kelas')->default('kelas belum ditentukan')->nullable();
            $table->string('wisma')->default('wisma belum ditentukan')->nullable();
            $table->string('persiapan')->nullable();
            $table->string('pelaksanaan')->nullable();
            $table->string('pasca')->nullable();
            $table->decimal('realisasi_biaya', 12, 2)->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arp');
    }
};
