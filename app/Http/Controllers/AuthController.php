<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        return view('Autentikasi.login');
    }

    public function authenticate(Request $request)
    {
          $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            // dd(Auth::user());

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Terjadi kesalahan, periksa kembali email atau password anda.',
        ])->onlyInput('email');
    }

    public function registerView()
    {
        return view('Autentikasi.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            // 'role' => 'required|in:admin,ketua,anggota'
        ]);

            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            // $user->role = $request->role;
            $user->save();

        return redirect('/login')->with('success', 'Berhasil mendaftarkan akun');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
