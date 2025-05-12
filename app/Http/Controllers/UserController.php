<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('lihatUser', compact('user'));
    }

    public function create()
    {
        return view('tambahUser');
    }

    public function store(Request $request)
    {
        $request['password'] = Hash::make($request->password);
        User::create($request->all());
        return redirect()->route('lihatUser');
    }

    public function show()
    {
        return view('user.index');
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('editUser', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
        'username' => 'required',
        'email' => 'required|email',
        'password' => 'nullable|string|min:6',
        'role' => 'required|in:admin,ketua,anggota'
    ]);

        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->email = $request->email;

        if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
        }

        $user->role = $request->role;
        $user->save();

        return redirect()->route('user.index')->with('berhasil', 'Data berhasil diperbarui');
    }


    public function destroy(string $id)
    {
        User::destroy($id);
        return back();
    }
}
