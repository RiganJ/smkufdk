@extends('admin.layouts.main')
<!-- NOTYF -->
<!-- Toastify -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

@section('content')
<style>
    body {
        background-color: #f5f7fa;
        font-family: 'Poppins', sans-serif;
    }

    /* PERBAIKAN: Kurangi margin-top agar header lebih dekat ke navbar */
    .content-wrapper {
        margin-top: -50px; /* dari -40px jadi -20px, biar tidak terlalu rapat ke atas */
    }

    /* Tambahkan styling untuk mengatur jarak antar header & card */
    .page-header {
        margin-bottom: 8px !important; /* jarak kecil di bawah judul */
    }

    .card {
        border: none;
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.08);
    }

    .card-header {
        background: linear-gradient(135deg, #007bff, #0d6efd);
        color: #fff;
        font-weight: 600;
        padding: 1rem 1.5rem;
        border: none;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }

    .card-body {
        padding: 25px;
    }

    .table thead {
        background: #f1f5ff;
        color: #333;
    }

    .table tbody tr:hover {
        background-color: #f9fbff;
    }

    .btn {
        border-radius: 8px;
    }

    .btn-warning {
        color: #fff;
        background: #f39c12;
        border: none;
    }

    .btn-warning:hover {
        background: #d68910;
    }

    .btn-danger {
        background: #e74c3c;
        border: none;
    }

    .btn-danger:hover {
        background: #c0392b;
    }

    .modal-header {
        background: linear-gradient(135deg, #007bff, #0d6efd);
        color: white;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }

    .modal-content {
        border: none;
        border-radius: 16px;
    }

    .dataTables_filter input {
        border-radius: 10px;
        border: 1px solid #ddd;
        padding: 6px 10px;
    }

    .dataTables_length select {
        border-radius: 10px;
        border: 1px solid #ddd;
        padding: 4px 8px;
    }
    /* ===== PERBAIKAN TABEL AGAR RESPONSIF & TIDAK MELEBAR ===== */
.table {
    width: 100%;
    table-layout: fixed; /* PENTING */
}

.table th,
.table td {
    word-wrap: break-word;
    word-break: break-word;
    white-space: normal;
    vertical-align: middle;
}

/* Batasi lebar kolom tertentu */
.table th:nth-child(2),
.table td:nth-child(2) {
    width: 20%; /* Nama Guru */
}

.table th:nth-child(4),
.table td:nth-child(4) {
    width: 20%; /* Mata Pelajaran */
}

.table th:last-child,
.table td:last-child {
    width: 120px; /* Aksi */
    text-align: center;
}

</style>

<div class="container-fluid content-wrapper"> {{-- Tambahkan class agar style berlaku --}}
    <div class="d-flex justify-content-between align-items-center page-header">
        <h4 class="fw-bold text-primary mb-0">
            <i class="bi bi-person-lines-fill me-2"></i>Data Guru
        </h4>
        <button class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#tambahModal">
            <i class="bi bi-plus-circle me-1"></i> Tambah Guru
        </button>
    </div>



    <div class="card mt-2"> {{-- kecilkan jarak ke atas --}}
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle" id="guruTable">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>NIP</th>
                            <th>Mata Pelajaran</th>
                            <th>No. Telepon</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($guru as $i => $item)
                        <tr>
                            <td class="text-center">{{ $i + 1 }}</td>
                            <td>{{ $item->nama_guru }}</td>
                            <td>{{ $item->nip }}</td>
                            <td>{{ $item->mapel }}</td>
                            <td>{{ $item->telepon }}</td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <a href="{{ route('admin.guru.hapus', $item->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>

                        {{-- Modal Edit --}}
                        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ route('admin.guru.edit', $item->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Data Guru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Nama Guru</label>
                <input type="text" name="nama_guru" value="{{ $item->nama_guru }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="nip" value="{{ $item->nip }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mata Pelajaran</label>
                <input type="text" name="mapel" value="{{ $item->mapel }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">No. Telepon</label>
                <input type="text" name="telepon" value="{{ $item->telepon }}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Foto Guru</label>
                <input type="file" name="foto" class="form-control" accept="image/*">
                @if($item->foto)
                    <img src="{{ asset('storage/foto_guru/'.$item->foto) }}" class="img-thumbnail mt-2" width="100">
                @endif
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Modal Tambah --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.guru.tambah') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Guru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Guru</label>
                        <input type="text" name="nama_guru" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIP</label>
                        <input type="text" name="nip" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mata Pelajaran</label>
                        <input type="text" name="mapel" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. Telepon</label>
                        <input type="text" name="telepon" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto Guru</label>
                        <input type="file" name="foto" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function(){
    $('#guruTable').DataTable({
        language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data",
            info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
            paginate: { previous: "Sebelumnya", next: "Berikutnya" }
        }
    });
});
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {

        @if(session('success'))
        Toastify({
            text: "{{ session('success') }}",
            duration: 3500,
            close: true,
            gravity: "top", // top or bottom
            position: "right", // left, center, right
            stopOnFocus: true,
            style: {
                background: "linear-gradient(135deg, #28a745, #218838)",
                borderRadius: "10px",
                boxShadow: "0 10px 25px rgba(0,0,0,.15)",
                fontWeight: "500"
            }
        }).showToast();
        @endif

        @if(session('error'))
        Toastify({
            text: "{{ session('error') }}",
            duration: 3500,
            close: true,
            gravity: "top",
            position: "right",
            style: {
                background: "linear-gradient(135deg, #dc3545, #bd2130)",
                borderRadius: "10px",
                boxShadow: "0 10px 25px rgba(0,0,0,.15)",
                fontWeight: "500"
            }
        }).showToast();
        @endif

    });
</script>

@endsection
