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
        Schema::create('status_pendakian', function (Blueprint $table) {
            $table->id();
            $table->integer('pendaki_id')->constrained(); // Menambahkan kunci asing ke tabel pendaki
            $table->string('status');
            $table->date('tanggal_naik')->nullable();
            $table->date('tanggal_turun')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_pendakian');
    }
};
