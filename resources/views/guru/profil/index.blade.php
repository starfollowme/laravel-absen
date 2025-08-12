@extends('layout.guru')

@section('title', 'Profil Saya')

@push('styles')
<style>
    .profile-header {
        text-align: center;
        margin-bottom: 2rem;
    }
    .profile-pic {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        margin-bottom: 1rem;
    }
    .info-list .list-group-item {
        border: none;
        border-bottom: 1px solid #eee;
    }
</style>
@endpush

@section('content')
    <div class="profile-header">
        <div class="profile-pic">
            <i class="fas fa-user"></i>
        </div>
        <h4 class="fw-bold mb-0">{{ $user->name }}</h4>
        <p class="text-muted">Guru</p>
    </div>

    <ul class="list-group list-group-flush info-list">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-semibold">NIP</span>
            <span>{{ $user->nip }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-semibold">Email</span>
            <span>{{ $user->email }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-semibold">No. Telepon</span>
            <span>{{ $user->no_telp ?? '-' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-semibold">Alamat</span>
            <span>{{ $user->alamat ?? '-' }}</span>
        </li>
    </ul>
@endsection
