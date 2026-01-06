<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin - SMK FDK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #cfd8dc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }
        .register-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 400px;
            width: 100%;
        }
        .register-card h3 {
            color: #0d47a1;
            font-weight: 700;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-register {
            background: linear-gradient(90deg, #0d47a1, #1976d2);
            color: white;
            border: none;
            border-radius: 10px;
            transition: all 0.3s;
        }
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 71, 161, 0.3);
        }
    </style>
</head>
<body>

<div class="register-card">
    <div class="text-center mb-4">
        <img src="{{ asset('img/smk.png') }}" alt="Logo" width="80" class="mb-3">
        <h3>Register Admin</h3>
        <p class="text-muted">SMK Fort De Kock</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('admin.register.process') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" required placeholder="Masukkan nama lengkap">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required placeholder="Masukkan email">
        </div>

        <div class="mb-3">
            <label class="form-label">Kata Sandi</label>
            <input type="password" name="password" class="form-control" required placeholder="Masukkan password">
        </div>

        <div class="mb-3">
            <label class="form-label">Konfirmasi Kata Sandi</label>
            <input type="password" name="password_confirmation" class="form-control" required placeholder="Ulangi password">
        </div>

        <button type="submit" class="btn btn-register w-100 py-2">
            Daftar
        </button>

        <div class="text-center mt-3">
            <a href="{{ route('admin.login') }}">Sudah punya akun? Login</a>
        </div>
    </form>
</div>

</body>
</html>
