<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');

Route::get('/absensi/create', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store');
Route::get('/absensi/{id}/edit', [AbsensiController::class, 'edit'])->name('absensi.edit');
Route::put('/absensi/{id}', [AbsensiController::class, 'update'])->name('absensi.update');
Route::delete('/absensi/{id}', [AbsensiController::class, 'destroy'])->name('absensi.destroy');
