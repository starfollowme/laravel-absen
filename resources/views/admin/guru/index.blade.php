{{-- Menggunakan layout dari layouts/admin.blade.php --}}
@extends('layout.admin')

@section('title', 'Manajemen Guru')

@section('content')
<div class="card animate-on-load">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Manajemen Guru & Staf</h4>
        <a href="{{ route('admin.guru.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus me-2"></i>Tambah Guru Baru
        </a>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light text-center">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>NIP</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($guru as $g)
                        <tr>
                            <td>{{ $g->name }}</td>
                            <td>{{ $g->email }}</td>
                            <td class="text-center">{{ $g->nip }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.guru.edit', $g->id) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" title="Edit Data">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                {{-- Form ini akan di-submit oleh SweetAlert2 --}}
                                <form action="{{ route('admin.guru.destroy', $g->id) }}" method="POST" class="d-inline" id="delete-form-{{ $g->id }}">
                                    @csrf
                                    @method('DELETE')
                                    {{-- Tombol ini sekarang hanya memicu fungsi JS, bukan submit form langsung --}}
                                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteConfirm({{ $g->id }})" data-bs-toggle="tooltip" title="Hapus Data">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4">
                                <p class="mb-2">Tidak ada data guru yang ditemukan.</p>
                                <a href="{{ route('admin.guru.create') }}" class="btn btn-primary btn-sm">Tambah Guru Pertama</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($guru->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $guru->links() }}
        </div>
        @endif
    </div>
</div>
@endsection

{{-- Menambahkan script khusus untuk halaman ini --}}
@push('scripts')
<script>
    // Inisialisasi tooltip Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // Fungsi untuk konfirmasi hapus menggunakan SweetAlert2
    function deleteConfirm(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika dikonfirmasi, submit form yang sesuai
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>
@endpush
