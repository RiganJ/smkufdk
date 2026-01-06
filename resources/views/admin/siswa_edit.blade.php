@extends('admin.layouts.main')

@section('content')
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    .edit-siswa-wrapper {
        margin-top: -50px; /* naik ke atas */
    }

    .page-title {
        font-weight: 600;
        color: #0d6efd;
    }
</style>

<div class="container-fluid edit-siswa-wrapper">

    <h4 class="page-title mb-4">
        <i class="fa-solid fa-pen-to-square me-2"></i>
        Edit Data Siswa
    </h4>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('siswa.update', $s->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold">NISN</label>
                        <input type="text" name="nisn" class="form-control"
                               value="{{ $s->nisn }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold">INDUK</label>
                        <input type="text" name="induk" class="form-control"
                               value="{{ $s->induk }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control"
                               value="{{ $s->nama }}" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="fw-semibold">Jenis Kelamin</label>
                        <select name="jk" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki" {{ $s->jk == 'Laki-laki' ? 'selected' : '' }}>
                                Laki-laki
                            </option>
                            <option value="Perempuan" {{ $s->jk == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan
                            </option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="fw-semibold">Kompetensi Keahlian</label>
                        <select name="kompetensi_keahlian" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="Keperawatan" {{ $s->kompetensi_keahlian == 'Keperawatan' ? 'selected' : '' }}>
                                Keperawatan
                            </option>
                            <option value="Farmasi" {{ $s->kompetensi_keahlian == 'Farmasi' ? 'selected' : '' }}>
                                Farmasi
                            </option>
                            <option value="Caregiver" {{ $s->kompetensi_keahlian == 'Caregiver' ? 'selected' : '' }}>
                                Caregiver
                            </option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="fw-semibold">No HP</label>
                        <input type="text" name="no_hp" class="form-control"
                               value="{{ $s->no_hp }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" class="form-control"
                           value="{{ $s->asal_sekolah }}">
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Alamat Lengkap</label>
                    <textarea name="alamat" class="form-control" rows="3">{{ $s->alamat }}</textarea>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">
                        <i class="fa-solid fa-arrow-left me-1"></i> Batal
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-floppy-disk me-1"></i>
                        Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection