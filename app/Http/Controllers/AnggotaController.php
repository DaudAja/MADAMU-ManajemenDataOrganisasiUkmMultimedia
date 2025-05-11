<?php

namespace App\Http\Controllers;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('lihatAnggota', compact('anggota'));
    }

    public function create()
    {
       

    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        return view('lihatAnggota', compact('anggota'));
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
