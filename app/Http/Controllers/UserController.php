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
        return view('User.lihatUser', compact('user'));
    }

    public function create()
    {
        return view('User.tambahUser');
    }

    public function store(Request $request)
    {
        $request['password'] = Hash::make($request->password);
        User::create($request->all());
        return redirect()->route('user.index');
    }

    public function show()
    {
         $user = User::all();
        return view('user.index', compact('user'));
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('User.editUser', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
        'username' => 'required',
        'email' => 'required|email',
        'password' => 'nullable|string|min:3',
        'role' => 'required|in:admin,ketua,anggota'
    ]);

        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->email = $request->email;
        // if ($request->filled('password')) {
        // $user->password = Hash::make($request->password);
        // }
        $user->role = $request->role;
        $user->save();

        return redirect()->route('user.index')->with('success', 'Data berhasil diperbarui');
    }


    public function destroy(string $id)
    {
        User::destroy($id);
        return back();
    }
}
