<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Antri Klinik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap & Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
        .topbar {
            background-color: #006871;
            padding: 8px 40px;
        }
        .topbar p {
            margin: 0;
            color: white;
            font-size: 14px;
        }
        .navbar-custom {
            background-color: #ffffff;
            border-bottom: 2px solid #ddd;
            padding: 15px 40px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: bold;
            color: #006666;
        }

        .navbar-brand img {
            height: 40px;
        }

        .nav-link {
            color: #006871;
            margin-left: 25px;
            font-weight: 500;
        }
        .form-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }
         footer {
            background-color: #003c3c;
            color: white;
            padding: 20px 40px;
            margin-top: 80px;
        }

        footer .footer-links {
            display: flex;
            justify-content: flex-end;
            gap: 30px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
        }
        .btn-teal {
            background-color: #006871;
            color: white;
        }
        .btn-teal:hover {
            background-color: #004f4f;
        }
    </style>
</head>
<body>

    <!-- Topbar -->
    <div class="topbar">
        <p class="text-end">Hubungi kami: +62 856-9098-9098</p>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom px-4">
        <a class="navbar-brand" href="{{ route('landingpage.index') }}">
            <img src="{{ asset('admin/images/logo.png') }}" alt="Logo" height="40">
            Antri <span>Klinik</span>
        </a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('landingpage.index') }}#tentang">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('landingpage.infoklinik') }}">Info Klinik</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('landingpage.antrian') }}">Daftar Antrian</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ auth()->check() ? route('landingpage.pendaftaran') : route('login') }}">
                        Pendaftaran
                    </a>
                </li>
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                @endguest
                @auth
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link text-danger" style="display:inline; padding: 0; margin-left: 25px;">
                            Logout
                        </button>
                    </form>
                </li>
            @endauth
            </ul>
        </div>
    </nav>

    <!-- Login Section -->
    <div class="container-fluid form-wrapper">
        <div class="row w-100">
            <!-- Gambar kiri -->
            <div class="col-md-6 text-center d-none d-md-flex align-items-center justify-content-center">
                <img src="{{ asset('admin/images/regis.png') }}" alt="Login Image" class="img-fluid" style="max-height: 480px;">
            </div>

            <!-- Form kanan -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div style="width: 100%; max-width: 400px;">
                    <h3 class="text-center mb-4 fw-bold">LOGIN</h3>

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-teal">Login</button>
                        </div>

                        <p class="text-center mt-3">
                            Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="d-flex justify-content-between align-items-center">
        <div><strong>AntriKlinik</strong><br>Developed by Blackcassava</div>
        <div class="footer-links">
            <a href="#">Global</a>
            <a href="#">Indonesia</a>
            <a href="#">Provinsi</a>
            <a href="#">About</a>
        </div>
    </footer>

</body>
</html>
