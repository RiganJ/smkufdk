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
    </style>

    <div class="container-fluid content-wrapper">

        {{-- HEADER --}}
        <div class="d-flex justify-content-between align-items-center page-header">
            <h4 class="fw-bold text-primary mb-0">
                <i class="bi bi-chat-quote-fill me-2"></i>Testimoni Alumni
            </h4>
            <button class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#modalTambahTesti">
                <i class="bi bi-plus-circle me-1"></i> Tambah Testimoni
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
                    <table class="table table-hover align-middle" id="testimoniTable">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Testimoni</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($testimoni as $i => $item)
                            <tr>
                                <td class="text-center">{{ $i + 1 }}</td>
                                <td class="text-center">
    <img src="{{ asset($item->foto) }}"
        width="90" height="90"
        class="rounded-circle"
        style="object-fit:cover">
                                </td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ ucfirst($item->jurusan) }}</td>
                                <td>{{ Str::limit($item->isi, 60) }}</td>
                                <td class="text-center">
    <!-- EDIT -->
    <button class="btn btn-warning btn-sm"
        data-bs-toggle="modal"
        data-bs-target="#modalEditTesti{{ $item->id }}">
        <i class="bi bi-pencil-square"></i>
    </button>

    <!-- DELETE -->
    <form action="{{ route('admin.jurusan.testimoni.delete', $item->id) }}"
          method="POST"
          class="d-inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm"
            onclick="return confirm('Hapus testimoni ini?')">
            <i class="bi bi-trash"></i>
        </button>
    </form>
</td>

                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    Belum ada testimoni
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL TAMBAH TESTIMONI --}}
    <div class="modal fade" id="modalTambahTesti" tabindex="-1">
        <div class="modal-dialog">
            <form action="{{ route('admin.jurusan.testimoni.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Testimoni</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Alumni</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <select name="jurusan" class="form-control" required>
            <option value="">-- Pilih Jurusan --</option>
            <option value="FARMASI">Farmasi</option>
            <option value="KEPERAWATAN">Keperawatan</option>
            <option value="CAREGIVER">Caregiver</option>
        </select>
    </div>

                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Isi Testimoni</label>
                            <textarea name="isi" rows="3" class="form-control" required></textarea>
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
    @foreach($testimoni as $item)
<div class="modal fade" id="modalEditTesti{{ $item->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.jurusan.testimoni.update', $item->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Testimoni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nama Alumni</label>
                        <input type="text"
                               name="nama"
                               class="form-control"
                               value="{{ $item->nama }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Jurusan</label>
                        <select name="jurusan" class="form-control" required>
                            <option value="FARMASI" {{ $item->jurusan == 'FARMASI' ? 'selected' : '' }}>Farmasi</option>
                            <option value="KEPERAWATAN" {{ $item->jurusan == 'KEPERAWATAN' ? 'selected' : '' }}>Keperawatan</option>
                            <option value="CAREGIVER" {{ $item->jurusan == 'CAREGIVER' ? 'selected' : '' }}>Caregiver</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Foto (opsional)</label><br>
                        <img src="{{ asset($item->foto) }}"
                             width="80"
                             class="rounded mb-2">
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Isi Testimoni</label>
                        <textarea name="isi"
                                  rows="3"
                                  class="form-control"
                                  required>{{ $item->isi }}</textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach


    <script>
    $(document).ready(function(){
        $('#testimoniTable').DataTable({
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ data",
                info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                paginate: { previous: "Sebelumnya", next: "Berikutnya" }
            }
        });
    });
    </script>
    @endsection
