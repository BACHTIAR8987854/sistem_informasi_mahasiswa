<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerMahasiswa extends Controller
{
    // controller tampil data
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        //dd($mahasiswa);
        return view('main.read', compact('mahasiswa'));
    }

    // controller tambah data
    public function create()
    {    
        return view('main.create');
    }

    // controller edit data
    public function edit($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->first();
        //dd($data);
         return view('main.edit',compact('mahasiswa'));
    }

    // controller delete data
    public function delete($id)
    {
        
        DB::table('mahasiswa')->where ('id', $id)->delete();
        return redirect('read');
    }

    // controller update data
    public function update(Request $request, $id)
    {
        DB::table('mahasiswa')->where('id', $id)->update([
            'nama'  => $request -> nama,
            'prodi'  => $request -> prodi,
            'fakultas' => $request -> fakultas,
            'angkatan' => $request -> angkatan 
        ]);
            return redirect('/read');
    }
    
    // controller simpan data
    public function save(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'nama' => $request -> nama,
            'prodi' => $request -> prodi,
            'fakultas' => $request -> fakultas,
            'angkatan' => $request -> angkatan
        ]);
            return redirect('/read');
    }

    
}
