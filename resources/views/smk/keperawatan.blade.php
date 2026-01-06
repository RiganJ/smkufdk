<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMK FDK</title>
    <link rel="icon" href="{{ asset('img/smk.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


 <style>
        /* ================= HERO ================= */
      .keperawatan_banner {
  position: relative;
  background: linear-gradient(135deg, #fffaf5 0%, #f3f4f6 100%);
  padding: 130px 0 90px; /* aman dari header */
  overflow: hidden;
}

/* SLIDER */
.keperawatan_slider {
  position: relative;
}

/* SLIDE */
.keperawatan_slide {
  display: none;
  align-items: center;
  gap: 40px;
}

.keperawatan_slide.active {
  display: flex;
}

/* IMAGE */
.keperawatan_slide img {
  width: 100%;
  max-height: 420px;
  object-fit: cover;
  border-radius: 24px;
  box-shadow: 0 25px 60px rgba(0,0,0,.15);
}

/* CAPTION */
.keperawatan_caption {
  max-width: 520px;
}

.keperawatan_caption h1 {
  font-size: 44px;
  font-weight: 800;
  color: #002c60;
  line-height: 1.2;
}

.keperawatan_caption h1 span {
  color: #ff6f00;
}

.keperawatan_caption p {
  font-size: 17px;
  color: #4b5563;
  margin: 18px 0 28px;
  line-height: 1.8;
}

/* BUTTON */
.keperawatan_caption . {
  background: linear-gradient(90deg, #ff8a00, #ff6600);
  color: #fff;
  border: none;
  box-shadow: 0 10px 28px rgba(255,111,0,.35);
}

/* DOT NAV */
.keperawatan_nav {
  display: flex;
  gap: 10px;
  margin-top: 30px;
}

.keperawatan_nav .dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #d1d5db;
  cursor: pointer;
}

.keperawatan_nav .dot.active {
  background: #ff6f00;
}

/* DESCRIPTION */
.keperawatan_description {
  margin-top: 70px;
}

.keperawatan_title {
  font-size: 32px;
  font-weight: 800;
  color: #002c60;
}

.keperawatan_text_desc {
  font-size: 16px;
  color: #4b5563;
  line-height: 1.9;
}

/* RESPONSIVE */
@media (max-width: 992px) {
  .keperawatan_slide.active {
    flex-direction: column;
    text-align: center;
  }

  .keperawatan_caption {
    max-width: 100%;
  }

  .keperawatan_caption h1 {
    font-size: 34px;
  }
}

/* ================= TENTANG KEPERAWATAN – CLEAN ================= */
/* ================= TENTANG KEPERAWATAN ================= */
.tentang-keperawatan {
    padding: 100px 0;
    background: #ffffff;
}

.tentang-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

/* IMAGE */
.tentang-image img {
    width: 100%;
    border-radius: 28px;
    object-fit: cover;
    box-shadow: 0 25px 50px rgba(0, 44, 96, 0.15);
}

/* CONTENT */
.tentang-content h2 {
    font-size: 40px;
    font-weight: 800;
    color: #002c60;
    line-height: 1.2;
    margin-bottom: 24px;
}

.tentang-content h2 span {
    display: block;
    color: #ff6f00;
}

.tentang-content p {
    font-size: 17px;
    line-height: 1.8;
    color: #334155;
    margin-bottom: 32px;
    max-width: 520px;
}

/* POINT LIST */
.tentang-points {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    gap: 16px;
}

.tentang-points li {
    display: flex;
    align-items: center;
    gap: 14px;
    background: #f8fafc;
    padding: 14px 18px;
    border-radius: 16px;
    font-size: 15px;
    font-weight: 500;
    color: #002c60;
    transition: all .25s ease;
}

.tentang-points li i {
    color: #ff6f00;
    font-size: 18px;
}

.tentang-points li:hover {
    transform: translateX(6px);
    background: #fff3e6;
}

/* RESPONSIVE */
@media (max-width: 991px) {
    .tentang-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .tentang-content h2 {
        font-size: 34px;
    }

    .tentang-content p {
        max-width: 100%;
    }
}


      /* ================= KOMPETENSI KEPERAWATAN ================= */
.kompetensi-keperawatan {
    padding: 100px 0;
    background: #f8fafc;
}

/* HEADER */
.section-header {
    margin-bottom: 60px;
}

.section-tag {
    display: inline-block;
    padding: 6px 16px;
    background: rgba(255, 111, 0, 0.12);
    color: #ff6f00;
    font-size: 13px;
    font-weight: 600;
    border-radius: 50px;
    margin-bottom: 14px;
}

.section-header h2 {
    font-size: 38px;
    font-weight: 800;
    color: #002c60;
}

/* GRID */
.kompetensi-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 28px;
}

/* CARD */
.kompetensi-card {
    background: #ffffff;
    padding: 36px 28px;
    border-radius: 24px;
    text-align: center;
    transition: all .35s ease;
    border: 1px solid #eef2f7;
}

.kompetensi-card i {
    font-size: 36px;
    color: #ff6f00;
    margin-bottom: 20px;
}

.kompetensi-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #002c60;
    margin-bottom: 12px;
}

.kompetensi-card p {
    font-size: 14.5px;
    line-height: 1.7;
    color: #475569;
}

/* HOVER */
.kompetensi-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 60px rgba(0, 44, 96, 0.15);
    border-color: transparent;
}

/* RESPONSIVE */
@media (max-width: 1200px) {
    .kompetensi-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .kompetensi-grid {
        grid-template-columns: 1fr 1fr;
    }

    .section-header h2 {
        font-size: 32px;
    }
}

@media (max-width: 480px) {
    .kompetensi-grid {
        grid-template-columns: 1fr;
    }
}

/* ================= CARE STYLE KEPERAWATAN ================= */
.fasilitas-care {
    padding: 110px 0;
    background: linear-gradient(180deg, #f8fbff, #ffffff);
}

.care-header {
    max-width: 600px;
    margin-bottom: 70px;
}

.care-header h2 {
    font-size: 36px;
    font-weight: 800;
    color: #002c60;
    margin-bottom: 14px;
}

.care-header p {
    font-size: 15px;
    color: #475569;
    line-height: 1.8;
}

/* LIST */
.care-list {
    display: flex;
    flex-direction: column;
    gap: 28px;
}

/* ITEM */
.care-item {
    display: flex;
    align-items: center;
    gap: 28px;
    padding: 32px 36px;
    background: #ffffff;
    border-radius: 32px;
    box-shadow: 0 20px 45px rgba(0, 44, 96, 0.12);
    transition: all .35s ease;
}

.care-item:hover {
    transform: translateX(8px);
    box-shadow: 0 35px 70px rgba(0, 44, 96, 0.18);
}

/* ICON */
.care-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: rgba(255, 111, 0, 0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.care-icon i {
    font-size: 28px;
    color: #ff6f00;
}

/* CONTENT */
.care-content h4 {
    font-size: 18px;
    font-weight: 700;
    color: #002c60;
    margin-bottom: 6px;
}

.care-content p {
    font-size: 14.5px;
    color: #475569;
    line-height: 1.7;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .care-item {
        flex-direction: column;
        text-align: center;
    }
}
/* ================= TESTIMONI KEPERAWATAN ================= */
.testimoni-keperawatan {
    padding: 120px 0;
    background: linear-gradient(180deg, #ffffff, #f8fbff);
}

/* HEADER */
.testimoni-header {
    max-width: 600px;
    margin-bottom: 80px;
}

.testimoni-header h2 {
    font-size: 36px;
    font-weight: 800;
    color: #002c60;
    margin-bottom: 12px;
}

.testimoni-header p {
    font-size: 15px;
    color: #475569;
    line-height: 1.8;
}

/* WRAPPER */
.testimoni-wrapper {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
}

/* CARD */
.testimoni-card {
    position: relative;
    padding: 50px 46px 42px;
    background: #ffffff;
    border-radius: 36px;
    box-shadow: 0 25px 60px rgba(0, 44, 96, 0.15);
    transition: all .4s ease;
}

.testimoni-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 40px 80px rgba(0, 44, 96, 0.2);
}

/* HIGHLIGHT */
.testimoni-card.highlight {
    background: linear-gradient(180deg, #ffffff, #fff4ec);
}

/* QUOTE */
.testimoni-quote {
    position: absolute;
    top: -25px;
    left: 40px;
    font-size: 90px;
    color: rgba(255, 111, 0, 0.2);
    font-family: serif;
}

/* TEXT */
.testimoni-text {
    font-size: 15.5px;
    line-height: 1.9;
    color: #334155;
    margin-bottom: 34px;
}

/* PROFILE */
.testimoni-profile {
    display: flex;
    align-items: center;
    gap: 16px;
}

.testimoni-profile img {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #ff6f00;
}

.testimoni-profile h5 {
    margin: 0;
    font-size: 15px;
    font-weight: 700;
    color: #002c60;
}

.testimoni-profile span {
    font-size: 13px;
    color: #64748b;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .testimoni-wrapper {
        grid-template-columns: 1fr;
    }
}

    </style>
</head>
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
<body>

      
    {{-- ================= HERO KEPERAWATAN ================= --}}
<section class="keperawatan_banner">
  <div class="container">
    <div class="farmasi_slider">

      <!-- Slide 1 -->
      <div class="keperawatan_slide active" data-slide="0">
        <img src="{{ asset('img/ban_kes.jpg') }}" alt="Laboratorium Farmasi">
        <div class="keperawatan_caption">
          <h1>Jurusan <br><span>Keperawatan</span></h1>
         <p>
  Mempersiapkan siswa menjadi tenaga keperawatan yang terampil,
  beretika, dan siap terjun di dunia pelayanan kesehatan profesional.
</p>

          <a href="{{ url('/daftar') }}" class="btn btn_1 rounded-pill px-4 py-2">
            Daftar Sekarang
          </a>
        </div>
      </div>
 <!-- Navigasi -->
      <div class="keperawatan_nav">
        <span class="dot active" data-target="0"></span>
        <span class="dot" data-target="1"></span>
      </div>

    </div>
  </div>

     <!-- DESKRIPSI BAWAH -->
 <div class="keperawatan_description py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <h2 class="keperawatan_title text-center mb-3">
          Kenapa Memilih Keperawatan?
        </h2>
        <p class="keperawatan_text_desc text-justify">
          Jurusan <strong>Keperawatan SMK Fort De Kock</strong> dirancang untuk mencetak
          lulusan yang <strong>siap kerja</strong> di fasilitas pelayanan kesehatan seperti
          rumah sakit, klinik, dan puskesmas.
          Siswa dibekali keterampilan keperawatan dasar, etika profesi,
          serta pemahaman keselamatan dan pelayanan pasien sesuai standar
          dunia kesehatan.
        </p>
      </div>
    </div>
  </div>
</div>


</section>
<section class="tentang-keperawatan">
  <div class="container">
    <div class="tentang-grid">

      <div class="tentang-image">
        <img src="{{ asset('img/kep.jpg') }}" alt="Praktik Keperawatan">
      </div>

      <div class="tentang-content">
        <h2>
          Tentang Jurusan
          <span>Keperawatan</span>
        </h2>

        <p>
          Jurusan <strong>Keperawatan SMK Fort De Kock</strong> membekali siswa
          dengan keterampilan dasar keperawatan, pelayanan pasien,
          serta etika profesi kesehatan.
        </p>

        <ul class="tentang-points">
          <li><i class="fa-solid fa-user-nurse"></i> Praktik keperawatan sejak dini</li>
          <li><i class="fa-solid fa-heart-pulse"></i> Pelayanan pasien & empati</li>
          <li><i class="fa-solid fa-shield-heart"></i> Standar keselamatan kerja</li>
          <li><i class="fa-solid fa-briefcase-medical"></i> Siap kerja & lanjut studi</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<section class="kompetensi-keperawatan">
    <div class="container">
        <div class="section-header text-center">
            <h2>Kompetensi Keperawatan</h2>
        </div>

        <div class="kompetensi-grid">
            <div class="kompetensi-card">
                <i class="fa-solid fa-stethoscope"></i>
                <h4>Keperawatan Dasar</h4>
                <p>Penguasaan dasar asuhan keperawatan sesuai standar layanan kesehatan.</p>
            </div>

            <div class="kompetensi-card">
                <i class="fa-solid fa-heart-pulse"></i>
                <h4>Tindakan Keperawatan</h4>
                <p>Pelaksanaan tindakan keperawatan dasar dan lanjutan secara profesional.</p>
            </div>

            <div class="kompetensi-card">
                <i class="fa-solid fa-bed-pulse"></i>
                <h4>Perawatan Pasien</h4>
                <p>Pendampingan dan perawatan pasien dengan empati dan ketelitian.</p>
            </div>

            <div class="kompetensi-card">
                <i class="fa-solid fa-notes-medical"></i>
                <h4>Administrasi Medis</h4>
                <p>Pencatatan data pasien dan administrasi layanan kesehatan.</p>
            </div>

            <div class="kompetensi-card">
                <i class="fa-solid fa-shield-heart"></i>
                <h4>K3 Kesehatan</h4>
                <p>Penerapan keselamatan dan kesehatan kerja di fasilitas medis.</p>
            </div>
        </div>
    </div>
</section>

<section class="fasilitas-care">
    <div class="container">

        <div class="care-header">
            <h2>Lingkungan Praktik Keperawatan</h2>
            <p>
                Fasilitas dirancang untuk membentuk sikap profesional,
                empati, dan kesiapan menghadapi pasien.
            </p>
        </div>

        <div class="care-list">

            <div class="care-item">
                <div class="care-icon">
                    <i class="fa-solid fa-bed-pulse"></i>
                </div>
                <div class="care-content">
                    <h4>Ruang Simulasi Pasien</h4>
                    <p>Latihan pelayanan dan perawatan pasien secara langsung.</p>
                </div>
            </div>

            <div class="care-item">
                <div class="care-icon">
                    <i class="fa-solid fa-user-nurse"></i>
                </div>
                <div class="care-content">
                    <h4>Laboratorium Keperawatan</h4>
                    <p>Praktik tindakan keperawatan dasar dan lanjutan.</p>
                </div>
            </div>

            <div class="care-item">
                <div class="care-icon">
                    <i class="fa-solid fa-kit-medical"></i>
                </div>
                <div class="care-content">
                    <h4>Peralatan Medis Standar</h4>
                    <p>Alat praktik sesuai standar pendidikan kesehatan.</p>
                </div>
            </div>

            <div class="care-item">
                <div class="care-icon">
                    <i class="fa-solid fa-handshake-angle"></i>
                </div>
                <div class="care-content">
                    <h4>Mitra Rumah Sakit</h4>
                    <p>PKL & praktik kerja di RS dan Puskesmas.</p>
                </div>
            </div>

        </div>

    </div>
</section>

        <section class="testimoni-keperawatan">
    <div class="container">

        <div class="testimoni-header">
            <h2>Apa Kata Alumni?</h2>
            <p>
                Pengalaman nyata lulusan Jurusan Keperawatan
                SMK Fort De Kock di dunia kerja.
            </p>
        </div>

        <div class="row justify-content-center g-4">
            @forelse($testimoni as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-lg p-4 position-relative overflow-hidden"
                         style="border-radius: 20px; transition: transform 0.3s, box-shadow 0.3s;">

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
    </body>
</html>