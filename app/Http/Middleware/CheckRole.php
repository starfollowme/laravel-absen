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
     * @param  string  $role  Nama peran yang dibutuhkan
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Cek apakah user sudah login dan memiliki peran yang sesuai
        if (!Auth::check() || !$request->user()->roles()->where('role_name', $role)->exists()) {
            // Jika tidak, tolak akses
            abort(403, 'AKSES DITOLAK');
        }

        return $next($request);
    }
}