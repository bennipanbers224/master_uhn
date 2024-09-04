<?php
//use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataMahasiswaController;

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

Route::get('/mahasiswa', [DataMahasiswaController::class, 'index']);
//Route::get('/', [HomeController::class,'dashboard']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('login');
});
