<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Akun - Antri Klinik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Segoe UI', sans-serif;
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

        .register-title {
            text-align: center;
            color: #006666;
            font-weight: bold;
            margin-top: 30px;
        }

        .form-box {
            max-width: 550px;
            margin: 30px auto;
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 5px 20px rgba(0,0,0,0.1);
        }

        .form-control {
            border: 1.8px solid #006666;
            border-radius: 8px;
        }

        .btn-submit {
            background-color: #006666;
            color: white;
            font-weight: 600;
        }

        .btn-submit:hover {
            background-color: #004d4d;
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

        .illustration {
            display: block;
            margin: 0 auto 30px;
            max-width: 250px;
        }

        .topbar {
            background-color: #006871;
            padding: 8px 40px;
            color: white;
            font-size: 14px;
            text-align: right;
        }

    </style>
</head>
<body>

        <!-- Topbar -->
    <div style="background-color: #006871; padding: 8px 40px;">
        <p class="mb-0 text-white text-end small">Hubungi kami: +62 856-9098-9098</p>
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

    <!-- Title -->
    <h2 class="register-title">REGISTRASI AKUN</h2>

    <!-- Registration Form -->
    <div class="form-box">
        <img src="{{ asset('admin/images/regis.png') }}" alt="Illustration" class="illustration">

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
            </div>

            <div class="mb-3">
                <input type="text" name="nik" class="form-control" placeholder="NIK" required>
            </div>

            <div class="mb-3">
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="" disabled selected>Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>

            </div>

            <div class="mb-3">
                <input type="text" name="no_hp" class="form-control" placeholder="Nomor Telepon (WhatsApp)" required>
            </div>

            <div class="mb-3">
                <h6>Tanggal Lahir</h6>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
            </div>

            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <div class="mb-4">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
            </div>

            <button type="submit" class="btn btn-submit w-100">Submit</button>
        </form>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
