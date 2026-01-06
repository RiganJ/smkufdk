 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMK FDK</title>
    <link rel="icon" href="{{ asset('img/smk.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<style>
/* ============================================================
   GLOBAL ANIMATION
   ============================================================ */
.fade-up {
    opacity: 0;
    transform: translateY(25px);
    animation: fadeUp .8s ease forwards;
}
@keyframes fadeUp {
    to { opacity: 1; transform: translateY(0); }
}

/* ============================================================
   SECTION GLOBAL
   ============================================================ */
#ppdb-section {
    padding-top: 20px;
}

/* Judul */
.refined-title {
    font-size: 2.4rem;
    font-weight: 800;
    letter-spacing: 0.5px;
    margin-bottom: 10px;
}
.refined-title span {
    color: #ff7b00;
}

/* Deskripsi */
.refined-desc {
    max-width: 750px;
    margin: 0 auto;
    font-size: 1.05rem;
    color: #4a4a4a;
    line-height: 1.65;
    letter-spacing: 0.2px;
    padding: 0 15px;
    text-transform: none !important;
}



/* ============================================================
   BUTTON
   ============================================================ */
.btn-sunset {
    display: inline-block;
    padding: 12px 28px;
    border-radius: 12px;
    background: linear-gradient(135deg, #ff7b00, #ff9e40);
    color: #fff;
    font-weight: 600;
    font-size: 1.05rem;
    text-decoration: none;
    transition: .25s ease;
    box-shadow: 0 6px 18px rgba(255,125,0,0.35);
}
.btn-sunset:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(255,125,0,0.45);
}

/* ============================================================
   TIMELINE
   ============================================================ */
/* Animasi Fade-Up dengan Scale */
.fade-up {
  opacity: 0;
  transform: translateY(30px) scale(0.95);
  animation: fadeUpScale 0.8s ease-out forwards;
}

.timeline-item:nth-child(1) { animation-delay: 0s; }
.timeline-item:nth-child(2) { animation-delay: 0.2s; }
.timeline-item:nth-child(3) { animation-delay: 0.4s; }

@keyframes fadeUpScale {
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

/* Hover ringan untuk ikon */
.timeline-icon:hover {
  transform: scale(1.1);
  transition: transform 0.3s ease;
}

/* Timeline umum */
.timeline-container {
    display: flex;
    justify-content: center;
    gap: 50px;
    position: relative;
    margin-bottom: 50px;
    flex-wrap: wrap;
}

.timeline-container::before {
    content: "";
    position: absolute;
    top: 55px;
    left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #ff7b00, #ff9e40);
    opacity: .25;
    z-index: 1;
}

.timeline-item {
    text-align: center;
    z-index: 2;
    width: 250px;
}

.timeline-icon {
    width: 70px;
    height: 70px;
    font-size: 1.9rem;
    background: linear-gradient(135deg, #ff7b00, #ff9e40);
    border-radius: 50%;
    box-shadow: 0 6px 20px rgba(255,125,0,0.28);
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto 15px;
    color: white;
    transition: transform 0.3s ease;
}


.timeline-content h4 {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 6px;
}
.timeline-content p {
    font-size: .95rem;
    color: #555;
}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 992px) {
    .refined-title { font-size: 2.1rem; }
}

@media (max-width: 768px) {
    .timeline-container {
        flex-direction: column;
        gap: 40px;
    }
    .timeline-container::before {
        left: 50%;
        width: 4px;
        height: 100%;
        top: 0;
        margin-left: -2px;
    }
}

@media (max-width: 480px) {
    .refined-title { font-size: 1.8rem; }
    .timeline-icon {
        width: 75px; height: 75px;
        font-size: 2rem;
    }
}

.section_tittle h2::after,
.section_tittle .refined-title::after,
.section_tittle .refined-title span::after,
.refined-title::after,
.clean-title::after {
    content: none !important;
    display: none !important;
}
/* Heading */
.ppdb-title {
  font-size: 32px;
  font-weight: 700;
  text-align: center; /* selalu di tengah */
}

.ppdb-title span {
  color: #ff7b00; /* orange */
}

/* Paragraf */
/* Heading */
.ppdb-title {
  font-size: 32px;
  font-weight: 700;
  text-align: center;
  position: relative;
}

.ppdb-title span {
  color: #ff7b00;
}

/* Garis dekoratif di bawah judul */
.ppdb-title-underline {
  width: 60px;
  height: 4px;
  background-color: #ff7b00;
  border-radius: 2px;
}

/* Paragraf */
.ppdb-desc {
  font-family: 'Poppins', sans-serif; /* font modern dan elegan */
  font-size: clamp(16px, 2vw, 18px);
  font-weight: 500; /* lebih tegas */
  line-height: 2.6; /* lebih longgar agar berisi */
  letter-spacing: 0.5px; /* jarak antar huruf sedikit */
  color: #444;
  margin-top: 20px;
  margin-bottom: 0;
  text-align: justify;
  text-indent: 30px;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}



/* Mobile */
@media (max-width: 576px) {
  .ppdb-title {
    font-size: 26px;
  }

  .ppdb-desc {
    font-size: 15px;
    line-height: 2;
    text-indent: 20px;
    padding: 0 15px;
  }

  .ppdb-title-underline {
    width: 40px;
    height: 3px;
  }
}
/* Animasi Fade-Up */
.ppdb-animate {
  opacity: 0;
  transform: translateY(30px);
  animation: fadeUp 1s ease-out forwards;
  animation-delay: 0.2s; /* bisa diatur sesuai urutan */
}

@keyframes fadeUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* ===================== BUBBLE TOOLTIP ===================== */
/* ===================== BUBBLE BARU MODERN ===================== */
.bubble-info {
    position: absolute;
    top: 85%;
    left: 50%;
    transform: translateX(-50%) translateY(10px) scale(.96);
    width: 230px;
    background: #fff;
    border-radius: 14px;
    padding: 15px 18px;
    border: 1px solid rgba(255, 136, 0, 0.25);
    box-shadow: 0 10px 35px rgba(255, 123, 0, .12);
    opacity: 0;
    pointer-events: none;
    transition: .35s cubic-bezier(0.22, 1, 0.36, 1);
    z-index: 10;
}

/* Segitiga kecil di atas bubble */
.bubble-info::before {
    content: "";
    position: absolute;
    top: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 14px;
    height: 14px;
    background: #fff;
    border-left: 1px solid rgba(255, 136, 0, 0.25);
    border-top: 1px solid rgba(255, 136, 0, 0.25);
    transform: translateX(-50%) rotate(45deg);
    box-shadow: -3px -3px 10px rgba(255, 123, 0, 0.08);
}

/* Muncul saat hover atau klik */
.timeline-item:hover .bubble-info,
.timeline-item.active .bubble-info {
    opacity: 1;
    transform: translateX(-50%) translateY(0) scale(1);
    pointer-events: auto;
}

/* Judul bubble */
.bubble-info h5 {
    margin: 0 0 10px;
    font-size: 1rem;
    font-weight: 600;
    color: #ff7b00;
}

/* List bubble */
.bubble-info ul {
    padding-left: 18px;
    margin: 0;
    line-height: 1.5;
    font-size: 0.86rem;
    color: #444;
}

/* Tombol bubble */
.bubble-btn {
    display: block;
    width: 100%;
    text-align: center;
    margin-top: 12px;
    padding: 8px 10px;
    background: linear-gradient(135deg, #ff7b00, #ff9e40);
    color: white;
    border-radius: 8px;
    text-decoration: none;
    font-size: 0.85rem;
    box-shadow: 0 4px 12px rgba(255,125,0,0.25);
    transition: 0.25s ease;
}
.bubble-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(255,125,0,0.32);
}
.btn-register-wrapper {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 40px; /* jarak aman dari footer */
}

.btn-register {
  display: inline-block;
  padding: 8px 18px;        /* ukuran diperkecil */
  background: linear-gradient(135deg, #ff7b39, #ff5722);
  color: #fff;
  font-size: 14px;          /* font lebih kecil */
  font-weight: 500;
  border-radius: 8px;       /* sudut lebih halus */
  text-decoration: none;
  transition: 0.25s ease;
  box-shadow: 0 3px 8px rgba(255, 87, 34, 0.25);
}

.btn-register:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 14px rgba(255, 87, 34, 0.35);
}


</style>

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
 
<!-- ===================== SECTION PPDB ===================== -->
<section id="ppdb-section" class="ppdb-animate" style="margin-top:110px; padding: 60px 0; background-color: #fff8f0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center">
        <h2 class="ppdb-title mb-3">
          Jadwal <span>PPDB</span>
        </h2>
        <div class="ppdb-title-underline mx-auto mb-4"></div>
        <p class="ppdb-desc">
          Berikut adalah rangkaian kegiatan resmi PPDB SMK Fort De Kock Bukittinggi.
          Pastikan mengikuti setiap tahapannya agar proses pendaftaran berjalan dengan lancar 
          dan tidak ada informasi yang terlewat.
        </p>
      </div>
    </div>
  </div>
</section>

        <!-- ===================== TIMELINE ===================== -->
        <div class="timeline-container">

            <!-- Step 1: Pendaftaran & Upload Berkas -->
            <div class="timeline-item fade-up">
                <div class="timeline-icon">
                    <i class="bi bi-cloud-upload-fill"></i>
                </div>
                <div class="timeline-content">
                    <div class="bubble-info">
    <h5>Berkas yang Perlu Disiapkan</h5>
    <ul>
        <li>Scan Rapor Semester 1–5</li>
        <li>Scan Kartu Keluarga</li>
        <li>Scan Akta Kelahiran</li>
        <li>Pas Foto 3×4 (Biru/Merah)</li>
    </ul>
</div>
                    <h4>Pendaftaran & Upload Berkas</h4>
                    <p>
                        {{ $ppdb->pendaftaran_mulai ?? '1 Januari 2025' }} –
                        {{ $ppdb->pendaftaran_selesai ?? '30 Maret 2025' }}
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="timeline-item fade-up" style="animation-delay:.1s">
                <div class="timeline-icon">
                    <i class="bi bi-journal-check"></i>
                </div>
                <div class="timeline-content">
                    <div class="bubble-info">
    <h5>Status Seleksi</h5>
    <p>Berkas sedang diperiksa oleh panitia. Harap menunggu.</p>
</div>

                    <h4>Seleksi Administrasi</h4>
                    <p>
                        {{ $ppdb->seleksi_mulai ?? '1 April 2025' }} –
                        {{ $ppdb->seleksi_selesai ?? '10 April 2025' }}
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="timeline-item fade-up" style="animation-delay:.2s">
                <div class="timeline-icon">
                    <i class="bi bi-megaphone-fill"></i>
                </div>
                <div class="timeline-content">
                    <div class="bubble-info">
    <h5>Pengumuman Sudah Siap</h5>
    <a href="/hasil-ppdb" class="btn btn_1">Lihat Hasil</a>
</div>

                    <h4>Pengumuman Kelulusan</h4>
                    <p>{{ $ppdb->pengumuman ?? '15 April 2025' }}</p>
                </div>
            </div>

        </div>

    </div>
    <!-- BUTTON PENDAFTARAN -->
<div class="btn-register-wrapper">
  <a href="/daftar" class="btn btn_1">
    Daftar Sekarang
  </a>
</div>

</section>

  <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/logosmk.png" alt=""> </a>
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
    <script>
document.querySelectorAll('.timeline-item').forEach(item => {
    item.addEventListener('click', (e) => {
        e.stopPropagation();

        // tutup bubble lain
        document.querySelectorAll('.timeline-item').forEach(i => {
            if (i !== item) i.classList.remove('active');
        });

        // toggle bubble
        item.classList.toggle('active');
    });
});

// klik di luar = bubble hilang
document.addEventListener('click', () => {
    document.querySelectorAll('.timeline-item').forEach(i => i.classList.remove('active'));
});
</script>

</body>

</html>