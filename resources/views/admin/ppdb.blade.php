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
        box-shadow: 0 4px 25px rgba(0,0,0,0.08);
    }

    .card-header {
        background: linear-gradient(135deg, #007bff, #0d6efd);
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
        color: #333;
    }

    .table tbody tr:hover {
        background-color: #f9fbff;
    }

    .btn {
        border-radius: 8px;
    }

    .btn-info {
        background: #17a2b8;
        border: none;
        color: white;
    }
    .btn-info:hover {
        background: #128093;
    }

    .btn-danger {
        background: #e74c3c;
        border: none;
    }
    .btn-danger:hover {
        background: #c0392b;
    }

    .export-btn {
        display: flex;
        gap: 10px;
    }

    /* Search bar & length */
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
    
</style>

<div class="container-fluid content-wrapper">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center page-header">
        <h4 class="fw-bold text-primary mb-0">
            <i class="bi bi-people-fill me-2"></i> Data Pendaftar PPDB
        </h4>

        <div class="export-btn">
            <a href="{{ route('ppdb.admin.export.excel') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-file-earmark-excel me-1"></i> Excel
            </a>
            <a href="{{ route('ppdb.admin.export.pdf') }}" class="btn btn-danger shadow-sm">
                <i class="bi bi-file-earmark-pdf me-1"></i> PDF
            </a>
        </div>
    </div>

    <!-- ALERT -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        {{ session('success') }}
        <button class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <!-- CARD TABLE -->
    <div class="card mt-2">
        <div class="card-body">

            <div class="table-responsive">
    <table class="table table-hover align-middle" id="ppdbTable">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>No Kontak</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Asal Sekolah</th>
                <th>Kompetensi Keahlian</th>
                <th>Status</th>
                <th width="150" class="text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pendaftar as $p)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $p->nama_lengkap }}</td>
                <td>{{ $p->no_kontak }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->jenis_kelamin }}</td>
                <td>{{ $p->asal_sekolah }}</td>
                <td>{{ $p->kompetensi_keahlian }}</td>
               

                <td class="text-center">
                    <span class="badge 
                        @if($p->status == 'diterima') bg-success
                        @elseif($p->status == 'ditolak') bg-danger
                        @else bg-secondary
                        @endif
                    ">
                        {{ $p->status ?? 'Belum Diproses' }}
                    </span>
                </td>

                <td class="text-center">
                    <a href="{{ route('ppdb.admin.detail', $p->id) }}" 
                        class="btn btn-info btn-sm me-1">
                        <i class="bi bi-eye"></i>
                    </a>

                    <form action="{{ route('ppdb.admin.delete', $p->id) }}" 
                        method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus data ini?')">
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
</div>

<!-- DATATABLES -->
<script>
$(document).ready(function(){
    $('#ppdbTable').DataTable({
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
