<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;

Route::get('/home', [PengaduanController::class, 'index']);
Route::get('/isi-pengaduan', [PengaduanController::class, 'tampil_isi_pengaduan']);
Route::post('/isi-pengaduan', [PengaduanController::class, 'proses_isi_pengaduan']);
