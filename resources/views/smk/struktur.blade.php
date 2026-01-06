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

<style>
  /* ====== SECTION STYLE ====== */
  section.about_part {
    background: radial-gradient(circle at top left, #fff7f1, #fff2e8, #ffffff);
    position: relative;
    padding: 60px 0;
    overflow: hidden;
  }

  /* Ornamen latar lembut */
  section.about_part::before,
  section.about_part::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 140, 66, 0.08);
    z-index: 0;
    animation: floatBubble 8s ease-in-out infinite alternate;
  }

  section.about_part::before {
    width: 180px;
    height: 180px;
    top: 60px;
    left: 80px;
  }

  section.about_part::after {
    width: 250px;
    height: 250px;
    bottom: 80px;
    right: 100px;
  }

  @keyframes floatBubble {
    from { transform: translateY(0); opacity: 0.7; }
    to { transform: translateY(-20px); opacity: 1; }
  }

  section.about_part h2 {
    color: #333;
    font-weight: 700;
    position: relative;
    z-index: 1;
  }

  section.about_part p.lead {
    color: #666;
    z-index: 1;
    position: relative;
  }

  /* ====== ORGANIZATION CHART ====== */
  .org-chart {
    text-align: center;
    margin-top: 40px;
    position: relative;
    z-index: 1;
  }

  .org-node {
    display: inline-block;
    background: linear-gradient(160deg, #ffffff, #fff7f3);
    border-radius: 14px;
    padding: 14px 20px;
    box-shadow: 0 6px 14px rgba(255, 107, 53, 0.25);
    margin: 10px;
    transition: all 0.4s ease;
    border-top: 4px solid #ff8c42;
    min-width: 200px;
    animation: fadeInUp 0.6s ease both, pulseCard 3s ease-in-out infinite;
  }

  .org-node:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 10px 25px rgba(255, 107, 53, 0.35);
    background: linear-gradient(160deg, #fff3ec, #ffffff);
  }

  .org-node h5,
  .org-node h6 {
    color: #ff6b35;
    font-weight: 700;
    font-size: 15px;
    margin-bottom: 6px;
  }

  .org-node p {
    color: #555;
    font-size: 13px;
    margin-bottom: 0;
  }

  .org-line {
    width: 2px;
    height: 30px;
    background: linear-gradient(to bottom, #ff8c42, #ff6b35);
    margin: 0 auto;
    border-radius: 2px;
  }

  .org-level {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
  }

 

  /* ====== RESPONSIVE ====== */
  @media (max-width: 768px) {
    .org-node {
      padding: 12px 16px;
      margin: 8px;
      min-width: 170px;
    }
    .org-chart {
      margin-top: 25px;
    }
  }

  h2 span {
    color: #ff6b35;
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
<section class="about_part section_padding">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-12 text-center">
        <h2 class="mb-3 fw-bold">Struktur Organisasi <span>SMK FDK</span></h2>
        <p class="lead text-muted">
          Struktur organisasi SMK FDK menggambarkan pembagian tugas dan tanggung jawab setiap bagian dalam mendukung kegiatan sekolah.
        </p>
      </div>
    </div>

    <div class="org-chart text-center">
      <!-- Komite Sekolah -->
      <div class="org-node">
        <h5>KOMITE SEKOLAH</h5>
        <p>Prof. Dr. Evi Hasnita, S.Pd, Ns, M.Kes</p>
      </div>

      <div class="org-line"></div>

      <!-- Ketua Yayasan -->
      <div class="org-node">
        <h5>KETUA YAYASAN</h5>
        <p>H. Windosnofil, S.KM, MM</p>
      </div>

      <div class="org-line"></div>

      <!-- Pengawas -->
      <div class="org-level">
        <div class="org-node">
          <h6>PENGAWAS INTERNAL</h6>
          <p>Dr. Oktavianis, S.St, M.Biomed</p>
        </div>
        <div class="org-node">
          <h6>PENGAWAS EKSTERNAL</h6>
          <p>Titi Hidayani A, M.Pd</p>
        </div>
      </div>

      <div class="org-line"></div>

      <!-- Kepala Sekolah -->
      <div class="org-node">
        <h5>KEPALA SEKOLAH</h5>
        <p>Diny Hazita Rahma, S.Pd, M.Si</p>
      </div>

      <div class="org-line"></div>

      <!-- Wakil Kepala Sekolah -->
      <div class="org-level">
        <div class="org-node">
          <h6>WAKA AKADEMIK & KURIKULUM</h6>
          <p>Muhammad Farhan, S.Si</p>
        </div>
        <div class="org-node">
          <h6>WAKA SISWA</h6>
          <p>Umayda Varas, S.Farm</p>
        </div>
        <div class="org-node">
          <h6>WAKA HUMAS & SARANA</h6>
          <p>Billy Harnldo Putra, S.Si, M.Si</p>
        </div>
        <div class="org-node">
          <h6>MUTU SEKOLAH</h6>
          <p>Firman Rasydi, S.Pd, MT</p>
        </div>
      </div>

      <div class="org-line"></div>

      <!-- Kepala Jurusan -->
      <div class="org-level">
        <div class="org-node">
          <h6>KEPALA JURUSAN FARMASI</h6>
          <p>Naili Fadilir Rahma, S.Si, Farm</p>
        </div>
        <div class="org-node">
          <h6>KEPALA JURUSAN ASISTEN KEPERAWATAN & CAREGIVER</h6>
          <p>Ns. Peta Mulyana, S.Kep</p>
        </div>
      </div>

      <div class="org-line"></div>

      <!-- Staff dan Guru -->
      <div class="org-level">
        <div class="org-node">
          <h6>Bimbingan Konseling</h6>
          <p>Rahmi Sari Kasoema, S.Psi, M.Kes</p>
        </div>
        <div class="org-node">
          <h6>TU & ADM</h6>
          <p>Aldian Pratama, S.Bn</p>
        </div>
        <div class="org-node">
          <h6>DEWAN GURU DAN WALI KELAS</h6>
          <p>Seluruh Dewan Guru SMK FDK</p>
        </div>
      </div>
    </div>
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

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <!-- masonry js -->
    <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- counter up js -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>