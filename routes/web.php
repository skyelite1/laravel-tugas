<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;


Route::get('/hapus-pengaduan/{id}', [PengaduanController::class, 'hapus']);
Route::get('/detail-pengaduan/{id}', [PengaduanController::class, "detail_pengaduan"]);
Route::post('/update/{id}', [PengaduanController::class, "update"]);
Route::get('/update/{id}', [PengaduanController::class, "tampil_update"]);
Route::get('/register', [AuthController::class, "register"]);
Route::post('/register', [AuthController::class, "store"]);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
// Route::middleware(['auth'])->group(function () {
Route::get('/home', [PengaduanController::class, 'index']);
Route::get('/isi-pengaduan', [PengaduanController::class, 'tampil_isi_pengaduan']);
Route::post('/isi-pengaduan', [PengaduanController::class, 'proses_isi_pengaduan']);    
// });