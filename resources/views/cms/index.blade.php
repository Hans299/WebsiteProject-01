<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>News Portal Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>

<div class="d-flex min-vh-100">
    <aside class="w-280px bg-body border-end d-flex flex-column flex-shrink-0">
        <div class="p-4">
             <div class="d-flex align-items-center gap-3 mb-4">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWdySbvFSbB1HwsVNcAcym2Wc-KuYbsCHq3skX9Zn0w_1HKgdoyl4m1YtvHabh3dbAUjMUtN-jCdgOlQLY78G5YTimNowO_7lGneBvRWnn8jJMSsU4nWR9umd-nnVnSh9tjDdaDqFHWY5yDRgEEUS7uczfpKvupvzWdAFwh0NSCUg1EQH_YEp1E7dDxyodEQtTvL02gxRgg256sB_HBUPBQE12phE-yx6BiN9_Docmu297anwwHSRZ0QU08-2wITCWnpak_n7WKnw" alt="Admin avatar" class="rounded-circle" width="40" height="40">
                <div>
                    <h1 class="fs-6 fw-medium mb-0">Admin</h1>
                    <p class="small text-muted mb-0">admin@example.com</p>
                </div>
            </div>
            <nav class="nav flex-column gap-2">
                <a class="nav-link d-flex align-items-center gap-3 active-nav" href="#">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="fw-medium">Dashboard</span>
                </a>
                <a class="nav-link d-flex align-items-center gap-3 text-body-secondary" href="#">
                    <span class="material-symbols-outlined">article</span>
                    <span>Articles</span>
                </a>
                <a class="nav-link d-flex align-items-center gap-3 text-body-secondary" href="#">
                    <span class="material-symbols-outlined">group</span>
                    <span>Users</span>
                </a>
                <a class="nav-link d-flex align-items-center gap-3 text-body-secondary" href="#">
                    <span class="material-symbols-outlined">sell</span>
                    <span>Categories</span>
                </a>
                <a class="nav-link d-flex align-items-center gap-3 text-body-secondary" href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <span>Settings</span>
                </a>
            </nav>
        </div>
    </aside>

    <div class="flex-grow-1 d-flex flex-column">
        <header class="d-flex align-items-center justify-content-between border-bottom px-4 py-3 bg-body">
            <div class="d-flex align-items-center gap-3">
                <div class="text-primary" style="width: 24px; height: 24px;">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"></path>
                    </svg>
                </div>
                <h2 class="h5 fw-bold mb-0">NewsPortal</h2>
            </div>
            <div class="d-flex flex-grow-1 justify-content-end gap-3 align-items-center">
                <div class="position-relative" style="max-width: 250px;">
                    <span class="material-symbols-outlined position-absolute text-muted" style="left: 12px; top: 50%; transform: translateY(-50%);">search</span>
                    <input class="form-control ps-5" placeholder="Search articles, users..."/>
                </div>
                <button class="btn btn-light rounded-circle">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                 <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB27F8uzbNpFtTAuTDQzOVxXomtvlmPY7TiAV0ug4Cukto3A_3iAI-qmNYQT9-8Dhfkw6OIKEGC7DIQVNlAbl0iPPWT1Z3a9zdFkBBzWzxeS-FSRAwgNc0-YxD9gYyKx--7rt5SzhMFyXdAoyveqyVDyuPqJICHqS0fShGjcqY0jyuEZI-UYjvYi8Jf1HSotgMpxbBM6R_94XoPRn4wnd8In23yaFPD4bsr8FwP33W17H7YcDD6i5ny_vA8De0BfphYp3tJ9dkwQm8" alt="User avatar" class="rounded-circle" width="40" height="40">
            </div>
        </header>

        <main class="flex-grow-1 p-4 bg-body-tertiary">
            @yield('content')
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>