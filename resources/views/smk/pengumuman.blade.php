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
    /* TITLE */
.announcement-title {
    font-size: 42px;
    font-weight: 800;
    color: #001440; /* dongker */
}

.announcement-title span {
    color: #ff7b00; /* orange sunset */
}

.announcement-sub {
    font-size: 16px;
    color: #555;
}

/* FORM BOX */
.announcement-box {
    background: #ffeedb; /* orange sunset soft */
    padding: 30px;
    border-radius: 15px;
    max-width: 550px;
    margin: 0 auto;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.announcement-box .form-control {
    height: 48px;
    border-radius: 10px;
}

/* BUTTON */
.btn-check-result {
    width: 100%;
    background: #ff7b00;
    color: white;
    font-weight: 600;
    padding: 12px;
    border-radius: 12px;
    border: none;
    transition: 0.2s;
}

.btn-check-result:hover {
    background: #e56d00;
}

/* HASIL */
.result-box {
    text-align: center;
    padding: 25px;
    border-radius: 15px;
    margin-top: 25px;
}

.result-pass {
    background: #d4ffdd;
    border-left: 8px solid #1fa33c;
}

.result-fail {
    background: #ffe0e0;
    border-left: 8px solid #d60000;
}

.result-box h3 {
    font-weight: 800;
    margin-bottom: 10px;
}

.result-box p {
    margin: 0;
}
.ppdb-wrapper {
    margin-top: 170px !important;
}
/*CSS BARU*/

/* ===== GLOBAL ===== */
body {
    font-family: 'Poppins', sans-serif;
}

/* ===== TITLE ===== */
.ppdb-title {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 25px;
    animation: fadeDown 0.7s ease;
    color: #ff7e29;
    text-transform: uppercase;
}

/* ===== TABLE STYLE ===== */
.table-wrapper {
    animation: fadeUp 0.8s ease;
}

.table-card {
    background: #ffffff;
    border-radius: 18px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.09);
}

/* ===== TABLE ===== */
.table-custom thead {
    background: linear-gradient(45deg, #ff7b00, #ff9f4d);
    color: white;
    border-radius: 12px 12px 0 0;
}

.table-custom thead th {
    padding: 14px;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: .3px;
}

.table-custom tbody td {
    font-size: 14px;
    padding: 13px;
    border-bottom: 1px solid #ececec;
}

.table-custom tbody tr {
    transition: 0.28s ease;
}

.table-custom tbody tr:hover {
    background: #fff8ef;
    transform: scale(1.008);
    cursor: pointer;
}

/* ===== BADGE STATUS ===== */
.badge-status {
    padding: 7px 18px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 13px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
}

.badge-diterima {
    background: #1fa33c;
    color: white;
}

.badge-ditolak {
    background: #d60000;
    color: white;
}

.badge-pending {
    background: #6c757d;
    color: white;
}

/* ===== ANIMASI ===== */
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}

@keyframes fadeDown {
    from { opacity: 0; transform: translateY(-20px); }
    to   { opacity: 1; transform: translateY(0); }
}
/* TITLE STYLE */
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

.ppdb-wrapper {
    margin-top: 150px !important;
    margin-bottom: 60px;
}
.filter-mini {
    height: 36px;
    font-size: 13px;
    padding: 6px 10px;
    border-radius: 8px;
    border: 1.7px solid #ff7b00;
}

.filter-mini:focus {
    border-color: #002c60;
    box-shadow: 0 0 5px rgba(255, 123, 0, 0.35);
}
.filter-mini {
    appearance: auto !important;
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
<div class="container-fluid mt-4 ppdb-wrapper">

    <!-- JUDUL -->
    <div class="section_tittle text-center mb-4">
        <h2>Hasil Seleksi <span>PPDB</span></h2>
        <p class="sub-title">Pengumuman resmi kelulusan penerimaan peserta didik baru</p>
    </div>
    <!-- FILTER MINI (KANAN) -->
<div class="d-flex justify-content-end mb-2">
    <div class="d-flex gap-10" style="max-width: 360px;">
        
        <!-- Search by nama -->
        <input type="text" id="searchName" class="form-control filter-mini me-2"
               placeholder="Cari nama...">

        <!-- Search by jurusan -->
        <input type="text" id="searchJurusan" class="form-control filter-mini me-2"
               placeholder="Jurusan...">


            </div>
</div>
    <!-- TABLE -->
    <div class="card table-card border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-hover align-middle table-custom">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Kompetensi Keahlian</th>
                            <th>Jenis Kelamin</th>
                            <th>Status Seleksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($pendaftar as $i => $row)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td class="fw-semibold">{{ $row->nama_lengkap }}</td>
                            <td>{{ $row->kompetensi_keahlian }}</td>
                            <td>{{ $row->jenis_kelamin }}</td>

                            <td>
                                @if ($row->status == 'diterima')
                                    <span class="badge-status badge-diterima">✔ DITERIMA</span>
                                @elseif ($row->status == 'ditolak')
                                    <span class="badge-status badge-ditolak">✖ DITOLAK</span>
                                @else
                                    <span class="badge-status badge-pending">⌛ PROSES</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
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
document.addEventListener("DOMContentLoaded", function () {
    const searchName = document.getElementById("searchName");
    const searchJurusan = document.getElementById("searchJurusan");
    const filterStatus = document.getElementById("filterStatus");
    const rows = document.querySelectorAll("#dataTable tbody tr");

    function filterTable() {
        const nameVal = searchName.value.toLowerCase();
        const jurusanVal = searchJurusan.value.toLowerCase();
        const statusVal = filterStatus.value;

        rows.forEach(row => {
            const nama = row.children[1].innerText.toLowerCase();
            const jurusan = row.children[2].innerText.toLowerCase();
            const status = row.children[4].innerText.toLowerCase();

            const matchName = nama.includes(nameVal);
            const matchJurusan = jurusan.includes(jurusanVal);
            const matchStatus = statusVal === "" || status.includes(statusVal);

            row.style.display = (matchName && matchJurusan && matchStatus) ? "" : "none";
        });
    }

    searchName.addEventListener("keyup", filterTable);
    searchJurusan.addEventListener("keyup", filterTable);
    filterStatus.addEventListener("change", filterTable);
});
</script>

</body>
</html>