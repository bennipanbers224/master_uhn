<?php
//use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\PengumumanController;

Route::get('/', function () {
    if(Auth::user()!=null){
        return view('dashboard');
    }else{
        return redirect("login");
    }
});

Route::get('/admin', function () {
    return view('index');
});

//route for pengumuman
Route::get('/pengumuman',[PengumumanController::class, 'index']);
Route::get('/tambah-pengumuman', function () {
    return view('pengumuman.tambah');
});
Route::post('/pengumuman-store', [PengumumanController::class, 'store']);



Route::get('/mahasiswa', [DataMahasiswaController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('login');
});

Route::get('/upload', [UploadController::class, 'index']);
