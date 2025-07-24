<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HargaHariIniController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ReservasiController;
use App\Models\reservasi;
use Illuminate\Support\Facades\Route;


Route::resource('customers', CustomerController::class);
Route::resource('invoice', InvoiceController::class);
Route::resource('pembayaran', PembayaranController::class);
Route::resource('kamar', KamarController::class);
Route::resource('reservasi', ReservasiController::class);
Route::resource('harga_hari_ini', HargaHariIniController::class);


Route::get('/', function () {
    return view('welcome');
});

// Route::resource('kwitansi', KwitansiController::class);
// Route::resource('invoices', InvoiceController::class);
// Route::resource('/pengguna',UserController::class);
// Route::resource('/penyewas',PenyewaController::class);
// Route::resource('/sewa',SewaController::class);
