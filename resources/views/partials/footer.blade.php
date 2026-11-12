<footer class="site-footer">
        <div class="container footer-main">
            <div class="footer-brand-col">
                <a class="brand footer-brand" href="{{ route('home') }}" aria-label="MADINA home">
                    <img class="brand-logo" src="{{ asset('assets/brand/madina-logo.svg') }}" alt="MADINA — Weighing Solutions">
                </a>
                <p>Weighing and measurement solutions for businesses, industry and everyday applications.</p>
                <span class="footer-brand-note"><i></i> Weigh with confidence.</span>
            </div>

            <div class="footer-links">
                <h3>Explore</h3>
                <a href="{{ route('about') }}">About MADINA</a>
                <a href="{{ route('solutions') }}">Our Solutions</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('dealers') }}">Dealer Network</a>
            </div>

            <div class="footer-links">
                <h3>Discover</h3>
                <a href="{{ route('solutions') }}">Commercial Scales</a>
                <a href="{{ route('solutions') }}">Industrial Scales</a>
                <a href="{{ route('solutions') }}">Counting Scales</a>
                <a href="{{ route('solutions') }}">Specialized Scales</a>
            </div>

            <div class="footer-links footer-online-links">
                <h3>Online</h3>
                <a href="https://madinascale.online" target="_blank" rel="noopener">Online Store <span>↗</span></a>
                <a href="{{ route('contact') }}">Contact MADINA</a>
            </div>
        </div>
        <div class="container footer-bottom">
            <span>© <span data-year>2026</span> MADINA. All rights reserved. Developed by - Yahya Al Mahmood</span>
            <a href="{{ route('home') }}">Back to home <span>↑</span></a>
        </div>
    </footer>
