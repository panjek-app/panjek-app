<!DOCTYPE html>
<html lang="id">
<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANJEK - Solusi UMKM Lokal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .navbar { background-color: #2c3e50; }
        .navbar-brand, .nav-link { color: white !important; }
        .btn-primary { background-color: #3498db; border: none; }
        .footer { background: #2c3e50; color: white; padding: 20px 0; margin-top: 50px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><i class="fas fa-motorcycle me-2"></i>PANJEK</a>
        <div class="d-flex">
            <a class="nav-link me-3" href="/food">Menu Food</a>
            <a class="nav-link" href="/company">Tentang Kami</a>
        </div>
    </div>
</nav>

<div class="container mt-4 mb-5">
    @yield('content')
</div>

<footer class="footer text-center">
    <div class="container">
        <p class="mb-0">&copy; 2026 PANJEK. Mendukung UMKM Lokal Indonesia.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
