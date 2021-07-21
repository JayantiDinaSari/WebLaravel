<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use App\makul;
use App\nilai;
use Illuminate\Http\Request;

class nilaiController extends Controller
{
    public function index()
    {
        $nilai = nilai::with(['makul' , 'mahasiswa'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $makul = makul::all();
        $mahasiswa = mahasiswa::all();
        return view('nilai.create', compact('makul', 'mahasiswa'));
    }

    public function store(Request $request)
    {
        Nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
        $makul = makul::all();
        $mahasiswa = mahasiswa::all();
        $nilai = nilai::find($id);
        return view('nilai.edit', compact('nilai', 'makul', 'mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $nilai = nilai::find($id);
        $nilai->update($request->all());
        toast('Data Berhasil Diedit','success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = nilai::find($id);
        $nilai->delete();
        toast('Data Berhasil Dihapus','success');
        return redirect()->route('nilai');
    }
}
