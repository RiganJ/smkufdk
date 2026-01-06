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
  /* === SLIDER GURU === */
.guruSwiper {
    padding: 20px 10px;
}

.swiper-slide {
    display: flex;
    justify-content: center;
}

/* Biar card tidak kepanjangan */
.card-id {
    width: 100%;
    max-width: 220px;
}
/* INFO DALAM FOTO */
.card-id-info {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 12px 10px;
    background: linear-gradient(
        to top,
        rgba(0,0,0,0.75),
        rgba(0,0,0,0.15),
        transparent
    );
    text-align: center;
}

.card-id-info .nama {
    margin: 0;
    font-size: 0.95rem;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
}

.card-id-info .mapel {
    margin: 2px 0 0;
    font-size: 0.75rem;
    color: #ffd9b3;
    font-weight: 500;
}
/* ===================== GLOBAL RESET ===================== */
body {
  font-family: "Poppins", sans-serif;
  color: #333;
  background-color: #fff;
  overflow-x: hidden;
}

.banner_part {
  position: relative;
  background: linear-gradient(135deg, #fffaf5 0%, #ffe7d2 100%);
  padding: 130px 0 80px; /* disesuaikan biar gak ketimpa header */
  overflow: hidden;
}

/* === TEKS UTAMA (Identitas Sekolah) === */
/* === BANNER SLIDER RESPONSIVE FIXED === */
.banner_slider { 
  position: relative; 
  width: 88vw; /* hampir full screen tapi masih ada ruang kiri-kanan */
  margin-left:
  calc(50% - 44vw); 
  height: 480px; 
  border-radius: 20px; 
  overflow: hidden; 
  box-shadow: 0 10px 25px rgba(255, 140, 0, 0.25); }

/* Setiap slide */
.banner_slide {
  position: absolute;
  inset: 0;
  opacity: 0;
  transition: opacity 0.8s ease, transform 1.2s ease;
}

.banner_slide.active {
  opacity: 1;
  z-index: 10;
}

.banner_slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  filter: brightness(0.6);
}

/* Caption */
.banner_caption {
  position: absolute;
  inset: 0;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: flex-start;
  padding: 0 5% 8%;
  color: #fff;
  text-shadow: 0 3px 15px rgba(0, 0, 0, 0.6);
  z-index: 20;
  animation: fadeInUp 1s ease forwards;
}

.banner_caption h1 {
  font-size: clamp(1.6rem, 4vw, 2.8rem);
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 10px;
}

.banner_caption h1 span {
  color: #ffb366;
}

.banner_caption p {
  font-size: clamp(0.9rem, 1.5vw, 1.1rem);
  margin-bottom: 20px;
  color: #f8f8f8;
}

/* Tombol */
.btn_2 {
  background: linear-gradient(90deg, #ff7b00, #ffb366);
  color: #fff;
  font-weight: 600;
  padding: 10px 25px;
  border-radius: 50px;
  border: none;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(255, 123, 0, 0.3);
}

.btn_2:hover {
  box-shadow: 0 0 25px rgba(255, 165, 0, 0.7);
  transform: translateY(-2px);
}

/* Navigasi dot */
.slide_nav {
  position: absolute;
  bottom: 18px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 30;
}

.dot {
  display: inline-block;
  width: 12px;
  height: 12px;
  background: rgba(255,255,255,0.6);
  border-radius: 50%;
  margin: 0 6px;
  cursor: pointer;
  transition: 0.3s;
}

.dot.active,
.dot:hover {
  background: #ff7b00;
  box-shadow: 0 0 10px #ff7b00;
}

/* Animasi */
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

/* === RESPONSIVE FIX === */
@media (max-width: 768px) {
  .banner_slider {
    height: 60vh;
    min-height: 320px;
    border-radius: 0;
  }
  .banner_caption {
    padding: 0 8% 12%;
    text-align: left;
  }
}

@media (max-width: 576px) {
  .banner_slider {
    height: 55vh;
    min-height: 300px;
  }
  .banner_caption {
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 0 6%;
  }
  .banner_caption h1 {
    font-size: 1.5rem;
  }
  .banner_caption p {
    font-size: 0.9rem;
  }
  .btn_2 {
    padding: 9px 22px;
    font-size: 0.85rem;
  }
}
/* ===================== RESPONSIVE ONLY (NO VISUAL CHANGE) ===================== */

/* Tablet */
@media (max-width: 991px) {
  .banner_slider {
    width: 94vw;                 /* hanya menyesuaikan layar */
    margin-left: calc(50% - 47vw);
    height: 420px;               /* proporsional, TIDAK mengubah style */
  }
}

/* Mobile */
@media (max-width: 576px) {
  .banner_slider {
    width: 100vw;                /* full agar tidak kepotong */
    margin-left: 0;
    height: 360px;               /* supaya tidak terlalu tinggi */
    border-radius: 0;            /* mengikuti layar, BUKAN style baru */
  }

  .slide_nav {
    bottom: 12px;                /* hanya jarak, bukan desain */
  }
}

/* ===================== SECTION TITLE ===================== */
.section_tittle {
  margin-bottom: 40px;
}
.section_tittle h2 {
  font-weight: 700;
  color: #222;
  font-size: 2rem;
}
.section_tittle h2 span {
  color: #ff7f27;
}
.section_tittle p {
  color: #777;
  font-size: 1rem;
}

/* ===================== PEMBATAS ANTAR SECTION ===================== */
.section-divider {
  border: none;
  height: 5px;
  width: 180px;
  background: linear-gradient(90deg, #ff7f27, #ffc27a);
  margin: 60px auto 40px;
  border-radius: 50px;
}

/* ===================== PROGRAM KEAHLIAN ===================== */
.feature_part {
  background: linear-gradient(180deg, #fffaf0 0%, #fff8e1 100%);
  padding: 70px 0;
}

.section_tittle h2 {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(26px, 3vw, 36px);
  font-weight: 700;
  color: #ff7b00;
}

.section_tittle p {
  color: #555;
  font-size: clamp(14px, 1.8vw, 16px);
  margin-top: 5px;
}

/* CARD STYLE */
.card-program {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
  padding: 40px 25px;
  text-align: center;
  position: relative;
  overflow: hidden;
  transition: all 0.4s ease;
  cursor: pointer;
}

.card-program:hover {
  transform: translateY(-8px);
  box-shadow: 0 15px 35px rgba(255, 123, 0, 0.25);
}

.icon-wrapper {
  width: 90px;
  height: 90px;
  margin: 0 auto 20px;
  background: linear-gradient(135deg, #ff7b00, #ffb366);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.4s ease;
  box-shadow: 0 4px 10px rgba(255, 123, 0, 0.3);
}

.icon-wrapper i {
  font-size: 2.4rem;
  color: #fff;
  transition: transform 0.5s ease;
}

.card-program:hover .icon-wrapper {
  transform: scale(1.1);
  box-shadow: 0 0 25px rgba(255, 123, 0, 0.5);
}

.card-program:hover i {
  transform: rotate(10deg) scale(1.2);
}

.card-program h5 {
  font-size: 1.2rem;
  font-weight: 700;
  margin-bottom: 10px;
  color: #333;
  transition: color 0.3s ease;
}

.card-program:hover h5 {
  color: #ff7b00;
}

.card-program p {
  color: #666;
  font-size: 0.95rem;
  line-height: 1.6;
}

/* Decorative glowing border animation */
.card-border {
  position: absolute;
  inset: 0;
  border-radius: 18px;
  background: linear-gradient(120deg, rgba(255, 123, 0, 0.7), rgba(255, 179, 102, 0.7));
  opacity: 0;
  z-index: -1;
  transition: opacity 0.4s ease;
  animation: borderGlow 3s infinite alternate;
}

.card-program:hover .card-border {
  opacity: 1;
}

@keyframes borderGlow {
  from {
    filter: blur(10px);
    opacity: 0.2;
  }
  to {
    filter: blur(15px);
    opacity: 0.5;
  }
}

/* RESPONSIVE */
@media (max-width: 992px) {
  .card-program {
    padding: 35px 20px;
  }

  .icon-wrapper {
    width: 80px;
    height: 80px;
  }

  .icon-wrapper i {
    font-size: 2rem;
  }
}

@media (max-width: 576px) {
  .card-program {
    margin-bottom: 20px;
    padding: 30px 18px;
  }

  .icon-wrapper {
    width: 70px;
    height: 70px;
  }

  .card-program h5 {
    font-size: 1rem;
  }

  .card-program p {
    font-size: 0.9rem;
  }
}

/* ===================== PROFIL SEKOLAH COUNTERS ===================== */
.school_profile {
  background: linear-gradient(135deg, #fff, #f9fafc);
  padding: 80px 0;
  overflow: hidden;
}

.section_tittle h2 {
  font-weight: 700;
  font-size: 2.2rem;
  color: #222;
  margin-bottom: 10px;
  position: relative;
}

.section_tittle p {
  color: #777;
  font-size: 1rem;
}

/* ====== TITLE UNDERLINE ====== */
.title-underline::after {
  content: '';
  display: block;
  width: 60px;
  height: 3px;
  background: linear-gradient(90deg, #ff6600, #ff9d3f);
  margin: 10px auto 0;
  border-radius: 2px;
  animation: slideIn 1.2s ease forwards;
}

@keyframes slideIn {
  from { width: 0; opacity: 0; }
  to { width: 60px; opacity: 1; }
}

/* ====== CARD STYLE ====== */
.card-sm {
  background: #fff;
  border-radius: 16px;
  padding: 40px 20px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
  transition: all 0.4s ease;
  transform: translateY(0);
  position: relative;
  overflow: hidden;
}

/* Efek gradient halus di bawah card */
.card-sm::before {
  content: '';
  position: absolute;
  bottom: -40%;
  left: 0;
  width: 100%;
  height: 80%;
  background: radial-gradient(circle at top, rgba(255, 102, 0, 0.1), transparent);
  transition: 0.4s ease;
}

.card-sm:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 25px rgba(255, 102, 0, 0.2);
}

.card-sm:hover::before {
  bottom: -20%;
  background: radial-gradient(circle at top, rgba(255, 102, 0, 0.2), transparent);
}

/* ====== ICON STYLE ====== */
.card-icon {
  font-size: 2.8rem;
  color: #ff6600;
  margin-bottom: 15px;
  transition: 0.4s;
}

.card-sm:hover .card-icon {
  transform: scale(1.15);
  color: #ff8533;
}

/* ====== TEXT ====== */
.counter {
  font-size: 2.3rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 5px;
}
.counterr {
  font-size: 2.3rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 5px;
}
.text-muted {
  font-size: 0.95rem;
  color: #666 !important;
}

/* ====== ANIMASI MUNCUL ====== */
.fade-up {
  opacity: 0;
  transform: translateY(40px);
  animation: fadeUp 1s ease forwards;
}

@keyframes fadeUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
/* ===================== FADE ANIMATION ===================== */
.fade-up {
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.8s ease-out;
}

.fade-up.visible {
  opacity: 1;
  transform: translateY(0);
}

/* ===================== CARD GURU TANPA FOTO ===================== */
.teacher-card {
  background: linear-gradient(180deg, #fff, #fff8f3);
  border-radius: 18px;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
  padding: 25px 15px;
  transition: all 0.35s ease;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.teacher-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 25px rgba(255, 127, 39, 0.25);
}

.teacher-avatar {
  width: 70px;
  height: 70px;
  margin: 0 auto 15px;
  background: #ffe6d0;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.teacher-avatar i {
  font-size: 2.5rem;
  color: #ff7f27;
}

.teacher-card h6 {
  font-weight: 600;
  font-size: 1rem;
  color: #222;
  margin-bottom: 6px;
}

.teacher-card p {
  font-size: 0.9rem;
  color: #777;
  margin-bottom: 0;
}


.section_slider {
  position: relative;
}
.slide-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #fff;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 5px 20px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}
.slide-content:hover {
  transform: translateY(-5px);
}
.slide-content img {
  width: 50%;
  height: 300px;
  object-fit: cover;
}
.text-box {
  padding: 30px;
  width: 50%;
}
.text-box h2 {
  font-weight: 700;
  font-size: 1.5rem;
  margin-bottom: 10px;
  color: #333;
}
.text-box p {
  color: #555;
  font-size: 0.95rem;
  line-height: 1.6;
}
.swiper-button-prev,
.swiper-button-next {
  width: 35px;
  height: 35px;
  background: rgba(255, 136, 0, 0.9);
  color: white;
  border-radius: 50%;
  transition: background 0.3s;
}
.swiper-button-prev:hover,
.swiper-button-next:hover {
  background: #ff6600;
}
.swiper-button-prev::after,
.swiper-button-next::after {
  font-size: 16px !important;
  font-weight: bold;
}
.swiper-pagination-bullet {
  background: #ff8800;
}
@media (max-width: 768px) {
  .slide-content {
    flex-direction: column;
  }
  .slide-content img,
  .text-box {
    width: 100%;
  }
  .text-box {
    text-align: center;
  }
}

/* ===================== SWIPER NAVIGATION ===================== */
.swiper-button-next,
.swiper-button-prev {
  color: #ff7f27;
  scale: 1.2;
  transition: 0.3s;
}
.swiper-button-next:hover,
.swiper-button-prev:hover {
  color: #ff9b55;
  scale: 1.3;
}
.swiper-pagination-bullet {
  background: #ff7f27;
  opacity: 0.5;
}
.swiper-pagination-bullet-active {
  opacity: 1;
}

/* ===================== RESPONSIVE ===================== */
@media (max-width: 768px) {
  .card-sm {
    padding: 20px;
  }
  .teacher-card {
    padding: 20px;
  }
  .teacher-avatar {
    width: 60px;
    height: 60px;
  }
}
.guru-staf-section {
  background: #fff;
}

.btn-more {
  background-color: #ff7f27;
  color: #fff;
  font-weight: 500;
  border-radius: 25px;
  padding: 8px 18px;
  text-decoration: none;
  transition: 0.3s;
}
.btn-more:hover {
  background-color: #ff7f27;
}
.btn-more {
  position: absolute;
  top: 0;
  right: 0;
}

/* Responsif agar tombol turun ke bawah saat layar kecil */
@media (max-width: 768px) {
  .btn-more {
    position: static;
    margin-top: 10px;
    display: inline-block;
  }
}
.section_tittle {
  position: relative;
}

.teacher-card {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 6px 15px rgba(0,0,0,0.08);
  padding: 15px;
  transition: all 0.3s ease;
}
.teacher-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}
.teacher-card img {
  width: 100%;
  border-radius: 12px;
  object-fit: cover;
  aspect-ratio: 3/4;
  background-color: #f4f4f4;
}
.teacher-card h5 {
  font-weight: 600;
  font-size: 0.95rem;
  color: #222;
}
.teacher-card p {
  font-size: 0.85rem;
  color: #777;
}

@media (max-width: 768px) {
  .teacher-card img {
    aspect-ratio: 3/4;
  }
}
 .banner_description {
    background: linear-gradient(180deg, #fffaf0 0%, #fff8e1 100%);
    color: #333;
    font-family: 'Poppins', sans-serif;
  }

  .banner_title {
    font-family: 'Playfair Display', serif; /* nuansa klasik elegan */
    font-size: clamp(28px, 4vw, 36px);
    font-weight: 700;
    color: #ff7b00;
    text-align: center;
    letter-spacing: 1px;
    position: relative;
  }

  /* garis dekorasi bawah judul */
  .banner_title::after {
    content: "";
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, #ff7b00, #ffb366);
    border-radius: 3px;
  }

  .banner_text_desc {
    font-size: clamp(15px, 2vw, 17px);
    line-height: 1.9;
    color: #444;
    margin-top: 25px;
    text-align: justify;
    text-indent: 35px; /* kesan paragraf narasi */
  }

  .banner_text_desc strong {
    color: #ff7b00;
    font-weight: 600;
  }

  @media (max-width: 576px) {
    .banner_description {
      padding: 35px 15px;
    }

    .banner_title {
      font-size: 26px;
    }

    .banner_text_desc {
      font-size: 14px;
      text-indent: 25px;
    }
  }
  /* ====== SECTION BASE ====== */


/* ====== JUDUL & TEKS ====== */
.section_tittle h2 {
  font-weight: 700;
  font-size: 2rem;
  color: #222;
  margin-bottom: 10px;
  position: relative;
}

.section_tittle p {
  color: #777;
  font-size: 1rem;
  margin-bottom: 0;
}

/* Underline animasi di bawah judul */
.title-underline::after {
  content: '';
  display: block;
  width: 60px;
  height: 3px;
  background: linear-gradient(90deg, #ff6600, #ff9d3f);
  margin: 10px 0 0;
  border-radius: 2px;
  animation: slideIn 1.2s ease forwards;
}

@keyframes slideIn {
  from { width: 0; opacity: 0; }
  to { width: 60px; opacity: 1; }
}


/* ====== TOMBOL GRADIENT ====== */
.btn-sunset-gradient {
  background: linear-gradient(90deg, #ff6600, #ff9d3f);
  border: none;
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.3px;
  transition: all 0.3s ease;
  text-decoration: none;
  box-shadow: 0 3px 10px rgba(255, 102, 0, 0.3);
}

.btn-sunset-gradient:hover {
  background: linear-gradient(90deg, #ff8533, #ffb34f);
  transform: translateY(-2px);
  box-shadow: 0 6px 15px rgba(255, 102, 0, 0.4);
}
/* ===================== CARD GURU MODERN ===================== */
.teacher-card {
  background: #ffffff;
  border-radius: 18px;
  padding: 22px 15px;
  text-align: center;
  box-shadow: 0 6px 16px rgba(0,0,0,0.08);
  transition: all 0.35s ease;
  position: relative;
  overflow: hidden;
}

/* Efek hover lebih smooth & glow orange */
.teacher-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 30px rgba(255, 125, 40, 0.25);
}

/* ===================== AVATAR ===================== */
.teacher-avatar {
  width: 78px;
  height: 78px;
  margin: 0 auto 14px;
  background: radial-gradient(circle at top, #ffb066, #ff7a00);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: inset 0 0 10px rgba(255,255,255,0.4),
              0 6px 14px rgba(255,125,40,0.35);
  transition: 0.35s ease;
}

/* Icon di tengah */
.teacher-avatar i {
  font-size: 2.4rem;
  color: #fff;
  transition: 0.35s ease;
}

/* Avatar zoom saat hover */
.teacher-card:hover .teacher-avatar {
  transform: scale(1.12);
  box-shadow: inset 0 0 12px rgba(255,255,255,0.55),
              0 8px 22px rgba(255,125,40,0.45);
}

.teacher-card:hover .teacher-avatar i {
  transform: scale(1.1);
}

/* ===================== TEKS ===================== */
.teacher-card h6 {
  font-weight: 700;
  font-size: 1rem;
  color: #111; /* HITAM */
  margin-bottom: 4px;
  letter-spacing: 0.3px;
}

.teacher-card p {
  font-size: 0.88rem;
  color: #ff7a00; /* ORANGE */
  font-weight: 500;
  margin-bottom: 0;
}

/* ===================== RESPONSIVE ===================== */
@media (max-width: 576px) {
  .teacher-avatar {
    width: 65px;
    height: 65px;
  }
  .teacher-card h6 {
    font-size: 0.95rem;
  }
  .teacher-card p {
    font-size: 0.8rem;
  }
}
.btn-more-align {
    margin-top: 35px; /* Turunkan tombol supaya sejajar tinggi card */
}

@media (max-width: 768px) {
    .btn-more-align {
        margin-top: 10px; /* di mobile lebih kecil */
    }
}
.berita-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    padding-bottom: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: .3s ease;
}

.berita-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
}

.berita-thumbnail {
    height: 170px;
    background: #e3e3e3;
}

.placeholder-berita {
    background: linear-gradient(90deg, #e3e3e3 0%, #f1f1f1 50%, #e3e3e3 100%);
    background-size: 200% 100%;
    animation: placeholderShimmer 1.5s infinite;
}

.placeholder-text {
    height: 12px;
    background: #e3e3e3;
    border-radius: 5px;
    margin: 8px 0;
    animation: placeholderShimmer 1.5s infinite;
}

@keyframes placeholderShimmer {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}
.berita-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15) !important;
}
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
.card-id {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-id:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.3);
}

.card-id-photo {
    position: relative;
    width: 100%;
    height: 250px; /* tinggi card */
    overflow: hidden;
}

.card-id-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.card-id-info {
    position: absolute;
    bottom: 0;
    width: 100%;
    background: rgba(0,0,0,0.5); /* overlay gelap di bawah */
    color: #fff;
    padding: 10px;
    text-align: center;
}

.card-id-info .nama {
    font-size: 1.1rem;
    font-weight: bold;
    margin: 0;
}

.card-id-info .mapel {
    font-size: 0.9rem;
    margin: 0;
}
/* ===================== RESPONSIVE SAFETY ONLY ===================== */

/* ---------- Tablet (≤ 992px) ---------- */
@media (max-width: 992px) {

  .news-grid {
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 24px;
  }

  .slide-content img {
    height: 260px;
  }

  .card-id-photo {
    height: 220px;
  }
}

/* ---------- Mobile (≤ 768px) ---------- */
@media (max-width: 768px) {

  /* Hindari overflow horizontal */
  body {
    overflow-x: hidden;
  }

  /* Grid berita aman di HP */
  .news-grid {
    grid-template-columns: 1fr;
    gap: 22px;
  }

  .news-thumb img {
    height: 190px;
  }

  /* Slide aman di HP */
  .slide-content {
    flex-direction: column;
  }

  .slide-content img {
    width: 100%;
    height: 220px;
  }

  .text-box {
    width: 100%;
    padding: 22px;
  }

  /* Card ID guru */
  .card-id-photo {
    height: 210px;
  }
}

/* ---------- Small Mobile (≤ 576px) ---------- */
@media (max-width: 576px) {

  .section_tittle {
    margin-bottom: 28px;
  }

  .section-divider {
    width: 140px;
    margin: 40px auto 30px;
  }

  .news-body {
    padding: 18px;
  }

  .news-body h5 {
    font-size: 18px;
  }

  .news-desc {
    font-size: 14px;
  }

  .card-id-photo {
    height: 190px;
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

<section class="banner_part">
  <div class="container">
    <div class="banner_slider">

      <!-- Slide 1 -->
      <div class="banner_slide active" data-slide="0">
        <img src="{{ asset('img/ban_farm-min.jpg') }}" alt="farmasi">
        <div class="banner_caption left">
          <h1>Selamat Datang di <br><span>SMK Fort De Kock</span> Bukittinggi</h1>
          <p>Mengembangkan generasi unggul dan berkompeten di bidang Keperawatan, Farmasi, dan Caregiver.</p>
          <a href="{{ url('/program') }}" class="btn btn_1 rounded-pill px-4 py-2">Lihat Program Keahlian</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="banner_slide" data-slide="1">
        <img src="{{ asset('img/ban_kes.jpg') }}" alt="keperawatan">
        <div class="banner_caption left">
          <h1>Bersama <br><span>SMK Fort De Kock</span></h1>
          <p>Wujudkan cita-cita dan masa depan gemilang melalui pendidikan yang unggul dan berkarakter.</p>
          <a href="{{ url('/program') }}" class="btn btn_1 rounded-pill px-4 py-2">Lihat Program Keahlian</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="banner_slide" data-slide="2">
        <img src="{{ asset('img/ban_carg.jpg') }}" alt="Caregiver">
        <div class="banner_caption left">
          <h1>Menjadi Bagian dari <br><span>Generasi Hebat</span></h1>
          <p>Bersama kami, raih kompetensi terbaik dan jadilah tenaga profesional masa depan.</p>
          <a href="{{ url('/program') }}" class="btn btn_1 rounded-pill px-4 py-2">Lihat Program Keahlian</a>
        </div>
      </div>

      <!-- Navigasi -->
      <div class="slide_nav">
        <span class="dot active" data-target="0"></span>
        <span class="dot" data-target="1"></span>
        <span class="dot" data-target="2"></span>
      </div>

    </div>
  </div>
<div class="banner_description py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <h2 class="banner_title mb-3">Fort De Kock</h2>
        <p class="banner_text_desc text-justify">
          Nama <strong>“Fort De Kock”</strong> diambil dari sebuah benteng peninggalan Belanda yang terletak di Kota Bukittinggi.
          Benteng ini menjadi simbol <strong>semangat, keteguhan, dan ketangguhan</strong> masyarakat dalam menghadapi perubahan zaman.
          Melalui makna sejarah tersebut, SMK Fort De Kock hadir dengan semangat yang sama —
          mencetak generasi muda yang <strong>kompeten, berkarakter,</strong> serta <strong>siap menghadapi tantangan dunia industri modern.</strong>
        </p>
      </div>
    </div>
  </div>
</section>

<div class="banner-sep"></div>


<!-- PROGRAM KEAHLIAN (centered) -->
<section class="feature_part section_padding fade-up">
  <div class="container">
    <div class="section_tittle text-center mb-5">
      <h2>Program Keahlian</h2>
      <p>Pilih jurusan sesuai minat dan bakat kamu di SMK Fort De Kock Bukittinggi.</p>
    </div>

    <div class="row justify-content-center gy-4">
      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6 col-sm-10">
        <div class="card-program">
          <div class="icon-wrapper">
            <i class="fa-solid fa-flask"></i>
          </div>
          <h5>Farmasi</h5>
          <p>Ilmu kefarmasian & pelayanan kesehatan profesional.</p>
          <span class="card-border"></span>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6 col-sm-10">
        <div class="card-program">
          <div class="icon-wrapper">
            <i class="fa-solid fa-book-medical"></i>
          </div>
          <h5>Keperawatan</h5>
          <p>Keterampilan keperawatan dasar & praktik klinik.</p>
          <span class="card-border"></span>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6 col-sm-10">
  <div class="card-program">
    <div class="icon-wrapper">
      <i class="fa-solid fa-heart-pulse"></i>
    </div>
    <h5>Caregiver</h5>
    <p>Perawatan lansia & pasien dengan standar profesional.</p>
    <span class="card-border"></span>
  </div>
</div>

    </div>
  </div>
</section>

<!-- ===================== PROFIL SINGKAT SEKOLAH ===================== -->
<section class="school_profile section_padding fade-up">
  <div class="container">
    <div class="section_tittle text-center mb-5">
      <h2 class="title-underline">Profil Singkat</h2>
      <p>Data ringkas tentang sekolah kami yang terus berkembang menuju pendidikan kejuruan berkualitas.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-6 col-md-3 mb-4 d-flex">
        <div class="card-sm text-center w-100">
          <div class="card-icon"><i class="ti-user"></i></div>
          <h2 class="counter">{{ $jumlahGuru }}</h2>
<p class="mb-0 text-muted">Guru & Staff</p>
        </div>
      </div>

      <div class="col-sm-6 col-md-3 mb-4 d-flex">
        <div class="card-sm text-center w-100">
          <div class="card-icon"><i class="ti-book"></i></div>
<h2 class="counter">{{ $jumlahSiswa }}</h2>
<p class="mb-0 text-muted">Jumlah Siswa</p>
        </div>
      </div>

      <div class="col-sm-6 col-md-3 mb-4 d-flex">
        <div class="card-sm text-center w-100">
          <div class="card-icon"><i class="ti-layers"></i></div>
          <h2 class="counter">3</h2>
          <p class="mb-0 text-muted">Program Keahlian</p>
        </div>
      </div>

      <div class="col-sm-6 col-md-3 mb-4 d-flex">
        <div class="card-sm text-center w-100">
          <div class="card-icon"><i class="ti-cup"></i></div>
          <h2 class="counterr">A</h2>
          <p class="mb-0 text-muted">Akreditasi</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="guru-staf-section py-5 fade-up">
  <div class="container">
<div class="section_tittle mb-5 position-center_relative text-center">
    <h2 class="title-underline">
        Guru<span>Tenaga Kependidikan</span>
    </h2>
    <p>Staf tenaga kependidikan pada sekolah kami</p>
</div>

<!-- ROW UNTUK BUTTON SELENGKAPNYA -->
</div>

<!-- SLIDER GURU -->
<div class="swiper guruSwiper">
    <div class="swiper-wrapper">

        @forelse($guru->take(11) as $item)
        <div class="swiper-slide">
            <div class="card-id">
                <div class="card-id-photo">
                    @if($item->foto)
                        <img src="{{ asset('guru/'.$item->foto) }}" alt="{{ $item->nama_guru }}">
                    @else
                        <img src="{{ asset('default-avatar.png') }}" alt="Default">
                    @endif

                    <div class="card-id-info">
                        <h5 class="nama">{{ $item->nama_guru }}</h5>
                        <p class="mapel">{{ $item->mapel }}</p>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="text-center w-100">
            <p class="text-muted fst-italic">Belum ada data guru yang ditampilkan.</p>
        </div>
        @endforelse

    </div>
</div>

 <!-- BUTTON SELENGKAPNYA -->
        <div class="text-center mt-4">
            <a href="{{ route('smk.guru') }}" class="btn btn_1 rounded-pill px-4 py-2">
                Selengkapnya 
            </a>
        </div>

  </div>
</section>

{{-- ===================== FASILITAS SEKOLAH ===================== --}}
<section class="section_slider fade-up py-5">
  <div class="container">
    <div class="section_tittle text-center mb-3">
      <h2>Fasilitas <span>Sekolah</span></h2>
      <p>Fasilitas lengkap mendukung pembelajaran yang optimal.</p>
    </div>

    <div class="swiper swiper-fasilitas">
      <div class="swiper-wrapper">

        <!-- LAB FARMASI -->
        <div class="swiper-slide">
          <div class="slide-content">
            <div class="text-box">
              <h2>Lab Farmasi</h2>
              <p>Tempat eksperimen dan inovasi untuk mengasah kemampuan analisis dan riset siswa.</p>
            </div>
            <img src="{{ asset('img/farm-fas.jpg') }}" alt="Lab Farmasi">
          </div>
        </div>

        <!-- LAB KEPERAWATAN -->
        <div class="swiper-slide">
          <div class="slide-content">
            <img src="{{ asset('img/ban_kes.jpg') }}" alt="Lab Keperawatan">
            <div class="text-box">
              <h2>Keperawatan</h2>
              <p>Didesain untuk praktik keterampilan klinik secara profesional.</p>
            </div>
          </div>
        </div>

        <!-- LAB CAREGIVER -->
        <div class="swiper-slide">
          <div class="slide-content">
            <img src="{{ asset('img/ban_carg.jpg') }}" alt="Lab Caregiver">
            <div class="text-box">
              <h2>Caregiver</h2>
              <p>Fasilitas praktik perawatan dan pelayanan kesehatan dasar.</p>
            </div>
          </div>
        </div>

        <!-- RUANG KELAS -->
        <div class="swiper-slide">
          <div class="slide-content">
            <div class="text-box">
              <h2>Ruang Kelas</h2>
              <p>Ruang belajar yang bersih, nyaman, dan dilengkapi fasilitas multimedia modern.</p>
            </div>
            <img src="{{ asset('img/fas-kelas.jpg') }}" alt="Ruang Kelas">
          </div>
        </div>

        <!-- PERPUSTAKAAN -->
        <div class="swiper-slide">
          <div class="slide-content">
            <img src="{{ asset('img/fas-perpus.jpg') }}" alt="Perpustakaan">
            <div class="text-box">
              <h2>Perpustakaan</h2>
              <p>Ruang baca nyaman dengan koleksi buku lengkap.</p>
            </div>
          </div>
        </div>

        <!-- HALL -->
        <div class="swiper-slide">
          <div class="slide-content">
            <div class="text-box">
              <h2>Hall</h2>
              <p>Tempat kegiatan seminar, upacara, dan acara sekolah.</p>
            </div>
            <img src="{{ asset('img/fas-hall.jpg') }}" alt="Hall Serbaguna">
          </div>
        </div>

        <!-- STUDIO BAND -->
        <div class="swiper-slide">
          <div class="slide-content">
            <div class="text-box">
              <h2>Studio Band</h2>
              <p>Pengembangan bakat musik dengan peralatan profesional.</p>
            </div>
            <img src="{{ asset('img/fas-band.jpg') }}" alt="Studio Band">
          </div>
        </div>

        <!-- MINI SOCCER -->
        <div class="swiper-slide">
          <div class="slide-content">
            <img src="{{ asset('img/fas-socc.jpg') }}" alt="Mini Soccer">
            <div class="text-box">
              <h2>Mini Soccer</h2>
              <p>Lapangan olahraga untuk kebugaran dan sportivitas.</p>
            </div>
          </div>
        </div>

        <!-- PODCAST -->
        <div class="swiper-slide">
          <div class="slide-content">
            <div class="text-box">
              <h2>Studio Podcast</h2>
              <p>Ruang kreatif konten digital dan broadcasting.</p>
            </div>
            <img src="{{ asset('img/eks-podcast.jpg') }}" alt="Studio Podcast">
          </div>
        </div>

        <!-- VOLI -->
        <div class="swiper-slide">
          <div class="slide-content">
            <img src="{{ asset('img/fas-voli.jpg') }}" alt="Lapangan Voli">
            <div class="text-box">
              <h2>Lapangan Voli</h2>
              <p>Fasilitas pembinaan prestasi olahraga siswa.</p>
            </div>
          </div>
        </div>

        <!-- STUDY CENTER -->
        <div class="swiper-slide">
          <div class="slide-content">
            <div class="text-box">
              <h2>Study Center</h2>
              <p>Ruang diskusi dan belajar mandiri yang kondusif.</p>
            </div>
            <img src="{{ asset('img/fas-stdy.jpg') }}" alt="Study Center">
          </div>
        </div>

        <!-- TAMAN -->
        <div class="swiper-slide">
          <div class="slide-content">
            <img src="{{ asset('img/fas-stud.jpg') }}" alt="Taman Sekolah">
            <div class="text-box">
              <h2>Taman Sekolah</h2>
              <p>Area hijau untuk relaksasi dan interaksi siswa.</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Pagination & Navigation -->
      <div class="swiper-pagination"></div>

    </div>
  </div>
</section>


<!-- ===================== EKSTRAKURIKULER ===================== -->
<section class="section_slider fade-up py-5">
  <div class="container">
    <div class="section_tittle text-center mb-3">
      <h2>Ekstrakurikuler <span>Sekolah</span></h2>
      <p>Kegiatan yang membentuk karakter, kreativitas, dan kepemimpinan siswa.</p>
    </div>

    <div class="swiper swiper-fasilitas">
      <div class="swiper-wrapper">

        <!-- Pramuka -->
        <div class="swiper-slide">
          <div class="slide-content">
            <img src="{{ asset('img/eks-pram.jpg') }}" alt="Pramuka">
            <div class="text-box">
              <h2><i class="bi bi-tree-fill text-success me-2"></i>Pramuka</h2>
              <p>Membentuk disiplin, tanggung jawab, dan kerja sama tim melalui kegiatan lapangan.</p>
            </div>
          </div>
        </div>

        <!-- Seni Musik dan Tari -->
        <div class="swiper-slide">
          <div class="slide-content">
            <div class="text-box">
              <h2><i class="bi bi-music-note-beamed text-danger me-2"></i>Musik</h2>
              <p>Mengembangkan bakat dan kreativitas siswa dalam bidang musik dan seni tari.</p>
            </div>
            <img src="{{ asset('img/eks-band.jpg') }}" alt="Seni Musik dan Tari">
          </div>
        </div>
          
     
<!-- Band -->
<div class="swiper-slide">
  <div class="slide-content">
    <img src="{{ asset('img/eks-band.jpg') }}" alt="Band Sekolah">
    <div class="text-box">
      <h2><i class="bi bi-music-note-list text-danger me-2"></i>Band</h2>
      <p>Menyalurkan bakat bermusik siswa serta melatih kreativitas dan kerja sama tim.</p>
    </div>
  </div>
</div>

<!-- Badminton -->
<div class="swiper-slide">
  <div class="slide-content">
    <div class="text-box">
      <h2><i class="bi bi-lightning-fill text-warning me-2"></i>Badminton</h2>
      <p>Meningkatkan kebugaran, ketangkasan, dan semangat kompetitif siswa.</p>
    </div>
    <img src="{{ asset('img/eks-bad.jpg') }}" alt="Badminton">
  </div>
</div>

<!-- Voli -->
<div class="swiper-slide">
  <div class="slide-content">
    <img src="{{ asset('img/eks-voli.jpg') }}" alt="Voli">
    <div class="text-box">
      <h2><i class="bi bi-people-fill text-primary me-2"></i>Voli</h2>
      <p>Melatih kekompakan tim, sportivitas, dan kemampuan fisik siswa.</p>
    </div>
  </div>
</div>

<!-- Mini Soccer -->
<div class="swiper-slide">
  <div class="slide-content">
    <div class="text-box">
      <h2><i class="bi bi-dribbble text-success me-2"></i>Mini Soccer</h2>
      <p>Mengembangkan bakat olahraga sepak bola serta membangun disiplin dan kerja sama.</p>
    </div>
    <img src="{{ asset('img/eks-socc.jpg') }}" alt="Mini Soccer">
  </div>
</div>

<!-- Podcast -->
<div class="swiper-slide">
  <div class="slide-content">
    <img src="{{ asset('img/eks-podcast.jpg') }}" alt="Podcast">
    <div class="text-box">
      <h2><i class="bi bi-mic-fill text-info me-2"></i>Podcast</h2>
      <p>Melatih kemampuan komunikasi, public speaking, dan produksi konten digital.</p>
    </div>
  </div>
</div>

       

      <!-- pagination dan navigasi -->
      <div class="swiper-pagination"></div>

    </div>
  </div>
</section>
<section class="news-list-area py-5 fade-up">
    <div class="container">

{{-- ===== JUDUL SECTION BERITA ===== --}}
<div class="section_tittle text-center mb-4">
    <h2>Berita <span>Sekolah</span></h2>
    <p>Informasi dan kegiatan terbaru seputar sekolah</p>
</div>

<div class="news-grid">

    @forelse($berita as $item)
        <a href="{{ route('berita.show', $item->slug) }}" class="text-decoration-none">

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


        {{-- ===== TOMBOL LIHAT SEMUA ===== --}}
        <div class="text-center mt-4">
            <a href="{{ route('berita.index') }}" class="btn btn_1 rounded-pill px-4 py-2">
                Lihat Semua Berita →
            </a>
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
const slides = document.querySelectorAll('.banner_slide');
const dots = document.querySelectorAll('.dot');
let currentSlide = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove('active');
    dots[i].classList.remove('active');
  });

  slides[index].classList.add('active');
  dots[index].classList.add('active');

  // animasi GSAP
  const caption = slides[index].querySelector('.banner_caption');
  gsap.fromTo(caption, 
    { opacity: 0, y: 50 }, 
    { opacity: 1, y: 0, duration: 1, ease: "power3.out" }
  );
}

dots.forEach(dot => {
  dot.addEventListener('click', () => {
    currentSlide = parseInt(dot.dataset.target);
    showSlide(currentSlide);
  });
});

// autoplay tiap 5 detik
setInterval(() => {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}, 5000);

showSlide(currentSlide);
</script>

    <script>
    $(document).ready(function(){
        $('.counter').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 2500,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });
</script>
{{-- ===================== INISIALISASI SLIDER ===================== --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.banner_slider', {
    loop: true,
    autoplay: { delay: 3500, disableOnInteraction: false },
    effect: 'fade',
    fadeEffect: { crossFade: true },
    pagination: { el: '.swiper-pagination', clickable: true },
    speed: 1200,
  });
</script>
<script>
  // Fasilitas
  var swiperFasilitas = new Swiper(".swiper-fasilitas", {
    loop: true,
    speed: 1000, // durasi transisi (1 detik)
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-fasilitas .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-fasilitas .swiper-button-next",
      prevEl: ".swiper-fasilitas .swiper-button-prev",
    },
    effect: "slide", // efek geser
    grabCursor: true, // pointer tangan saat hover
  });

  // Ekstrakurikuler
  var swiperEkskul = new Swiper(".swiper-ekskul", {
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-ekskul .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-ekskul .swiper-button-next",
      prevEl: ".swiper-ekskul .swiper-button-prev",
    },
    effect: "slide",
    grabCursor: true,
  });
</script>

<script>
  // Efek fade-up saat scroll
  document.addEventListener("DOMContentLoaded", function () {
    const faders = document.querySelectorAll(".fade-up");

    const appearOptions = {
      threshold: 0.15,
      rootMargin: "0px 0px -50px 0px"
    };

    const appearOnScroll = new IntersectionObserver(function (entries, observer) {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      });
    }, appearOptions);

    faders.forEach(fader => appearOnScroll.observe(fader));
  });
</script>
<!-- ===================== SCRIPT ANIMASI ===================== -->
<script>
  // Counter Animation
  const counters = document.querySelectorAll(".counter");
  const speed = 100; // Semakin kecil = semakin cepat

  const animateCounters = () => {
    counters.forEach(counter => {
      const target = +counter.getAttribute("data-target");
      if (!target) return; // skip jika tidak punya target (contoh huruf "A")

      const updateCount = () => {
        const count = +counter.innerText;
        const increment = target / speed;
        if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(updateCount, 20);
        } else {
          counter.innerText = target;
        }
      };
      updateCount();
    });
  };

  // Scroll animation observer
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        animateCounters();
      }
    });
  }, { threshold: 0.3 });

  document.querySelectorAll(".animate-card").forEach(card => {
    observer.observe(card);
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
const guruSwiper = new Swiper(".guruSwiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    speed: 800,
    spaceBetween: 20,

    breakpoints: {
        0: {
            slidesPerView: 2
        },
        576: {
            slidesPerView: 3
        },
        768: {
            slidesPerView: 4
        },
        992: {
            slidesPerView: 5
        },
        1200: {
            slidesPerView: 6
        }
    }
});
</script>

</body>
</html>
