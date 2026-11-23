<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Portofolio Zunnurain</title>
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
        <!-- Hero -->
        <section class="hero py-5">
            <div class="container py-4">
                <div class="row align-items-center g-5">
                    <div class="col-md-7 order-2 order-md-1">
                        <h1 class="display-4 fw-bold">Halo, saya Zunnurain.</h1>
                        <p class="fs-5 mt-3">Mahasiswa Ilmu Komputer yang suka mengurus server Linux, membangun jaringan, dan membuat website. Saya <strong>ZUNNURAIN_108052500004</strong>, dan ini ringkasan diri saya.</p>
                        <div class="d-flex flex-column flex-sm-row gap-3 mt-4">
                            <a href="{{ route('portfolio') }}" class="btn btn-purple btn-lg px-4">Lihat Portofolio</a>
                            <a href="{{ route('about') }}" class="btn btn-outline-purple btn-lg px-4">Tentang Saya</a>
                        </div>
                    </div>
                    <div class="col-md-5 order-1 order-md-2 text-center">
                        <img src="{{ Vite::asset('resources/images/foto-profil.jpg') }}" alt="Foto profil Zunnurain" class="avatar rounded-circle img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- Ringkasan -->
        <section class="py-5">
            <div class="container py-3">
                <h2 class="fw-bold mb-4">Yang saya kerjakan</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 p-4">
                            <span class="icon-box bg-purple mb-3"><i class="bi bi-hdd-network"></i></span>
                            <h3 class="h5">Server Linux</h3>
                            <p class="mb-0 text-secondary">Konfigurasi Nginx dan BIND9 di Rocky Linux.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 p-4">
                            <span class="icon-box bg-info mb-3"><i class="bi bi-diagram-3"></i></span>
                            <h3 class="h5">Jaringan Komputer</h3>
                            <p class="mb-0 text-secondary">Merancang topologi LAN dengan Cisco Packet Tracer.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 p-4">
                            <span class="icon-box bg-warning mb-3"><i class="bi bi-code-slash"></i></span>
                            <h3 class="h5">Web Development</h3>
                            <p class="mb-0 text-secondary">Membuat website statis responsif dengan Bootstrap.</p>
                        </div>
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
