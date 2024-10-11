<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengumuman;

class PengumumanController extends Controller
{
    public function store(Request $request){

        $data = pengumuman::create([
            'lembaga'=>$request->lembaga,
            'judul'=>$request->judul,
            'tanggal'=>$request->date_release,
            'content'=>$request->content
        ]);
        return redirect('/pengumuman');
    }

    public function index(){

        $data = pengumuman::all();
        return view('pengumuman.index', compact('data'));

    }

    public function detail(Request $request){
        
        $id = $request->id;
        $data = pengumuman::find($id);   

        return view('pengumuman.detail', compact('data'));
    }
}
