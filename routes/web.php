<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController; // <-- PASTIKAN BARIS INI ADA

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk halaman utama, langsung arahkan ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

// Route untuk proses autentikasi (login dan logout)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// --- AREA KHUSUS ADMIN ---
// Semua route di dalam grup ini akan memiliki awalan URL /admin
// dan dilindungi oleh middleware 'auth' dan 'super.admin'
Route::middleware(['auth', 'super.admin'])->prefix('admin')->name('admin.')->group(function () {

    // Route ini akan menangani URL /admin/dashboard
    // dan memanggil metode 'index' pada DashboardController
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Anda bisa menambahkan route admin lainnya di sini di kemudian hari
    // Contoh:
    // Route::get('/users', [UserController::class, 'index'])->name('users.index');

});
