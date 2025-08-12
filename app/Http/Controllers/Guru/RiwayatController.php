<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Absensi; // Pastikan model Absensi sudah ada

class RiwayatController extends Controller
{
    public function index()
    {
        // Mengambil semua data absensi dan mengurutkannya berdasarkan tanggal terbaru
        // Di masa depan, ini bisa difilter hanya untuk murid di kelas yang diajar guru
        $riwayat = Absensi::with('murid.kelas')
                    ->latest('tanggal')
                    ->paginate(15);

        return view('guru.riwayat.index', compact('riwayat'));
    }
}
