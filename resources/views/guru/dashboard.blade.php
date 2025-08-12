@extends('layout.guru')

@section('title', 'Dashboard Guru')

@push('styles')
<style>
    .profile-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 1rem;
        padding: 1.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .profile-pic {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: rgba(255,255,255,0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
    }
    .menu-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }
    .menu-card {
        background-color: #fff;
        border-radius: 1rem;
        padding: 1.5rem;
        text-align: center;
        text-decoration: none;
        color: #333;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    .menu-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        color: #667eea;
    }
    .menu-card i {
        font-size: 2.5rem;
        margin-bottom: 0.75rem;
        color: #667eea;
    }
</style>
@endpush

@section('content')
    <div class="mb-4">
        <h4 class="fw-bold">Selamat Datang!</h4>
    </div>

    <div class="profile-card mb-4">
        <div class="profile-pic">
            <i class="fas fa-user"></i>
        </div>
        <div>
            <h5 class="mb-0 fw-bold">{{ $user->name }}</h5>
            <p class="mb-0 small">NIP: {{ $user->nip }}</p>
        </div>
    </div>

    <h5 class="fw-bold mb-3">Menu Utama</h5>
    <div class="menu-grid">
        <a href="{{ route('guru.absen.index') }}" class="menu-card">
            <i class="fas fa-calendar-check"></i>
            <span class="fw-semibold">Absen Hari Ini</span>
        </a>
        <a href="{{ route('guru.riwayat.index') }}" class="menu-card">
            <i class="fas fa-history"></i>
            <span class="fw-semibold">Riwayat Absensi</span>
        </a>
    </div>
@endsection
