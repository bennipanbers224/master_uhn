<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;

class DataMahasiswaController extends Controller
{
    public function index(){
        $dataMahasiswa = DB::table('mahasiswas')->get();
        return view('mahasiswa.index', compact('dataMahasiswa'));
    }

    public function importData(Request $request){
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        Excel::import(new MahasiswaImport, $request->file('file'));
        
        return redirect()->back()->with('success', 'Data imported successfully!');
    }
}
