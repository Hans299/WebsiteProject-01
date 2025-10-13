<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'News Portal Admin')</title>

    {{-- Bootstrap CSS & JS from Vite --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- Google Fonts & Icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    <style>
        body {
            font-family: 'Newsreader', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle; /* Better alignment with text */
        }
        .sidebar {
            width: 260px;
            min-height: 100vh;
        }
        .content-wrapper {
            width: calc(100% - 260px);
        }
    </style>
</head>
<body class="bg-light">

<div class="d-flex">
    <aside class="sidebar bg-white border-end d-flex flex-column flex-shrink-0">
        <div class="p-4">
            <div class="d-flex align-items-center gap-3 mb-4">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWdySbvFSbB1HwsVNcAcym2Wc-KuYbsCHq3skX9Zn0w_1HKgdoyl4m1YtvHabh3dbAUjMUtN-jCdgOlQLY78G5YTimNowO_7lGneBvRWnn8jJMSsU4nWR9umd-nnVnSh9tjDdaDqFHWY5yDRgEEUS7uczfpKvupvzWdAFwh0NSCUg1EQH_YEp1E7dDxyodEQtTvL02gxRgg256sB_HBUPBQE12phE-yx6BiN9_Docmu297anwwHSRZ0QU08-2wITCWnpak_n7WKnw" alt="Admin avatar" class="rounded-circle" width="40" height="40">
                <div>
                    <h1 class="fs-6 fw-medium text-dark mb-0">Admin</h1>
                    <p class="small text-muted mb-0">admin@example.com</p>
                </div>
            </div>
                <a class="nav-link text-dark" href="#">
                    <span class="material-symbols-outlined me-2">dashboard</span>
                    Dashboard
                </a>
                <a class="nav-link text-dark" href="#">
                    <span class="material-symbols-outlined me-2">article</span>
                    Articles
                </a>
                <a class="nav-link text-dark" href="#">
                    <span class="material-symbols-outlined me-2">group</span>
                    Users
                </a>
                <a class="nav-link text-dark" href="#">
                    <span class="material-symbols-outlined me-2">sell</span>
                    Categories
                </a>
                <a class="nav-link text-dark" href="#">
                    <span class="material-symbols-outlined me-2">settings</span>
                    Settings
                </a>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper d-flex flex-column">
        <header class="navbar navbar-expand-lg bg-white border-bottom px-4 py-2">
            <div class="d-flex align-items-center gap-2 text-dark">
                 <svg fill="currentColor" class="text-danger" height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"></path>
                </svg>
                <h2 class="fs-5 fw-bold mb-0">NewsPortal</h2>
            </div>
            <div class="ms-auto d-flex align-items-center gap-3">
                <div class="input-group">
                     <span class="input-group-text bg-light border-end-0">
                        <span class="material-symbols-outlined">search</span>
                     </span>
                    <input class="form-control border-start-0" placeholder="Search articles, users...">
                </div>
                <button class="btn btn-light rounded-circle">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            </div>
        </header>

        <main class="flex-grow-1 p-4 bg-light">
            @yield('content')
        </main>
    </div>
</div>

</body>
</html>