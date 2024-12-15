<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cửa Hàng Online')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Cửa Hàng Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary" href="{{ route('products.index') }}">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="{{ route('cart.index') }}">
                            Giỏ Hàng 
                    <span class="badge bg-danger">{{ session('cart') ? count(session('cart')) : 0 }}</span>
                    </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <footer class="bg-light text-center py-3 mt-4">
        <p class="mb-0">© 2024 Cửa Hàng Online. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
