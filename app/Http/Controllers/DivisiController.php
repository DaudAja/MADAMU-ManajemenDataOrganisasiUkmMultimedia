<?php

namespace App\Http\Controllers;
use App\Models\Anggota;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = Divisi::all();
        return view('lihatDivisi', compact('divisi'));
    }

    public function create()
    {
        return view('tambahDivisi');
    }

    public function store(Request $request)
    {
        Divisi::create($request->all());
        return redirect()->route('lihatDivisi');
    }

    public function show()
    {
        return view('divisi.index');
    }

    public function edit($id)
    {
        $divisi = Divisi::findOrFail($id);
        return view('editDivisi', compact('divisi'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_divisi' =>'required'
        ]);

        $divisi = Divisi::findOrFail($id);
        $divisi->nama_divisi = $request->nama_divisi;
        $divisi->save();

        return redirect()->route('divisi.index')->with('berhasil', 'data berhasil di perbaharui');
    }

    public function destroy(string $id)
    {
        Divisi::destroy($id);
        return back();
    }
}
