<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'e-Absen Guru')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
        }
        .app-container {
            max-width: 412px;
            margin: 0 auto;
            background-color: #ffffff;
            min-height: 100vh;
            position: relative;
            padding-bottom: 70px; /* Space for bottom nav */
        }
        .app-header {
            background-color: #508eeb;
            color: white;
            padding: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .app-header .title {
            font-weight: 600;
            font-size: 1.1rem;
        }
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            max-width: 412px;
            margin: 0 auto;
            background-color: white;
            border-top: 1px solid #e0e0e0;
            display: flex;
            justify-content: space-around;
            height: 65px;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.05);
        }
        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex: 1;
            text-decoration: none;
            color: #6c757d;
            transition: color 0.2s ease;
        }
        .nav-item.active, .nav-item:hover {
            color: #508eeb;
        }
        .nav-item i { font-size: 1.2rem; }
        .nav-item span { font-size: 0.75rem; margin-top: 4px; }
    </style>
    @stack('styles')
</head>
<body>
    <div class="app-container">
        <header class="app-header">
            <h1 class="title">@yield('title')</h1>
        </header>

        <main class="p-3">
            @yield('content')
        </main>

        <nav class="bottom-nav">
            <a href="{{ route('guru.dashboard') }}" class="nav-item {{ request()->routeIs('guru.dashboard') ? 'active' : '' }}">
                <i class="fas fa-home"></i>
                <span>Beranda</span>
            </a>
            <a href="{{ route('guru.profil.index') }}" class="nav-item {{ request()->routeIs('guru.profil.index') ? 'active' : '' }}">
                <i class="fas fa-user"></i>
                <span>Profil</span>
            </a>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
