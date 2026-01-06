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
    .info-item {
        transition: all 0.3s ease;
    }
    .info-item:hover {
        transform: translateY(-3px);
        background-color: #fff3e0 !important;
        box-shadow: 0 3px 8px rgba(255, 153, 0, 0.2);
    }
    /* ================= RESPONSIVE INFO ITEM ================= */
@media (max-width: 992px) {
    .info-item {
        transition: all 0.25s ease;
    }
}

@media (max-width: 768px) {
    .info-item {
        padding: 12px 14px; /* beri ruang sentuh di tablet */
    }

    .info-item:hover {
        transform: none; /* hindari loncat di layar sentuh */
        box-shadow: 0 2px 6px rgba(255, 153, 0, 0.15);
    }
}

@media (max-width: 576px) {
    .info-item {
        padding: 14px 16px; /* lebih nyaman untuk jari */
        border-radius: 10px;
    }

    .info-item:hover {
        background-color: #fff3e0 !important;
    }
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
                        </div>                    </li>
 <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/login') }}">Login</a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
    </header>

{{-- ===================== TENTANG SEKOLAH (DESAIN MODERN ELEGAN) ===================== --}}

<section class="about_part position-relative py-5" style="background: linear-gradient(180deg, #fff3e0 0%, #ffffff 100%); overflow: hidden;">
    <!-- Wave Top -->
    <svg class="position-absolute top-0 start-0 w-100" style="transform: translateY(-50%);" viewBox="0 0 1440 320">
        <path fill="#ffcc80" fill-opacity="0.4" 
              d="M0,224L60,202.7C120,181,240,139,360,133.3C480,128,600,160,720,170.7C840,181,960,171,1080,165.3C1200,160,1320,160,1380,160L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
    </svg>

    <div class="container position-relative" style="z-index: 10;">
        <div class="row align-items-center g-5">
            <!-- GAMBAR SEKOLAH -->
            <div class="col-lg-6 col-md-12 text-center">
                <div class="p-3 rounded-4 shadow-lg bg-white border border-2 border-warning-subtle">
                    <img src="{{ asset('img/tentang.jpg') }}" alt="Tentang SMK Fort De Kock" 
                         class="img-fluid rounded-4" style="max-height: 400px; object-fit: cover;">
                </div>
            </div>

            <!-- TEKS PROFIL -->
            <div class="col-lg-6 col-md-12">
                <div class="about_text">
                    <br>
                    <h2 class="fw-bold mb-3" style="color: #ff6f00;">
                        Tentang <span style="color:#222;">SMK Fort De Kock</span>
                    </h2>
                    <p class="text-muted mb-3" style="text-align: justify;">
                        <strong>SMK Fort De Kock</strong> merupakan Sekolah Menengah Kejuruan yang berada di bawah naungan 
                        <strong>Yayasan Fort De Kock Bukittinggi</strong>. Berdiri sejak tahun <strong>2018</strong> dengan 
                        Nomor Izin Operasional <strong>090/5223/P.SMK-2018</strong>.
                    </p>
                    <p class="text-muted" style="text-align: justify;">
                        Nama <em>“Fort De Kock”</em> diambil dari nama benteng peninggalan Belanda di Kota Bukittinggi — 
                        melambangkan semangat, keteguhan, dan ketangguhan generasi muda. 
                        SMK Fort De Kock berkomitmen mencetak siswa yang kompeten, berkarakter, dan siap kerja 
                        di dunia industri modern.
                    </p>

                   <div class="bg-white rounded-4 shadow-sm p-4 mt-4 border-start border-4 border-warning">
    <h5 class="fw-bold mb-3 text-dark" style="font-size: 1.3rem;">Informasi Yayasan</h5>
    <ul class="list-unstyled mb-0">
        <li class="info-item d-flex align-items-start p-3 mb-2 rounded-3" style="background-color: #fff8f0;">
            <i class="bi bi-hash text-warning fs-5 me-3"></i>
            <div><strong>NPSN:</strong> 70043139</div>
        </li>

        <li class="info-item d-flex align-items-start p-3 mb-2 rounded-3" style="background-color: #fff8f0;">
            <i class="bi bi-building text-warning fs-5 me-3"></i>
            <div><strong>Status:</strong> Swasta</div>
        </li>

        <li class="info-item d-flex align-items-start p-3 mb-2 rounded-3" style="background-color: #fff8f0;">
            <i class="bi bi-mortarboard text-warning fs-5 me-3"></i>
            <div><strong>Bentuk Pendidikan:</strong> SMK</div>
        </li>

        <li class="info-item d-flex align-items-start p-3 mb-2 rounded-3" style="background-color: #fff8f0;">
            <i class="bi bi-person-badge text-warning fs-5 me-3"></i>
            <div><strong>Status Kepemilikan:</strong> Yayasan</div>
        </li>

    <ul class="list-unstyled mb-0">
        <li class="info-item d-flex align-items-start p-3 mb-2 rounded-3" style="background-color: #fff8f0;">
                <i class="bi bi-building text-warning fs-5"></i>
            <div><strong>Nama Yayasan:</strong> Yayasan Fort De Kock Bukittinggi</div>
        </li>

        <li class="info-item d-flex align-items-start p-3 mb-2 rounded-3" style="background-color: #fff8f0;">
                <i class="bi bi-geo-alt text-warning fs-5"></i>
            <div><strong>Alamat:</strong> Jln. Soekarno Hatta No. 11, Manggis Ganting, Bukittinggi</div>
        </li>

        <li class="info-item d-flex align-items-start p-3 mb-2 rounded-3" style="background-color: #fff8f0;">
                <i class="bi bi-map text-warning fs-5"></i>
            <div><strong>Kecamatan:</strong> Mandiangin Koto Selayan</div>
        </li>

        <li class="info-item d-flex align-items-start p-3 mb-2 rounded-3" style="background-color: #fff8f0;">
                <i class="bi bi-geo text-warning fs-5"></i>
            <div><strong>Provinsi:</strong> Sumatera Barat (26137)</div>
        </li>

        <li class="info-item d-flex align-items-start p-3 mb-2 rounded-3" style="background-color: #fff8f0;">
                <i class="bi bi-phone text-warning fs-5"></i>
            <div><strong>Kontak:</strong> 0812-7415-1335</div>
        </li>

        <li class="info-item d-flex align-items-start p-3 mb-2 rounded-3" style="background-color: #fff8f0;">
                <i class="bi bi-envelope text-warning fs-5"></i>
            <div><strong>Email:</strong> smk.kes.fdkmandiri@gmail.com</div>
        </li>
    
    </ul>
</div>

                    <a href="{{ url('/program') }}" 
                       class="btn mt-4 px-4 py-2 text-white rounded-pill shadow-sm"
                       style="background: linear-gradient(90deg, #ff8a00, #ff6600); border: none;">
                       Lihat Program Keahlian
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave Bottom -->
    <svg class="position-absolute bottom-0 start-0 w-100" style="transform: translateY(50%);" viewBox="0 0 1440 320">
        <path fill="#ffcc80" fill-opacity="0.4" 
              d="M0,224L60,202.7C120,181,240,139,360,133.3C480,128,600,160,720,170.7C840,181,960,171,1080,165.3C1200,160,1320,160,1380,160L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
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
