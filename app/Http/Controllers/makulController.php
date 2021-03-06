<?php

namespace App\Http\Controllers;

use App\makul;
use Illuminate\Http\Request;
use Alert;

class makulController extends Controller
{
    public function index()
    {
        $makul = makul::all(); // select * from nama_table  
        return view ('makul.index', compact('makul')); 
    }

    public function create()
    {
      return view('makul.create');
    }

    public function store(Request $request)
    {
        makul::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan.');
        return redirect()->route('makul');
    }

    public function edit($id)
    {
        $makul = makul::find($id);
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = makul::find($id);
        $makul->update($request->all());
        toast('Hore Data Berhasil Di Edit!','success');
        return redirect()->route('makul');
    }

    public function destroy($id)
    {
        $makul = makul::find($id);
        $makul->delete();
        toast('Hore Data Berhasil Di Hapus!','success');
        return redirect()->route('makul');
    }
}

