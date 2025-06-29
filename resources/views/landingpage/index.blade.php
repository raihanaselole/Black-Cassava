<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda - Antri Klinik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/images/logo.png')}}" />
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
        .hero {
            background-color: #f5f5f5;
            padding: 60px 20px;
        }
        .hero h2 {
            font-weight: bold;
            color: #006871;
        }
        .hero p {
            color: #555;
        }
        .info-section {
            padding: 60px 20px;
        }
        .fitur-box {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            height: 100%;
        }
        .fitur-box i {
            font-size: 30px;
            margin-bottom: 10px;
            color: #006871;
        }
        .btn-teal {
            background-color: #006871;
            color: white;
        }
        .btn-teal:hover {
            background-color: #004f4f;
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
        footer {
            background-color: #003c3c;
            color: white;
            padding: 20px 40px;
            margin-top: 80px;
        }
        footer .footer-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
            gap: 20px;
        }
        .footer-links a {
            color: white;
            text-decoration: none;
        }
        @media (max-width: 767.98px) {
            .navbar-collapse {
                background-color: #fff;
                padding: 10px;
            }
            .footer-links {
                justify-content: center;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <!-- Topbar -->
    <div class="topbar">
        <p class="text-end">Hubungi kami: +62 856-9098-9098</p>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="{{ route('landingpage.index') }}">
                <img src="{{ asset('admin/images/logo.png') }}" alt="Logo">
                Antri <span>Klinik</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('landingpage.index') }}#tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('landingpage.infoklinik') }}">Info Klinik</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('landingpage.antrian') }}">Daftar Antrian</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ auth()->check() ? route('landingpage.pendaftaran') : route('login') }}">Pendaftaran</a></li>
                    @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @endguest
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item text-danger" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2>Selamat Datang di<br><span class="text-primary">Antri Klinik</span></h2>
                    <p>Solusi Antrian Digital Yang Cepat, Praktis, dan Nyaman</p>
                    <a href="{{ auth()->check() ? route('landingpage.pendaftaran') : route('login') }}" class="btn btn-teal mt-3">Daftar Sekarang</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('admin/images/welcome.png') }}" alt="Hero" class="img-fluid" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section bg-white">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="{{ asset('admin/images/regis.png') }}" class="img-fluid" style="max-height: 300px;" alt="Welcome">
                </div>
                <div class="col-md-6">
                    <p>
                        Selamat datang di layanan Antrian Klinik Depok, solusi modern untuk pelayanan kesehatan yang lebih cepat, nyaman, dan teratur.
                        Kami memahami bahwa waktu Anda sangat berharga, dan menunggu dalam antrian panjang sering kali menjadi pengalaman yang melelahkan,
                        terutama saat kondisi kesehatan sedang tidak optimal.
                        Dengan sistem antrian online ini, Anda tidak perlu lagi datang dari awal hanya untuk mendapatkan nomor antrian.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kenapa Harus -->
    <section class="info-section bg-white py-5">
        <div class="container">
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('admin/images/ques.png') }}" alt="Layanan Antri Klinik" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h4 class="mb-3 text-success">Kenapa Harus Antri Klinik?</h4>
                    <p>
                        Kami hadir sebagai solusi digital bagi masyarakat yang menginginkan pelayanan kesehatan yang cepat, tertib, dan nyaman.
                        Sistem antrian online kami dirancang untuk memangkas waktu tunggu dan mempermudah proses pendaftaran tanpa harus datang lebih awal.
                    </p>
                    <ul class="list-unstyled ps-3">
                        <li>✔️ Akses real-time terhadap informasi antrian</li>
                        <li>✔️ Proses pendaftaran mudah dan cepat melalui website</li>
                        <li>✔️ Riwayat kunjungan pasien tercatat rapi</li>
                    </ul>
                    <a href="{{ auth()->check() ? route('landingpage.pendaftaran') : route('login') }}" class="btn btn-success mt-3">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Komitmen -->
    <section class="bg-light py-5">
        <div class="container">
            <h4 class="text-center text-success mb-4">Komitmen Kami</h4>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p class="text-center fs-5">
                        Kami percaya bahwa teknologi harus mempermudah hidup, termasuk dalam urusan kesehatan.
                        Oleh karena itu, kami berkomitmen untuk menghadirkan <strong>pengalaman terbaik</strong> yang lebih manusiawi,
                        tanpa stres, dan tanpa antre panjang. Bersama tenaga medis profesional dan sistem yang terdepan,
                        kami siap melayani Anda dengan <strong>sepenuh hati</strong> demi kenyamanan dan kesehatan Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="fitur-box h-100">
                        <i class="fas fa-mobile-alt"></i>
                        <h5 class="mt-2">Daftar Online</h5>
                        <p>Pasien bisa daftar dari rumah tanpa antrean fisik</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="fitur-box h-100">
                        <i class="fas fa-clock"></i>
                        <h5 class="mt-2">Antrian Real-Time</h5>
                        <p>Lihat daftar antrian secara langsung</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="fitur-box h-100">
                        <i class="fas fa-notes-medical"></i>
                        <h5 class="mt-2">Riwayat Pasien</h5>
                        <p>Data kunjungan aman & tercatat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 px-4 py-3">
        <div><strong>AntriKlinik</strong><br>Developed by Blackcassava</div>
        <div class="footer-links">
            <a href="#">Global</a>
            <a href="#">Indonesia</a>
            <a href="#">Provinsi</a>
            <a href="#">About</a>
        </div>
    </footer>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
