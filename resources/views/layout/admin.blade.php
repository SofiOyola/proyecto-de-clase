<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tusMiniAmigos – Panel Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <span class="logo-icon">🧸</span>
                <div class="logo-text">
                    <span class="logo-title">tusMiniAmigos</span>
                    <span class="logo-sub">Admin</span>
                </div>
            </div>
        </div>

        <nav class="sidebar-nav">
            <ul>
                <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <span class="nav-label">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('admin.productos') ? 'active' : '' }}">
                    <a href="{{ route('admin.productos') }}" class="nav-link">
                        <span class="nav-label">Productos</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('admin.categorias*') ? 'active' : '' }}">
                    <a href="{{ route('admin.categorias') }}" class="nav-link">
                        <span class="nav-label">Categorías</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="sidebar-footer">
            <span class="sidebar-version">v1.0.0</span>
        </div>
    </aside>

    <div class="main-wrapper">
        <header class="topbar">
            <div class="topbar-left">
                <h1 class="topbar-title">@yield('admin-title', 'Panel de Administración')</h1>
            </div>

            <div class="topbar-right">
                <div class="admin-info">
                    <div class="admin-details">
                        <span class="admin-name">Administrador</span>
                        <span class="admin-role">Admin</span>
                    </div>
                    <div class="admin-avatar">A</div>
                </div>
            </div>
        </header>

        <main class="main-content">
            @yield('admin-content')
        </main>
    </div>

</body>
</html>