<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | SMK Fort De Kock</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        /* === SIDEBAR === */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 240px;
            height: 100vh;
            background: linear-gradient(180deg, #2b3a67, #3c4d82);
            color: #fff;
            padding-top: 80px; /* kasih jarak buat header fixed */
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            z-index: 1020;
        }

        .sidebar h4 {
            text-align: center;
            font-weight: 600;
            margin-bottom: 25px;
            letter-spacing: 0.5px;
        }

        .sidebar a {
            color: #e0e6f1;
            display: flex;
            align-items: center;
            padding: 12px 20px;
            margin: 6px 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .sidebar a i {
            font-size: 1.1rem;
            margin-right: 10px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            transform: translateX(4px);
        }

        /* === CONTENT AREA === */
        .content {
            margin-left: 240px;
            padding: 90px 30px 30px;
            transition: all 0.3s ease;
        }

        /* === RESPONSIVE === */
        @media (max-width: 992px) {
            .sidebar {
                left: -240px;
            }
            .sidebar.active {
                left: 0;
            }
            .content {
                margin-left: 0;
                padding-top: 100px;
            }
        }
        /* Samakan button logout dengan sidebar link */
.sidebar .sidebar-btn {
    color: #e0e6f1;
    display: flex;
    align-items: center;
    padding: 12px 20px;
    margin: 6px 12px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    background: none;
    border: none;
    width: 100%;
    transition: all 0.3s ease;
    cursor: pointer;
}

.sidebar .sidebar-btn i {
    font-size: 1.1rem;
    margin-right: 10px;
}

.sidebar .sidebar-btn:hover,
.sidebar .sidebar-btn.active {
    background-color: rgba(255, 255, 255, 0.15);
    color: #ffffff;
    transform: translateX(4px);
}

    </style>
</head>
<body>

    {{-- Header --}}
    @include('admin.layouts.header')

    {{-- Sidebar --}}
    <div class="sidebar" id="sidebarMenu">
        <h4>Admin Panel</h4>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <i class="bi bi-house-door"></i> Dashboard
        </a>
<a href="{{ route('admin.guru') }}"
   class="{{ request()->is('admin/guru*') ? 'active' : '' }}">
    <i class="bi bi-person-lines-fill"></i>
    Data Guru
</a>
<a href="{{ route('siswa.index') }}">
    <i class="bi bi-people-fill"></i> Data Siswa
</a>
      <a href="{{ route('admin.jurusan.index') }}"
   class="{{ request()->is('admin/jurusan*') ? 'active' : '' }}">
    <i class="bi bi-book-half"></i>
    Jurusan
</a>
<a href="{{ route('admin.ppdb') }}"
   class="{{ request()->is('admin/ppdb*') ? 'active' : '' }}">
    <i class="bi bi-person-lines-fill"></i>
    PPDB
</a>
<a href="{{ route('admin.users.index') }}"
   class="{{ request()->is('admin/users*') ? 'active' : '' }}">
    <i class="bi bi-people-fill"></i>
    Users
</a>
<a href="{{ route('admin.berita.index') }}"
   class="{{ request()->is('admin/berita*') ? 'active' : '' }}">
    <i class="bi bi-newspaper"></i>
    Berita
</a>

<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    <button type="submit" class="sidebar-btn">
        <i class="bi bi-box-arrow-right"></i>
        Logout
    </button>
</form>


    </div>

    {{-- Content --}}
    <div class="content">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('admin.layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
