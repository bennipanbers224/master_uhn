<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\mahasiswa;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){

        $nim = Auth::user()->nim;
        
        $mahasiswa = mahasiswa::where('nim', $nim)->get();

        return view('dokumen.index', compact('mahasiswa'));
    }

    public function uploadArtefak(Request $request){
        $mahasiswa = mahasiswa::where('nim', $nim)->get();
    }
}
