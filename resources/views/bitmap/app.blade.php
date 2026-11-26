<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitmap IT Solution</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Font for that modern look -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bitmap.css') }}">
</head>
<body id="top">

    <!-- HEADER -->
    <header class="bitmap-header">
        <div class="container header-inner">
            <div class="logo">
                <a href="/bitmap">
                    <!-- Change src to your logo image -->
                    <img src="{{ asset('images/logo.png') }}" alt="Bitmap Logo" style="height: 45px;">
                </a>
            </div>
            
            <div class="nav-toggle" id="navToggle">
                <i class="fas fa-bars"></i>
            </div>

            <nav class="main-nav" id="mainNav" style="display: flex; justify-content: center; align-items: center; flex-grow: 1;">
        <ul style="display: flex; flex-direction: row; gap: 30px; list-style: none; margin: 0; padding: 0;">
        <li><a href="#top" style="text-decoration: none; color: #1e293b; font-weight: 600;">Home</a></li>
        <li><a href="#about" style="text-decoration: none; color: #1e293b; font-weight: 600;">About Us</a></li>
        <li><a href="#services" style="text-decoration: none; color: #1e293b; font-weight: 600;">Services</a></li>
        <li><a href="#projects" style="text-decoration: none; color: #1e293b; font-weight: 600;">Projects</a></li>
        <li><a href="#blogs" style="text-decoration: none; color: #1e293b; font-weight: 600;">Blogs</a></li>
        <li><a href="#contact" style="text-decoration: none; color: #1e293b; font-weight: 600;">Contact Us</a></li>
        </ul>
     </nav>
            
            <div class="header-cta">
                <a href="#" class="btn-discount">Get 10% Discount</a>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bitmap-footer">
        <div class="container footer-grid">
            <div class="footer-col">
                <div class="logo" style="margin-bottom: 20px;">
                    <img src="{{ asset('images/logo.png') }}" alt="Bitmap Logo" style="height: 40px;">
                </div>
                <p>BITS is a creatively driven integrated Business Consulting, Advertising agency and IT company located in Narayangarh.</p>
                <div class="social-links" style="margin-top: 20px;">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">IT Consultancy</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h4>Contact Info</h4>
                <ul class="contact-list">
                    <li><i class="fas fa-map-marker-alt"></i> Narayangarh, Chitwan, Nepal</li>
                    <li><i class="fas fa-phone-alt"></i> +977-0000000000</li>
                    <li><i class="fas fa-envelope"></i> info@bitmapitsolution.com</li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; {{ date('Y') }} Bitmap I.T Solution Pvt. Ltd. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('navToggle').addEventListener('click', function() {
            document.getElementById('mainNav').classList.toggle('active');
        });
    </script>
</body>
</html>