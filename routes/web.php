<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;

Route::get('/home', [PengaduanController::class, 'index']);
Route::get('/isi-pengaduan', [PengaduanController::class, 'tampil_isi_pengaduan']);
Route::post('/isi-pengaduan', [PengaduanController::class, 'proses_isi_pengaduan']);
Route::get('/hapus-pengaduan/{id}', [PengaduanController::class, 'hapus']);
Route::get('/detail-pengaduan/{id}', [PengaduanController::class, "detail_pengaduan"]);
Route::post('/update/{id}', [PengaduanController::class, "update"]);
Route::get('/update/{id}', [PengaduanController::class, "tampil_update"]);
