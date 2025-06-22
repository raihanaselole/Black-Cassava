<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Info Klinik - Antri Klinik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/images/logo.png')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .klinik-card {
            background-color: #f5f5f5;
            border-radius: 25px;
            padding: 30px;
            margin-bottom: 40px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }
        .klinik-image {
            border-radius: 15px;
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .icon {
            margin-right: 10px;
            color: #006871;
        }
        h5.fw-bold {
            font-size: 1.5rem;
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
            gap: 30px;
        }
        .footer-links a {
            color: white;
            text-decoration: none;
        }
        @media (max-width: 768px) {
            .footer-links {
                justify-content: center;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Topbar -->
    <div class="bg-dark text-white py-2 px-4 d-flex justify-content-between align-items-center" style="background-color: #006871 !important;">
        <small>Hubungi Kami</small>
        <small><i class="fas fa-phone"></i> 021-6546-9091</small>
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

    <!-- Hero Title -->
    <section class="text-center py-5">
        <h3 style="color: #006871;">INFO KLINIK DEPOK</h3>
    </section>

    <!-- Info Klinik Section -->
    <div class="container">
        <!-- Klinik Card -->
        <div class="klinik-card row align-items-center">
            <div class="col-12 col-md-5 mb-4 mb-md-0">
                <img src="{{ asset('admin/images/Klinik Agha Depok.png') }}" alt="Klinik AGHA" class="klinik-image">
            </div>
            <div class="col-12 col-md-7">
                <h5 class="fw-bold">KLINIK AGHA</h5>
                <p><i class="fas fa-map-marker-alt icon"></i> Jl. Bojong Rangkek I, Cipayung Jaya, Kota Depok</p>
                <p><i class="fas fa-phone icon"></i> 0822-7560-1002</p>
                <p><i class="fas fa-clock icon"></i> Buka 24 Jam</p>
                <a href="https://maps.app.goo.gl/R6S7PzJAPg8dhV9d7" class="text-decoration-underline text-info">Lihat di Google Maps</a>
            </div>
        </div>

        <div class="klinik-card row align-items-center">
            <div class="col-12 col-md-5 mb-4 mb-md-0">
                <img src="{{ asset('admin/images/Klinik Kita Depok.png') }}" alt="Klinik Kita" class="klinik-image">
            </div>
            <div class="col-12 col-md-7">
                <h5 class="fw-bold">KLINIK KITA 1 & 2</h5>
                <p><i class="fas fa-map-marker-alt icon"></i> Jl. Jambi No.17, Grogol, Limo, Kota Depok</p>
                <p><i class="fas fa-phone icon"></i> (021)77268810</p>
                <p><i class="fas fa-clock icon"></i> Buka 24 Jam</p>
                <a href="https://maps.app.goo.gl/fUQcfHyTmnF2iN499" class="text-decoration-underline text-info">Lihat di Google Maps</a>
            </div>
        </div>

        <div class="klinik-card row align-items-center">
            <div class="col-12 col-md-5 mb-4 mb-md-0">
                <img src="{{ asset('admin/images/klinik ihc.jpg') }}" alt="Klinik IHC" class="klinik-image">
            </div>
            <div class="col-12 col-md-7">
                <h5 class="fw-bold">Klinik Utama Pertamina IHC Depok</h5>
                <p><i class="fas fa-map-marker-alt icon"></i> Jl. Margonda, Pondok Cina, Kota Depok</p>
                <p><i class="fas fa-clock icon"></i> 08:00–22:00</p>
                <p><i class="fas fa-phone icon"></i> 0819-5262-5003</p>
                <a href="https://maps.app.goo.gl/7vyyM8DNBcRgNNDb9" class="text-decoration-underline text-info">Lihat di Google Maps</a>
            </div>
        </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
