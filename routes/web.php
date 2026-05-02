<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'home']);
Route::get('/food', [FrontController::class, 'food']);
Route::get('/company', [FrontController::class, 'company']);
Route::get('/tambah', [FrontController::class, 'tambah']);
Route::post('/simpan-warung', [FrontController::class, 'simpan']);
Route::delete('/hapus-warung/{id}', [FrontController::class, 'hapus']);

// Jalur Rahasia Admin
Route::get('/rahasia-admin', [FrontController::class, 'admin']);
