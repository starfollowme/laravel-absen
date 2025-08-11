{{-- Menggunakan layout utama --}}
@extends('layout.admin')

{{-- Judul halaman --}}
@section('title', 'Laporan Absensi')

{{-- CSS Custom --}}
@push('styles')
<style>
    /* Animasi Fade-in */
    .fade-in {
        animation: fadeIn 0.6s ease-in-out forwards;
        opacity: 0;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Card Styling */
    .card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    /* Filter Card */
    .filter-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(8px);
        border-radius: 14px;
        padding: 20px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        margin-bottom: 25px;
    }

    /* Table Styling */
    .table thead th {
        position: sticky;
        top: 0;
        background-color: #f8f9fa;
        z-index: 5;
    }
    .table-hover tbody tr {
        transition: all 0.2s ease-in-out;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(102, 126, 234, 0.08);
        transform: scale(1.01);
    }

    /* Badge */
    .badge {
        font-size: 0.78rem;
        padding: 0.45em 0.85em;
        font-weight: 600;
        border-radius: 50px;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 50px 20px;
        background-color: #f8f9fa;
        border-radius: 12px;
    }
    .empty-state i {
        font-size: 3.5rem;
        color: #adb5bd;
    }
    .empty-state p {
        font-size: 1.05rem;
        color: #6c757d;
        margin-top: 12px;
    }

    /* Pagination */
    .pagination {
        gap: 6px;
    }
    .pagination .page-item .page-link {
        border-radius: 50%;
        padding: 8px 12px;
        color: #6c757d;
        border: none;
        transition: all 0.2s ease;
    }
    .pagination .page-item.active .page-link {
        background-color: #4e73df;
        color: #fff;
        font-weight: bold;
    }
    .pagination .page-link:hover {
        background-color: #e2e6ea;
    }
</style>
@endpush

@section('content')
<div class="container-fluid">

    <!-- Filter Card -->
    <div class="filter-card fade-in">
        <h4 class="mb-3 fw-bold"><i class="fas fa-filter me-2"></i>Filter Laporan</h4>
        <form method="GET" action="{{ route('admin.laporan.index') }}" class="row g-3 align-items-end">
            <div class="col-md-5">
                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ $tanggalMulai }}">
            </div>
            <div class="col-md-5">
                <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
                <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" value="{{ $tanggalAkhir }}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100"><i class="fas fa-search me-2"></i>Terapkan</button>
            </div>
        </form>
    </div>

    <!-- Data Table Card -->
    <div class="card fade-in" style="animation-delay: 0.2s;">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h4 class="mb-0 fw-bold">Hasil Laporan Absensi</h4>
            <a href="{{ route('admin.laporan.export', ['tanggal_mulai' => $tanggalMulai, 'tanggal_akhir' => $tanggalAkhir]) }}" class="btn btn-success">
                <i class="fas fa-file-excel me-2"></i>Export ke Excel
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle text-center">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>NIS</th>
                            <th>Nama Murid</th>
                            <th>Kelas</th>
                            <th>Status</th>
                            <th>Jam Datang</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($absensi as $item)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM Y') }}</td>
                            <td>{{ $item->nis }}</td>
                            <td class="text-start">{{ $item->nama_murid }}</td>
                            <td>{{ $item->nama_kelas }}</td>
                            <td>
                                <span class="badge
                                    @if($item->status == 'Hadir') bg-success-subtle text-success-emphasis
                                    @elseif($item->status == 'Terlambat') bg-primary-subtle text-primary-emphasis
                                    @elseif($item->status == 'Sakit') bg-warning-subtle text-warning-emphasis
                                    @elseif($item->status == 'Izin') bg-info-subtle text-info-emphasis
                                    @else bg-danger-subtle text-danger-emphasis @endif">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td>{{ $item->jam_datang ? \Carbon\Carbon::parse($item->jam_datang)->format('H:i') : '-' }}</td>
                            <td class="text-start">{{ $item->keterangan ?? '-' }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">
                                <div class="empty-state">
                                    <i class="fas fa-calendar-times"></i>
                                    <p>Tidak ada data absensi untuk rentang tanggal yang dipilih.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($absensi->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $absensi->appends(request()->query())->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
