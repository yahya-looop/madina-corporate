@extends('layouts.app')

@section('title', 'About MADINA | MADINA')
@section('description', 'Learn about MADINA and our approach to weighing and measurement solutions.')

@section('content')
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
                    <p>From day-to-day commercial use to demanding industrial environments, we help customers explore equipment that fits their work and requirements.</p><p>Established in 2008, MADINA is a proudly Bangladeshi brand serving customers with digital weighing scales, industrial equipment, power tools, aluminium ladders and related accessories. Our focus is practical guidance, dependable products and support that continues beyond the point of purchase.</p>
                    <ul class="check-list">
                        <li><span>✓</span> Solutions for a wide range of applications</li>
                        <li><span>✓</span> Product guidance and customer support</li>
                        <li><span>✓</span> A growing presence across Bangladesh</li>
                    </ul>
                    <a class="text-link" href="{{ route('contact') }}">Talk to MADINA <span>↗</span></a>
                </div>
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
<section class="section about-principles">
    <div class="container">
        <div class="center-heading reveal">
            <span class="section-kicker"><i></i> WHAT GUIDES US <i></i></span>
            <h2>Built around <span>trust and accuracy.</span></h2>
            <p class="section-lead">Our work is guided by a simple belief: the right product, clear guidance and dependable support make every weighing decision more confident.</p>
        </div>
        <div class="principle-grid">
            <article class="principle-card reveal"><span class="principle-index">01 / MISSION</span><h3>Make accurate weighing more accessible.</h3><p>Help people and businesses in Bangladesh find suitable products for accurate, dependable weight measurement.</p></article>
            <article class="principle-card reveal"><span class="principle-index">02 / VISION</span><h3>Better solutions. Better service.</h3><p>Keep improving product quality, embracing useful innovation, offering fair value and making service easier to reach.</p></article>
        </div>
        <div class="values-row reveal"><span>OUR VALUES</span><div class="values-list"><b>Customer first</b><b>Honesty</b><b>Accountability</b><b>Teamwork</b><b>Transparency</b><b>Continuous learning</b></div></div>
    </div>
</section>
@endsection
