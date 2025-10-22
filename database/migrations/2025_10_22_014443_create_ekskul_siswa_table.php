<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::create('ekskul_siswa', function (Blueprint $table) {
        $table->id();
        $table->foreignId('siswa_id')->constrained()->onDelete('cascade');
        $table->foreignId('ekskul_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekskul_siswa');
    }
};
