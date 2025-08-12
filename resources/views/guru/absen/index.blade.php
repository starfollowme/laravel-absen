@extends('layout.guru')

@section('title', 'Absen Hari Ini')

@section('content')
    <div class="mb-4">
        <h4 class="fw-bold">Absen Hari Ini</h4>
        <p class="text-muted">{{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}</p>
    </div>

    @if($kelas)
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Kelas: {{ $kelas->nama_kelas }}</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('guru.absen.store') }}">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Murid</th>
                                    <th>NIS</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($murid as $index => $siswa)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $siswa->nama }}</td>
                                        <td>{{ $siswa->nis }}</td>
                                        <td>
                                            <select name="status[{{ $siswa->id }}]" class="form-select form-select-sm">
                                                <option value="">Pilih Status</option>
                                                <option value="Hadir">Hadir</option>
                                                <option value="Terlambat">Terlambat</option>
                                                <option value="Sakit">Sakit</option>
                                                <option value="Izin">Izin</option>
                                                <option value="Alpha">Alpha</option>
                                            </select>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Tidak ada murid di kelas ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    @if($murid->count() > 0)
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan Absensi
                            </button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    @else
        <div class="alert alert-warning">
            <i class="fas fa-exclamation-triangle"></i>
            Tidak ada kelas yang ditemukan untuk guru ini.
        </div>
    @endif
@endsection
