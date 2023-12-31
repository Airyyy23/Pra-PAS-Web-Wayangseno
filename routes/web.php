<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/barangdetail/{barang}', [BarangController::class, 'show'])->name('barang.show');
Route::get('/barang/barangedit/{barang}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/barangupdate/{barang}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/barangdestroy/{barang}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::get('/barang/barangtambah', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');

Route::get('/pelanggan/pelangganall', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/pelanggandetail/{pelanggan}', [PelangganController::class, 'show'])->name('pelanggan.show');
Route::get('/pelanggan/pelangganedit/{pelanggan}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/pelangganupdate/{pelanggan}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/pelanggandestroy/{pelanggan}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
Route::get('/pelanggan/pelanggantambah', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');

Route::get('/admin/adminall', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/admindetail/{admin}', [AdminController::class, 'show'])->name('admin.show');
Route::get('/admin/adminedit/{admin}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/adminupdate/{admin}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/admindestroy/{admin}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/admintambah', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');