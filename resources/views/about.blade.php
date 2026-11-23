<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - Portofolio Zunnurain</title>
    @vite('resources/sass/app.scss')
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top bg-purple" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">Zunnurain</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portofolio</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        <section class="py-5">
            <div class="container py-3">
                <div class="row g-5">
                    <div class="col-md-4 text-center">
                        <img src="{{ Vite::asset('resources/images/foto-profil.jpg') }}" alt="Foto profil Zunnurain" class="avatar rounded-circle img-fluid">
                        <h1 class="h3 fw-bold mt-4 mb-1">Zunnurain</h1>
                        <p class="text-secondary">Mahasiswa Ilmu Komputer</p>
                    </div>
                    <div class="col-md-8">
                        <h2 class="fw-bold mb-4">Tentang saya</h2>

                        <h3 class="h5"><i class="bi bi-mortarboard-fill text-purple me-2"></i>Pendidikan</h3>
                        <p class="mb-4">Saat ini saya sedang menempuh pendidikan di bidang Ilmu Komputer.</p>

                        <h3 class="h5 mb-3"><i class="bi bi-tools text-purple me-2"></i>Keahlian</h3>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between"><span>Administrasi Server Linux</span><small class="text-secondary">Menengah</small></div>
                            <div class="progress mt-1"><div class="progress-bar" style="width: 70%"></div></div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between"><span>Jaringan Komputer</span><small class="text-secondary">Menengah</small></div>
                            <div class="progress mt-1"><div class="progress-bar" style="width: 65%"></div></div>
                        </div>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between"><span>Web Development Dasar</span><small class="text-secondary">Dasar</small></div>
                            <div class="progress mt-1"><div class="progress-bar" style="width: 50%"></div></div>
                        </div>

                        <h3 class="h5"><i class="bi bi-heart-fill text-purple me-2"></i>Minat</h3>
                        <p>Saya sangat tertarik dengan teknologi Cloud Computing dan Cyber Security.</p>
                        <span class="badge bg-purple fs-6 fw-normal me-1">Cloud Computing</span>
                        <span class="badge bg-purple fs-6 fw-normal">Cyber Security</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white-50 py-4 text-center">
        <div class="container">
            <small>&copy; 2026 ZUNNURAIN_108052500004. Hosted on zunnurain.lab &mdash; Nginx on Rocky Linux</small>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
