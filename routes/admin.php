<?php

use App\Http\Middleware\isValidAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminIndexController;

Route::prefix('admin')->middleware(['auth', 'verified', isValidAdmin::class])->group(function () {
    Route::get('/dashboard', [AdminIndexController::class, 'index'])->name('admin.dashboard');

    Route::get('/karyawan', [AdminIndexController::class, 'index'])->name('admin.karyawan');

    Route::get('/absen', [AdminIndexController::class, 'index'])->name('admin.absen');

    Route::get('/cuti', [AdminIndexController::class, 'index'])->name('admin.cuti');

    Route::get('/user', [AdminIndexController::class, 'index'])->name('admin.user');


});
