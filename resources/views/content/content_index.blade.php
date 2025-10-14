{{-- resources/views/layouts/app.blade.php --}}

<!DOCTYPE html>
{{-- Atur data-bs-theme="dark" untuk mode gelap --}}
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'NewsPortal')</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Bootstrap Icons (Opsional, untuk ikon) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap" rel="stylesheet">

    {{-- CSS Kustom untuk menyesuaikan tema Bootstrap --}}
    <style>
        body {
            font-family: 'Newsreader', serif;
        }

        /* Mengubah warna primer Bootstrap agar sesuai dengan desain */
        :root {
            --bs-primary: #ec1313;
            --bs-primary-rgb: 236, 19, 19;
            --bs-link-color-rgb: 236, 19, 19;
            --bs-link-hover-color-rgb: 180, 15, 15;
        }

        .btn-primary {
            --bs-btn-bg: var(--bs-primary);
            --bs-btn-border-color: var(--bs-primary);
            --bs-btn-hover-bg: #c91010;
            --bs-btn-hover-border-color: #c91010;
        }

        /* Styling untuk gambar sebagai background */
        .bg-cover {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Membuat header semi-transparan seperti di desain asli */
        .navbar.sticky-top {
            background-color: rgba(var(--bs-body-bg-rgb), 0.85);
            backdrop-filter: blur(8px);
        }

        /* Menghilangkan scrollbar di section trending */
        .horizontal-scroll {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
        .horizontal-scroll::-webkit-scrollbar {
            display: none; /* Chrome, Safari, and Opera */
        }
    </style>
</head>
<body class="bg-body-tertiary">

    {{-- Header / Navbar --}}
    <header>
        <nav class="navbar navbar-expand-md sticky-top border-bottom border-primary-subtle">
            <div class="container-fluid" style="max-width: 1280px;">
                <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                    {{-- SVG Logo bisa disisipkan di sini jika perlu --}}
                    <svg class="text-primary" width="24" height="24" fill="currentColor" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm.5-6.5a.5.5 0 0 1 .5.5v3.763l1.89 1.134a.5.5 0 1 1-.5.866L8.5 4.737V-6a.5.5 0 0 1 .5-.5z"/></svg>
                    <h2 class="h5 mb-0 fw-bold">NewsPortal</h2>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-md-4">
                        <li class="nav-item"><a class="nav-link" href="#">World</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Politics</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Tech</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
                    </ul>
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <span class="input-group-text bg-body-secondary border-end-0"><i class="bi bi-search"></i></span>
                            <input class="form-control bg-body-secondary border-start-0" type="search" placeholder="Search" aria-label="Search">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    {{-- Konten Utama Halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-body-secondary mt-5 py-5">
        <div class="container" style="max-width: 1280px;">
            <div class="row g-4">
                <div class="col-12 col-md-4 col-lg-3">
                    <h3 class="h5 fw-bold mb-3">NewsPortal</h3>
                    <p class="text-muted">Your trusted source for the latest news from around the world.</p>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <h3 class="h6 fw-semibold mb-3">Quick Links</h3>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a class="text-decoration-none text-body" href="#">About Us</a></li>
                        <li><a class="text-decoration-none text-body" href="#">Contact</a></li>
                        <li><a class="text-decoration-none text-body" href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <h3 class="h6 fw-semibold mb-3">Categories</h3>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a class="text-decoration-none text-body" href="#">World</a></li>
                        <li><a class="text-decoration-none text-body" href="#">Politics</a></li>
                        <li><a class="text-decoration-none text-body" href="#">Tech</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3">
                    <h3 class="h6 fw-semibold mb-3">Follow Us</h3>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-muted fs-4"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-muted fs-4"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-muted fs-4"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center text-muted border-top pt-4 mt-4">
                <p>&copy; {{ date('Y') }} NewsPortal. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>