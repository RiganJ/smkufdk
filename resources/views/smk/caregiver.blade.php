@extends('layouts.main')

@section('title','Jurusan Caregiver')

@section('content')
<link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    /* ================= ROOT ================= */
:root{
    --primary:#002c60;
    --accent:#ff6f00;
    --text:#475569;
    --soft:#f8fafc;
}

/* ================= HERO ================= */
.hero-caregiver{
    padding:120px 0;
    background:linear-gradient(135deg,#fff4ec,#ffffff);
}

.hero-grid{
    display:grid;
    grid-template-columns:1.1fr .9fr;
    gap:60px;
    align-items:center;
}

.hero-text h1{
    font-size:52px;
    font-weight:800;
    color:var(--primary);
    line-height:1.15;
}

.hero-text h1 span{
    color:var(--accent);
}

.hero-text p{
    margin-top:20px;
    font-size:18px;
    color:var(--text);
    line-height:1.9;
}

.hero-actions{
    margin-top:36px;
    display:flex;
    gap:18px;
    flex-wrap:wrap;
}

.btn-primary{
    background:var(--accent);
    color:#fff;
    padding:14px 32px;
    border-radius:999px;
    font-weight:600;
    text-decoration:none;
    transition:.3s ease;
}

.btn-primary:hover{
    transform:translateY(-2px);
    box-shadow:0 12px 30px rgba(255,111,0,.35);
}

.btn-outline{
    border:2px solid var(--accent);
    color:var(--accent);
    padding:14px 30px;
    border-radius:999px;
    font-weight:600;
    text-decoration:none;
    transition:.3s ease;
}

.btn-outline:hover{
    background:var(--accent);
    color:#fff;
}

.hero-image img{
    width:100%;
    border-radius:36px;
    box-shadow:0 40px 90px rgba(0,0,0,.15);
}

/* ================= SECTION TITLE ================= */
.section-title{
    text-align:center;
    font-size:34px;
    font-weight:800;
    color:var(--primary);
    margin-bottom:60px;
}

/* ================= TENTANG CAREGIVER (ALT) ================= */

.tentang-caregiver.alt{
    padding:120px 0;
    background:#f8fafc;
}

.tentang-grid{
    display:grid;
    grid-template-columns:1.1fr .9fr;
    gap:70px;
    align-items:center;
}

/* TEXT */
.tentang-text h2{
    font-size:38px;
    font-weight:800;
    color:#002c60;
    line-height:1.2;
}

.tentang-text h2 span{
    color:#ff6f00;
}

.tentang-text p{
    margin-top:22px;
    color:#475569;
    line-height:1.9;
    font-size:17px;
}

.tentang-text .sub{
    margin-top:14px;
    font-size:16px;
    color:#64748b;
}

/* CARDS */
.tentang-cards{
    display:grid;
    gap:22px;
}

.tentang-cards .card{
    background:#ffffff;
    border-radius:26px;
    padding:28px 30px;
    display:flex;
    align-items:flex-start;
    gap:18px;
    box-shadow:0 20px 45px rgba(0,0,0,.08);
    transition:.35s ease;
}

.tentang-cards .card:hover{
    transform:translateY(-6px);
    box-shadow:0 30px 70px rgba(0,0,0,.12);
}

.tentang-cards i{
    font-size:34px;
    color:#ff6f00;
    flex-shrink:0;
}

.tentang-cards h4{
    margin:0;
    font-size:18px;
    font-weight:700;
    color:#002c60;
}

.tentang-cards span{
    display:block;
    margin-top:6px;
    font-size:14px;
    color:#64748b;
}

/* RESPONSIVE */
@media(max-width:768px){
    .tentang-grid{
        grid-template-columns:1fr;
        text-align:center;
    }

    .tentang-cards .card{
        justify-content:center;
        text-align:left;
    }
}

/* ================= KOMPETENSI ================= */
/* ================= KOMPETENSI CAREGIVER ================= */

.kompetensi-caregiver{
    padding:110px 0;
    background:linear-gradient(180deg,#f8fafc 0%,#ffffff 100%);
}

/* HEAD */
.section-head{
    text-align:center;
    max-width:700px;
    margin:0 auto 70px;
}

.section-head .badge{
    display:inline-block;
    background:#fff4ec;
    color:#ff6f00;
    padding:8px 18px;
    border-radius:999px;
    font-weight:600;
    margin-bottom:14px;
}

.section-head h2{
    font-size:36px;
    font-weight:800;
    color:#002c60;
    margin-bottom:14px;
}

.section-head p{
    color:#475569;
    line-height:1.8;
}

/* GRID */
.kompetensi-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:32px;
    align-items:stretch;
}

/* CARD */
.kompetensi-card{
    background:#ffffff;
    border-radius:28px;
    padding:46px 32px;
    text-align:center;
    box-shadow:0 25px 60px rgba(0,0,0,.08);
    transition:.4s ease;
    position:relative;
    overflow:hidden;
}

/* gradient top line */
.kompetensi-card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:5px;
    background:linear-gradient(90deg,#ff6f00,#ff9f43);
}

/* ICON */
.icon-wrap{
    width:70px;
    height:70px;
    margin:0 auto 20px;
    background:#fff4ec;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
}

.icon-wrap i{
    font-size:32px;
    color:#ff6f00;
}

/* TEXT */
.kompetensi-card h4{
    font-size:20px;
    font-weight:700;
    color:#002c60;
    margin-bottom:8px;
}

.kompetensi-card span{
    font-size:15px;
    color:#64748b;
}

/* HOVER */
.kompetensi-card:hover{
    transform:translateY(-10px);
    box-shadow:0 35px 80px rgba(0,0,0,.12);
}

/* RESPONSIVE */
@media(max-width:768px){
    .section-head h2{
        font-size:30px;
    }
}

/* ================= TESTIMONI ================= */
.testimoni-caregiver{
    padding:120px 0;
    background:linear-gradient(135deg,#002c60,#001c3a);
    color:#fff;
    text-align:center;
}

.section-title.light{
    color:#fff;
}

.testimoni-card{
    max-width:620px;
    margin:60px auto 0;
    padding:60px 46px;
    border-radius:36px;

    background:rgba(255,255,255,.08);
    backdrop-filter:blur(12px);

    box-shadow:0 30px 80px rgba(0,0,0,.4);
}

/* AVATAR */
.testimoni-card .avatar{
    width:96px;
    height:96px;
    border-radius:50%;
    overflow:hidden;
    margin:-110px auto 26px;
    border:5px solid #ff6f00;
}

.testimoni-card img{
    width:100%;
    height:100%;
    object-fit:cover;
}

/* QUOTE */
.testimoni-card .quote{
    font-size:17px;
    line-height:1.9;
    margin-bottom:26px;
    color:#f1f5f9;
}

/* RATING */
.rating{
    margin-bottom:18px;
}

.rating i{
    color:#ffb703;
    font-size:16px;
    margin:0 2px;
}

/* NAME */
.testimoni-card .name{
    display:block;
    font-weight:700;
    margin-top:10px;
}

.testimoni-card .job{
    display:block;
    font-size:14px;
    color:#cbd5f5;
}


/* ================= CTA ================= */


/* ================= RESPONSIVE ================= */
@media(max-width:768px){
    .hero-grid{
        grid-template-columns:1fr;
        text-align:center;
    }

    .hero-text h1{
        font-size:40px;
    }

    .hero-actions{
        justify-content:center;
    }
}
/* ================= FASILITAS CAREGIVER ================= */
.fasilitas-caregiver{
    padding:110px 0;
    background:linear-gradient(180deg,#f8fafc,#ffffff);
}

.fasilitas-caregiver .section-title{
    text-align:center;
    margin-bottom:70px;
}

/* GRID */
.fasilitas-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:36px;
}

/* CARD */
.fasilitas-card{
    position:relative;
    background:rgba(255,255,255,.9);
    border-radius:28px;
    padding:46px 34px 40px;
    text-align:center;

    box-shadow:0 25px 60px rgba(0,0,0,.08);
    backdrop-filter:blur(8px);

    transition:.35s ease;
}

/* ICON */
.fasilitas-card .icon{
    width:82px;
    height:82px;
    border-radius:22px;

    background:linear-gradient(135deg,#002c60,#004aa0);
    display:flex;
    align-items:center;
    justify-content:center;

    margin:-90px auto 24px;
    box-shadow:0 20px 40px rgba(0,44,96,.35);
}

.fasilitas-card i{
    font-size:34px;
    color:#ff6f00;
}

/* TEXT */
.fasilitas-card h4{
    font-size:18px;
    font-weight:700;
    color:#002c60;
    margin-bottom:12px;
}

.fasilitas-card p{
    font-size:15px;
    line-height:1.7;
    color:#475569;
}

/* HOVER */
.fasilitas-card:hover{
    transform:translateY(-12px);
    box-shadow:0 40px 80px rgba(0,0,0,.15);
}

/* RESPONSIVE */
@media(max-width:768px){
    .fasilitas-card{
        padding:40px 26px;
    }

    .fasilitas-card .icon{
        margin-top:-80px;
    }
}
/* ================= RESPONSIVE TAMBAHAN (AMAN) ================= */

/* Tablet kecil */
@media (max-width: 992px) {
    .hero-grid,
    .tentang-grid {
        gap: 40px;
    }

    .kompetensi-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .hero-text h1 {
        font-size: 44px;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .hero-caregiver {
        padding: 90px 20px;
    }

    .hero-image img {
        border-radius: 26px;
    }

    .hero-text p {
        font-size: 16px;
    }

    .tentang-caregiver.alt {
        padding: 90px 20px;
    }

    .tentang-text h2 {
        font-size: 32px;
    }

    .kompetensi-caregiver {
        padding: 90px 20px;
    }

    .kompetensi-grid {
        grid-template-columns: 1fr;
    }

    .testimoni-caregiver {
        padding: 90px 20px;
    }

    .testimoni-card {
        padding: 46px 30px;
    }

    .fasilitas-caregiver {
        padding: 90px 20px;
    }
}

/* HP kecil */
@media (max-width: 576px) {
    .hero-text h1 {
        font-size: 34px;
        line-height: 1.25;
    }

    .hero-actions {
        gap: 12px;
    }

    .btn-primary,
    .btn-outline {
        padding: 12px 26px;
        font-size: 14px;
    }

    .tentang-text p,
    .tentang-text .sub {
        font-size: 15px;
    }

    .section-title {
        font-size: 28px;
        margin-bottom: 40px;
    }

    .section-head h2 {
        font-size: 28px;
    }

    .testimoni-card {
        padding: 40px 24px;
        border-radius: 28px;
    }

    .testimoni-card .quote {
        font-size: 15px;
    }
}

</style>
{{-- ================= HERO CAREGIVER ================= --}}
<section class="hero-caregiver">
    <div class="container">
        <div class="hero-grid">

            <div class="hero-text">
                <h1>Jurusan <span>Caregiver</span></h1>
                <p>
                    Membekali siswa dengan keterampilan merawat, mendampingi,
                    serta memberikan perhatian penuh kepada lansia,
                    pasien, dan individu berkebutuhan khusus.
                </p>

                <div class="hero-actions">
                    <a href="{{ url('/daftar') }}" class="btn btn_1">Daftar Sekarang</a>
                    <a href="#tentang-caregiver" class="btn-outline">Pelajari Jurusan</a>
                </div>
            </div>

            <div class="hero-image">
                <img src="{{ asset('img/ban_carg.jpg') }}" alt="Jurusan Caregiver">
            </div>

        </div>
    </div>
</section>

{{-- ================= TENTANG CAREGIVER ================= --}}
<section id="tentang-caregiver" class="tentang-caregiver alt">
    <div class="container">
        <div class="tentang-grid">

            <!-- TEXT -->
            <div class="tentang-text">
                <h2>
                    <i class="fa-solid fa-heart-circle-plus title-icon"></i>
                    Tentang Jurusan <br>
                    <span>Caregiver</span>
                </h2>

                <p>
                    <i class="fa-solid fa-user-nurse text-icon"></i>
                    Jurusan <strong>Caregiver SMK Fort De Kock</strong> dirancang
                    untuk membentuk pendamping profesional yang tidak hanya
                    terampil secara teknis, tetapi juga memiliki empati,
                    kesabaran, dan tanggung jawab sosial yang tinggi.
                </p>

                <ul class="tentang-list">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        Pelayanan berbasis empati & etika
                    </li>
                    <li>
                        <i class="fa-solid fa-check"></i>
                        Pendampingan lansia & pasien berkebutuhan khusus
                    </li>
                    <li>
                        <i class="fa-solid fa-check"></i>
                        Siap kerja di layanan homecare & fasilitas kesehatan
                    </li>
                </ul>
            </div>

            <!-- POINTS -->
            <div class="tentang-cards">
                <div class="card">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                    <div>
                        <h4>Empati & Kepedulian</h4>
                        <span>Fokus pada pendekatan humanis</span>
                    </div>
                </div>

                <div class="card">
                    <i class="fa-solid fa-user-group"></i>
                    <div>
                        <h4>Pendampingan Lansia</h4>
                        <span>Perawatan fisik & psikologis</span>
                    </div>
                </div>

                <div class="card">
                    <i class="fa-solid fa-house-medical"></i>
                    <div>
                        <h4>Homecare Profesional</h4>
                        <span>Standar kerja dunia kesehatan</span>
                    </div>
                </div>
            </div>

        </div>

      
    </div>
</section>


{{-- ================= KOMPETENSI CAREGIVER ================= --}}
<section class="kompetensi-caregiver">
    <div class="container">

        <div class="section-head">
            <h2>Kompetensi Keahlian</h2>
            <p>
                Kompetensi yang dirancang untuk membentuk caregiver profesional
                yang terampil, empatik, dan siap kerja di dunia pelayanan kesehatan.
            </p>
        </div>

        <div class="kompetensi-grid">

            <div class="kompetensi-card">
                <div class="icon-wrap">
                    <i class="fa-solid fa-user-check"></i>
                </div>
                <h4>Pendampingan Lansia</h4>
                <span>Perawatan fisik & emosional lansia</span>
            </div>

            <div class="kompetensi-card">
                <div class="icon-wrap">
                    <i class="fa-solid fa-comments"></i>
                </div>
                <h4>Komunikasi Empatik</h4>
                <span>Interaksi humanis & profesional</span>
            </div>

            <div class="kompetensi-card">
                <div class="icon-wrap">
                    <i class="fa-solid fa-bed"></i>
                </div>
                <h4>Perawatan Harian</h4>
                <span>Aktivitas dasar & kenyamanan pasien</span>
            </div>

            <div class="kompetensi-card">
                <div class="icon-wrap">
                    <i class="fa-solid fa-shield-heart"></i>
                </div>
                <h4>Keselamatan Pasien</h4>
                <span>Prosedur K3 & pencegahan risiko</span>
            </div>

            <div class="kompetensi-card">
                <div class="icon-wrap">
                    <i class="fa-solid fa-hand-holding-medical"></i>
                </div>
                <h4>Homecare Profesional</h4>
                <span>Standar layanan kesehatan rumah</span>
            </div>

        </div>

    </div>
</section>


<section class="fasilitas-caregiver">
    <div class="container">
        <h2 class="section-title">Fasilitas Jurusan</h2>

        <div class="fasilitas-grid">

            <div class="fasilitas-card">
                <div class="icon">
                    <i class="fa-solid fa-house-medical"></i>
                </div>
                <h4>Ruang Simulasi Homecare</h4>
                <p>Lingkungan praktik menyerupai kondisi kerja nyata.</p>
            </div>

            <div class="fasilitas-card">
                <div class="icon">
                    <i class="fa-solid fa-wheelchair"></i>
                </div>
                <h4>Alat Bantu Lansia</h4>
                <p>Peralatan standar untuk mendukung mobilitas pasien.</p>
            </div>

            <div class="fasilitas-card">
                <div class="icon">
                    <i class="fa-solid fa-bed"></i>
                </div>
                <h4>Tempat Tidur Perawatan</h4>
                <p>Simulasi perawatan harian dan penanganan pasien.</p>
            </div>

            <div class="fasilitas-card">
                <div class="icon">
                    <i class="fa-solid fa-user-nurse"></i>
                </div>
                <h4>Instruktur Profesional</h4>
                <p>Dibimbing tenaga berpengalaman di bidang kesehatan.</p>
            </div>

            <div class="fasilitas-card">
                <div class="icon">
                    <i class="fa-solid fa-handshake"></i>
                </div>
                <h4>Mitra Panti & Klinik</h4>
                <p>Akses praktik industri & peluang kerja lebih luas.</p>
            </div>

        </div>
    </div>
</section>

{{-- ================= TESTIMONI ================= --}}
<section class="testimoni-caregiver">
    <div class="container">
        <h2 class="section-title light">Testimoni Alumni</h2>

        <div class="row justify-content-center g-4">
            @forelse($testimoni as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-lg p-4 position-relative overflow-hidden"
                         style="border-radius: 20px; transition: transform 0.3s, box-shadow 0.3s;">

                        {{-- Foto --}}
                        @if($item->foto)
                            <div class="avatar mb-3">
                                <img src="{{ asset($item->foto) }}"
                                     class="rounded-circle mx-auto d-block shadow-sm"
                                     width="100"
                                     height="100"
                                     style="object-fit: cover; transition: transform 0.3s;"
                                     alt="{{ $item->nama }}">
                            </div>
                        @endif

                        {{-- Quote --}}
                        <p class="quote fst-italic text-secondary">
                            “{{ $item->isi }}”
                        </p>

                        {{-- Rating (bisa disesuaikan) --}}
                        <div class="rating mb-2 text-warning">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        {{-- Nama & Pekerjaan --}}
                        <span class="fw-bold d-block">{{ $item->nama }}</span>
                        <span class="text-muted d-block">{{ $item->job ?? 'Caregiver Homecare' }}</span>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted">
                    Belum ada testimoni alumni
                </div>
            @endforelse
        </div>

    </div>
</section>



@endsection
