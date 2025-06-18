<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\AnggotaKegiatan;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartisipasiController extends Controller
{
    public function create()
    {
        $kegiatan = Kegiatan::all();
        return view('Kegiatan.lihatKegiatan', compact('kegiatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kegiatan_id' => 'required|exists:kegiatan,id',
        ]);

        $anggota = Anggota::where('user_id', Auth::id())->first();

        if (!$anggota) {
            return redirect()->back()->with('error', 'Data anggota tidak ditemukan.');
        }

        AnggotaKegiatan::create([
            'anggota_id' => $anggota->id,
            'kegiatan_id' => $request->kegiatan_id,
        ]);

        return redirect()->route('partisipasi.create')->with('success', 'Berhasil memilih kegiatan.');
    }
}
