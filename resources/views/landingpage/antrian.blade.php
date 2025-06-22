<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Klinik</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/images/logo.png')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background-color: #f8f9fa;
        }
        .card-antrian {
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            border-radius: 12px;
            text-align: center;
            padding: 30px;
        }
        .section-gray {
            background-color: #f3f3f3;
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
        .topbar {
            background-color: #006871;
            padding: 8px 40px;
        }
        .topbar p {
            margin: 0;
            color: white;
            font-size: 14px;
        }
        footer {
            background-color: #003c3c;
            color: white;
            padding: 20px 40px;
        }
        .footer-links a {
            color: white;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .nav-link {
                margin-left: 0;
            }
            .footer-links {
                justify-content: center !important;
                gap: 15px;
                flex-wrap: wrap;
            }
        }
    </style>
</head>
<body>

<!-- Navbar Top Info -->
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
<section class="hero py-5 bg-light">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 style="color: #006871;">Pendaftaran Antrian Klinik</h2>
                <p class="text-secondary">Mudah dan Efisien dalam Daftar Antrian</p>
                <p>Daftarkan diri Anda secara online dengan mudah dan cepat. Pantau status pemeriksaan Anda, perbarui data pribadi, dan nikmati pelayanan tanpa antre panjang.</p>
                <a href="{{ auth()->check() ? route('landingpage.pendaftaran') : route('login') }}" class="btn btn-success mt-3">Daftar Sekarang</a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('admin/images/antri.png') }}" alt="Gambar Antrian" class="img-fluid" style="max-height: 320px;">
            </div>
        </div>
    </div>
</section>


<!-- Nomor Antrian -->
<!-- Nomor Antrian -->
<section class="py-5">
    <div class="container text-center">
        <div class="card-antrian mx-auto" style="max-width: 300px;">
            <h5>Nomor Antrian Anda</h5>
            @if($nomorAntrian)
                <h1 class="display-4 text-success">{{ $nomorAntrian }}</h1>
                <p class="text-muted">Nama: {{ $pasienNama }}</p>
            @else
                <h1 class="display-4 text-secondary">Belum Ada</h1>
            @endif
        </div>
    </div>
</section>


<!-- Pilih Klinik -->
<section class="section-gray py-5">
    <div class="container">
        <form method="GET" action="{{ route('landingpage.antrian') }}">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-10">
                    <select name="klinik_id" class="form-select" onchange="this.form.submit()">
                        <option selected disabled>-- Pilih Klinik --</option>
                        @foreach($kliniks as $klinik)
                            <option value="{{ $klinik->id }}" {{ $selectedKlinikId == $klinik->id ? 'selected' : '' }}>
                                {{ $klinik->nama_klinik }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Statistik Antrian -->
<section class="py-5">
    <div class="container text-center">
        <h4 style="color: #006871;">Antrian Klinik</h4>
        <p class="text-muted">Data antrian hari ini</p>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card-antrian bg-white">
                    <h5>Pasien Terdaftar</h5>
                    <h2 class="text-danger">{{ $statistik['menunggu'] }}</h2>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card-antrian bg-white">
                    <h5>Pasien sedang dilayani</h5>
                    <h2>{{ $statistik['dilayani'] }}</h2>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card-antrian bg-white">
                    <h5>Pasien Selesai</h5>
                    <h2 class="text-success">{{ $statistik['selesai'] }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 px-4 py-3">
    <div><strong>AntriKlinik</strong><br>Developed by Blackcassava</div>
    <div class="footer-links d-flex flex-wrap justify-content-center justify-content-md-end gap-3">
        <a href="#">Global</a>
        <a href="#">Indonesia</a>
        <a href="#">Provinsi</a>
        <a href="#">About</a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
