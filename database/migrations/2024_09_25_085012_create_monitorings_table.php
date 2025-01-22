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
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipePenginapan')->constrained('penginapans')->onDelete('cascade');
            $table->string('namaRuangan');
            $table->boolean('tersedia')->default(1);
            $table->foreignId('tanggalMasuk')->constrained('booking_pes')->onDelete('cascade');
            $table->foreignId('tanggalKeluar')->constrained('booking_pes')->onDelete('cascade');
            $table->integer('jumlahHari')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitorings');
    }
};
