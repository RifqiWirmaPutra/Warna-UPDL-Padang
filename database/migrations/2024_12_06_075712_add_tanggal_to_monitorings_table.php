<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('monitorings', function (Blueprint $table) {
            $table->date('tanggalMasuk')->nullable()->after('nomorKamar');
            $table->date('tanggalKeluar')->nullable()->after('tanggalMasuk');
        });
    }

    public function down()
    {
        Schema::table('monitorings', function (Blueprint $table) {
            $table->dropColumn(['tanggalMasuk', 'tanggalKeluar']);
        });
    }
};