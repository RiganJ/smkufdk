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
            <i class="bi bi-person-plus-fill me-2"></i>Tambah Pengguna
        </h4>
       
    </div>

    {{-- ALERT ERROR --}}
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- FORM CARD --}}
    <div class="card shadow-sm border-0">
        <div class="card-header">
            <h5 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Form Input User</h5>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama" value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan email" value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Minimal 6 karakter" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password" required>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary shadow-sm">
                        <i class="bi bi-person-plus me-1"></i> Simpan
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
