@extends('layouts.app')

@section('title', 'About MADINA | MADINA')
@section('description', 'Learn about MADINA and our approach to weighing and measurement solutions.')

@section('content')
<section class="section about-section" id="about">
            <div class="container about-grid">
                <div class="about-visual reveal">
                    <div class="about-photo">
                        <div class="photo-grid" aria-hidden="true"></div>
                        <div class="facility-art">
                            <img
                                src="{{ asset('assets/images/about/madina-facility.webp') }}"
                                alt="MADINA team"
                                loading="lazy"
                            >
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


<section class="section md-message-section">
    <div class="container md-message-grid">
        <div class="md-message-portrait reveal">
            <img src="{{ asset('assets/images/about/md-sir-portrait.webp') }}" alt="MD Al Mahmud, Founder and Managing Director of MADINA Scale & Co." loading="lazy" decoding="async">
            <div class="md-message-photo-caption">
                <strong>MD Al Mahmud</strong>
                <span>Founder &amp; Managing Director</span>
            </div>
        </div>
        <div class="md-message-copy reveal">
            <span class="section-kicker"><i></i> A MESSAGE FROM OUR FOUNDER</span>
            <div class="md-quote-mark" aria-hidden="true">“</div>
            <blockquote>
                Our goal is to make dependable weighing solutions accessible to every business and customer. We believe trust is built through product quality, honest guidance and support that continues long after a purchase.
            </blockquote>
            <div class="md-message-signature">
                <strong>MD Al Mahmud</strong>
                <span>Founder &amp; Managing Director, MADINA Scale &amp; Co.</span>
            </div>
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
