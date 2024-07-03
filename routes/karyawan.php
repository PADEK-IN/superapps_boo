<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isValidKaryawan;
use App\Http\Controllers\Karyawan\IndexController;
use App\Http\Controllers\Karyawan\AbsenController;
use App\Http\Controllers\Karyawan\IzinController;
use App\Http\Controllers\Karyawan\ProfileController;

Route::middleware(['auth', 'verified', isValidKaryawan::class])->group(function () {
    Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard');

    Route::get('/absen', [AbsenController::class, 'listPage'])->name('absen');
    Route::get('/absen/create', [AbsenController::class, 'createPage'])->name('absen.create');
    Route::post('/absen/store', [AbsenController::class, 'store'])->name('absen.store');

    Route::get('/izin', [IzinController::class, 'listPage'])->name('izin');
    Route::get('/izin/create', [IzinController::class, 'createPage'])->name('izin.create');
    Route::post('/izin/store', [IzinController::class, 'storeData'])->name('izin.store');

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
});
