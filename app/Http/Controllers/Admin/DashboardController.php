<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Murid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman utama dashboard admin.
     */
    public function index()
    {
        $user = Auth::user();
        $today = Carbon::today();

        // Menggunakan Eloquent Model untuk mengambil data (lebih bersih dan standar)
        $totalGuru = User::count();
        $totalMurid = Murid::count();

        // Menghitung absensi hari ini
        $hadirHariIni = Absensi::whereDate('tanggal', $today)
                               ->whereIn('status', ['Hadir', 'Terlambat'])
                               ->count();

        // Menghitung persentase, aman dari pembagian dengan nol
        $persentaseAbsensi = 0;
        if ($totalMurid > 0) {
            $persentaseAbsensi = round(($hadirHariIni / $totalMurid) * 100);
        }

        return view('admin.dashboard', compact(
            'user',
            'totalGuru',
            'totalMurid',
            'persentaseAbsensi'
        ));
    }
}
