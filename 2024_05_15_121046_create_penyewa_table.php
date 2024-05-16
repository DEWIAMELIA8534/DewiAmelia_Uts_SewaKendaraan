<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penyewa', function (Blueprint $table) {
            $table->string('nama_penyewa', 100); // Kolom nama_penyewa dengan tipe varchar
            $table->text('alamat'); // Kolom alamat dengan tipe text
            $table->string('no_hp', 15); // Kolom no_hp dengan tipe varchar
            $table->timestamps(); // Kolom timestamps (created_at dan updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewa');
    }
}