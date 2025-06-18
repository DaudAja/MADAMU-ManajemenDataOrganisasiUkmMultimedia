<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('Profile.lihatProfile');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = Auth::user();
        $anggota = Anggota::where('user_id', $user->id)->first();
        // dd($anggota);
        return view('Profile.lihatProfile', compact('anggota'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $anggota = Anggota::where('user_id', $user->id)->first();
        // dd($anggota);
        return view('Profile.editProfile',compact('anggota'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        // dd($request->all());
        $id = Auth::user()->id;
        $anggota = Anggota::where('user_id', $id)->first();
        // dd($anggota);
        $anggota->nama_lengkap = $request->nama_lengkap;
        $anggota->alamat = $request->alamat;
        $anggota->no_hp = $request->no_hp;
        $anggota->save();


        return redirect()->route('profile.show', ['id' => $id])->with('success', 'Data berhasil diperbaharui');
    }

    public function destroy(string $id)
    {
        //
    }

}
