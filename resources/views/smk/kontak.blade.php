@extends('layouts.main')

@section('title','Kontak Kami')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
:root{
    --orange:#ff6f00;
    --orange-soft:#fff4ec;
    --orange-dark:#ff8a1f;
    --blue:#002c60;
    --text:#0f172a;
    --muted:#64748b;
}

/* ================= HERO ================= */
.hero-kontak{
    position:relative;
    padding:160px 0 120px;
    background:
        linear-gradient(135deg,rgba(255,111,0,.92),rgba(255,145,77,.92)),
        url('/img/kontak/hero.jpg') center/cover no-repeat;
    color:#fff;
    overflow:hidden;
}
.hero-overlay{
    position:absolute;
    inset:0;
    background:radial-gradient(circle at top,rgba(255,255,255,.3),transparent 65%);
}
.hero-content{
    position:relative;
    max-width:760px;
}
.hero-kontak h1{
    font-size:56px;
    font-weight:900;
    line-height:1.2;
}
.hero-kontak p{
    margin-top:18px;
    font-size:18px;
    line-height:1.9;
    color:#fff;
}
.hero-actions{
    margin-top:36px;
    display:flex;
    gap:18px;
    flex-wrap:wrap;
}

/* BUTTON */
.btn-primary{
    display:inline-flex;
    align-items:center;
    gap:10px;
    background:var(--blue);
    color:#fff;
    padding:14px 36px;
    border-radius:999px;
    font-weight:600;
    transition:.3s;
}
.btn-primary:hover{
    background:#001f45;
    transform:translateY(-2px);
}
.btn-outline{
    display:inline-flex;
    align-items:center;
    gap:10px;
    border:2px solid #fff;
    color:#fff;
    padding:14px 34px;
    border-radius:999px;
    font-weight:600;
    transition:.3s;
}
.btn-outline:hover{
    background:#fff;
    color:var(--orange);
}

/* ================= KONTAK ================= */
.kontak-section{
    padding:120px 0;
    background:var(--orange-soft);
}
.kontak-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
}

/* INFO */
.kontak-info{
    background:linear-gradient(135deg,var(--orange),var(--orange-dark));
    color:#fff;
    padding:50px;
    border-radius:32px;
}
.kontak-info h2{
    font-size:34px;
    font-weight:800;
    margin-bottom:14px;
}
.kontak-desc{
    opacity:.9;
    margin-bottom:36px;
}
.info-item{
    display:flex;
    gap:18px;
    margin-bottom:26px;
}
.info-item i{
    font-size:20px;
    background:rgba(255,255,255,.25);
    padding:14px;
    border-radius:14px;
}
.info-item strong{
    display:block;
    font-weight:700;
}
.info-item span{
    opacity:.9;
}

/* FORM */
.kontak-form{
    background:#fff;
    padding:50px;
    border-radius:32px;
    box-shadow:0 30px 70px rgba(255,111,0,.25);
}
.kontak-form h2{
    font-size:30px;
    font-weight:800;
    color:var(--orange);
    margin-bottom:30px;
}
.form-group{margin-bottom:18px;}
.kontak-form input,
.kontak-form textarea{
    width:100%;
    padding:14px 18px;
    border-radius:14px;
    border:1.5px solid #e5e7eb;
    font-size:15px;
}
.kontak-form input:focus,
.kontak-form textarea:focus{
    outline:none;
    border-color:var(--orange);
    box-shadow:0 0 0 4px rgba(255,111,0,.2);
}

/* ================= MAP ================= */
.map-section{
    padding:120px 0;
    background:#fff;
}
.map-wrapper{
    max-width:1200px;
    margin:auto;
    border-radius:36px;
    overflow:hidden;
    position:relative;
    box-shadow:0 40px 80px rgba(255,111,0,.3);
}
.map-wrapper iframe{
    width:100%;
    height:480px;
    border:0;
}
.map-info{
    position:absolute;
    bottom:32px;
    left:32px;
    background:#fff;
    padding:28px;
    border-radius:24px;
    max-width:360px;
    box-shadow:0 20px 40px rgba(0,0,0,.2);
}
.map-info h3{
    color:var(--orange);
    font-weight:800;
    margin-bottom:8px;
}
.btn-map{
    display:inline-flex;
    align-items:center;
    gap:10px;
    background:var(--orange);
    color:#fff;
    padding:12px 22px;
    border-radius:999px;
    font-weight:600;
    transition:.3s;
}
.btn-map:hover{
    background:var(--orange-dark);
}

/* RESPONSIVE */
@media(max-width:768px){
    .hero-kontak{text-align:center;padding:130px 0 90px;}
    .hero-actions{justify-content:center;}
    .kontak-grid{grid-template-columns:1fr;}
    .map-info{position:static;margin:20px;}
}
</style>

{{-- HERO --}}
<section class="hero-kontak">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1>Kontak <span>SMK Fort De Kock</span></h1>
            <p>
                Hubungi kami untuk informasi pendaftaran, jurusan,
                serta kerja sama pendidikan.
            </p>
            <div class="hero-actions">
                <a href="#form-kontak" class="btn-primary">
                    <i class="fa-solid fa-paper-plane"></i> Kirim Pesan
                </a>
                <a href="#lokasi" class="btn-outline">
                    <i class="fa-solid fa-location-dot"></i> Lihat Lokasi
                </a>
            </div>
        </div>
    </div>
</section>

{{-- KONTAK --}}
<section class="kontak-section" id="form-kontak">
    <div class="container">
        <div class="kontak-grid">

            <div class="kontak-info">
                <h2>Informasi Kontak</h2>
                <p class="kontak-desc">
                    Kami siap membantu Anda dengan cepat dan ramah.
                </p>

                <div class="info-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>
                        <strong>Alamat</strong>
                        <span>Jl. Soekarno Hatta No.11, Bukittinggi</span>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fa-solid fa-phone"></i>
                    <div>
                        <strong>Telepon</strong>
                        <span>0812-7415-1335</span>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fa-solid fa-envelope"></i>
                    <div>
                        <strong>Email</strong>
                        <span>smk.kes.fdkmandiri@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="kontak-form">
                <h2>Kirim Pesan</h2>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email Aktif" required>
                    </div>
                    <div class="form-group">
                        <textarea rows="5" placeholder="Pesan Anda"></textarea>
                    </div>
                    <button type="submit" class="btn-primary">
                        <i class="fa-solid fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

{{-- MAP --}}
<section class="map-section" id="lokasi">
    <div class="map-wrapper">
        <iframe
            src="https://www.google.com/maps?q=SMK%20Fort%20De%20Kock%20Mandiri&output=embed"
            loading="lazy">
        </iframe>
        <div class="map-info">
            <h3>SMK Fort De Kock Mandiri</h3>
            <p>Jl. Soekarno Hatta No.11, Bukittinggi</p>
            <a href="https://maps.app.goo.gl/C36LFmNgN1G1wQtZ6" target="_blank" class="btn-map">
                <i class="fa-solid fa-location-arrow"></i> Google Maps
            </a>
        </div>
    </div>
</section>

@endsection
