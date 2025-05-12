<?php

namespace App\Http\Controllers;
use App\Models\Anggota;
use App\Models\Divisi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AnggotaController extends Controller
{
    public function index()
    {
       $anggota = Anggota::with('divisi')->get();
       return view('lihatAnggota', compact('anggota'));
    }

    public function create()
    {
       $divisi = Divisi::all(); // ambil semua divisi
       $user = User::all(); // ambil semua divisi
       return view('tambahAnggota', compact('divisi'));
    }

    public function store(Request $request)
    {
        Anggota::create($request->all());
        return redirect()->route('lihatAnggota');
    }

    public function show()
    {
        return view('anggota.index');
    }

    public function edit(string $id)
    {
        $anggota = Anggota::findOrFail($id);
        $divisi = Divisi::all(); // Supaya dropdown divisi tersedia
        $user = User::all();
        return view('editAnggota', compact('anggota', 'divisi', 'user'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'divisi_id' => 'required|exists:divisi,id'
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->nama_lengkap = $request->nama_lengkap;
        $anggota->alamat = $request->alamat;
        $anggota->no_hp = $request->no_hp;
        $anggota->divisi_id = $request->divisi_id;
        $anggota->save();


        return redirect()->route('anggota.index')->with('berhasil', 'Data berhasil diperbaharui');
    }

    public function destroy(string $id)
    {
        Anggota::destroy($id);
        return back();
    }
}
