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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<style>
/* ===========================
   GLOBAL BACKGROUND
=========================== */
body {
    background: linear-gradient(180deg, #faf5f0ff 0%, #ffe6cc 30%, #ffffff 100%);
    min-height: 100vh;
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

/* ===========================
   SECTION
=========================== */
.ppdb-section {
    margin-top: 110px;
    padding-bottom: 100px;
}

/* ===========================
   FLOATING TITLE
=========================== */
.ppdb-title { font-size: 40px; font-weight: 700; letter-spacing: 1px; } 
.ppdb-title span { color: #ff7b00; } 
.ppdb-sub { font-size: 17px; color: #666; }

/* floating underline */
.ppdb-title::after {
    content: "";
    width: 85px;
    height: 5px;
    background: #ff7b00;
    display: block;
    margin: 12px auto 0;
    border-radius: 10px;
}

/* ===========================
    CARD (glassmorphism)
=========================== */
.ppdb-card {
    background: rgba(255, 255, 255, 0.65);
    backdrop-filter: blur(12px);
    padding: 45px;
    border-radius: 28px;
    max-width: 900px;
    margin: auto;
    border: 2px solid rgba(255, 255, 255, .6);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    transform: translateY(20px);
    animation: pop .6s ease forwards;
    opacity: 0;
}

@keyframes pop {
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* ===========================
    SECTION DIVIDER
=========================== */
.form-section-title {
    font-size: 20px;
    font-weight: 700;
    margin: 35px 0 18px;
    color: #222;
    padding-left: 10px;
    border-left: 4px solid #ff7b00;
}

/* ===========================
    INPUT FIELD 
=========================== */
.ppdb-input,
textarea.ppdb-input {
    border-radius: 14px !important;
    padding: 13px 16px !important;
    border: 1.7px solid #ddd;
    background: #fff;
    transition: .25s;
    box-shadow: inset 0 2px 6px rgba(0,0,0,0.05);
}

.ppdb-input:focus {
    border-color: #ff7b00;
    box-shadow: 0 0 0 4px rgba(255, 129, 0, 0.25);
}

/* ===========================
    CUSTOM DROPDOWN
=========================== */
.custom-dropdown {
    background: #fff;
    border-radius: 14px;
    padding: 14px 18px;
    border: 1.7px solid #ddd;
    position: relative;
    cursor: pointer;
    transition: .3s;
    box-shadow: inset 0 2px 6px rgba(0,0,0,0.05);
}

.custom-dropdown:hover {
    border-color: #ff7b00;
}

/* dropdown open style */
.custom-dropdown.active {
    border-color: #ff7b00;
    box-shadow: 0 0 0 4px rgba(255, 129, 0, 0.22);
}

/* icon */
.custom-dropdown::after {
    content: "▾";
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 15px;
    color: #ff7b00;
}

/* options */
.dropdown-options {
    position: absolute;
    width: 100%;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    border: 1px solid #eee;
    margin-top: 8px;
    display: none;
    z-index: 30;
}

.custom-dropdown.active .dropdown-options {
    display: block;
}

.dropdown-options li {
    padding: 12px 16px;
    font-size: 15px;
}

.dropdown-options li:hover {
    background: #fff0df;
    color: #ff7b00;
    cursor: pointer;
}

/* ===========================
    UPLOAD BOX (NEW STYLE)
=========================== */
.upload-box {
    padding: 30px;
    background: #fafafa;
    border: 1.8px dashed #ccc;
    border-radius: 14px;
    text-align: center;
    transition: .3s;
}

.upload-box:hover {
    border-color: #ff7b00;
    box-shadow: 0 6px 18px rgba(255, 125, 0, 0.18);
}

.upload-box::before {
    content: "⬆";
    display: block;
    font-size: 38px;
    margin-bottom: 10px;
    color: #ff7b00;
}

/* ===========================
     BUTTON
=========================== */
.ppdb-btn-submit {
    background: linear-gradient(135deg, #ff7b00, #ff9e40);
    padding: 15px 45px;
    border-radius: 14px;
    color: white;
    font-size: 19px;
    border: none;
    font-weight: 600;
    transition: .3s;
    box-shadow: 0 6px 20px rgba(255, 129, 0, 0.35);
}

.ppdb-btn-submit:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 24px rgba(255, 137, 0, 0.55);
}
@media (max-width: 768px) {

    /* SECTION */
    .ppdb-section {
        margin-top: 90px;
        padding-bottom: 70px;
    }

    /* TITLE */
    .ppdb-title {
        font-size: 32px;
    }

    .ppdb-sub {
        font-size: 15px;
        padding: 0 12px;
    }

    /* CARD */
    .ppdb-card {
        padding: 30px 22px;
        border-radius: 24px;
        margin: 0 14px;
    }

    /* FORM SECTION TITLE */
    .form-section-title {
        font-size: 18px;
        margin: 28px 0 14px;
    }

    /* INPUT & DROPDOWN */
    .ppdb-input,
    textarea.ppdb-input,
    .custom-dropdown {
        font-size: 14px;
        padding: 12px 14px !important;
    }

    /* UPLOAD */
    .upload-box {
        padding: 22px;
    }

    /* BUTTON */
    .ppdb-btn-submit {
        width: 100%;
        font-size: 17px;
        padding: 14px;
    }
}
@media (max-width: 480px) {

    .ppdb-title {
        font-size: 28px;
    }

    .ppdb-title::after {
        width: 65px;
        height: 4px;
    }

    .ppdb-card {
        padding: 24px 18px;
    }

    .form-section-title {
        font-size: 16px;
    }

    .ppdb-btn-submit {
        font-size: 16px;
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

<section class="ppdb-section">
    <div class="container">

        <!-- TITLE -->
<div class="text-center mb-5 fade-up">
     <h2 class="ppdb-title">Formulir <span>Pendaftaran PPDB</span></h2> 
<p class="ppdb-sub">Isi data berikut dengan lengkap dan benar.</p> </div>

        <!-- SUCCESS MESSAGE -->
        @if (session('success'))
            <div class="alert alert-success text-center fade-up">
                {{ session('success') }}
            </div>
        @endif

<!-- FORM CARD -->
<div class="ppdb-card fade-up">
    <form action="{{ route('smk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- GROUP -->
        <div class="form-section-title">Data Pribadi</div>

        <div class="mb-3">
            <label class="form-label">Nama Lengkap *</label>
            <input type="text" name="nama_lengkap" class="form-control ppdb-input" required>
        </div>

        <div class="mb-3">
            <label class="form-label">No Kontak (HP) Calon Siswa *</label>
            <input type="text" name="no_kontak" class="form-control ppdb-input" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat Peserta Didik *</label>
            <textarea name="alamat" rows="3" class="form-control ppdb-input" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin *</label>
            <div class="radio-group">
                <label><input type="radio" name="jenis_kelamin" value="L" required> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="P" required> Perempuan</label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Tempat Lahir *</label>
                <input type="text" name="tempat_lahir" class="form-control ppdb-input" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Lahir *</label>
                <input type="date" name="tanggal_lahir" class="form-control ppdb-input" required>
            </div>
        </div>

        <div class="form-section-title">Informasi Sekolah & Orang Tua</div>

        <div class="mb-3">
            <label class="form-label">Asal Sekolah *</label>
            <input type="text" name="asal_sekolah" class="form-control ppdb-input" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Orang Tua *</label>
            <input type="text" name="nama_orang_tua" class="form-control ppdb-input" required>
        </div>

        <div class="mb-3">
            <label class="form-label">No HP Orang Tua *</label>
            <input type="text" name="no_hp_ortu" class="form-control ppdb-input" required>
        </div>

        <div class="form-section-title">Jurusan & Beasiswa</div>

        <!-- KOMPETENSI KEAHLIAN -->
        <div class="mb-3">
            <label class="form-label">Kompetensi Keahlian *</label>

            <div class="custom-dropdown" data-name="kompetensi_keahlian">
                <div class="dropdown-selected">-- pilih jurusan --</div>
                <ul class="dropdown-options">
                    <li data-value="Farmasi">Farmasi</li>
                    <li data-value="Keperawatan Caregiver">Keperawatan Caregiver</li>
                    <li data-value="Asisten Keperawatan">Asisten Keperawatan</li>
                </ul>
                <input type="hidden" name="kompetensi_keahlian" required>
            </div>
        </div>

        <!-- JENIS PRESTASI -->
        <div class="mb-3">
            <label class="form-label">Jenis Prestasi (Opsional)</label>

            <div class="custom-dropdown" data-name="jenis_prestasi">
                <div class="dropdown-selected">Tidak ada</div>
                <ul class="dropdown-options">
                    <li data-value="">Tidak ada</li>
                    <li data-value="Akademik">Prestasi Akademik</li>
                    <li data-value="Non Akademik">Prestasi Non Akademik</li>
                </ul>
                <input type="hidden" name="jenis_prestasi">
            </div>
        </div>

        <!-- UPLOAD PRESTASI -->
        <div class="mb-3" id="uploadPrestasi" style="display:none;">
            <label class="form-label">Upload Sertifikat Prestasi</label>
            <input type="file" class="form-control" name="bukti_prestasi" accept="image/*,application/pdf">
        </div>

       <!-- JENIS BEASISWA -->
<div class="mb-3">
    <label class="form-label">Jenis Beasiswa (Opsional)</label>

    <div class="custom-dropdown" data-name="jenis_beasiswa">
        <div class="dropdown-selected">Tidak ada</div>
        <ul class="dropdown-options">
            <li data-value="">Tidak ada</li>
            <li data-value="Kurang Mampu">Beasiswa Siswa Kurang Mampu</li>
            <li data-value="Yatim Piatu">Beasiswa Siswa Yatim Piatu</li>
        </ul>
        <input type="hidden" name="jenis_beasiswa">
    </div>
</div>

<!-- UPLOAD DOKUMEN BEASISWA -->
<div class="mb-3" id="uploadBeasiswa" style="display:none;">
    <label class="form-label">Upload Berkas Pendukung Beasiswa</label>
    <input type="file" class="form-control" name="berkas_pendukung_beasiswa" accept="image/*,application/pdf">
</div>


        <!-- UPLOAD RAPORT KELAS 3 -->
        <div class="mb-4">
            <label for="raport_kelas_3" class="form-label">Upload Surat Keterangan Lulus (PDF)</label>
            <input type="file" name="raport_kelas_3" class="form-control" accept=".pdf,.jpg,.png">
        </div>

        <div class="form-section-title">Dokumen Upload</div>

        <!-- PAS FOTO -->
        <div class="upload-group">
            <label class="form-label">Pas Foto Latar Merah *</label>
            <div class="upload-box">
                <input type="file" name="pas_foto" accept="image/*" required>
            </div>
        </div>

        <!-- BUKTI PEMBAYARAN -->
        <div class="upload-group">
            <label class="form-label">Upload Bukti Pembayaran *</label>

            <div class="payment-info">
                <div>Rekening Nagari (a/n SMK Fort De Kock)</div>
                <strong>7201.0220.08745-5</strong>
                <span>Nominal: <strong>Rp 150.000</strong></span>
            </div>

            <div class="upload-box">
                <input type="file" name="bukti_pembayaran" accept="image/*" required>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn_1">Kirim Pendaftaran</button>
        </div>
    </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const animatedElements = document.querySelectorAll('.fade-up');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
                entry.target.style.transition = "all .8s ease";
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    animatedElements.forEach(el => {
        el.style.opacity = "0";
        el.style.transform = "translateY(30px)";
        observer.observe(el);
    });
});
</script>
<script>
document.querySelectorAll(".custom-dropdown").forEach(drop => {

    const selected = drop.querySelector(".dropdown-selected");
    const options = drop.querySelector(".dropdown-options");
    const input = drop.querySelector("input[type=hidden]");

    drop.addEventListener("click", (e) => {
        drop.classList.toggle("active");
    });

    drop.querySelectorAll("li").forEach(li => {
        li.addEventListener("click", (e) => {
            selected.textContent = li.textContent;
            input.value = li.dataset.value;
            drop.classList.remove("active");
            e.stopPropagation(); // penting

            /* ================================
               LOGIKA TAMPILKAN FORM UPLOAD
               ================================ */

            if (drop.dataset.name === "jenis_prestasi") {
                document.getElementById("uploadPrestasi").style.display =
                    li.dataset.value !== "" ? "block" : "none";
            }

            if (drop.dataset.name === "jenis_beasiswa") {
                document.getElementById("uploadBeasiswa").style.display =
                    li.dataset.value !== "" ? "block" : "none";
            }

        });
    });
});

// close ketika klik di luar
document.addEventListener("click", e => {
    if (!e.target.closest(".custom-dropdown")) {
        document.querySelectorAll(".custom-dropdown").forEach(d => d.classList.remove("active"));
    }
});
</script>

</body>
</html>