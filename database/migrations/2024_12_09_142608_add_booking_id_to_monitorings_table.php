<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('monitorings', function (Blueprint $table) {
            $table->unsignedBigInteger('booking_id')->nullable()->after('id'); // Tambahkan kolom booking_id
            $table->foreign('booking_id')->references('id')->on('booking_pes')->onDelete('cascade'); // Foreign key
        });
    }

    public function down()
    {
        Schema::table('monitorings', function (Blueprint $table) {
            $table->dropForeign(['booking_id']);
            $table->dropColumn('booking_id');
        });
    }
};
