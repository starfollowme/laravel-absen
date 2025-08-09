<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan halaman form login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Memproses permintaan login.
     */
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'NIP' => 'required|string',
            'Password' => 'required|string',
        ]);

        // Coba untuk melakukan autentikasi
        // Kita menggunakan guard 'web' yang sudah kita atur untuk model TenagaPendidik
        if (Auth::guard('web')->attempt(['NIP' => $request->NIP, 'password' => $request->Password], $request->filled('remember'))) {
            $request->session()->regenerate();

            // Jika berhasil, redirect ke dashboard admin
            return redirect()->intended('/admin/dashboard');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'NIP' => 'NIP atau Password yang Anda masukkan salah.',
        ])->onlyInput('NIP');
    }

    /**
     * Memproses permintaan logout.
     */
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login setelah logout
        return redirect('/login');
    }
}