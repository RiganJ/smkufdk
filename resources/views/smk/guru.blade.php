@extends('layouts.main')
@section('title','Guru')
@section('content')
<style>
    /* === GRID CARD GURU === */
.card-id {
    background: #ffffff;
    border-radius: 18px;
    padding: 12px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}

.card-id:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

/* FOTO */
.card-id-photo {
    position: relative;
    overflow: hidden;
    border-radius: 14px;
}

.card-id-photo img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 14px;
    border: 4px solid #ffb56b; /* BORDER FOTO */
    transition: transform 0.4s ease;
}

.card-id:hover img {
    transform: scale(1.05);
}

/* INFO DALAM FOTO */
.card-id-info {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 12px 10px;
    background: linear-gradient(
        to top,
        rgba(0,0,0,0.75),
        rgba(0,0,0,0.15),
        transparent
    );
    text-align: center;
}

.card-id-info .nama {
    margin: 0;
    font-size: 0.95rem;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
}

.card-id-info .mapel {
    margin: 2px 0 0;
    font-size: 0.75rem;
    color: #ffd9b3;
    font-weight: 500;
}

/* RESPONSIVE HALUS (TANPA UBAH UKURAN DESKTOP) */
@media (max-width: 576px) {
    .card-id-photo img {
        height: 190px;
    }
}
/* PERKECIL JARAK HEADER KE GRID */
.section_padding {
    padding-bottom: 30px !important;
}

.section_tittle {
    margin-bottom: 20px !important;
}

/* GRID LANGSUNG NAIK */
section.pb-5 {
    padding-top: 0 !important;
}
/* WARNA ORANGE UNTUK SPAN JUDUL */
.title-underline span {
    color: #ff7b00;
    font-weight: 700;
}

</style>
<!-- ================= HEADER PAGE ================= -->
<section class="section_padding text-center fade-up">
    <div class="container">
        <div class="section_tittle mb-4">
            <h2 class="title-underline py-4">
                Guru <span>Tenaga Kependidikan</span>
            </h2>
            <p>Daftar lengkap guru kependidikan sekolah kami</p>
        </div>
    </div>
</section>

<!-- ================= GRID CARD GURU ================= -->
<section class="pb-5 fade-up">
    <div class="container">
        <div class="row g-4 justify-content-center">
            @forelse($guru as $item)
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card-id">
                    <div class="card-id-photo">
                        @if($item->foto)
                            <img src="{{ asset('guru/'.$item->foto) }}" alt="{{ $item->nama_guru }}">
                        @else
                            <img src="{{ asset('default-avatar.png') }}" alt="Default">
                        @endif

                        <div class="card-id-info">
                            <h5 class="nama">{{ $item->nama_guru }}</h5>
                            <p class="mapel">{{ $item->mapel }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="text-muted fst-italic">Belum ada data guru.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

@endsection
