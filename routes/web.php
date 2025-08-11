<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman root (/) diarahkan ke halaman login
Route::redirect('/', '/login');

// --- RUTE AUTENTIKASI ---
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// --- GRUP RUTE ADMIN ---
// Semua rute ini dilindungi oleh middleware 'auth' dan 'role:Super Admin'
Route::middleware(['auth', 'role:Super Admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Manajemen Guru (CRUD)
        Route::resource('guru', GuruController::class);

        // Laporan Absensi
        Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

        // Export Laporan Absensi
        Route::get('/laporan/export', [LaporanController::class, 'export'])->name('laporan.export');
    });
