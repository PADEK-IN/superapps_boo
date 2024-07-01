<?php

use App\Http\Middleware\isValidAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminIndexController;
use App\Http\Controllers\Admin\AdminAbsenController;
use App\Http\Controllers\Admin\AdminIzinController;
use App\Http\Controllers\Admin\AdminKaryawanController;
use App\Http\Controllers\Admin\AdminUserController;

Route::prefix('admin')->middleware(['auth', 'verified', isValidAdmin::class])->group(function () {
    Route::get('/dashboard', [AdminIndexController::class, 'index'])->name('admin.dashboard');

    Route::get('/karyawan', [AdminKaryawanController::class, 'listPage'])->name('admin.karyawan');
    Route::get('/karyawan/pending', [AdminKaryawanController::class, 'pendingPage'])->name('admin.karyawan.pending');

    Route::get('/absen', [AdminAbsenController::class, 'listPage'])->name('admin.absen');
    Route::get('/absen/request', [AdminAbsenController::class, 'requestPage'])->name('admin.absen.request');

    Route::get('/izin', [AdminIzinController::class, 'listPage'])->name('admin.izin');
    Route::get('/izin/request', [AdminIzinController::class, 'requestPage'])->name('admin.izin.request');

});
