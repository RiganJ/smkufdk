<style>
    /* === Custom Navbar Style === */
    .custom-navbar {
        background: linear-gradient(90deg, #2b3a67, #3c4d82);
        backdrop-filter: blur(10px);
        transition: background 0.3s ease, box-shadow 0.3s ease;
        z-index: 1030;
    }

    .navbar-brand {
        color: #ffffff !important;
        letter-spacing: 0.5px;
    }

    .navbar-nav .nav-link {
        color: #e0e6f1 !important;
        font-weight: 500;
        transition: 0.2s ease-in-out;
        border-radius: 8px;
        padding: 8px 14px;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
        background: rgba(255, 255, 255, 0.15);
        color: #ffffff !important;
    }

    .navbar-toggler {
        color: #fff;
    }

    .btn-light.text-danger {
        background-color: #ffffff !important;
        border: none;
        transition: 0.3s ease-in-out;
    }

    .btn-light.text-danger:hover {
        background-color: #ffebee !important;
        transform: translateY(-2px);
    }

    /* Buat header tetap kelihatan saat scroll */
    body {
        padding-top: 70px; /* biar konten nggak ketimpa navbar */
    }

    /* Efek shadow saat scroll */
    .custom-navbar.scrolled {
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top custom-navbar">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/admin/dashboard') }}">
            <i class="bi bi-speedometer2 me-2 fs-4"></i> <span>Admin Dashboard</span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center gap-1">
                {{-- DASHBOARD --}}
                <li class="nav-item">
                    <a href="{{ url('/admin/dashboard') }}" 
                       class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class="bi bi-house-door me-1"></i> Dashboard
                    </a>
                </li>

                {{-- DATA SISWA --}}
                <li class="nav-item">
                    <a href="{{ url('/admin/siswa') }}" 
                       class="nav-link {{ request()->is('admin/siswa*') ? 'active' : '' }}">
                        <i class="bi bi-people me-1"></i> Data Siswa
                    </a>
                </li>

                {{-- GURU --}}
                <li class="nav-item">
                    <a href="{{ url('/admin/guru') }}" 
                       class="nav-link {{ request()->is('admin/guru*') ? 'active' : '' }}">
                        <i class="bi bi-person-workspace me-1"></i> Guru
                    </a>
                </li>

                {{-- JURUSAN --}}
                <li class="nav-item">
                    <a href="{{ url('/admin/jurusan') }}" 
                       class="nav-link {{ request()->is('admin/jurusan*') ? 'active' : '' }}">
                        <i class="bi bi-book me-1"></i> Jurusan
                    </a>
                </li>

               
            </ul>
        </div>
    </div>
</nav>




<script>
    // Tambah efek shadow ketika user scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.custom-navbar');
        if (window.scrollY > 30) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
