<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function view(){
        $karyawans = Karyawan::all();
        return view('welcome', compact('karyawans'));
    }
    public function create(){
        return view('createKaryawan');
    }

    public function store(Request $request){

        $request->validate([
            'nama' => 'required |between:5,20 ',
            'umur' => 'required |gt:20 ',
            'alamat' => 'required |between:10,40 ',
            'nomor' => 'required |between:9,12 '
        ]);


        Karyawan::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'nomor' => $request->nomor
        ]);
        return redirect(route('show'));
    }

    public function edit($id){
        $karyawan = Karyawan::findOrFail($id);
        return view('editKaryawan', compact('karyawan'));
    }

    public function update(Request $request, $id){
        $karyawan = Karyawan::findOrFail($id);

        $karyawan->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'nomor' => $request->nomor
        ]);
        return redirect(route('show'));
    }

    public function delete($id){
        Karyawan::destroy($id);
        return redirect(route('show'));
    }
}
