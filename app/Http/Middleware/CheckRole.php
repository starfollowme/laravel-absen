<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  ...$roles  Nama-nama peran yang diizinkan
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        // Cek apakah pengguna memiliki salah satu dari peran yang diizinkan
        if (!$request->user()->roles()->whereIn('role_name', $roles)->exists()) {
            // Jika tidak punya, tolak akses
            abort(403, 'AKSES DITOLAK. ANDA TIDAK MEMILIKI PERAN YANG SESUAI.');
        }

        return $next($request);
    }
}
