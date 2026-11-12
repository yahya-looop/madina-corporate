<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#071b15">
    <title>MADINA | Weighing Solutions for a Smarter World</title>
    <meta name="description" content="Discover weighing and measurement solutions for commercial, industrial and specialized applications from MADINA.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    <header class="site-header" id="top">
        <div class="nav-shell container">
            <a class="brand" href="#top" aria-label="MADINA home">
                <img class="brand-logo" src="{{ asset('assets/brand/madina-logo.svg') }}" alt="MADINA — Weighing Solutions">
            </a>

            <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="primary-navigation">
                <span></span><span></span><span></span>
            </button>

            <nav class="primary-nav" id="primary-navigation" aria-label="Main navigation">
                <a class="nav-link active" href="#top">Home</a>
                <a class="nav-link" href="#about">About</a>
                <a class="nav-link" href="#solutions">Solutions</a>
                <a class="nav-link" href="#services">Services</a>
                <a class="nav-link" href="#dealers">Dealers</a>
                <a class="nav-link" href="#contact">Contact</a>
            </nav>

            <div class="nav-actions">
                <a class="icon-button search-link" href="#solutions" aria-label="Explore solutions">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="10.8" cy="10.8" r="6.8"/><path d="m16 16 5 5"/></svg>
                </a>
                <a class="button button-primary nav-cta" href="#contact">Get in Touch <span class="button-arrow">→</span></a>
            </div>
        </div>
    </header>

    <main id="main">
        <section class="hero dark-section">
            <div class="hero-grid container">
                <div class="hero-copy reveal">
                    <div class="eyebrow eyebrow-dark"><span class="eyebrow-dot"></span> Weighing &amp; measurement solutions</div>
                    <h1>Weighing Solutions for a <span>Smarter</span> World.</h1>
                    <p class="hero-description">Reliable weighing and measurement solutions for businesses, industry and everyday life across Bangladesh.</p>
                    <div class="hero-actions">
                        <a class="button button-primary" href="#solutions">Explore Solutions <span class="button-arrow">→</span></a>
                        <a class="button button-outline" href="#about">Discover MADINA <span class="play-icon">▶</span></a>
                    </div>
                    <div class="hero-note"><span class="note-line"></span> Precision you can depend on</div>
                </div>

                <div class="hero-visual" aria-label="Illustration of a digital industrial weighing scale">
                    <div class="hero-orbit orbit-one"></div>
                    <div class="hero-orbit orbit-two"></div>
                    <div class="hero-glow"></div>
                    <svg class="hero-scale" viewBox="0 0 680 560" role="img" aria-labelledby="scale-title">
                        <title id="scale-title">MADINA digital platform weighing scale</title>
                        <defs>
                            <linearGradient id="steel" x1="0" y1="0" x2="1" y2="1"><stop stop-color="#f8fbfa"/><stop offset=".22" stop-color="#9eaaa8"/><stop offset=".48" stop-color="#eef3f1"/><stop offset=".72" stop-color="#697572"/><stop offset="1" stop-color="#dce4e1"/></linearGradient>
                            <linearGradient id="platform" x1="0" y1="0" x2=".8" y2="1"><stop stop-color="#f9fcfb"/><stop offset=".42" stop-color="#b8c2bf"/><stop offset="1" stop-color="#687571"/></linearGradient>
                            <linearGradient id="screen" x1="0" y1="0" x2="0" y2="1"><stop stop-color="#152a25"/><stop offset="1" stop-color="#06110e"/></linearGradient>
                            <filter id="scaleShadow" x="-30%" y="-30%" width="160%" height="180%"><feGaussianBlur stdDeviation="16"/></filter>
                        </defs>
                        <ellipse cx="347" cy="489" rx="238" ry="30" fill="#000" opacity=".55" filter="url(#scaleShadow)"/>
                        <path d="M323 178 323 395 352 410 381 395 381 177" fill="url(#steel)" stroke="#64716d" stroke-width="3"/>
                        <path d="M328 184 376 184 376 393 352 405 328 393Z" fill="#b8c2bf" opacity=".42"/>
                        <path d="M307 174 307 112Q307 91 329 84L420 56Q439 50 450 66L475 104Q481 116 469 126L379 162 379 190 307 190Z" fill="url(#steel)" stroke="#596560" stroke-width="4"/>
                        <path d="M327 103 419 78Q434 74 441 87L455 109 365 142 327 137Z" fill="url(#screen)" stroke="#293a35" stroke-width="5"/>
                        <text x="390" y="119" font-family="monospace" font-size="31" font-weight="700" text-anchor="middle" fill="#00ed83">0.000</text>
                        <text x="445" y="128" font-family="Arial" font-size="12" fill="#eafff4">kg</text>
                        <circle cx="340" cy="154" r="5" fill="#00bd68"/><circle cx="360" cy="147" r="5" fill="#66756f"/><circle cx="380" cy="140" r="5" fill="#66756f"/>
                        <path d="M128 395 545 395 600 437Q607 444 594 450L191 519Q178 521 166 514L83 462Q71 454 85 445Z" fill="#34413d" opacity=".9"/>
                        <path d="M101 407 517 359Q531 357 543 365L604 405Q615 413 602 420L190 493Q176 496 164 489L91 444Q78 435 89 420Z" fill="url(#platform)" stroke="#dce5e1" stroke-width="5"/>
                        <path d="M116 411 518 366 580 405 183 477Z" fill="#e9efec" opacity=".55"/>
                        <path d="M160 489 160 511Q160 519 173 522L191 525Q205 526 205 516L205 485Z" fill="#29332f"/>
                        <path d="M516 428 516 452Q516 461 529 458L548 454Q560 451 560 442L560 420Z" fill="#202b27"/>
                        <path d="M185 482 185 505M540 422 540 447" stroke="#87938e" stroke-width="5"/>
                        <path d="M253 428 353 410 405 435 303 454Z" fill="#f6faf8" opacity=".72"/>
                        <g transform="translate(305 434) skewY(-10)"><path d="M0 0 23-4 37-22 18-19Z" fill="#00a94f"/><path d="M5 3 30-2 44-20 23-16Z" fill="#00d36c"/><text x="48" y="-8" font-family="Arial" font-size="19" font-weight="800" fill="#1b2924">MADINA</text></g>
                    </svg>
                    <div class="visual-caption"><span class="caption-pulse"></span> Built for everyday precision</div>
                    <div class="hero-visual-index">01 <span>/</span> 04</div>
                </div>
            </div>
            <div class="hero-bottom container">
                <div class="hero-pagination" aria-hidden="true"><span class="current"></span><span></span><span></span><span></span></div>
                <div class="hero-scroll">SCROLL TO EXPLORE <span>↓</span></div>
            </div>
            <div class="hero-wave" aria-hidden="true"></div>
        </section>

        <section class="proof-strip" aria-label="MADINA at a glance">
            <div class="proof-grid container">
                <div class="proof-item"><span class="proof-icon"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M7 2v4m10-4v4M3 9h18M8 14h3"/></svg></span><div><strong>Since 2008</strong><small>Experience in the market</small></div></div>
                <div class="proof-item"><span class="proof-icon"><svg viewBox="0 0 24 24"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="m8.7 10.7 6.6-4.4m-6.6 7 6.6 4.4"/></svg></span><div><strong>Nationwide</strong><small>Dealer network</small></div></div>
                <div class="proof-item"><span class="proof-icon"><svg viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></span><div><strong>For Every Need</strong><small>Commercial to industrial</small></div></div>
                <div class="proof-item"><span class="proof-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="m9 12 2 2 4-4"/></svg></span><div><strong>Trusted Support</strong><small>Here when you need us</small></div></div>
            </div>
        </section>

        <section class="section about-section" id="about">
            <div class="container about-grid">
                <div class="about-visual reveal">
                    <div class="about-photo">
                        <div class="photo-grid" aria-hidden="true"></div>
                        <div class="facility-art" aria-hidden="true">
                            <svg viewBox="0 0 600 430">
                                <defs><linearGradient id="building" x1="0" y1="0" x2="1" y2="1"><stop stop-color="#dbe6e1"/><stop offset="1" stop-color="#60736b"/></linearGradient></defs>
                                <path d="M35 165 292 45 565 151 565 389 35 389Z" fill="#142a22"/>
                                <path d="M35 165 292 45 292 389 35 389Z" fill="url(#building)"/>
                                <path d="M292 45 565 151 565 389 292 389Z" fill="#1d342b"/>
                                <path d="M50 181 280 77 280 113 50 219Z" fill="#f1f6f3" opacity=".65"/>
                                <path d="M50 236 280 132M50 294 280 190M50 352 280 248" stroke="#9bb2a7" stroke-width="7"/>
                                <path d="M78 203 78 376M150 171 150 376M222 138 222 376" stroke="#62776c" stroke-width="6"/>
                                <path d="M314 102 544 191 544 376 314 376Z" fill="#0c1e18"/>
                                <path d="M333 133 525 207 525 366 333 366Z" fill="#9fb1a8"/>
                                <path d="M343 145 514 211 514 354 343 354Z" fill="#19352a"/>
                                <path d="M354 157 501 215 501 342 354 342Z" fill="#a9c0b4"/>
                                <path d="M355 250 500 307M355 286 500 343" stroke="#19352a" stroke-width="5"/>
                                <path d="M292 45 565 151 565 176 292 70Z" fill="#e8f0ec"/>
                                <path d="M82 170 190 121 252 145 145 194Z" fill="#00b95b"/>
                                <path d="M92 167 191 124 240 144 143 188Z" fill="#f8fffb"/>
                                <text x="166" y="163" text-anchor="middle" font-family="Arial" font-weight="800" font-size="23" fill="#0d281d">MADINA</text>
                                <path d="M25 389H579" stroke="#dce8e2" stroke-width="9"/>
                            </svg>
                        </div>
                        <div class="about-image-label"><span class="label-mark">M</span><span>Weighing confidence<br><b>Since 2008</b></span></div>
                    </div>
                    <div class="about-stamp"><strong>01</strong><span>OUR<br>STORY</span></div>
                </div>
                <div class="about-copy reveal">
                    <span class="section-kicker"><i></i> ABOUT MADINA</span>
                    <h2>A trusted name in <span>weighing &amp; measurement.</span></h2>
                    <p class="section-lead">MADINA brings together practical product knowledge and weighing solutions for businesses, industry and everyday applications.</p>
                    <p>From day-to-day commercial use to demanding industrial environments, we help customers explore equipment that fits their work and requirements.</p>
                    <ul class="check-list">
                        <li><span>✓</span> Solutions for a wide range of applications</li>
                        <li><span>✓</span> Product guidance and customer support</li>
                        <li><span>✓</span> A growing presence across Bangladesh</li>
                    </ul>
                    <a class="text-link" href="#contact">More about MADINA <span>↗</span></a>
                </div>
            </div>
        </section>

        <section class="section solutions-section" id="solutions">
            <div class="container">
                <div class="section-heading-row reveal">
                    <div><span class="section-kicker"><i></i> OUR SOLUTIONS</span><h2>Weighing solutions for <span>every need.</span></h2><p class="section-lead">Explore equipment categories designed around the way you work.</p></div>
                    <a class="text-link heading-link" href="#contact">Need help choosing? <span>↗</span></a>
                </div>
                <div class="solution-grid">
                    <a class="solution-card reveal" href="#contact"><div class="product-art commercial-art"><svg viewBox="0 0 260 190"><path d="M92 64 169 64 177 133 83 133Z" fill="#66736e"/><path d="M99 72 161 72 166 125 94 125Z" fill="#c8d1cd"/><path d="M88 129 174 129 193 147 70 147Z" fill="#26342e"/><path d="M79 145 186 145 175 155 91 155Z" fill="#101b17"/><path d="M115 62 117 20 144 20 146 62" fill="#899690"/><path d="M105 20 156 20 164 53 97 53Z" fill="#293b33"/><rect x="108" y="27" width="45" height="18" rx="3" fill="#06120e"/><text x="130" y="41" font-size="12" text-anchor="middle" fill="#00e781" font-family="monospace">0.000</text><path d="M70 150 64 162M186 150 192 162" stroke="#25332c" stroke-width="7" stroke-linecap="round"/></svg></div><div class="solution-card-copy"><span class="card-number">01 / COMMERCIAL</span><h3>Commercial Scales</h3><p>For retail, trade and everyday weighing.</p><span class="card-arrow">↗</span></div></a>
                    <a class="solution-card reveal" href="#contact"><div class="product-art industrial-art"><svg viewBox="0 0 260 190"><path d="M119 23 141 23 141 127 119 127Z" fill="#89958f"/><path d="M82 124 177 124 202 145 57 145Z" fill="#b8c2bd"/><path d="M58 145 201 145 185 158 76 158Z" fill="#26342e"/><path d="M108 25 154 25 161 60 101 60Z" fill="#273b31"/><rect x="113" y="31" width="39" height="19" rx="3" fill="#07150f"/><text x="132" y="45" font-size="10" text-anchor="middle" fill="#00e781" font-family="monospace">0.000</text><path d="M77 137 69 163M185 137 193 163" stroke="#27342e" stroke-width="8" stroke-linecap="round"/><path d="M81 163h18m77 0h18" stroke="#121e18" stroke-width="6" stroke-linecap="round"/></svg></div><div class="solution-card-copy"><span class="card-number">02 / INDUSTRIAL</span><h3>Industrial Scales</h3><p>For demanding, heavy-duty applications.</p><span class="card-arrow">↗</span></div></a>
                    <a class="solution-card reveal" href="#contact"><div class="product-art counting-art"><svg viewBox="0 0 260 190"><path d="M61 102 190 102 210 135 43 135Z" fill="#b9c5bf"/><path d="M43 135 210 135 190 151 61 151Z" fill="#25352e"/><path d="M86 42 175 42 190 100 71 100Z" fill="#273b33"/><path d="M97 50 166 50 175 85 87 85Z" fill="#07150f"/><g fill="#00e781"><rect x="101" y="57" width="17" height="10" rx="2"/><rect x="122" y="57" width="17" height="10" rx="2"/><rect x="143" y="57" width="17" height="10" rx="2"/></g><g fill="#d7e1dc"><circle cx="103" cy="91" r="3"/><circle cx="117" cy="91" r="3"/><circle cx="131" cy="91" r="3"/><circle cx="145" cy="91" r="3"/><circle cx="159" cy="91" r="3"/></g><path d="M65 149 60 162M188 149 194 162" stroke="#25352e" stroke-width="7" stroke-linecap="round"/></svg></div><div class="solution-card-copy"><span class="card-number">03 / COUNTING</span><h3>Counting Scales</h3><p>For inventory and parts counting.</p><span class="card-arrow">↗</span></div></a>
                    <a class="solution-card reveal" href="#contact"><div class="product-art precision-art"><svg viewBox="0 0 260 190"><path d="M78 139 181 139 198 153 62 153Z" fill="#27362f"/><path d="M88 138 99 35 161 35 174 138" fill="none" stroke="#899690" stroke-width="8"/><path d="M98 36h64M90 56h80" stroke="#c6d0cb" stroke-width="5"/><path d="M110 43 150 43 158 70 102 70Z" fill="#273b33"/><rect x="111" y="49" width="38" height="13" rx="2" fill="#06150f"/><text x="130" y="59" font-size="8" text-anchor="middle" fill="#00e781" font-family="monospace">0.000</text><path d="M102 88h56l-8 28h-40Z" fill="#d9e2dd" opacity=".75"/><path d="M104 119h52" stroke="#8a9891" stroke-width="4"/></svg></div><div class="solution-card-copy"><span class="card-number">04 / SPECIALIZED</span><h3>Specialized Scales</h3><p>For specific and precision applications.</p><span class="card-arrow">↗</span></div></a>
                </div>
            </div>
        </section>

        <section class="dealer-feature" id="dealers">
            <div class="dealer-map" aria-hidden="true">
                <svg viewBox="0 0 480 460"><path d="m192 28 42 13 17 34 33 9 10 33 30 16-8 30 21 22-12 38 19 30-21 28-4 44-28 21-21 44-39-9-27-28-42-5-14-33-31-17 6-35-24-22 11-35-12-31 19-30-5-32 28-25 4-36 35-22Z" fill="rgba(0,190,91,.08)" stroke="#00d56c" stroke-width="3"/><g fill="#00ed7d"><circle cx="214" cy="76" r="5"/><circle cx="273" cy="120" r="5"/><circle cx="316" cy="181" r="5"/><circle cx="247" cy="216" r="5"/><circle cx="286" cy="286" r="5"/><circle cx="220" cy="342" r="5"/><circle cx="175" cy="250" r="5"/><circle cx="188" cy="153" r="5"/></g><g stroke="#00d56c" stroke-width="1.5" opacity=".75"><path d="m214 76 59 44 43 61-69 35 39 70-66 56-45-92"/><path d="m188 153 86-33m-99 130 72-34m39 70 34-105"/></g></svg>
            </div>
            <div class="container dealer-content">
                <div class="dealer-copy reveal"><span class="section-kicker section-kicker-light"><i></i> OUR NETWORK</span><h2>Closer to you.<br><span>Across Bangladesh.</span></h2><p>Connect with the MADINA team and find the right point of contact for your weighing requirements.</p><a class="button button-primary" href="#contact">Find a Dealer <span class="button-arrow">→</span></a></div>
                <div class="dealer-stat reveal"><div class="dealer-stat-icon">⌖</div><strong>Nationwide</strong><span>Dealer support</span><div class="dealer-stat-line"></div><small>One network. A world of weighing solutions.</small></div>
            </div>
        </section>

        <section class="section why-section">
            <div class="container">
                <div class="center-heading reveal"><span class="section-kicker"><i></i> THE MADINA DIFFERENCE <i></i></span><h2>Why choose <span>MADINA?</span></h2><p class="section-lead">The right weighing solution is about more than a product. It is about confidence in every measurement.</p></div>
                <div class="benefit-grid">
                    <article class="benefit-item reveal"><div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="m12 3 2.5 5.5L20 11l-5.5 2.5L12 19l-2.5-5.5L4 11l5.5-2.5Z"/><path d="m19 14 1.2 2.6L23 18l-2.8 1.2L19 22l-1.2-2.8L15 18l2.8-1.4Z"/></svg></div><h3>Accuracy Matters</h3><p>Explore weighing equipment for dependable measurement.</p></article>
                    <article class="benefit-item reveal"><div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="m9 12 2 2 4-4"/></svg></div><h3>Built for the Job</h3><p>Options for everyday work and demanding environments.</p></article>
                    <article class="benefit-item reveal"><div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M3 7h18M3 12h18M3 17h18"/><path d="M7 3v18m10-18v18"/></svg></div><h3>Wide Product Range</h3><p>Different categories for different weighing needs.</p></article>
                    <article class="benefit-item reveal"><div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M4 13a8 8 0 0 1 16 0"/><path d="M4 13v4a2 2 0 0 0 2 2h2v-6H4Zm16 0v4a2 2 0 0 1-2 2h-2v-6h4ZM12 21h3"/></svg></div><h3>Helpful Support</h3><p>Get guidance as you explore the right equipment.</p></article>
                </div>
            </div>
        </section>

        <section class="section services-section" id="services">
            <div class="container services-layout">
                <div class="services-intro reveal"><span class="section-kicker"><i></i> SUPPORT THAT COUNTS</span><h2>More than products.<br><span>Here to support you.</span></h2><p class="section-lead">From choosing equipment to getting help after purchase, our team is here to guide your next step.</p><a class="text-link" href="#contact">Talk to our team <span>↗</span></a></div>
                <div class="services-grid">
                    <article class="service-card reveal"><span class="service-icon"><svg viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/><path d="M8 7h8m-8 4h6"/></svg></span><h3>Product Consultation</h3><p>Get help understanding which category fits your needs.</p><span class="service-index">01</span></article>
                    <article class="service-card reveal"><span class="service-icon"><svg viewBox="0 0 24 24"><path d="m14 7 3 3m-9 9-5 1 1-5L16 3a2.1 2.1 0 0 1 3 3Z"/><path d="m5 15 4 4"/></svg></span><h3>Installation Guidance</h3><p>Understand setup requirements for your equipment.</p><span class="service-index">02</span></article>
                    <article class="service-card reveal"><span class="service-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2m-8-9 2 2m8 0 2-2"/></svg></span><h3>Calibration Enquiries</h3><p>Discuss your measurement and calibration requirements.</p><span class="service-index">03</span></article>
                    <article class="service-card reveal"><span class="service-icon"><svg viewBox="0 0 24 24"><path d="M3 11a9 9 0 0 1 18 0v5a2 2 0 0 1-2 2h-3v-6h5M3 12h5v6H5a2 2 0 0 1-2-2Z"/><path d="M12 21h3"/></svg></span><h3>After-Sales Support</h3><p>Reach out when you need product or service assistance.</p><span class="service-index">04</span></article>
                </div>
            </div>
        </section>

        <section class="contact-band" id="contact">
            <div class="container contact-band-inner">
                <div><span class="section-kicker section-kicker-light"><i></i> LET'S GET STARTED</span><h2>Have a weighing requirement?</h2><p>Explore our product range or connect with MADINA to discuss what you need.</p></div>
                <a class="button button-light" href="https://madinascale.online" target="_blank" rel="noopener">Visit Online Store <span class="button-arrow">↗</span></a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-main">
            <div class="footer-brand-col"><a class="brand footer-brand" href="#top" aria-label="MADINA home"><img class="brand-logo" src="{{ asset('assets/brand/madina-logo.svg') }}" alt="MADINA — Weighing Solutions"></a><p>Weighing and measurement solutions for businesses, industry and everyday applications.</p></div>
            <div class="footer-links"><h3>Explore</h3><a href="#about">About MADINA</a><a href="#solutions">Our Solutions</a><a href="#services">Services</a><a href="#dealers">Dealer Network</a></div>
            <div class="footer-links"><h3>Discover</h3><a href="#solutions">Commercial Scales</a><a href="#solutions">Industrial Scales</a><a href="#solutions">Counting Scales</a><a href="#solutions">Specialized Scales</a></div>
            <div class="footer-links"><h3>Online</h3><a href="https://madinascale.online" target="_blank" rel="noopener">Online Store ↗</a><a href="#contact">Contact MADINA</a></div>
        </div>
        <div class="container footer-bottom"><span>© <span data-year>2026</span> MADINA. All rights reserved.</span><span>Weigh with confidence.</span><a href="#top">Back to top ↑</a></div>
    </footer>
</body>
</html>
