<?php

namespace App\Http\Controllers;


use App\Models\Anggota;
use App\Models\Divisi;
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
            // 'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // dd(Auth::user());

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Terjadi kesalahan, periksa kembali username atau password anda.',
        ])->onlyInput('email');
    }


    // $request->validate([
    //     // 'username' => ['required'],
    //     'email' => ['required', 'email'],
    //     'password' => ['required'],
    // ]);
    //     // dd($request->all());

    //     $infologin = [
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ];

    //     if (Auth::attempt($infologin)) {
    //         echo "berhasil";
    //         $request->session()->regenerate();
    //         // dd(Auth::user());
    //         return redirect()->intended('dashboard');
    //     }else {
    //         return back()->withErrors('email dan password salah')->withInput();
    //     }

    // }

    // public function registerView()
    // {
    //     $divisi = Divisi::all();
    //     return view('Autentikasi.register', compact('divisi'));
    // }

    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'nama_lengkap' => 'required',
    //         'email' => 'required|email|unique:users,email',
    //         'alamat' => 'required',
    //         'no_hp' => 'required',
    //         'divisi_id' => 'required|exists:divisi,id',
    //         'password' => 'required|string|min:6|confirmed',
    //         // 'role' => 'required|in:admin,ketua,anggota'

    //     ]);
    //         $user = new User();
    //         $user->username = $request->username;
    //         $user->email = $request->email;
    //         $user->password = Hash::make($request->password);
    //         // $user->role = $request->role;
    //         $user->save();

    //         $anggota = new Anggota();
    //         $anggota->user_id = $user->id;
    //         $anggota->divisi_id = $request->divisi_id;
    //         $anggota->nama_lengkap = $request->nama_lengkap;
    //         $anggota->alamat = $request->alamat;
    //         $anggota->no_hp = $request->no_hp;
    //         $anggota->save();


    //     return redirect('/login')->with('success', 'Berhasil mendaftarkan akun');
    // }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
