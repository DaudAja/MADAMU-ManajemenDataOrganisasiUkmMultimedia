<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('lihatKegiatan', compact('kegiatan'));
    }

    public function create()
    {
        return view('tambahKegiatan');
    }

    public function store(Request $request)
    {
        Kegiatan::create($request->all());
        return redirect()->route('kegiatan.index');
    }

    public function show()
    {
        $kegiatan = Kegiatan::all(); // relasi dimuat
        return view('lihatKegiatan', compact('kegiatan'));
    }


    public function edit(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('editKegiatan', compact('kegiatan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required|date'
        ]);

        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->lokasi = $request->lokasi;
        $kegiatan->tanggal = $request->tanggal;
        $kegiatan->save();

        // $kegiatan->update($request->only(['nama_kegiatan', 'deskripsi', 'lokasi', 'tanggal']));

        return redirect()->route('kegiatan.index')->with('berhasil', 'data berhasil di perbaharui');

    }

    public function destroy(string $id)
    {
        Kegiatan::destroy($id);
        return back();
    }
}
