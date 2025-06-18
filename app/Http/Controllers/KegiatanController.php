<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{

    public function kegiatanku()
    {
        $user = Auth::user();
        $anggota = $user->anggota; // pastikan relasi user -> anggota sudah dibuat

        if (!$anggota) {
            return back()->with('error', 'Data anggota tidak ditemukan.');
        }

        $kegiatanku = $anggota->kegiatan; // ambil dari relasi belongsToMany di model Anggota

        return view('Kegiatan.lihatkegiatanku', compact('kegiatanku'));
    }

    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('Kegiatan.lihatKegiatan', compact('kegiatan'));
    }

    public function create()
    {
        return view('Kegiatan.tambahKegiatan');
    }

    public function store(Request $request)
    {
        Kegiatan::create($request->all());
        return redirect()->route('kegiatan.index');
    }

    public function show()
    {
        $kegiatan = Kegiatan::all(); // relasi dimuat
        return view('kegiatan.index', compact('kegiatan'));
    }


    public function edit(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('Kegiatan.editKegiatan', compact('kegiatan'));
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

        return redirect()->route('kegiatan.index')->with('success', 'data berhasil di perbaharui');
    }

    public function destroy(string $id)
    {
        Kegiatan::destroy($id);
        return back();
    }
}
