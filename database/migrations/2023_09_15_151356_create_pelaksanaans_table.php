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
        Schema::create('pelaksanaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('arp_id');
            $table->string('kegiatan');
            $table->string('ceklist'); 
            $table->string('pic'); 
            $table->string('keterangan')->nullable();
            // Menambahkan kolom admin_id sebagai foreign key
            $table->unsignedBigInteger('admin_id')->nullable(); 
            $table->timestamps();
    
            $table->foreign('arp_id')->references('id')->on('arp')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
                // Menambahkan foreign key untuk admin_id
            $table->foreign('admin_id')->references('id')->on('admins')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaksanaans');
    }
};
