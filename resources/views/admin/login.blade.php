<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SMK FDK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #cfd8dc);
            min-height: 100vh;
            display: flex;
            justify-content: right;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            padding: 20px;
        }

        .login-wrapper {
            display: flex;
            background: #fff;
            border-radius: 50px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 550px; /* Ubah dari 750px ke 550px */
            width: 100%;
        }

        .login-form {
            padding: 30px; /* Sedikit dikurangi agar proporsional */
            flex: 1;
        }

        .login-form h3 {
            color: #0d47a1;
            font-weight: 700;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-login {
            background: linear-gradient(90deg, #0d47a1, #1976d2);
            color: white;
            border: none;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 71, 161, 0.3);
        }

        .login-image {
            display: none; /* Sembunyikan gambar karena 550px sudah cukup sempit */
        }

        @media (min-width: 768px) {
            .login-wrapper {
                max-width: 550px;
            }
        }
    </style>
</head>
<body>

<div class="login-wrapper">

    {{-- FORM LOGIN --}}
    <div class="login-form">
        <div class="text-center mb-4">
            <img src="{{ asset('img/smk.png') }}" alt="Logo" width="80" class="mb-3">
            <h3>Login Admin</h3>
            <p class="text-muted">SMK Fort De Kock</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form action="{{ route('admin.login.process') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required placeholder="Masukkan email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-control" required placeholder="Masukkan password">
            </div>

            <div class="mb-3">
                <label class="form-label">Captcha</label>
                <div class="d-flex align-items-center gap-2">
                    <span class="fw-bold px-3 py-2 bg-light border rounded text-uppercase"
                          style="letter-spacing:4px;font-size:18px">
                        {{ session('captcha') }}
                    </span>

                    <a href="{{ route('admin.captcha.refresh') }}"
                       class="btn btn-sm btn-outline-secondary"
                       title="Refresh captcha">
                        ↻
                    </a>
                </div>

                <input type="text"
                       name="captcha"
                       class="form-control mt-2 text-uppercase"
                       placeholder="Masukkan captcha"
                       required>
            </div>

            <button type="submit" class="btn btn-login w-100 py-2">Masuk</button>
        </form>
    </div>

</div>
 {{-- MASKOT DI SEBELAH KANAN FORM --}}
<div class="login-image d-flex flex-column align-items-center justify-content-start">
    <img src="{{ asset('img/maskott2.png') }}" 
         alt="Maskot SMK" 
         style="max-width:400px; height:auto;"> <!-- diperbesar dari 250px menjadi 400px -->
</div>


</body>
</html>
