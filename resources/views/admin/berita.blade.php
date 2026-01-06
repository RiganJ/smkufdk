@extends('admin.layouts.main')

@section('content')
<style>
    body {
        background-color: #f5f7fa;
        font-family: 'Poppins', sans-serif;
    }

    .content-wrapper {
        margin-top: -50px;
    }

    .page-header {
        margin-bottom: 8px !important;
    }

    .card {
        border: none;
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.08);
    }

    .card-header {
        background: linear-gradient(135deg, #0d6efd, #0b5ed7);
        color: #fff;
        font-weight: 600;
        padding: 1rem 1.5rem;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }

    .card-body {
        padding: 25px;
    }

    .table thead {
        background: #f1f5ff;
    }

    .table tbody tr:hover {
        background-color: #f9fbff;
    }

    .btn {
        border-radius: 8px;
    }

    .btn-danger {
        background: #e74c3c;
        border: none;
    }

    .btn-danger:hover {
        background: #c0392b;
    }

    .modal-header {
        background: linear-gradient(135deg, #0d6efd, #0b5ed7);
        color: white;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }

    .modal-content {
        border: none;
        border-radius: 16px;
    }

    .thumb-img {
        width: 100px;
        height: 70px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #ddd;
    }
</style>

<div class="container-fluid content-wrapper">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center page-header">
        <h4 class="fw-bold text-primary mb-0">
            <i class="bi bi-newspaper me-2"></i>Kelola Berita
        </h4>
        <button class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#modalTambah">
            <i class="bi bi-plus-circle me-1"></i> Tambah Berita
        </button>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2">
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- CARD --}}
    <div class="card mt-2">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle" id="beritaTable">
                    <thead class="text-center">
                        <tr>
                            <th width="50">No</th>
                            <th>Thumbnail</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Isi</th>
                            <th width="100">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($berita as $i => $item)
                        <tr>
                            <td class="text-center">{{ $i + 1 }}</td>
                           <td class="text-center">
    @if($item->thumbnail)
        <img src="{{ asset($item->thumbnail) }}"
             style="width:100px;height:70px;object-fit:cover;border-radius:8px">
    @else
        <img src="{{ asset('img/no-image.png') }}"
             style="width:100px;height:70px;object-fit:cover;border-radius:8px">
    @endif
</td>


                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->kategori ?? '-' }}</td>
                            <td>{{ Str::limit(strip_tags($item->isi), 70) }}</td>
                            <td class="text-center">
                                <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Hapus berita ini?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">
                                Belum ada berita
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- MODAL TAMBAH BERITA --}}
<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Isi Berita</label>
                        <textarea name="isi" rows="5" class="form-control" required></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#beritaTable').DataTable({
        language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data",
            info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
            paginate: {
                previous: "Sebelumnya",
                next: "Berikutnya"
            }
        }
    });
});
</script>
@endsection
