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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

</head>
<style>
/* 🌅 Tema Orange Sunset yang Modern */
.visi-misi-section {
    background: linear-gradient(180deg, #fff5e6 0%, #ffffff 100%);
    padding: 100px 0;
    position: relative;
    overflow: hidden;
}

.visi-misi-section::before {
    content: "";
    position: absolute;
    top: -100px;
    left: -100px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(255,123,0,0.2), transparent 70%);
    z-index: 0;
}

.visi-misi-section::after {
    content: "";
    position: absolute;
    bottom: -100px;
    right: -100px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(255,184,77,0.25), transparent 70%);
    z-index: 0;
}

/* Judul */
.visi-misi-section h2 {
    font-weight: 800;
    color: #ff7b00;
    position: relative;
    z-index: 2;
}

.visi-misi-section p.subtitle {
    color: #555;
    font-size: 1.1rem;
    margin-bottom: 50px;
}

/* Card Style */
.card-visi-misi {
    background: rgba(255,255,255,0.7);
    backdrop-filter: blur(10px);
    border-radius: 25px;
    border: 1px solid rgba(255,123,0,0.1);
    transition: all 0.4s ease;
    padding: 40px 30px;
    position: relative;
    overflow: hidden;
}

.card-visi-misi:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 40px rgba(255,123,0,0.25);
}

/* Icon */
.icon-circle {
    width: 90px;
    height: 90px;
    background: linear-gradient(135deg, #ff7b00, #ffb84d);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: #fff;
    font-size: 2.5rem;
    margin: 0 auto 20px auto;
    position: relative;
    box-shadow: 0 5px 20px rgba(255,123,0,0.4);
}

.card-visi-misi h4 {
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
}

.card-visi-misi p,
.card-visi-misi li {
    color: #555;
    line-height: 1.7;
    font-size: 0.95rem;
}

.card-visi-misi ul {
    padding-left: 20px;
}

.card-visi-misi li {
    margin-bottom: 10px;
}

.card-visi-misi li i {
    color: #ff7b00;
    margin-right: 8px;
}

/* Accent Line */
.accent-line {
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, #ff7b00, #ffb84d);
    border-radius: 3px;
    margin: 25px auto 0;
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
<section class="visi-misi-section">
    <div class="container text-center">
        <h2>Visi & Misi <span class="text-dark">SMK FORT DE KOCK</span></h2>
        <p class="subtitle">Menjadi sekolah kejuruan yang melahirkan generasi cerdas, profesional, dan siap bersaing di dunia global.</p>

        <div class="row justify-content-center g-4">
            <!-- Visi -->
            <div class="col-md-5">
                <div class="card-visi-misi">
                    <div class="icon-circle">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <h4>Visi</h4>
                    <p>
                        Menjadi <strong>SMK FORT DE KOCK</strong> yang menghasilkan lulusan cerdas, terampil, profesional, 
                        dan mandiri serta berdaya saing dalam dunia kerja secara global.
                    </p>
                    <div class="accent-line"></div>
                </div>
            </div>

            <!-- Misi -->
            <div class="col-md-5">
                <div class="card-visi-misi">
                    <div class="icon-circle">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h4>Misi</h4>
                    <ul class="text-start">
                        <li><i class="bi bi-check-circle-fill"></i> Menanamkan keimanan dan ketakwaan kepada Tuhan Yang Maha Esa.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Menyelenggarakan program pendidikan dan pengajaran yang berkualitas dan kondusif.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Meningkatkan sarana dan prasarana pembelajaran.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Mengembangkan bidang ilmu pengetahuan dan teknologi.</li>
                    </ul>
                    <div class="accent-line"></div>
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
</body>
</html>
