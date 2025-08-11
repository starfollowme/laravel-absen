<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class GuruController extends Controller
{
    // Menampilkan daftar semua guru
    public function index()
    {
        $guru = User::latest()->paginate(10);
        return view('admin.guru.index', compact('guru'));
    }

    // Menampilkan form untuk membuat guru baru
    public function create()
    {
        return view('admin.guru.create');
    }

    // Menyimpan data guru baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'nip' => ['required', 'string', 'max:20', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nip' => $request->nip,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.guru.index')->with('success', 'Guru berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit data guru
    public function edit(User $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    // Mengupdate data guru
    public function update(Request $request, User $guru)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class.',email,'.$guru->id],
            'nip' => ['required', 'string', 'max:20', 'unique:'.User::class.',nip,'.$guru->id],
        ]);

        $guru->update($request->all());

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }

    // Menghapus data guru
    public function destroy(User $guru)
    {
        $guru->delete();
        return redirect()->route('admin.guru.index')->with('success', 'Guru berhasil dihapus.');
    }
}