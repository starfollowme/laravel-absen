@extends('layout.guru')

@section('title', 'Riwayat Absensi')

@section('content')
    <h4 class="fw-bold mb-3">Riwayat Absensi Murid</h4>

    <div class="list-group">
        @forelse ($absensi as $absen)
            <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1 fw-bold">{{ $absen->murid->nama ?? 'Nama Murid' }}</h6>
                    <small>{{ $absen->murid->kelas->nama_kelas ?? 'Kelas' }}</small>
                    <small class="d-block text-muted">{{ \Carbon\Carbon::parse($absen->tanggal)->isoFormat('dddd, D MMMM Y') }}</small>
                </div>
                <span class="badge rounded-pill
                    @if($absen->status == 'Hadir') bg-success
                    @elseif($absen->status == 'Terlambat') bg-primary
                    @elseif($absen->status == 'Sakit') bg-warning
                    @elseif($absen->status == 'Izin') bg-info
                    @else bg-danger @endif">
                    {{ $absen->status }}
                </span>
            </div>
        @empty
            <div class="alert alert-info text-center">
                Belum ada riwayat absensi yang tercatat.
            </div>
        @endforelse
    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $absensi->links() }}
    </div>
@endsection
