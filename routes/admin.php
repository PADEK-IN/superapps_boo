<?php

use App\Http\Middleware\isValidAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminIndexController;
use App\Http\Controllers\AdminAbsenController;
use App\Http\Controllers\AdminKaryawanController;

Route::prefix('admin')->middleware(['auth', 'verified', isValidAdmin::class])->group(function () {
    Route::get('/dashboard', [AdminIndexController::class, 'index'])->name('admin.dashboard');

    Route::get('/karyawan', [AdminKaryawanController::class, 'listPage'])->name('admin.karyawan');

    Route::get('/absen', [AdminAbsenController::class, 'listPage'])->name('admin.absen');

    Route::get('/cuti', [AdminIndexController::class, 'index'])->name('admin.cuti');

    Route::get('/user', [AdminIndexController::class, 'index'])->name('admin.user');


});
