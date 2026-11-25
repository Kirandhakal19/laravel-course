@extends('bitmap.app')

@section('content')

<!-- SECTION 1: HERO -->
<section class="hero-section">
    <div class="container hero-inner">
        
        <div class="hero-text">
            <h1>IT Solutions & Graphics Services Company</h1>
            <p>Presenting your business in a digital mode is known to be a smarter way of doing business. <br><strong>LET THE WORLD KNOW YOU EXIST</strong></p>
            
            <div class="hero-buttons">
                <!-- White Button -->
                <a href="#about" class="btn-white">About Us</a>
                <!-- Red Button -->
                <a href="#" class="btn-red">Contact Us</a>
            </div>
        </div>

        <div class="hero-image">
            <!-- Change src to your illustration image -->
            <img src="{{ asset('images/hero-img.png') }}" alt="IT Solutions">
        </div>

    </div>
    
    <!-- The wavy bottom SVG -->
    <div class="wave-bottom">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path d="M0,60 C320,120 420,0 720,60 C1020,120 1120,0 1440,60 L1440,120 L0,120 Z" fill="#ffffff"></path>
        </svg>
    </div>
</section>

<!-- SECTION 2: ABOUT -->
<section class="about-section" id="about">
    <div class="container about-inner">
        <div class="about-content">
            <h5>ABOUT OUR COMPANY</h5>
            <h2>Digitalizing your business is our passion.</h2>
            <p>BITS is a creatively driven integrated Business Consulting, Advertising agency and IT company located in Narayangarh that creates high-impact business solutions for both traditional and digital media to its clients.</p>
            
            <div class="progress-bars">
                <div class="progress-item">
                    <div class="progress-text">
                        <span>IT and Software Services</span>
                        <span>90%</span>
                    </div>
                    <div class="progress-bar"><div class="progress-fill" style="width: 90%;"></div></div>
                </div>
                
                <div class="progress-item">
                    <div class="progress-text">
                        <span>Graphic Designs and Social Page Handling</span>
                        <span>95%</span>
                    </div>
                    <div class="progress-bar"><div class="progress-fill" style="width: 95%;"></div></div>
                </div>
                
                <div class="progress-item">
                    <div class="progress-text">
                        <span>Website and Application Development</span>
                        <span>85%</span>
                    </div>
                    <div class="progress-bar"><div class="progress-fill" style="width: 85%;"></div></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection