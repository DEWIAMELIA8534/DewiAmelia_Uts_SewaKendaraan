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
        // Create 'mobil' table if it doesn't exist
        if (!Schema::hasTable('mobil')) {
            Schema::create('mobil', function (Blueprint $table) {
                $table->increments('id_mobil');
                $table->string('nama_mobil', 100);
                $table->enum('jenis_mobil', ['SUV', 'sedan', 'hatchback']);
                $table->integer('kapasitas');
                $table->integer('harga');
                $table->timestamps();
            });
        }

        // Create 'harga_sewa_mobil' table if it doesn't exist
        if (!Schema::hasTable('harga_sewa_mobil')) {
            Schema::create('harga_sewa_mobil', function (Blueprint $table) {
                $table->increments('id_harga');
                $table->integer('harga');
                $table->integer('available_mobil');
                $table->date('tanggal');
                $table->unsignedInteger('id_mobil');
                $table->timestamps();

                $table->foreign('id_mobil')->references('id_mobil')->on('mobil')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harga_sewa_mobil');
        Schema::dropIfExists('mobil');
    }
};
