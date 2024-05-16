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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->string('no_pol', 10); // Primary key 1: nomor polisi
            $table->string('no_mesin', 20); // Primary key 2: nomor mesin
            $table->enum('jnis_mobil', ['mpv', 'city', 'suv']); // Tipe mobil: mpv, city, atau suv
            $table->string('nama_mobil', 40); // Nama mobil
            $table->enum('merk', ['honda', 'toyota', 'daihatsu']); // Merk mobil: honda, toyota, atau daihatsu
            $table->string('kapasitas', 5); // Kapasitas mobil
            $table->integer('tarif'); // Tarif sewa per hari
            $table->timestamps(); // Kolom timestamps (created_at dan updated_at)

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
