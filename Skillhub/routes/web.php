<?php

use App\Http\Controllers\PesertaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PesertaKelasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// View Peserta
Route::get('/peserta', [PesertaController::class, 'pesertaview']);
// Detail Peserta
Route::get('/detailpeserta/{peserta_id}', [PesertaController::class, 'detailpeserta']);
// Tambah dan Insert Peserta
Route::get('/addpeserta', [PesertaController::class, 'addpesertaview']);
Route::post('/insertpeserta', [PesertaController::class, 'insertpeserta']);
// Edit dan update Peserta
Route::get('/editpeserta/{peserta_id}', [PesertaController::class, 'editpesertaview']);
Route::post('/updatepeserta/{peserta_id}', [PesertaController::class, 'updatepeserta']);
// Hapus Peserta
Route::get('/deletepeserta/{peserta_id}', [PesertaController::class, 'deletepeserta']);
// Tambah Peserta ke Kelas
Route::get('/addpesertatokelas/{peserta_id}', [PesertaKelasController::class, 'addpesertatokelas']);
Route::post('/insertpesertatokelas/{peserta_id}', [PesertaKelasController::class, 'insertpesertatokelas']);

// View Kelas
Route::get('/kelas', [KelasController::class, 'kelasview']);
// Detail Kelas
Route::get('/detailkelas/{kelas_id}', [KelasController::class, 'detailkelas']);
// Tambah dan insert kelas
Route::get('/addkelas', [KelasController::class, 'addkelasview']);
Route::post('/insertkelas', [KelasController::class, 'insertkelas']);
// Edit dan update kelas
Route::get('/editkelas/{kelas_id}', [KelasController::class, 'editkelasview']);
Route::post('/updatekelas/{kelas_id}', [KelasController::class, 'updatekelas']);
// Hapus Kelas
Route::get('/deletekelas/{kelas_id}', [KelasController::class, 'deletekelas']);
