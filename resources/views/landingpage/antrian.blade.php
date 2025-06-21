<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background-color: #f8f9fa;
            padding: 60px 0;
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
        .nav-top {
            background-color: #006871;
            color: white;
            font-size: 14px;
            padding: 5px 0;
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
    </style>
</head>
<body>

<!-- Navbar Top Info -->
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landingpage.index') }}#tentang">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landingpage.infoklinik') }}">Info Klinik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landingpage.antrian') }}">Daftar Antrian</a>
                </li>

                {{-- Tampilkan menu Pendaftaran hanya jika sudah login --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ auth()->check() ? route('landingpage.pendaftaran') : route('login') }}">
                        Pendaftaran
                    </a>
                </li>

                {{-- Tampilkan tombol Login jika belum login, jika sudah login tampilkan nama user atau Logout --}}
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
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
    </nav>

<!-- Hero Section -->
<section class="hero py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Kolom Kiri: Teks -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="text-primary fw-bold">Pendaftaran Antrian Klinik</h2>
                <p class="text-secondary">Mudah dan Efisien dalam Daftar Antrian</p>
                <p class="mb-4">
                    Daftarkan diri Anda secara online dengan mudah dan cepat. Pantau status pemeriksaan Anda, 
                    perbarui data pribadi, dan nikmati pelayanan tanpa antre panjang.
                </p>
                <a href="#" class="btn btn-success">Daftar Sekarang</a>
            </div>

            <!-- Kolom Kanan: Gambar -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('admin/images/antri.png') }}" alt="Gambar Antrian" class="img-fluid" style="max-height: 320px;">
            </div>
        </div>
    </div>
</section>


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
            <select name="klinik_id" class="form-select mx-auto mb-3" style="max-width: 400px;" onchange="this.form.submit()">
                <option selected disabled>-- Pilih Klinik --</option>
                @foreach($kliniks as $klinik)
                    <option value="{{ $klinik->id }}" {{ $selectedKlinikId == $klinik->id ? 'selected' : '' }}>
                        {{ $klinik->nama_klinik }}
                    </option>
                @endforeach
            </select>
        </form>
    </div>
</section>

<!-- Statistik Antrian -->
<section class="py-5">
    <div class="container text-center">
        <h4 class="text-primary mb-4">Antrian Klinik</h4>
        <p class="text-muted">Data antrian hari ini</p>
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="card-antrian bg-white">
                    <h5>Pasien Menunggu</h5>
                    <h2 class="text-danger">{{ $statistik['menunggu'] }}</h2>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="card-antrian bg-white">
                    <h5>Pasien sedang dilayani</h5>
                    <h2>{{ $statistik['dilayani'] }}</h2>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="card-antrian bg-white">
                    <h5>Pasien Selesai</h5>
                    <h2 class="text-success">{{ $statistik['selesai'] }}</h2>
                </div>
            </div>
            
        </div>
    </div>
</section>

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

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
