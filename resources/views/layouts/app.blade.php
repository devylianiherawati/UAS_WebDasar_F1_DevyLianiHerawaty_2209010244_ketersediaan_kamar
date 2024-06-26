<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Devi Liani Herawati - @yield('title', 'Beranda')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #36454F;  /* Abu-abu Tua */
            --secondary-color: #98FF98;  /* Hijau Muda */
            --background-color: #FFFFF0;  /* Putih Gading */
            --text-color: #36454F;  /* Abu-abu Tua */
            --navbar-background: #008080;  /* Biru Laut */
            --footer-background: #36454F;  /* Abu-abu Tua */
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .sidebar {
            background-color: var(--navbar-background);
            min-width: 250px;
            padding: 1rem;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centering the navigation vertically */
            align-items: center; /* Centering the content horizontally */
            z-index: 1000;
        }

        .sidebar .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--background-color) !important;
            margin-bottom: 2rem;
        }
        
        .sidebar .nav-link {
            color: var(--background-color) !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }

        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            color: var(--secondary-color) !important;
        }
        
        .sidebar .navbar-nav {
            flex-direction: column;
            width: 100%; /* Ensure the links take full width */
            text-align: center; /* Center the text in the links */
        }

        .main-content {
            margin-left: 250px; /* Width of the sidebar */
            padding: 2rem;
            flex-grow: 1;
            transition: margin-left 0.3s ease;
        }

        .main-container {
            background-color: var(--background-color);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,.1);
            padding: 2rem;
        }
        
        .footer {
            background-color: var(--footer-background);
            color: var(--background-color);
            padding: 1.5rem 0;
            text-align: center;
            margin-top: 2rem;
        }
        
        .alert {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        
        .btn-primary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0,0,0,.1);
        }

        /* Table styles */
        .table {
            margin-top: 1rem;
        }

        .table th {
            background-color: var(--primary-color);
            color: var(--background-color);
        }

        .table-hover tbody tr:hover {
            background-color: var(--background-color);
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                height: auto;
                width: 100%;
                min-width: 0;
            }

            .main-content {
                margin-left: 0;
                margin-top: 2rem;
            }

            body {
                flex-direction: column;
            }
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <div class="sidebar">
        <a class="navbar-brand" href="{{ url('/') }}">Hospital Devi Liani Herawati</a>
        <nav class="navbar-nav flex-column">
            <a class="nav-link {{ Request::is('tipe_kamar*') ? 'active' : '' }}" href="{{ route('tipe_kamar.index') }}">Level  Room</a>
            <a class="nav-link {{ Request::is('kamar*') ? 'active' : '' }}" href="{{ route('kamar.index') }}">Room</a>
            <a class="nav-link {{ Request::is('pasien*') ? 'active' : '' }}" href="{{ route('pasien.index') }}">Patient</a>
            <a class="nav-link {{ Request::is('reservasi*') ? 'active' : '' }}" href="{{ route('reservasi.index') }}">Administrasi</a>
        </nav>
    </div>

    <div class="main-content">
        <div class="main-container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <span>&copy;  Hospital Devi Liani Herawati.</span>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>
