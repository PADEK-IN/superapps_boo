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

    Route::get('/izin', [IzinController::class, 'createlistPage'])->name('izin');
    Route::get('/izin/create', [IzinController::class, 'createPage'])->name('izin.create');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
