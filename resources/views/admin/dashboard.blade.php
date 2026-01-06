@extends('admin.layouts.main')

@section('content')
<style>
    /* === STYLE DASHBOARD MODERN === */
    body {
        background-color: #f4f6f9;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* ==== HEADER ==== */
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        background-color: #0d6efd !important;
        color: white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .navbar-brand, .navbar-nav .nav-link {
        color: white !important;
        font-weight: 500;
    }

    .navbar-nav .nav-link:hover {
        background-color: rgba(255,255,255,0.15);
        border-radius: 8px;
    }

    /* ==== SIDEBAR ==== */
    .sidebar {
        width: 220px;
        height: 100vh;
        position: fixed;
        top: 56px; /* menyesuaikan tinggi navbar */
        left: 0;
        background-color: #0d6efd;
        color: #fff;
        padding-top: 20px;
    }

    .sidebar a {
        color: #fff;
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 8px;
    }

    .sidebar a:hover {
        background-color: rgba(255,255,255,0.15);
    }

    /* ==== CONTENT ==== */
    .content {
        margin-left: 240px;
        margin-top: 80px; /* jarak pas dari navbar */
        padding: 20px;
    }

    /* ==== CARD DASHBOARD ==== */
    .dashboard-card {
        border: none;
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
    }

    .dashboard-card .icon {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 24px;
    }

    .bg-gradient-primary { background: linear-gradient(135deg, #ff7e5f, #feb47b); }
    .bg-gradient-success { background: linear-gradient(135deg, #43cea2, #185a9d); }
    .bg-gradient-info { background: linear-gradient(135deg, #36d1dc, #5b86e5); }
    .bg-gradient-warning { background: linear-gradient(135deg, #f7971e, #ffd200); }

    .section-title {
        font-weight: 600;
        color: #333;
        margin-bottom: 1rem;
    }

    .stat-card h4 {
        font-weight: 700;
        color: #222;
    }

    .chart-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        border: none;
        transition: 0.3s;
    }

    .chart-card:hover {
        box-shadow: 0 6px 25px rgba(0,0,0,0.08);
    }

    .text-muted {
        font-size: 0.9rem;
    }
</style>


<div class="container-fluid py-4">

    <h4 class="fw-bold mb-4 text-dark">👋 Selamat Datang di Dashboard Admin</h4>

    <div class="row g-4">
        <!-- Total Siswa -->
        <div class="col-md-3">
            <div class="dashboard-card p-3 stat-card">
                <div class="d-flex align-items-center">
                    <div class="icon bg-gradient-primary text-white me-3">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-0">Total Siswa</h6>
<h4 class="mb-0">{{ $totalSiswa }}</h4>

                    </div>
                </div>
            </div>
        </div>

        <!-- Total Guru -->
        <div class="col-md-3">
            <div class="dashboard-card p-3 stat-card">
                <div class="d-flex align-items-center">
                    <div class="icon bg-gradient-success text-white me-3">
                        <i class="bi bi-person-workspace"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-0">Total Guru</h6>
<h4 class="mb-0">{{ $totalGuru }}</h4>

                    </div>
                </div>
            </div>
        </div>

        <!-- Jurusan -->
        <div class="col-md-3">
            <div class="dashboard-card p-3 stat-card">
                <div class="d-flex align-items-center">
                    <div class="icon bg-gradient-info text-white me-3">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-0">Jurusan</h6> <h4 class="mb-0">4</h4>

                    </div>
                </div>
            </div>
        </div>

        <!-- Pendaftar -->
        <div class="col-md-3">
            <div class="dashboard-card p-3 stat-card">
                <div class="d-flex align-items-center">
                    <div class="icon bg-gradient-warning text-white me-3">
                        <i class="bi bi-file-earmark-person"></i>
                    </div>
                    <div>
                       <h6 class="text-muted mb-0">Pendaftar PPDB</h6>
<h4 class="mb-0">{{ $totalPendaftar }}</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Chart / Statistik -->
    <div class="chart-card mt-5 p-4">
        <h5 class="fw-bold mb-3">
            <i class="bi bi-bar-chart-fill me-2 text-primary"></i> Statistik Sekolah
        </h5>
        <p class="text-muted mb-4">Grafik dan data aktivitas sekolah akan tampil di sini.</p>

        <canvas id="schoolChart" height="90"></canvas>
    </div>
</div>

{{-- ChartJS Script --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('schoolChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Siswa', 'Guru', 'Jurusan', 'Pendaftar'],
        datasets: [{
            label: 'Jumlah Data',
            data: [
                {{ $totalSiswa }},
                {{ $totalGuru }},
                {{ $totalJurusan }},
                {{ $totalPendaftar }}
            ],
            borderWidth: 1,
            backgroundColor: [
                '#ff7e5f',
                '#43cea2',
                '#5b86e5',
                '#f7971e'
            ]
        }]
    },
    options: {
        plugins: {
            legend: { display: false }
        },
        scales: {
            y: { beginAtZero: true }
        }
    }
});
</script>

@endsection
