<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->string('jenisPenginapan');
            $table->string('namaKamar');
            $table->integer('nomorKamar');
            $table->integer('status')->default(0); // 0: tersedia, 1: terisi, 2: pending
            $table->timestamps();

            $table->foreign('booking_id')->references('id')->on('booking_pes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('monitorings');
    }
};
