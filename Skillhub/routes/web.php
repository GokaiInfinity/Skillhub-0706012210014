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
// Tambah dan Insert Peserta
Route::get('/addpeserta', [PesertaController::class, 'addpesertaview']);
Route::post('/insertpeserta', [PesertaController::class, 'insertpeserta']);
// Edit dan update Peserta
Route::get('/editpeserta/{id}', [PesertaController::class, 'editpesertaview']);
Route::post('/updatepeserta/{id}', [PesertaController::class, 'updatepeserta']);
// Hapus Peserta
Route::get('/deletepeserta/{id}', [PesertaController::class, 'deletepeserta']);


// Tambah Peserta ke Kelas
Route::get('/addpesertatokelas/{id}', [PesertaKelasController::class, 'addpesertatokelas']);
Route::post('/insertpesertatokelas/{id}', [PesertaKelasController::class, 'insertpesertatokelas']);

// View Kelas
Route::get('/kelas', [KelasController::class, 'kelasview']);
// Tambah dan insert kelas
Route::get('/addkelas', [KelasController::class, 'addkelasview']);
Route::post('/insertkelas', [KelasController::class, 'insertkelas']);
// Edit dan update kelas
Route::get('/editkelas/{id}', [KelasController::class, 'editkelasview']);
Route::post('/updatekelas/{id}', [KelasController::class, 'updatekelas']);
// Hapus Kelas
Route::get('/deletekelas/{id}', [KelasController::class, 'deletekelas']);
