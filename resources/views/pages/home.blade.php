@extends('layout.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section-inline" 
         style="background: url('{{ asset('img/langhali-community.png') }}') center/cover no-repeat; height: 90vh; position: relative; display: flex; align-items: center; justify-content: center;">
    
    <div class="overlay" style="background: rgba(0,0,0,0.5); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
        <div class="hero-content" style="text-align: center; color: #fff;">
            <h1 style="font-size: 48px; margin-bottom: 15px; font-weight: 700;">Langhali Magar Samaj</h1>
            <p style="font-size: 20px; margin-bottom: 25px;">Unity, Culture, and Development for the Magar Community</p>
            <a href="#" 
               style="background: #ffb100; color: #111; padding: 12px 30px; font-weight: 600; border-radius: 8px; text-decoration: none; transition: 0.3s;">Submit Form</a>
        </div>
    </div>

</section>



<!-- Statistics Section -->
<section class="stats-section-full">
    <div class="container stats-container">
        <div class="stat-box">
            <h2>250+</h2>
            <p>Active Members</p>
        </div>
        <div class="stat-box">
            <h2>50+</h2>
            <p>Cultural Events</p>
        </div>
        <div class="stat-box">
            <h2>30+</h2>
            <p>Community Projects</p>
        </div>
    </div>
</section>

<!-- about us -->
<section class="about-section">
    <div class="container">
      
        <div class="about-content">
            <h2>About Us</h2>
            <p>We are dedicated to providing the best service and solutions for our clients, combining innovation, passion, and expertise in every project we undertake.</p>
            <a href="/contact" class="btn">Contact Us</a>
        </div>
    </div>
</section>

<!-- Why Join Section -->
<section class="features-section-full">
    <div class="container">
        <h2>Why Join Us</h2>
        <div class="features-grid">
            <div class="feature-box">
                <img src="{{ asset('img/mgr-icon.png') }}" alt="Cultural Heritage Icon">
                <h3>Cultural Heritage</h3>
                <p>We celebrate and preserve Magar traditions, music, and arts.</p>
            </div>
            <div class="feature-box">
                <img src="{{ asset('img/community-icon.jpg') }}" alt="Community Support Icon">
                <h3>Community Support</h3>
                <p>Providing welfare and support to empower our members.</p>
            </div>
            <div class="feature-box">
                <img src="{{ asset('img/skill-icon.jpg') }}" alt="Skill Development Icon">
                <h3>Skill Development</h3>
                <p>Workshops and training programs for youth and women.</p>
            </div>
        </div>
    </div>
</section>



@endsection