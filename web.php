<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KendaraanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/penyewa',\App\Http\Controllers\PenyewaController::class);
Route::resource('/kendaraan',\App\Http\Controllers\KendaraanController::class);
