@extends('admin.layouts.main')

@section('content')

<style>
.header-ppdb {
    margin-top: -60px;       /* naikkan posisi container */
    margin-bottom: 10px;     /* jarak kecil ke bawah */
}

.page-title {
    margin: 0;               /* hilangkan margin bawaan */
    padding: 0;              /* supaya tidak makin turun */
    font-weight: 600;
    color: #007bff;
}

.btn-back {
    border-radius: 10px;
    font-weight: 600;
    padding: 6px 18px;
}


    .info-card {
        border-radius: 12px;
        border: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.06);
    }

    .table-detail th {
        width: 200px;
        background: #f8f9fa;
        font-weight: 600;
        color: #555;
    }

    .dokumen-list a {
        font-weight: 600;
        color: #0069d9;
    }

    .btn-update {
        padding: 8px 20px;
        font-weight: 600;
        border-radius: 8px;
    }
</style>


<div class="container-fluid header-ppdb">
    <div class="d-flex justify-content-between align-items-center">
        <h4 class="page-title mb-0">
            <i class="bi bi-person-badge me-2"></i> Detail Pendaftar PPDB
        </h4>

        <a href="{{ route('admin.ppdb') }}" 
           class="btn btn-outline-primary btn-back shadow-sm">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>
</div>



<div class="card info-card p-4">

    <h5 class="mb-3">Informasi Pendaftar</h5>
    <table class="table table-detail table-bordered">
        <tr><th>Nama Lengkap</th><td>{{ $data->nama_lengkap }}</td></tr>
        <tr><th>No Kontak</th><td>{{ $data->no_kontak }}</td></tr>
        <tr><th>Alamat</th><td>{{ $data->alamat }}</td></tr>
        <tr><th>Jenis Kelamin</th><td>{{ $data->jenis_kelamin }}</td></tr>
        <tr><th>Prestasi</th><td>{{ $data->jenis_prestasi }}</td></tr>
        <tr><th>Beasiswa</th><td>{{ $data->jenis_beasiswa }}</td></tr>
        <tr><th>Status</th>
            <td>
                <span class="badge 
                    @if($data->status == 'diterima') bg-success
                    @elseif($data->status == 'ditolak') bg-danger
                    @else bg-secondary
                    @endif
                ">
                    {{ $data->status ?? 'Belum Diproses' }}
                </span>
            </td>
        </tr>
    </table>

    <hr>

    <h5 class="mt-4">Dokumen Pendaftar</h5>
    <ul class="dokumen-list">
        <li>Foto: <a href="/storage/{{ $data->pas_foto }}" target="_blank">Lihat</a></li>
        <li>Bukti Bayar: <a href="/storage/{{ $data->bukti_pembayaran }}" target="_blank">Lihat</a></li>
        @if ($data->bukti_prestasi)
            <li>Prestasi: <a href="/storage/{{ $data->bukti_prestasi }}" target="_blank">Lihat</a></li>
        @endif
    </ul>

    <hr>

    <form method="POST" action="{{ route('ppdb.admin.status', $data->id) }}" class="mt-3">
        @csrf
        
        <label class="mb-1"><strong>Ubah Status Pendaftar:</strong></label>
        <select name="status" class="form-select w-50 mb-3">
            <option value="diterima">Diterima</option>
            <option value="ditolak">Ditolak</option>
        </select>

        <button class="btn btn-primary btn-update">Update Status</button>
    </form>

</div>

@endsection
