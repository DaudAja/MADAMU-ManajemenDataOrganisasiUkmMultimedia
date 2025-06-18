<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Kegiatan;
use App\Models\AnggotaKegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaKegiatanController extends Controller
{
    public function index()
    {
        $anggotaKegiatanList = AnggotaKegiatan::with('anggota', 'kegiatan')->get();
        return view('AnggotaKegiatan.LihatAnggotaKegiatan', compact('anggotaKegiatanList'));
    }

    public function create()
    {
        $anggota = Anggota::all();
        $kegiatan = Kegiatan::all();
        return view('AnggotaKegiatan.TambahAnggotaKegiatan', compact('anggota', 'kegiatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required|exists:anggota,id',
            'kegiatan_id' => 'required|exists:kegiatan,id',
        ]);

        DB::beginTransaction();
        try {
            AnggotaKegiatan::create($request->only('anggota_id', 'kegiatan_id'));

            DB::commit();
            return redirect()->route('AnggotaKegiatan.index')->with('success', 'Data kehadiran berhasil ditambahkan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal menyimpan data.');
        }
    }

    public function show(string $id)
    {
        $data = AnggotaKegiatan::with('anggota', 'kegiatan')->findOrFail($id);
        return view('AnggotaKegiatan.lihatAnggotaKegiatan', compact('data'));
    }

    public function edit(string $id)
    {
        $anggotaKegiatan = AnggotaKegiatan::findOrFail($id);
        $anggota = Anggota::all();
        $kegiatan = Kegiatan::all();
        return view('AnggotaKegiatan.EditAnggotaKegiatan', compact('anggotaKegiatan', 'anggota', 'kegiatan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'anggota_id' => 'required|exists:anggota,id',
            'kegiatan_id' => 'required|exists:kegiatan,id',
        ]);

        DB::beginTransaction();

        try {
            $anggotaKegiatan = AnggotaKegiatan::findOrFail($id);
            $anggotaKegiatan->update($request->only('anggota_id', 'kegiatan_id', 'status_hadir', 'catatan'));

            DB::commit();
            return redirect()->route('anggotakegiatan.index')->with('success', 'Data berhasil diperbarui.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal memperbarui data.');
        }
    }

    public function destroy(string $id)
    {
        $anggotaKegiatan = AnggotaKegiatan::findOrFail($id);
        $anggotaKegiatan->delete();

        return redirect()->route('AnggotaKegiatan.index')->with('success', 'Data berhasil dihapus.');

    }
}
