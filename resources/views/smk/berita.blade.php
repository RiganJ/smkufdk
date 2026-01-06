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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


</head>
    <style>
/* ========== GLOBAL ========== */
body {
    background-color: #fff3e0 !important;
    color: #002c60;
    font-family: "Poppins", sans-serif;
}

/* ======== HERO SECTION ======== */
.news-hero {
    padding: 120px 0 50px !important; /* sedikit lebih turun */
    text-align: center;
    background: linear-gradient(to bottom, #fff3e0, #ffe9cc);
}

.news-hero h2 {
    font-size: 44px;
    font-weight: 800;
    color: orange !important;
    letter-spacing: 0.5px;
}

.news-hero p {
    font-size: 18px;
    font-weight: 500;
    color: #0057a3 !important;   /* Warna INFORMASI TERBARU diganti biru */
}

/* ======== SEARCH BAR ======== */
.search-bar .input-group {
    height: 54px !important; /* tinggi seragam */
}

.search-bar input {
    height: 54px !important;
    padding: 12px 18px;
    border-radius: 14px 0 0 14px !important;
    border: 2px solid #ffa726;
    background-color: #fff;
    color: #002c60;
    font-size: 16px;
}

.search-bar input::placeholder {
    color: #466a8e;
}

.search-bar button {
    height: 54px !important;
    padding: 0 32px;
    border-radius: 0 14px 14px 0 !important;
    background: orange;
    color: #002c60;
    font-weight: 700;
    font-size: 16px;
    border: 2px solid #ffa726;
    border-left: 0;
    transition: .25s ease;
}

.search-bar button:hover {
    background: #ff9100;
    color: white;
}

/* ======== KARTU BERITA ======== */
.news-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    border: 2px solid rgba(255, 165, 0, 0.3);
    transition: .35s ease;
}

.news-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 14px 40px rgba(255, 165, 0, 0.45);
}

.news-thumb img {
    width: 100%;
    height: 210px;
    object-fit: cover;
}

/* ======== TEKS BERITA ======== */
.news-body {
    padding: 20px 22px;
}

.news-body h5 {
    color: orange !important;
    font-size: 21px;
    font-weight: 700;
    margin-bottom: 12px;
}

.news-meta {
    color: #335c80 !important;
    font-size: 14px;
    margin-bottom: 8px;
}

.news-desc {
    color: #002c60 !important;
    font-size: 15px;
    line-height: 1.6;
}

/* ======== GRID BERITA ======== */
.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 32px;
    margin-top: 40px;
}



/* ======== RESPONSIVE ======== */
@media(max-width: 768px) {
    .news-hero h2 {
        font-size: 34px;
    }
    .news-hero p {
        font-size: 16px;
    }
    .search-bar .input-group,
    .search-bar input,
    .search-bar button {
        height: 50px !important;
    }
}
/* ========== MODAL MODERN PREMIUM ========== */

.modern-modal .modal-content {
    animation: slideUp .45s ease-out;
    background: #ffffff;
}

/* Gradient Header */
.bg-gradient-orange {
    background: linear-gradient(90deg, #ff9f1c, #ffb84d);
}

/* Rounded image with hover zoom */
.news-image-wrapper {
    width: 100%;
    max-height: 380px;
    overflow: hidden;
}

.modal-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .4s ease;
}

.modal-img:hover {
    transform: scale(1.04);
}

/* Body text styling */
.news-full-content {
    font-size: 18px;
    line-height: 1.8;
    color: #002c60;
}

/* Animation */
@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px) scale(.97);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

/* Glass background for backdrop */
.modal-backdrop.show {
    backdrop-filter: blur(6px);
}

/* Buttons softer design */
.btn {
    transition: .25s ease;
}

.btn:hover {
    transform: scale(1.05);
}
/* ================= RESPONSIVE TAMBAHAN (AMAN) ================= */

/* Tablet */
@media (max-width: 992px) {
    .news-grid {
        gap: 24px;
    }

    .news-body {
        padding: 18px 20px;
    }

    .news-full-content {
        font-size: 17px;
        line-height: 1.75;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .news-hero {
        padding: 100px 15px 40px !important;
    }

    .news-grid {
        grid-template-columns: 1fr;
        gap: 22px;
    }

    .news-card:hover {
        transform: none; /* matikan hover meloncat di touch device */
    }

    .news-thumb img {
        height: 200px;
    }

    .news-body h5 {
        font-size: 18px;
    }

    .news-desc {
        font-size: 14px;
    }

    .news-full-content {
        font-size: 16px;
        line-height: 1.7;
    }
}

/* Extra small (HP kecil) */
@media (max-width: 576px) {
    .news-hero h2 {
        font-size: 28px;
    }

    .news-hero p {
        font-size: 15px;
    }

    .search-bar input,
    .search-bar button {
        font-size: 14px;
    }

    .news-thumb img {
        height: 180px;
    }

    .news-body {
        padding: 16px 18px;
    }

    .modal-img:hover {
        transform: none; /* aman untuk touch */
    }
}
.news-thumb-wrapper {
    height: 180px;
    overflow: hidden;
    border-radius: 16px 16px 0 0;
}

.news-thumb {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
body.modal-open .main_menu {
    opacity: 0;
    visibility: hidden;
    transition: .2s ease;
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

<section class="news-hero fade-up">
    <div class="container">

        <h2>Berita & Informasi Terbaru</h2>
        <p class="text-muted">Update kegiatan, event, dan pengumuman resmi sekolah</p>

        <!-- SEARCH -->
        <div class="row justify-content-center mt-4">
            <div class="col-lg-6 col-md-8">
                <form action="{{ route('berita.index') }}" method="GET" class="search-bar">
                    <div class="input-group">
                        <input type="text" name="search"
                            class="form-control"
                            placeholder="Cari berita..."
                            value="{{ request('search') }}">
                        <button class="btn btn-dark">Cari</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<section class="news-list-area py-4 fade-up">
    <div class="container">

<div class="news-grid">

    @forelse($berita as $item)
    <a href="#"
       class="text-decoration-none openNewsModal"
       data-title="{{ $item->judul }}"
       data-img="{{ asset($item->thumbnail) }}"
       data-date="{{ $item->created_at->translatedFormat('d F Y') }}"
       data-content="{{ e($item->isi) }}"
       data-slug="{{ $item->slug }}">

        <div class="news-card">

            <div class="news-thumb">
                <img src="{{ asset($item->thumbnail) }}"
                     alt="{{ $item->judul }}"
                     loading="lazy">
            </div>

                        <div class="news-body">
                            <div class="news-meta">
                                <i class="bi bi-calendar"></i>
                                {{ $item->created_at->translatedFormat('d F Y') }}
                                &nbsp;•&nbsp;
                                {{ $item->kategori ?? 'Umum' }}
                            </div>

                            <h5>{{ Str::limit($item->judul, 70) }}</h5>
                            <p class="news-desc">
                                {{ Str::limit(strip_tags($item->isi), 120) }}
                            </p>
                        </div>

                    </div>

                </a>

            @empty

                <div class="col-12 text-center py-5">
                    <h4 class="text-muted">Belum ada berita tersedia</h4>
                </div>

            @endforelse

        </div>

        <!-- PAGINATION -->
        <div class="mt-4 d-flex justify-content-center">
{{ $berita->appends(['search' => request('search')])->links('pagination::bootstrap-5') }}
        </div>

    </div>
</section>
<!-- MODAL -->
<div class="modal fade" id="newsModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4">

      <div class="modal-header bg-gradient-orange text-white">
        <h4 id="newsTitle" class="fw-bold"></h4>
      </div>

      <div class="news-image-wrapper">
        <img id="newsImage" class="modal-img">
      </div>

      <div class="modal-body">
        <p class="text-muted">
            <i class="fa-solid fa-calendar-days me-2"></i>
            <span id="newsDate"></span>
        </p>
        <hr>
        <div id="newsContent"></div>
      </div>

      <div class="modal-footer justify-content-between">
        <a id="readMoreBtn" class="btn btn-outline-primary rounded-pill">
            <i class="fa-solid fa-up-right-from-square"></i> Baca Selengkapnya
        </a>
        <button class="btn btn-danger rounded-pill" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i> Tutup
        </button>
      </div>

    </div>
  </div>
</div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<!-- BOOTSTRAP 5 JS (WAJIB) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {

    const modal = new bootstrap.Modal(document.getElementById('newsModal'));
    const readMoreBtn = document.getElementById("readMoreBtn");

    document.querySelectorAll('.openNewsModal').forEach(el => {
        el.addEventListener('click', e => {
            e.preventDefault();

            document.getElementById('newsTitle').innerText = el.dataset.title;
            document.getElementById('newsImage').src = el.dataset.img;
            document.getElementById('newsDate').innerText = el.dataset.date;
            document.getElementById('newsContent').innerHTML = el.dataset.content;
            readMoreBtn.href = "/berita/" + el.dataset.slug;

            modal.show();
        });
    });

});
</script>

    </body>
</html>
