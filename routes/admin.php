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
    Route::patch('/karyawan/validate', [AdminKaryawanController::class, 'validate'])->name('admin.karyawan.validate');
    Route::get('/karyawan/edit/{id}', [AdminKaryawanController::class, 'edit'])->name('admin.karyawan.edit');
    Route::post('/karyawan/update/{id}', [AdminKaryawanController::class, 'update'])->name('admin.karyawan.update');
    Route::get('/karyawan/delete/{id}', [AdminKaryawanController::class, 'destroy'])->name('admin.karyawan.destroy');

    Route::get('/absen', [AdminAbsenController::class, 'listPage'])->name('admin.absen');
    Route::get('/absen/request', [AdminAbsenController::class, 'requestPage'])->name('admin.absen.request');
    Route::patch('/absen/validate', [AdminAbsenController::class, 'validate'])->name('admin.absen.validate');
    Route::get('/absen/edit/{id}', [AdminAbsenController::class, 'edit'])->name('admin.absen.edit');
    Route::post('/absen/update/{id}', [AdminAbsenController::class, 'update'])->name('admin.absen.update');
    Route::get('/absen/delete/{id}', [AdminAbsenController::class, 'destroy'])->name('admin.absen.destroy');

    Route::get('/izin', [AdminIzinController::class, 'listPage'])->name('admin.izin');
    Route::get('/izin/request', [AdminIzinController::class, 'requestPage'])->name('admin.izin.request');
    Route::patch('/izin/validate', [AdminIzinController::class, 'validate'])->name('admin.izin.validate');
    Route::get('/izin/edit/{id}', [AdminIzinController::class, 'edit'])->name('admin.izin.edit');
    Route::post('/izin/update/{id}', [AdminIzinController::class, 'update'])->name('admin.izin.update');
    Route::get('/izin/delete/{id}', [AdminIzinController::class, 'destroy'])->name('admin.izin.destroy');

});
