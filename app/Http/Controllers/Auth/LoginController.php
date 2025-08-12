<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // <-- Import Log facade
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Menampilkan form login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Menangani permintaan login.
     */
    public function login(Request $request)
    {
        $request->validate([
            'nip' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['nip' => $request->nip, 'password' => $request->password], $request->filled('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            // --- KODE DEBUGGING ---
            $roles = $user->roles()->pluck('role_name');
            Log::info('Login berhasil untuk user: ' . $user->name . ' (NIP: ' . $user->nip . ')');
            Log::info('Peran yang ditemukan: ' . $roles->implode(', '));
            // --- AKHIR KODE DEBUGGING ---

            if ($user->roles()->where('role_name', 'Super Admin')->exists()) {
                Log::info('Mengarahkan ke dashboard admin.');
                return redirect()->intended(route('admin.dashboard'));
            }

            if ($user->roles()->whereIn('role_name', ['Guru Matapelajaran', 'Walikelas'])->exists()) {
                Log::info('Mengarahkan ke dashboard guru.');
                return redirect()->intended(route('guru.dashboard'));
            }

            Log::warning('Pengguna tidak punya peran valid. Logout.');
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return back()->withErrors([
                'nip' => 'Anda tidak memiliki peran yang valid untuk mengakses sistem.',
            ]);
        }

        throw ValidationException::withMessages([
            'nip' => __('auth.failed'),
        ]);
    }

    /**
     * Menangani proses logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
