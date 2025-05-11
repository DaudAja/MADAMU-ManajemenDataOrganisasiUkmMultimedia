<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
{
    $kegiatan = Kegiatan::with('anggotas')->get(); // relasi dimuat
    return view('lihatKegiatan', compact('kegiatan'));
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
