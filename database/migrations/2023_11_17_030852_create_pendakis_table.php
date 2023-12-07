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
        Schema::create('pendakis', function (Blueprint $table) {
            $table->id('id_pendaki');
            $table->string('id_gunung');
            $table->string('nama');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['cowo', 'cewe']);
            $table->bigInteger('nomer_telepon');
            $table->bigInteger('nik');
            $table->string('foto_ktp');
            $table->date('tanggal_pendakian');
            $table->date('tanggal_turun')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendakis');
    }
};
