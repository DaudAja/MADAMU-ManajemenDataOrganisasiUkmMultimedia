<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
       // Cek apakah user sudah login dan punya role admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Kalau bukan admin, redirect ke halaman lain (misalnya dashboard atau login)
        return redirect('/login')->with('error', 'Akses ditolak. Anda bukan admin.');
    }
}
