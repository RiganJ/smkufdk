<!DOCTYPE html>
<html lang="en">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<style>
    .kepala-section {
        background: linear-gradient(180deg, #fff8f1 0%, #ffffff 100%);
        padding: 80px 0;
    }
    .kepala-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        padding: 40px;
        transition: all 0.3s ease;
    }
    .kepala-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 35px rgba(0,0,0,0.1);
    }
    .kepala-photo {
        width: 100%;
        max-width: 320px;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        border: 5px solid #ffb56b;
        object-fit: cover;
    }
    .accent-line {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #ff7b00, #ffb84d);
        border-radius: 4px;
        margin-bottom: 20px;
    }
    .kepala-name {
        font-weight: 700;
        font-size: 1.6rem;
        color: #333;
    }
    .kepala-title {
        color: #ff7b00;
        font-weight: 600;
        font-size: 1.1rem;
    }
    .kepala-text {
        color: #555;
        line-height: 1.8;
    }
    .biodata {
        margin-top: 20px;
    }
    .biodata table {
        width: 100%;
    }
    .biodata td {
        padding: 6px 0;
        vertical-align: top;
        color: #444;
    }
    .biodata td:first-child {
        width: 200px;
        font-weight: 600;
        color: #333;
    }
</style>


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
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
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

<section class="kepala-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#ff7b00;">
                <i class="bi bi-person-fill text-warning me-2"></i> Profil Kepala Sekolah
            </h2>
            <p class="text-muted">Sambutan Kepala Sekolah SMK Fort De Kock Bukittinggi</p>
        </div>

        <div class="kepala-card row align-items-center">
            <div class="col-lg-5 text-center mb-4 mb-lg-0">
                <img src="{{ asset('img/kepsek.jpg') }}" alt="Kepala Sekolah" class="kepala-photo">
            </div>
            <div class="col-lg-7">
                <div class="accent-line"></div>
                <h3 class="kepala-name mb-1">Diny Hazita Rahma, S.Pd., M.Si</h3>
                <p class="kepala-title mb-3">Kepala Sekolah SMK Fort De Kock Bukittinggi</p>

                <div class="biodata mb-4">
                    <table>
                        <tr>
                            <td>Tempat / Tanggal Lahir</td>
                            <td>: Batusangkar / 17 Desember 1997</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: Perempuan</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>: S2</td>
                        </tr>
                        <tr>
                            <td>Bidang Keahlian</td>
                            <td>: Kimia (Biokimia)</td>
                        </tr>
                    </table>
                </div>

                <p class="kepala-text">
                    Assalamu’alaikum Warahmatullahi Wabarakatuh.<br><br>
                    Segala puji bagi Allah SWT atas limpahan rahmat dan karunia-Nya.
                    SMK Fort De Kock Bukittinggi terus berkomitmen untuk mencetak lulusan yang tidak hanya kompeten secara akademik,
                    tetapi juga berkarakter, berakhlak mulia, dan siap bersaing di dunia kerja.
                </p>

                <p class="kepala-text mb-4">
                    Melalui kerja sama yang baik antara sekolah, peserta didik, guru, serta orang tua, 
                    kami yakin dapat membangun lingkungan belajar yang inspiratif dan menyenangkan. 
                    Mari bersama-sama melangkah menuju pendidikan vokasi yang unggul dan berdaya saing tinggi.
                </p>

                <p class="fw-bold text-dark">Wassalamu’alaikum Warahmatullahi Wabarakatuh.</p>
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