<?php

use App\Http\Controllers\PesertaController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peserta', [PesertaController::class, 'pesertaview']);
Route::get('/addpeserta', [PesertaController::class, 'addpesertaview']);
Route::post('/insertpeserta', [PesertaController::class, 'insertpeserta']);
Route::get('/editpeserta/{id}', [PesertaController::class, 'editpesertaview']);
Route::post('/updatepeserta/{id}', [PesertaController::class, 'updatepeserta']);
Route::get('/deletepeserta/{id}', [PesertaController::class, 'deletepeserta']);


Route::get('/kelas', [KelasController::class, 'kelasview']);
