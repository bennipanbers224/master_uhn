<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataMahasiswaController extends Controller
{
    public function index(){
        $dataMahasiswa = DB::table('mahasiswas')->get();
        return view('mahasiswa.index', compact('dataMahasiswa'));
    }
}
