<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        // Mengambil data pengguna (guru) yang sedang login
        $user = Auth::user();

        return view('guru.profil.index', compact('user'));
    }
}
