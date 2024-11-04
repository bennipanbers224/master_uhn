<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\mahasiswa;

class DataMahasiswaController extends Controller
{
    public function index(){
        $dataMahasiswa = DB::table('mahasiswas')->get();
        return view('mahasiswa.index', compact('dataMahasiswa'));
    }

    public function getDataWisudawan(Request $request){
        
        $wisudawan = mahasiswa::where('nim', $request->nim)->get();
        return view('mahasiswa.edit', compact('wisudawan'));
    }

    public function updateWisudawan(Request $request){
        
        mahasiswa::where('id', $request->id)->update([
            'name'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'ayah_kandung'=>$request->ayah,
            'ibu_kandung'=>$request->ibu,
            'lama_studi'=>$request->lama_studi,
            'fakultas'=>$request->fakultas,
            'program_studi'=>$request->prodi,
            'nim'=>$request->nim,
            'ipk'=>$request->ipk,
            'umur'=>$request->umur,
            'status_kelulusan'=>$request->status_kelulusan
        ]);

        return redirect('/mahasiswa');
    }

    public function storeWisudawan(Request $request){

        mahasiswa::create([
            'name'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'ayah_kandung'=>$request->ayah,
            'ibu_kandung'=>$request->ibu,
            'lama_studi'=>$request->lama_studi,
            'fakultas'=>$request->fakultas,
            'program_studi'=>$request->prodi,
            'nim'=>$request->nim,
            'ipk'=>$request->ipk,
            'umur'=>$request->umur,
            'status_kelulusan'=>$request->status_kelulusan
        ]);

        return redirect('/mahasiswa');
    }

    public function create(){
        return view('mahasiswa.create');
    }

    public function importData(Request $request){
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        Excel::import(new MahasiswaImport, $request->file('file'));
        
        return redirect()->back()->with('success', 'Data imported successfully!');
    }

    public function filterByFaculty(Request $request){

        $fakultas = $request->faculty_name;

        $dataMahasiswa = mahasiswa::where('fakultas', $fakultas)->get();

        if($dataMahasiswa->isEmpty()){
            session()->flash('alert', 'Data tidak ditemukan');
            return redirect()->back();
        }else{
            return view('mahasiswa.index', compact('dataMahasiswa'));
        }
    }

    public function filterByProdi(Request $request){
        $prodi = $request->prodi_name;

        $dataMahasiswa = mahasiswa::where('program_studi', $prodi)->get();

        if($dataMahasiswa->isEmpty()){
            session()->flash('alert', 'Data tidak ditemukan');
            return redirect()->back();
        }else{
            return view('mahasiswa.index', compact('dataMahasiswa'));
        }
    }
}
