@extends('admin.layouts.main')

@section('content')
<style>
    body {
        background-color: #f5f7fa;
        font-family: 'Poppins', sans-serif;
    }

    .content-wrapper {
        margin-top: -50px; /* naikkan posisi ke atas */
        padding-top: 20px;
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

    .btn-primary {
        background: linear-gradient(135deg, #007bff, #0d6efd);
        border: none;
    }

    .btn-primary:hover {
        opacity: 0.9;
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

    input, select, textarea {
        border-radius: 10px;
    }
</style>

<div class="container-fluid content-wrapper">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center page-header mb-3">
        <h4 class="fw-bold text-primary mb-0">
            <i class="bi bi-people-fill me-2"></i>Daftar Pengguna
        </h4>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary shadow-sm">
            <i class="bi bi-person-plus-fill me-1"></i> Tambah User
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- TABLE CARD --}}
    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle" id="usersTable">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $i => $user)
                        <tr>
                            <td class="text-center">{{ $i + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-center">{{ $user->created_at->format('d M Y') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                Belum ada pengguna
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- DATATABLE SCRIPT --}}
<script>
$(document).ready(function(){
    $('#usersTable').DataTable({
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
