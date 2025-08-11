<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        :root {
            --primary-color: #667eea;
            --secondary-color: #764ba2;
            --dark-color: #2c3e50;
            --sidebar-width: 260px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            color: #333;
            overflow-x: hidden;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            width: var(--sidebar-width);
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, #212529 0%, #343a40 100%);
            color: white;
            display: flex;
            flex-direction: column;
            box-shadow: 4px 0 20px rgba(0,0,0,0.15);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .sidebar-header {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            background: rgba(255,255,255,0.05);
        }

        .sidebar-header h5 {
            font-weight: 600;
            font-size: 1.1rem;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar-header i {
            font-size: 1.3rem;
            color: var(--primary-color);
        }

        .sidebar-menu {
            flex: 1;
            padding: 20px 0;
        }

        .sidebar a {
            color: rgba(255,255,255,0.8);
            padding: 14px 25px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s ease;
            border-radius: 8px;
            margin: 4px 15px;
            position: relative;
            font-weight: 500;
            font-size: 0.95rem;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background: rgba(255,255,255,0.1);
            color: #fff;
        }

        .sidebar a.active {
             background: var(--primary-color);
        }

        /* Content Area */
        .content {
            margin-left: var(--sidebar-width);
            padding: 30px;
            min-height: 100vh;
        }

        /* User Section */
        .user-section {
            margin-top: auto;
            padding: 20px;
            background: rgba(0,0,0,0.2);
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .user-section .dropdown-toggle::after {
            display: none;
        }

        .dropdown-menu {
             border-radius: 0.5rem;
             border: 1px solid rgba(0,0,0,0.15);
             box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.show {
                transform: translateX(0);
            }
            .content {
                margin-left: 0;
            }
            .mobile-toggle {
                display: block !important;
                position: fixed;
                top: 15px;
                left: 15px;
                z-index: 1001;
                background: var(--dark-color);
                color: white;
                border: none;
                border-radius: 8px;
                width: 45px;
                height: 45px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            }
        }

        .mobile-toggle {
            display: none;
        }

        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    @stack('styles')
</head>
<body>
    <!-- Mobile Toggle Button -->
    <button class="mobile-toggle" id="mobileToggle">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h5><i class="fas fa-tachometer-alt"></i> Admin Panel</h5>
        </div>

        <div class="sidebar-menu">
            <a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-home"></i> Dashboard
            </a>
            <a class="{{ request()->routeIs('admin.guru.*') ? 'active' : '' }}" href="{{ route('admin.guru.index') }}">
                <i class="fas fa-chalkboard-teacher"></i> Manajemen Guru
            </a>
            <a class="{{ request()->routeIs('admin.laporan.index') ? 'active' : '' }}" href="{{ route('admin.laporan.index') }}">
                <i class="fas fa-chart-line"></i> Laporan Absensi
            </a>
        </div>

        <div class="user-section">
            @auth
            <div class="dropdown">
                <a class="dropdown-toggle text-white d-flex align-items-center gap-2 w-100 text-decoration-none" href="#" role="button" data-bs-toggle="dropdown">
                    <i class="fas fa-user-circle fs-4"></i>
                    <span class="fw-bold">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user me-2"></i> Profil
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
    </div>

    <!-- Main Content -->
    <main class="content fade-in">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile toggle functionality
            const mobileToggle = document.getElementById('mobileToggle');
            const sidebar = document.getElementById('sidebar');

            if (mobileToggle) {
                mobileToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('show');
                });
            }

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    if (!sidebar.contains(e.target) && !mobileToggle.contains(e.target)) {
                        sidebar.classList.remove('show');
                    }
                }
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
