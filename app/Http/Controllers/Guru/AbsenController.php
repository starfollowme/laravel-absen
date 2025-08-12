<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Tambahkan model yang relevan
use App\Models\Murid;
use App\Models\Kelas;
use App\Models\Absensi;
use Carbon\Carbon;

class AbsenController extends Controller
{
    public function index()
    {
        // Logika untuk mengambil daftar murid dari kelas yang diajar guru
        // Untuk contoh ini, kita ambil semua murid dari kelas 'XII RPL 1'
        $kelas = Kelas::where('nama_kelas', 'XII RPL 1')->first();
        $murid = $kelas ? $kelas->murid()->get() : collect();

        return view('guru.absen.index', compact('murid', 'kelas'));
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data absensi
        // ...
        return redirect()->route('guru.dashboard')->with('success', 'Absensi berhasil disimpan!');
    }

    public function riwayat()
    {
        // Logika untuk menampilkan riwayat absensi
        $today = Carbon::today();
        $absensi = Absensi::whereDate('tanggal', $today)
                         ->with('murid')
                         ->get();

        return view('guru.riwayat.index', compact('absensi'));
    }
}
