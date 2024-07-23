<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
  return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
    Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'registerPost'])->name('register');
    Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'loginPost'])->name('login');
  });
  Route::resource('/admin/pengguna', \App\Http\Controllers\UserController::class);
  Auth::routes();

  Route::middleware('auth', 'user-access:admin')->name('admin.')->group(function () {

    Route::resource('/admin/customer', \App\Http\Controllers\CustomerController::class);
    Route::resource('/admin/kamar', \App\Http\Controllers\KamarController::class);
    Route::resource('/admin/hargahariini', \App\Http\Controllers\HargaHariIniController::class);
    Route::resource('/admin/reservasi', \App\Http\Controllers\ReservasiController::class);
    Route::resource('/admin/invoice', \App\Http\Controllers\InvoiceController::class);
    Route::resource('/admin/pembayaran', \App\Http\Controllers\PembayaranController::class);
    Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::delete('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
  });

  Route::middleware('auth', 'user-access:customer')->name('customer.')->group(function () {
    Route::resource('/customer/reservasi', \App\Http\Controllers\ReservasiController::class);
    Route::get('/customer/home', [\App\Http\Controllers\HomeController::class, 'customerHome'])->name('customer.home');
    Route::delete('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
  });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/pengguna', \App\Http\Controllers\UserController::class);

