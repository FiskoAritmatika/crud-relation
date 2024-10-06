<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SekolahController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SekolahController::class, 'index'])->name('index');

// Sekolah
Route::get('/sekolah/create', [SekolahController::class, 'create'])->name('sekolah.create');
Route::post('/sekolah/submit', [SekolahController::class, 'submit'])->name('sekolah.submit');
Route::get('/sekolah/edit/{id}', [SekolahController::class, 'edit'])->name('sekolah.edit');
Route::post('/sekolah/update/{id}', [SekolahController::class, 'update'])->name('sekolah.update');
Route::post('/sekolah/delete/{id}', [SekolahController::class, 'delete'])->name('sekolah.delete');

// Category
Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/submit', [CategoryController::class, 'submit'])->name('category.submit');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::post('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');