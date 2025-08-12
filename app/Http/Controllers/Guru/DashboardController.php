<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // Anda bisa menambahkan logika lain di sini, misalnya mengambil jadwal mengajar hari ini
        return view('guru.dashboard', compact('user'));
    }
}
