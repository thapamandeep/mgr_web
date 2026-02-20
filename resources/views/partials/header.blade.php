<header class="main-header">
    <div class="container nav-container">

        <!-- Logo + Name Centered -->
        <div class="logo-section">
            <a href="#">
                <img src="{{ asset('img/langhali-samaj-logo.png') }}" alt="Logo" class="logo">
            </a>
            <div class="org-name">
                <h1>लङ्घाली मगर समाज</h1>
                <p>Pokhara-14, Chauthe</p>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="nav-links" id="navLinks">
            <ul>
                <li><a href="{{route('home.page')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="#" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{route('get.form')}}" class="{{ request()->routeIs('form.page') ? 'active' : '' }}">Form</a></li>
                <li><a href="{{route('get.index')}}" class="{{ request()->routeIs('record.page') ? 'active' : '' }}">Records</a></li>
                <li><a href="{{route('get.contact')}}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav>

        <!-- Mobile Menu Toggle -->
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>

    </div>
</header>

<!-- Optional Hero Text Below Header -->
<section class="hero-text">
    <div class="container">
        <h2>Unity • Culture • Development</h2>
        <p>Magar Samaj is a social organization working for cultural preservation and community development.</p>
    </div>
</section>