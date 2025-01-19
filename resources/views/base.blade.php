<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/x-icon">
    <title>@yield('title', 'My Journey')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="nav-content">
            <div class="logo">JC SHOP</div>
            <div class="nav-toggle" id="navToggle">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('home') }}/#journey">About</a></li>
                <li><a href="{{ route('products.shop') }}">Shop</a></li>
                <li><a href="{{ route('products.add') }}">Add Product</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-left">
                <p>A software developer with passion to build and deliver.</p>
                <div class="social-links">
                    <a href="https://github.com/justinnonso05" target="_blank" class="social-link"><i class="fab fa-github"></i></a>
                    <a href="https://x.com/justondev" target="_blank" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/justinonso05" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-center">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('home') }}/#journey">About</a></li>
                    <li><a href="{{ route('products.shop') }}">Shop</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <h3>Contact</h3>
                <ul class="contact-info">
                    <li><i class="fas fa-envelope"></i> justondev05@gmail.com</li>
                    <li><i class="fas fa-map-marker-alt"></i> University Of Ibadan</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} JC SHOP. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('navToggle').addEventListener('click', function() {
        document.querySelector('.nav-links').classList.toggle('active');
        document.querySelector(".nav").classList.toggle('active');
    });
    </script>
    
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>
