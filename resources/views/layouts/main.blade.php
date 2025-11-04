<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul ?? 'Halaman' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* gunakan path dari folder public/images */
            background: url("{{ asset('images/bckground.webp') }}") no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.6);
        }
        .navbar a {
            color: white !important;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container justify-content-between">
            <div>
                <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                <a class="nav-link d-inline" href="{{ route('about') }}">About</a>
            </div>
            <div class="text-center">
                <small>{{ $pembuat ?? '2301010022 - ENDAH KOMARIYAH LESTARI (GENAP)' }}</small>
            </div>
            <div>
                <small>2301010051 - I MADE RIKI WIDIASTANA SANJAYA (GANJIL)</small>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
