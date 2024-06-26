<?php

use App\Http\Controllers\Karyawan\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\isValidKaryawan;

Route::middleware(['auth', 'verified', isValidKaryawan::class])->group(function () {
    Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard');

    Route::get('/absen', [IndexController::class, 'index'])->name('absen');

    Route::get('/cuti', [IndexController::class, 'index'])->name('cuti');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
