<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMK Kita</title>
    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<style>
/* ===========================
   GLOBAL
=========================== */
body {
    background: linear-gradient(180deg, #faf5f0 0%, #ffe6cc 30%, #ffffff 100%);
    font-family: 'Poppins', sans-serif;
}

/* ================= FARMASI BANNER ================= */
.farmasi_banner {
  position: relative;
  background: linear-gradient(135deg, #fffaf5 0%, #f3f4f6 100%);
  padding: 130px 0 90px; /* aman dari header */
  overflow: hidden;
}

/* SLIDER */
.farmasi_slider {
  position: relative;
}

/* SLIDE */
.farmasi_slide {
  display: none;
  align-items: center;
  gap: 40px;
}

.farmasi_slide.active {
  display: flex;
}

/* IMAGE */
.farmasi_slide img {
  width: 100%;
  max-height: 420px;
  object-fit: cover;
  border-radius: 24px;
  box-shadow: 0 25px 60px rgba(0,0,0,.15);
}

/* CAPTION */
.farmasi_caption {
  max-width: 520px;
}

.farmasi_caption h1 {
  font-size: 44px;
  font-weight: 800;
  color: #002c60;
  line-height: 1.2;
}

.farmasi_caption h1 span {
  color: #ff6f00;
}

.farmasi_caption p {
  font-size: 17px;
  color: #4b5563;
  margin: 18px 0 28px;
  line-height: 1.8;
}

/* BUTTON */
.farmasi_caption . {
  background: linear-gradient(90deg, #ff8a00, #ff6600);
  color: #fff;
  border: none;
  box-shadow: 0 10px 28px rgba(255,111,0,.35);
}

/* DOT NAV */
.farmasi_nav {
  display: flex;
  gap: 10px;
  margin-top: 30px;
}

.farmasi_nav .dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #d1d5db;
  cursor: pointer;
}

.farmasi_nav .dot.active {
  background: #ff6f00;
}

/* DESCRIPTION */
.farmasi_description {
  margin-top: 70px;
}

.farmasi_title {
  font-size: 32px;
  font-weight: 800;
  color: #002c60;
}

.farmasi_text_desc {
  font-size: 16px;
  color: #4b5563;
  line-height: 1.9;
}

/* RESPONSIVE */
@media (max-width: 992px) {
  .farmasi_slide.active {
    flex-direction: column;
    text-align: center;
  }

  .farmasi_caption {
    max-width: 100%;
  }

  .farmasi_caption h1 {
    font-size: 34px;
  }
}


/* ================= GLOBAL SECTION ================= */
.section {
    padding: 90px 0;
}

.section-soft {
    background: linear-gradient(180deg, #fffaf5 0%, #ffffff 100%);
}

.section h2 {
    font-size: 34px;
    font-weight: 800;
    color: #1f2937;
    margin-bottom: 14px;
}

.subtitle {
    max-width: 720px;
    margin: 0 auto 30px;
    font-size: 16px;
    color: #4b5563;
    line-height: 1.9;
}

/* ================= LIST CLEAN ================= */
.list-clean {
    list-style: none;
    padding: 0;
    margin: 30px 0 0;
}

.list-clean li {
    font-size: 16px;
    color: #374151;
    padding: 10px 0;
    position: relative;
}

.list-clean li::before {
    content: "✔";
    color: #ff6f00;
    font-weight: bold;
    margin-right: 10px;
}

.list-clean.center {
    text-align: center;
}

.list-clean.center li::before {
    display: inline-block;
}

/* ================= GRID SYSTEM ================= */
.grid-5 {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    margin-top: 40px;
}

.grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
    margin-top: 40px;
}

/* ================= CARD SOFT ================= */
.card-soft {
    background: linear-gradient(180deg, #ffffff, #fff7ef);
    border-radius: 20px;
    padding: 28px 20px;
    text-align: center;
    font-weight: 600;
    color: #374151;
    box-shadow: 0 18px 40px rgba(0,0,0,0.08);
    transition: .35s ease;
}

.card-soft:hover {
    transform: translateY(-6px);
    box-shadow: 0 25px 55px rgba(0,0,0,0.12);
}

/* ================= CARD OUTLINE ================= */
.card-outline {
    background: #ffffff;
    border-radius: 20px;
    padding: 26px 20px;
    text-align: center;
    font-weight: 600;
    color: #374151;
    border: 2px dashed #ffcc80;
    transition: .35s ease;
}

.card-outline:hover {
    background: #fff7ef;
    border-color: #ff6f00;
}

/* ================= TESTIMONI ================= */
.section strong {
    display: block;
    margin-top: 18px;
    color: #ff6f00;
    font-weight: 700;
}

/* ================= CTA FINAL ================= */
.cta-final {
    background: linear-gradient(135deg, #ff8a00, #ff6600);
    padding: 90px 0;
    text-align: center;
    color: white;
}

.cta-final h2 {
    font-size: 36px;
    font-weight: 800;
    margin-bottom: 30px;
}

.cta-final .btn-primary.large {
    padding: 14px 42px;
    font-size: 17px;
    border-radius: 50px;
    background: #ffffff;
    color: #ff6600;
    font-weight: 700;
    box-shadow: 0 12px 30px rgba(0,0,0,.25);
    border: none;
}

.cta-final .btn-primary.large:hover {
    background: #fff3e0;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 992px) {
    .grid-5 {
        grid-template-columns: repeat(2, 1fr);
    }

    .grid-3 {
        grid-template-columns: repeat(2, 1fr);
    }

    .section h2 {
        font-size: 30px;
    }
}

@media (max-width: 576px) {
    .grid-5,
    .grid-3 {
        grid-template-columns: 1fr;
    }

    .cta-final h2 {
        font-size: 28px;
    }
}

/* ===========================
   ICON CARD
=========================== */
.icon-box {
    font-size: 40px;
    color: #ff7b00;
    margin-bottom: 18px;
}
.section_tittle h2 {
    font-size: 38px;
    font-weight: 700;
    color: #002c60;
}

.section_tittle h2 span {
    color: #ff7b00;
}

.section_tittle .sub-title {
    font-size: 15px;
    color: #666;
    margin-top: -4px;
}
/* ================= ABOUT FARMASI ALT ================= */
.about-farmasi-alt {
    padding: 100px 0;
    background: #fafafa;
}

/* Header */
.about-header h2 {
    font-size: 40px;
    font-weight: 800;
  color: #002c60;
}

.about-header h2 span {
    color: #ff6f00;
}

.about-header p {
    max-width: 720px;
    margin: 20px auto 0;
    font-size: 17px;
    color: #4b5563;
    line-height: 1.8;
}

/* Accent line */
.line-accent {
    width: 70px;
    height: 4px;
    background: linear-gradient(90deg, #ff6f00, #ffb703);
    display: inline-block;
    border-radius: 4px;
    margin-bottom: 14px;
}

/* Image Card */
.image-card {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    height: 100%;
    box-shadow: 0 30px 60px rgba(0,0,0,.15);
}

.image-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        180deg,
        rgba(0,0,0,0) 40%,
        rgba(0,0,0,.65)
    );
    display: flex;
    align-items: flex-end;
    padding: 24px;
}

.image-overlay span {
    color: #fff;
    font-weight: 600;
    font-size: 14px;
}

/* Feature Grid */
.feature-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 18px;
}

/* Feature Item */
.feature-item {
    display: flex;
    gap: 16px;
    padding: 22px;
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 0 10px 28px rgba(0,0,0,.08);
    transition: all .3s ease;
}

.feature-item:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(0,0,0,.15);
}

.feature-item .icon {
    font-size: 26px;
    background: #fff3e0;
    color: #ff6f00;
    width: 54px;
    height: 54px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 16px;
}

.feature-item h5 {
    margin: 0 0 6px;
    font-size: 17px;
    font-weight: 700;
    color: #111827;
}

.feature-item p {
    font-size: 14px;
    color: #4b5563;
    margin: 0;
    line-height: 1.6;
}

/* Responsive */
@media (max-width: 991px) {
    .about-header h2 {
        font-size: 32px;
    }
}
/* ================= KOMPETENSI FARMASI ================= */
.kompetensi-farmasi {
    padding: 100px 0;
    background: linear-gradient(180deg, #ffffff, #f9fafb);
}

/* Header */
.kompetensi-header h2 {
    font-size: 38px;
    font-weight: 800;
    color: #002c60;
}

.kompetensi-header h2 span {
    color: #ff6f00;
}

.kompetensi-header p {
    max-width: 720px;
    margin: 18px auto 0;
    font-size: 16px;
    color: #4b5563;
    line-height: 1.8;
}

/* Accent */
.line-accent {
    width: 70px;
    height: 4px;
    background: linear-gradient(90deg, #ff6f00, #ffb703);
    display: inline-block;
    border-radius: 4px;
    margin-bottom: 14px;
}

/* Grid */
.kompetensi-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 24px;
}

/* Card */
.kompetensi-card {
    background: #ffffff;
    padding: 30px 24px;
    border-radius: 22px;
    text-align: center;
    box-shadow: 0 12px 30px rgba(0,0,0,.08);
    transition: all .35s ease;
    position: relative;
    overflow: hidden;
}

.kompetensi-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(255,111,0,.12),
        rgba(255,183,3,.12)
    );
    opacity: 0;
    transition: .35s;
}

.kompetensi-card:hover::before {
    opacity: 1;
}

.kompetensi-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 55px rgba(0,0,0,.18);
}

/* Icon */
.kompetensi-card .icon {
    font-size: 34px;
    width: 68px;
    height: 68px;
    margin: 0 auto 18px;
    background: #fff3e0;
    color: #ff6f00;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Text */
.kompetensi-card h5 {
    font-size: 18px;
    font-weight: 700;
    color: #002c60;
    margin-bottom: 10px;
}

.kompetensi-card p {
    font-size: 14px;
    color: #4b5563;
    line-height: 1.6;
    margin: 0;
}

/* Responsive */
@media (max-width: 1200px) {
    .kompetensi-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .kompetensi-grid {
        grid-template-columns: repeat(1, 1fr);
    }

    .kompetensi-header h2 {
        font-size: 30px;
    }
}
.fasilitas-card .icon {
    width: 68px;
    height: 68px;
    margin: 0 auto 18px;
    background: #fff3e0;
    color: #ff6f00;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
}
/* ================= FASILITAS FARMASI ================= */
.fasilitas-farmasi {
    padding: 100px 0;
    background: linear-gradient(180deg, #f9fafb, #ffffff);
}

/* Header */
.fasilitas-header h2 {
    font-size: 38px;
    font-weight: 800;
    color: #002c60;
}

.fasilitas-header h2 span {
    color: #ff6f00;
}

.fasilitas-header p {
    max-width: 720px;
    margin: 18px auto 0;
    font-size: 16px;
    color: #4b5563;
    line-height: 1.8;
}

/* Grid */
.fasilitas-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 24px;
}

/* Card */
.fasilitas-card {
    background: #ffffff;
    padding: 30px 22px;
    border-radius: 22px;
    text-align: center;
    border: 1px solid #f1f1f1;
    transition: all .35s ease;
    position: relative;
}

.fasilitas-card:hover {
    transform: translateY(-8px);
    border-color: #ffb703;
    box-shadow: 0 20px 45px rgba(0,0,0,.15);
}

/* Icon */
.fasilitas-card .icon {
    font-size: 34px;
    width: 68px;
    height: 68px;
    margin: 0 auto 18px;
    background: #fff3e0;
    color: #ff6f00;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Text */
.fasilitas-card h5 {
    font-size: 18px;
    font-weight: 700;
    color: #111827;
    margin-bottom: 10px;
}

.fasilitas-card p {
    font-size: 14px;
    color: #4b5563;
    line-height: 1.6;
    margin: 0;
}

/* Responsive */
@media (max-width: 1200px) {
    .fasilitas-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .fasilitas-grid {
        grid-template-columns: repeat(1, 1fr);
    }

    .fasilitas-header h2 {
        font-size: 30px;
    }
}
.praktik-farmasi {
    padding: 100px 0;
    background: #ffffff;
}

.praktik-header h2 {
    font-size: 36px;
    font-weight: 800;
    color: #002c60;
}

.praktik-header span {
    color: #ff6f00;
}

.praktik-header p {
    color: #4b5563;
    max-width: 700px;
    margin: 16px auto 0;
}

.praktik-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

.praktik-card {
    background: #f9fafb;
    padding: 32px 24px;
    border-radius: 22px;
    text-align: center;
    transition: .35s;
}

.praktik-card i {
    font-size: 36px;
    color: #ff6f00;
    margin-bottom: 16px;
}

.praktik-card:hover {
    transform: translateY(-8px);
    background: #ffffff;
    box-shadow: 0 20px 40px rgba(0,0,0,.15);
}
.karir-farmasi {
    padding: 100px 0;
    background: linear-gradient(180deg, #f9fafb, #ffffff);
}

.karir-header h2 {
    font-size: 36px;
    font-weight: 800;
}

.karir-header span {
    color: #ff6f00;
}

.karir-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.karir-card {
    background: #ffffff;
    border-radius: 22px;
    padding: 36px 20px;
    text-align: center;
    border: 1px solid #f1f1f1;
    transition: .35s;
}

.karir-card i {
    font-size: 38px;
    color: #ff6f00;
    margin-bottom: 14px;
}

.karir-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 55px rgba(0,0,0,.18);
}

.testimoni-farmasi {
    padding: 120px 0;
    background: #fff7ed;
}

.testimoni-farmasi i {
    font-size: 48px;
    color: #ff6f00;
    margin-bottom: 20px;
}

.testimoni-farmasi h2 {
    font-size: 34px;
    font-weight: 800;
    margin-bottom: 20px;
}

.testimoni-text {
    max-width: 720px;
    margin: 0 auto 20px;
    font-size: 18px;
    font-style: italic;
    color: #374151;
}
 .testimoni-farmasi .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .testimoni-farmasi .card:hover .card-hover-overlay {
        opacity: 1;
    }

    .testimoni-farmasi img.rounded-circle:hover {
        transform: scale(1.1);
    }

    .testimoni-farmasi .fst-italic {
        font-size: 0.95rem;
        line-height: 1.5;
    }
    @media (max-width: 992px) {

  /* BANNER */
  .farmasi_banner {
    padding: 110px 0 70px;
  }

  .farmasi_slide.active {
    flex-direction: column;
    text-align: center;
  }

  .farmasi_caption h1 {
    font-size: 34px;
  }

  /* SECTION TITLE */
  .section h2,
  .about-header h2,
  .kompetensi-header h2,
  .fasilitas-header h2,
  .praktik-header h2,
  .karir-header h2 {
    font-size: 30px;
  }

  /* GRID SYSTEM */
  .grid-5,
  .kompetensi-grid,
  .fasilitas-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .praktik-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .karir-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 768px) {

  /* BANNER */
  .farmasi_caption h1 {
    font-size: 28px;
  }

  .farmasi_caption p {
    font-size: 15px;
  }

  /* GLOBAL SECTION */
  .section {
    padding: 70px 0;
  }

  /* HEADER */
  .section_tittle h2 {
    font-size: 30px;
  }

  /* GRID → 1 COLUMN */
  .grid-5,
  .grid-3,
  .kompetensi-grid,
  .fasilitas-grid,
  .praktik-grid,
  .karir-grid {
    grid-template-columns: 1fr;
  }

  /* ABOUT */
  .about-header p,
  .kompetensi-header p,
  .fasilitas-header p,
  .praktik-header p {
    font-size: 15px;
    padding: 0 10px;
  }

  /* TESTIMONI */
  .testimoni-farmasi h2 {
    font-size: 28px;
  }

  .testimoni-text {
    font-size: 16px;
  }
}
@media (max-width: 480px) {

  .farmasi_caption h1 {
    font-size: 24px;
  }

  .farmasi_title {
    font-size: 26px;
  }

  .cta-final h2 {
    font-size: 26px;
  }

  .section h2 {
    font-size: 26px;
  }
}

</style>
</head>

<body>

        {{-- ===================== HEADER ===================== --}}
    <header class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logosmk.png') }}" alt="Logo SMK" height="60">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                   <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    {{-- HOME (tanpa dropdown) --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>

                    {{-- TENTANG (dropdown) --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="tentangDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tentang
                        </a>
                        <div class="dropdown-menu" aria-labelledby="tentangDropdown">
                            <a class="dropdown-item" href="{{ url('/about') }}">Profil Sekolah</a>
                            <a class="dropdown-item" href="{{ url('/visi-misi') }}">Visi & Misi</a>
                            <a class="dropdown-item" href="{{ url('/struktur') }}">Struktur Organisasi</a>
                            <a class="dropdown-item" href="{{ url('/kepala') }}">Kepala Sekolah</a>
                            <a class="dropdown-item" href="{{ url('/berita') }}">Berita</a>
                            <a class="dropdown-item" href="{{ url('/guru-staf') }}">Guru</a>

                        </div>
                    </li>

                    {{-- PROGRAM (dropdown) --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="programDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Program
                        </a>
                        <div class="dropdown-menu" aria-labelledby="programDropdown">
                            <a class="dropdown-item" href="{{ url('/smk/farmasi') }}">Farmasi</a>
                            <a class="dropdown-item" href="{{ url('/smk/keperawatan') }}">Keperawatan</a>
                            <a class="dropdown-item" href="{{ url('/smk/caregiver') }}">Caregiver</a>
                        </div>
                    </li>

                    {{-- PPDB (dropdown) --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ppdbDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PPDB
                        </a>
                        <div class="dropdown-menu" aria-labelledby="ppdbDropdown">
                            <a class="dropdown-item" href="{{ url('/ppdb') }}">Informasi PPDB</a>
                            <a class="dropdown-item" href="{{ url('/daftar') }}">Formulir Pendaftaran</a>
                            <a class="dropdown-item" href="{{ url('/ppdb/pengumuman') }}">Pengumuman Hasil</a>
                        </div>
                    </li>

                    {{-- KONTAK (dropdown) --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kontak
                        </a>
                       <div class="dropdown-menu" aria-labelledby="contactDropdown">
                            <a class="dropdown-item" href="{{ url('/smk/kontak') }}">Hubungi Kami</a>
                        </div>
                    </li>
 <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/login') }}">Login</a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
    </header>

{{-- ================= HERO FARMASI ================= --}}
<section class="farmasi_banner">
  <div class="container">
    <div class="farmasi_slider">

      <!-- Slide 1 -->
      <div class="farmasi_slide active" data-slide="0">
        <img src="{{ asset('img/farm-fas.jpg') }}" alt="Laboratorium Farmasi">
        <div class="farmasi_caption">
          <h1>Jurusan <br><span>Farmasi</span></h1>
          <p>
            Membekali siswa dengan keterampilan kefarmasian,
            peracikan obat, dan praktik laboratorium kesehatan.
          </p>
          <a href="{{ url('/daftar') }}" class="btn btn_1 rounded-pill px-4 py-2">
            Daftar Sekarang
          </a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="farmasi_slide" data-slide="1">
        <img src="{{ asset('img/farmasi-siswa.jpg') }}" alt="Praktikum Farmasi">
        <div class="farmasi_caption">
          <h1>Belajar <br><span>Langsung Praktik</span></h1>
          <p>
            Didukung fasilitas laboratorium modern
            dan pembelajaran berbasis praktik nyata.
          </p>
          <a href="{{ asset('storage/brosur/farmasi.pdf') }}" class="btn btn_1 rounded-pill px-4 py-2">
            Download Brosur
          </a>
        </div>
      </div>

      <!-- Navigasi -->
      <div class="farmasi_nav">
        <span class="dot active" data-target="0"></span>
        <span class="dot" data-target="1"></span>
      </div>

    </div>
  </div>

  <!-- DESKRIPSI BAWAH -->
  <div class="farmasi_description py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <h2 class="farmasi_title text-center mb-3">Kenapa Memilih Farmasi?</h2>
          <p class="farmasi_text_desc text-justify">
            Jurusan <strong>Farmasi SMK Fort De Kock</strong> dirancang untuk mencetak
            lulusan yang <strong>siap kerja</strong> di apotek, laboratorium, dan dunia pelayanan kesehatan.
            Siswa dibekali keterampilan teknis, etika profesi, serta pemahaman keselamatan kerja
            yang menjadi standar di dunia industri kesehatan.
          </p>
        </div>
      </div>
    </div>
  </div>

</section>
{{-- ================= TENTANG JURUSAN ================= --}}
<section class="about-farmasi-alt">
    <div class="container">

        <!-- Header -->
        <div class="about-header text-center mb-5">
            <span class="line-accent"></span>
            <h2>Tentang Jurusan <span>Farmasi</span></h2>
            <p>
                Program keahlian yang dirancang untuk mencetak lulusan
                <strong>kompeten, teliti, dan profesional</strong>
                di bidang kefarmasian.
            </p>
        </div>

        <!-- Content -->
        <div class="row g-4 align-items-stretch">

            <!-- Image -->
            <div class="col-lg-6">
                <div class="image-card">
                    <img src="{{ asset('img/ban_farm-min.jpg') }}" alt="Farmasi">
                    <div class="image-overlay">
                        <span>SMK Fort De Kock</span>
                    </div>
                </div>
            </div>

            <!-- Text Cards -->
            <div class="col-lg-6">
                <div class="feature-grid">

                    <div class="feature-item">
                        <div class="icon">💊</div>
                        <div>
                            <h5>Peracikan Obat</h5>
                            <p>Mempelajari teknik dasar peracikan dan formulasi obat sesuai standar.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="icon">🧪</div>
                        <div>
                            <h5>Laboratorium Farmasi</h5>
                            <p>Pengenalan bahan kimia, alat laboratorium, dan praktik kerja aman.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="icon">🧾</div>
                        <div>
                            <h5>Administrasi Apotek</h5>
                            <p>Pengelolaan stok, pencatatan obat, dan sistem pelayanan apotek.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="icon">🛡️</div>
                        <div>
                            <h5>Etika & K3</h5>
                            <p>Penerapan etika profesi dan keselamatan kerja di bidang kesehatan.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


{{-- ================= KOMPETENSI KEAHLIAN ================= --}}
<section class="kompetensi-farmasi">
    <div class="container">

        <!-- Header -->
        <div class="kompetensi-header text-center mb-5">
            <span class="line-accent"></span>
            <h2>Kompetensi <span>Keahlian</span></h2>
            <p>
                Kompetensi utama yang akan dikuasai siswa Jurusan Farmasi
                sebagai bekal dunia kerja dan industri kesehatan.
            </p>
        </div>

        <!-- Grid -->
        <div class="kompetensi-grid">

            <div class="kompetensi-card">
                <div class="icon">💊</div>
                <h5>Dasar Farmasi</h5>
                <p>Memahami konsep dasar kefarmasian dan peran tenaga farmasi.</p>
            </div>

            <div class="kompetensi-card">
                <div class="icon">🧪</div>
                <h5>Praktikum Laboratorium</h5>
                <p>Praktik penggunaan alat dan bahan laboratorium farmasi.</p>
            </div>

            <div class="kompetensi-card">
                <div class="icon">🧾</div>
                <h5>Administrasi Apotek</h5>
                <p>Pencatatan obat, stok, dan sistem pelayanan apotek.</p>
            </div>

            <div class="kompetensi-card">
                <div class="icon">🏥</div>
                <h5>Kesehatan & K3</h5>
                <p>Penerapan keselamatan kerja dan etika profesi kefarmasian.</p>
            </div>

            <div class="kompetensi-card">
                <div class="icon">📦</div>
                <h5>Manajemen Obat</h5>
                <p>Pengelolaan penyimpanan, distribusi, dan mutu obat.</p>
            </div>

        </div>

    </div>
</section>


{{-- ================= FASILITAS JURUSAN ================= --}}
<section class="fasilitas-farmasi">
    <div class="container">

        <!-- Header -->
        <div class="fasilitas-header text-center mb-5">
            <span class="line-accent"></span>
            <h2>Fasilitas <span>Jurusan</span></h2>
            <p>
                Fasilitas pembelajaran modern untuk mendukung praktik
                dan kompetensi siswa Jurusan Farmasi.
            </p>
        </div>

        <!-- Grid -->
        <div class="fasilitas-grid">

            <div class="fasilitas-card">
                <div class="icon">
                    <i class="fa-solid fa-flask-vial"></i>
                </div>
                <h5>Laboratorium Farmasi</h5>
                <p>Laboratorium standar industri untuk praktik kefarmasian.</p>
            </div>

            <div class="fasilitas-card">
                <div class="icon">
                    <i class="fa-solid fa-hospital"></i>
                </div>
                <h5>Ruang Praktik Apotek</h5>
                <p>Simulasi pelayanan apotek sesuai kondisi lapangan.</p>
            </div>

            <div class="fasilitas-card">
                <div class="icon">
                    <i class="fa-solid fa-vials"></i>
                </div>
                <h5>Alat Peracikan Lengkap</h5>
                <p>Peralatan modern untuk meracik dan mengolah obat.</p>
            </div>

            <div class="fasilitas-card">
                <div class="icon">
                    <i class="fa-solid fa-user-shield"></i>
                </div>
                <h5>APD Praktikum</h5>
                <p>Jas lab, masker, dan sarung tangan sesuai standar K3.</p>
            </div>

            <div class="fasilitas-card">
                <div class="icon">
                    <i class="fa-solid fa-handshake"></i>
                </div>
                <h5>Kerja Sama Industri</h5>
                <p>Kolaborasi dengan apotek, klinik, dan fasilitas kesehatan.</p>
            </div>

        </div>

    </div>
</section>


{{-- ================= KEGIATAN PRAKTIK ================= --}}
<section class="praktik-farmasi">
    <div class="container">

        <div class="praktik-header text-center mb-5">
            <span class="line-accent"></span>
            <h2>Kegiatan <span>Praktik & Pembelajaran</span></h2>
            <p>Proses pembelajaran berbasis praktik untuk membentuk lulusan siap kerja.</p>
        </div>

        <div class="praktik-grid">

            <div class="praktik-card">
                <i class="fa-solid fa-flask"></i>
                <h5>Praktikum Laboratorium</h5>
                <p>Praktik harian di laboratorium farmasi sekolah.</p>
            </div>

            <div class="praktik-card">
                <i class="fa-solid fa-store"></i>
                <h5>Simulasi Apotek</h5>
                <p>Pelayanan apotek sesuai prosedur industri.</p>
            </div>

            <div class="praktik-card">
                <i class="fa-solid fa-industry"></i>
                <h5>Kunjungan Industri</h5>
                <p>Mengenal langsung dunia kerja kefarmasian.</p>
            </div>

            <div class="praktik-card">
                <i class="fa-solid fa-briefcase"></i>
                <h5>PKL</h5>
                <p>Praktek Kerja Lapangan di apotek & fasilitas kesehatan.</p>
            </div>

        </div>

    </div>
</section>


{{-- ================= PELUANG KARIR ================= --}}
<section class="karir-farmasi">
    <div class="container">

        <div class="karir-header text-center mb-5">
            <span class="line-accent"></span>
            <h2>Peluang <span>Karir Lulusan</span></h2>
            <p>Lulusan Farmasi memiliki peluang kerja luas di bidang kesehatan.</p>
        </div>

        <div class="karir-grid">

            <div class="karir-card">
                <i class="fa-solid fa-user-nurse"></i>
                <h5>Asisten Apoteker</h5>
            </div>

            <div class="karir-card">
                <i class="fa-solid fa-capsules"></i>
                <h5>Tenaga Teknis Kefarmasian</h5>
            </div>

            <div class="karir-card">
                <i class="fa-solid fa-store"></i>
                <h5>Apotek & Klinik</h5>
            </div>

            <div class="karir-card">
                <i class="fa-solid fa-hospital"></i>
                <h5>Rumah Sakit</h5>
            </div>

            <div class="karir-card">
                <i class="fa-solid fa-house-medical"></i>
                <h5>Puskesmas</h5>
            </div>

            <div class="karir-card">
                <i class="fa-solid fa-industry"></i>
                <h5>Industri Farmasi</h5>
            </div>

        </div>

    </div>
</section>


{{-- ================= TESTIMONI ================= --}}
<section class="testimoni-farmasi">
    <div class="container text-center">

        <i class="fa-solid fa-quote-left"></i>

        <h2>Testimoni Alumni</h2>
 <div class="row justify-content-center g-4">
            @forelse($testimoni as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-lg p-4 position-relative overflow-hidden"
                         style="border-radius: 20px; transition: transform 0.3s, box-shadow 0.3s;">
                        
                        {{-- Hover effect --}}
                        <div class="card-hover-overlay position-absolute w-100 h-100" style="top:0; left:0; background: rgba(0,123,255,0.05); opacity:0; transition: opacity 0.3s;"></div>

                        @if($item->foto)
                            <img src="{{ asset($item->foto) }}"
                                 class="rounded-circle mb-3 shadow-sm mx-auto d-block"
                                 width="100"
                                 height="100"
                                 style="object-fit: cover; transition: transform 0.3s;"
                                 alt="{{ $item->nama }}">
                        @endif

                        <h5 class="fw-bold mb-1">{{ $item->nama }}</h5>
                        <small class="text-muted">{{ strtoupper($item->jurusan) }}</small>

                        <p class="mt-3 text-secondary fst-italic">
                            “{{ $item->isi }}”
                        </p>
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




            <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="{{ asset('img/logosmk.png') }}" alt=""> </a>
                        <p>
    SMK Kesehatan Fort De Kock Mandiri berkomitmen mencetak lulusan
    yang unggul, berkarakter, dan siap bersaing di dunia kerja.
</p>
<p>
    Mengedepankan pendidikan berkualitas, disiplin, dan nilai-nilai profesional.
</p>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
<p>
    Dapatkan informasi terbaru seputar kegiatan sekolah,
    pengumuman, dan berita penting langsung ke email Anda.
</p>

                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> Jln.Soekarno Hatta No. 11 Manggis Ganting Kota Bukittinggi </p>
                            <p><span> Phone :</span> 081274151335</p>
                            <p><span> Email : </span>smk.kes.fdkmandiri@gmail.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by the IT departement of Fort De Kock University</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- ===================== JAVASCRIPT ===================== --}}
    <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add("show");
        });
    }, { threshold: 0.2 });

    document.querySelectorAll(".fade-up, .slide-left, .slide-right").forEach(el => {
        observer.observe(el);
    });
});
</script>

</body>
</html>
