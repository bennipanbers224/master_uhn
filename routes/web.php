<?php
//use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataMahasiswaController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('index');
});

Route::get('/mahasiswa', [DataMahasiswaController::class, 'index']);
//Route::get('/', [HomeController::class,'dashboard']);