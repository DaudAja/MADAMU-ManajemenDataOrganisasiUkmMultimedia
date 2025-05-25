<?php

namespace App\Http\Controllers;
use App\Models\Anggota;
use App\Models\Divisi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    public function index()
    {
       $anggota = Anggota::with('divisi','user')->get();
       return view('lihatAnggota', compact('anggota'));
    }

    public function create()
    {
       $divisi = Divisi::all(); // ambil semua divisi
       $user = User::all(); // ambil semua divisi


       return view('tambahAnggota', compact('divisi', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'divisi_id' => 'required|exists:divisi,id',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $user->anggota()->create([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'divisi_id' => $request->divisi_id,]);

        return redirect()->route('anggota.index');
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
    $anggota = Anggota::findOrFail($id);
    $anggota->user()->delete(); // jika ingin hapus user-nya juga
    $anggota->delete();

    return back();
    }

}
