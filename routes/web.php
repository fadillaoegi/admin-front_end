<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


// Route Login
Route::prefix('/')->group(function () {

    Route::get('/', [LoginController::class, 'index'])->name('loginIndex');
});

// Route Register
Route::prefix('/register')->group(function () {

    Route::get('/', [RegisterController::class, 'index'])->name('registerIndex');
});

// Route Karyawan
Route::prefix('/karyawan')->group(function () {

    Route::get('/', [KaryawanController::class, 'index'])->name('karyawanIndex');

    Route::get('/dataBarang', [KaryawanController::class, 'tableBarang'])->name('karyawanBarang');

    Route::get('/dataCustomer', [KaryawanController::class, 'tableCustomer'])->name('karyawanCustomer');


    Route::get('/inputBarang', [KaryawanController::class, 'createBarangKaryawan'])->name('karyawanInputBarang');

    Route::get('/inputCustomer', [KaryawanController::class, 'createCustomerKaryawan'])->name('karyawanInputCustomer');
});


// Route Admin
Route::prefix('/admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('adminIndex');

    Route::get('/dataBarang', [AdminController::class, 'dataBarang'])->name('dataBarang');

    Route::get('/dataCustomer', [AdminController::class, 'dataCustomer'])->name('dataCustomer');

    Route::get('/dataAkuntansi', [AdminController::class, 'dataAkuntansi'])->name('dataAkuntansi');
});


// Route Customer
Route::prefix('/customer')->group(function () {

    //

});
