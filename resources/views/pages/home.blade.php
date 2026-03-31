@extends('layout.app')

@section('content')

<div class="swiper hero-slider">
    <div class="swiper-wrapper">
        @foreach($heroes as $hero)
        <div class="swiper-slide" style="background: url('{{ asset('storage/album/'.$hero->image) }}') center/cover no-repeat;">
            <div class="overlay">
                <div class="hero-title" data-animation="fadeInDown">
                    <h1>{{ $hero->title }}</h1>
                </div>
                <div class="hero-bottom">
                    <p data-animation="fadeInUp">{{ $hero->subtitle }}</p>
                    <a href="{{ $hero->button_link }}" data-animation="fadeIn">{{ $hero->button_text }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
<!-- Statistics Section -->
<section class="stats-section-full">
    <div class="container stats-container">
        <div class="stat-box">

        @php
        use App\Models\User;
        $total_member = User::count();
    @endphp
            <h2>{{$total_member}} +</h2>
            <p>Total Members</p>
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