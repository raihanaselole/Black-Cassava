<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Antrian - Antri Klinik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/images/logo.png')}}" />
    <!-- Bootstrap & Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body { font-family: 'Segoe UI', sans-serif; }
        .topbar { background-color: #006871; padding: 8px 40px; }
        .topbar p { margin: 0; color: white; font-size: 14px; }
        .navbar-custom { background-color: #ffffff; border-bottom: 2px solid #ddd; padding: 15px 40px; }
        .navbar-brand { display: flex; align-items: center; gap: 8px; font-weight: bold; color: #006666; }
        .navbar-brand img { height: 40px; }
        .nav-link { color: #006871; margin-left: 25px; font-weight: 500; }
        .form-wrapper { padding: 60px 20px; }
        footer { background-color: #003c3c; color: white; padding: 20px 40px; margin-top: 80px; }
        footer .footer-links { display: flex; flex-wrap: wrap; justify-content: flex-end; gap: 30px; }
        .footer-links a { color: white; text-decoration: none; }
        .btn-teal { background-color: #006871; color: white; }
        .btn-teal:hover { background-color: #004f4f; }
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

    <!-- Pendaftaran Section -->
    <div class="container-fluid form-wrapper">
        <div class="row align-items-center">
            <!-- Gambar kiri -->
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <img src="{{ asset('admin/images/daftar.png') }}" alt="Daftar Image" class="img-fluid" style="max-height: 500px;">
            </div>

            <!-- Form kanan -->
            <div class="col-md-6">
                <div class="mx-auto" style="max-width: 480px;">
                    @auth
                        <h3 class="text-center mb-4 fw-bold">Form Pendaftaran Antrian</h3>
                        <form method="POST" action="{{ route('pasien.store.user') }}">
                            @csrf
                            <input type="hidden" name="source" value="user">


                            <div class="mb-3">
                                <label for="klinik_id" class="form-label">Pilih Klinik</label>
                                <select name="klinik_id" class="form-control" required>
                                    @foreach($kliniks as $klinik)
                                        <option value="{{ $klinik->id }}">{{ $klinik->nama_klinik }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Pasien</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" name="nik" class="form-control" maxlength="16" required>
                            </div>

                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="keluhan" class="form-label">Keluhan</label>
                                <textarea name="keluhan" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-teal">Daftar Sekarang</button>
                            </div>
                        </form>
                    @endauth

                    @guest
                        <div class="alert alert-warning text-center">
                            <h5>Silakan login terlebih dahulu untuk mengakses halaman pendaftaran.</h5>
                            <a href="{{ route('login') }}" class="btn btn-primary mt-3">Login</a>
                        </div>
                    @endguest
                </div>
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
