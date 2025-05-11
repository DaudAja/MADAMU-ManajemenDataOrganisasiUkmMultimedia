<?php

namespace App\Http\Controllers;
use App\Models\AnggotaKegiatan;
use Illuminate\Http\Request;

class AnggotaKegiatanController extends Controller
{
    public function index()
    {
        $anggotakegiatan = AnggotaKegiatan::all();
        return view('lihatAnggotaKegiatan', compact('anggotakegiatan'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        return view('lihatAnggotaKegiatan', compact('anggotakegiatan'));
    }

    public function edit(string $id)
    {   
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
