@extends('admin.layouts.main')

@section('content')
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    .detail-siswa-wrapper {
        margin-top: -50px; /* naik ke atas */
    }

    .page-title {
        font-weight: 600;
        color: #0d6efd;
    }
</style>

<div class="container-fluid detail-siswa-wrapper">

    <h4 class="page-title mb-4">
        <i class="fa-solid fa-user-graduate me-2"></i>
        Detail Data Siswa
    </h4>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered align-middle">
                <tr>
                    <th width="200">NISN</th>
                    <td>{{ $s->nisn }}</td>
                </tr>
                <tr>
                    <th>INDUK</th>
                    <td>{{ $s->induk }}</td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $s->nama }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $s->jk }}</td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td>{{ $s->kompetensi_keahlian }}</td>
                </tr>
                <tr>
                    <th>Asal Sekolah</th>
                    <td>{{ $s->asal_sekolah }}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>{{ $s->no_hp }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $s->alamat }}</td>
                </tr>
            </table>

            <div class="mt-4">
                <a href="{{ route('siswa.index') }}" class="btn btn-secondary">
                    <i class="fa-solid fa-arrow-left me-1"></i> Kembali
                </a>
            </div>

        </div>
    </div>

</div>
@endsection