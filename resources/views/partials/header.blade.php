<header class="site-header {{ request()->routeIs('home') ? 'site-header--overlay' : 'site-header--solid' }}" id="top">
        <div class="announcement-bar" role="status">
            <span class="announcement-pulse" aria-hidden="true"></span>
            <span>UNDER MAINTENANCE</span>
            <span class="announcement-divider" aria-hidden="true">—</span>
            <span class="announcement-message">We’re improving our corporate website. Thank you for your patience.</span>
        </div>
        <div class="nav-shell container">
            <a class="brand" href="{{ route('home') }}" aria-label="MADINA home">
                <img class="brand-logo" src="{{ asset('assets/brand/madina-logo.svg') }}" alt="MADINA — Weighing Solutions">
            </a>
            <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="primary-navigation">
                <span></span><span></span><span></span>
            </button>
            <nav class="primary-nav" id="primary-navigation" aria-label="Main navigation">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="nav-link {{ request()->routeIs('solutions') ? 'active' : '' }}" href="{{ route('solutions') }}">Solutions</a>
                <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                <a class="nav-link {{ request()->routeIs('dealers') ? 'active' : '' }}" href="{{ route('dealers') }}">Dealers</a>
                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            </nav>
            <div class="nav-actions">
                <a class="button button-primary nav-cta" href="{{ route('contact') }}">Get in Touch <span class="button-arrow">→</span></a>
            </div>
        </div>
    </header>
