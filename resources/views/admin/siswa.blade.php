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
        border-radius: 16px 16px 0 0;
    }

    .table {
        width: 100%;
        table-layout: fixed;
    }

    .table th,
    .table td {
        word-break: break-word;
        white-space: normal;
        vertical-align: middle;
    }

    .table tbody tr:hover {
        background-color: #f9fbff;
    }

    .btn {
        border-radius: 8px;
    }

    .btn-warning {
        background: #f39c12;
        color: #fff;
    }

    .btn-danger {
        background: #e74c3c;
    }

    .table th:last-child,
    .table td:last-child {
        width: 140px;
        text-align: center;
    }
</style>


<div class="container-fluid content-wrapper">

    <div class="d-flex justify-content-between align-items-center page-header">
        <h4 class="fw-bold text-primary mb-0">
            <i class="bi bi-people-fill me-2"></i> Data Siswa
        </h4>

        <div class="d-flex gap-2">
            {{-- Import --}}
           <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importModal"><i class="bi bi-upload"></i>
    Import Excel
</button>


<form id="importForm" action="{{ route('siswa.import') }}" method="POST"
      enctype="multipart/form-data" style="display:none;">
    @csrf
    <input type="file" id="fileInput" name="file" accept=".xlsx,.xls" required>
</form>

            <a href="{{ route('siswa.export.excel') }}" class="btn btn-success">
                <i class="bi bi-file-earmark-excel"></i> Export Excel
            </a>

            <a href="{{ route('siswa.export.pdf') }}" class="btn btn-danger">
                <i class="bi bi-file-earmark-pdf"></i> Export PDF
            </a>
        </div>
    </div>

    {{-- Search --}}
    <div class="row mb-3">
        <div class="col-md-4">
            <input type="text" id="searchNama" class="form-control" placeholder="Cari nama siswa...">
        </div>
    </div>

<table class="table table-hover align-middle" id="siswaTable">
    <thead class="text-center">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>INDUK</th>
            <th>JK</th>
            <th>Jurusan</th>
            <th>No HP</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($siswa as $i => $row)
        <tr>
            <td class="text-center">{{ $i + 1 }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->nisn }}</td>
            <td>{{ $row->induk }}</td>
            <td>{{ $row->jk }}</td>
            <td>{{ $row->kompetensi_keahlian }}</td>
            <td>{{ $row->no_hp }}</td>
            <td class="text-center">
                <a href="{{ route('siswa.show', $row->id) }}" class="btn btn-info btn-sm me-1">
                    <i class="bi bi-eye"></i>
                </a>
                <a href="{{ route('siswa.edit', $row->id) }}" class="btn btn-warning btn-sm me-1">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('siswa.destroy', $row->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

        </div>
    </div>

</div>

{{-- MODAL TAMBAH SISWA --}}
<div class="modal fade" id="modalTambahSiswa" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <div class="modal-body">

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>NISN</label>
                <input type="text" name="nisn" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>INDUK</label>
                <input type="text" name="induk" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label>Jenis Kelamin</label>
                <select name="jk" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label>Kompetensi Keahlian</label>
                <select name="kompetensi_keahlian" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option>Keperawatan</option>
                    <option>Farmasi</option>
                    <option>Caregiver</option>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah" class="form-control">
        </div>

        <div class="mb-3">
            <label>Alamat Lengkap</label>
            <textarea name="alamat" class="form-control" rows="2"></textarea>
        </div>

    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

</form>

    </div>
    </div>
</div>
<!-- Modal Import Excel -->
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="importModalLabel">Import Data Siswa (Excel)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form action="{{ route('siswa.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Pilih File Excel</label>
                <input type="file" name="file" class="form-control" accept=".xlsx, .xls" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Import</button>
        </form>
      </div>

    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#siswaTable').DataTable({
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

<script>
    document.getElementById('searchNama').addEventListener('keyup', function () {
        const keyword = this.value.toLowerCase();
        const rows = document.querySelectorAll('#siswaTable tr');

        rows.forEach(row => {
            const nama = row.children[2]?.textContent.toLowerCase();
            row.style.display = nama && nama.includes(keyword) ? '' : 'none';
        });
    });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    let triggerBtn = document.getElementById('triggerImport');
    let fileInput = document.getElementById('fileInput');
    let formImport = document.getElementById('importForm');

    triggerBtn.addEventListener('click', function () {
        fileInput.click(); // membuka file explorer
    });

    fileInput.addEventListener('change', function () {
        if (this.files.length > 0) {
            formImport.submit(); // langsung submit setelah memilih file
        }
    });

});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.form-hapus').forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Yakin?',
                text: 'Data siswa akan dihapus permanen!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });

});
</script>
@if ($errors->any())
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            html: `{!! implode('<br>', $errors->all()) !!}`
        });
    });
</script>
@endif

@endsection
