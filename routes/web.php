<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;

Route::get('/halo', function () {
    return "Halo, ini halaman pertama saya di Laravel!";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('siswa', SiswaController::class);
Route::resource('guru', GuruController::class);
