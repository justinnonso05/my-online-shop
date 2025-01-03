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
    <nav>
        <div class="nav-content">
            <div class="logo">JC SHOP</div>
            <div class="nav-toggle" id="navToggle">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('home') }}/#journey">Journey</a></li>
                <li><a href="{{ route('add-products') }}">Add Product</a></li>
                <li><a href="{{ route('shop') }}">Shop</a></li>
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
                <h3>About</h3>
                <p>A passionate developer documenting the journey through code, one commit at a time.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-center">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('journey') }}">Journey</a></li>
                    <li><a href="{{ route('shop') }}">Shop</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <h3>Contact</h3>
                <ul class="contact-info">
                    <li><i class="fas fa-envelope"></i> hello@myjourney.dev</li>
                    <li><i class="fas fa-map-marker-alt"></i> San Francisco, CA</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} My Journey. All rights reserved.</p>
        </div>
    </footer>
    
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>
