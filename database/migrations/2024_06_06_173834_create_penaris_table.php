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
        Schema::create('penaris', function (Blueprint $table) {
            $table->id('ID_Penari'); 
            $table->string('Nama', 50);
            $table->integer('Umur'); 
            $table->string('Alamat', 50); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penaris');
    }
};
