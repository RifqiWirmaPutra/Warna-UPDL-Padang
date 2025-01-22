<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHargaColumnsToPenginapansTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('penginapans', function (Blueprint $table) {
            $table->integer('hargadpln')->default(0);
            $table->integer('hargampln')->default(0);
            $table->integer('hargadnonpln')->default(0);
            $table->integer('hargamnonpln')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penginapans', function (Blueprint $table) {
            $table->dropColumn(['hargadpln', 'hargampln', 'hargadnonpln', 'hargamnonpln']);
        });
    }
}
