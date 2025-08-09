<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman utama dashboard admin.
     */
    public function index()
    {
        // Anda bisa menambahkan logika untuk mengambil data di sini
        // Contoh: $jumlah_guru = TenagaPendidik::count();

        $user = Auth::user(); // Mengambil data user yang sedang login

        return view('admin.dashboard', compact('user'));
    }
}
