@extends('layouts.app')

@section('title', 'Support & Services | MADINA')
@section('description', 'Product consultation, installation guidance, calibration enquiries and after-sales support.')

@section('content')
<section class="section services-section" id="services">
            <div class="container services-layout">
                <div class="services-intro reveal"><span class="section-kicker"><i></i> SUPPORT THAT COUNTS</span><h2>More than products.<br><span>Here to support you.</span></h2><p class="section-lead">From choosing equipment to getting help after purchase, our team is here to guide your next step.</p><a class="text-link" href="{{ route('contact') }}">Talk to our team <span>↗</span></a></div>
                <div class="services-grid">
                    <article class="service-card reveal"><span class="service-icon"><svg viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/><path d="M8 7h8m-8 4h6"/></svg></span><h3>Product Consultation</h3><p>Get help understanding which category fits your needs.</p><span class="service-index">01</span></article>
                    <article class="service-card reveal"><span class="service-icon"><svg viewBox="0 0 24 24"><path d="m14 7 3 3m-9 9-5 1 1-5L16 3a2.1 2.1 0 0 1 3 3Z"/><path d="m5 15 4 4"/></svg></span><h3>Installation Guidance</h3><p>Understand setup requirements for your equipment.</p><span class="service-index">02</span></article>
                    <article class="service-card reveal"><span class="service-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2m-8-9 2 2m8 0 2-2"/></svg></span><h3>Calibration Enquiries</h3><p>Discuss your measurement and calibration requirements.</p><span class="service-index">03</span></article>
                    <article class="service-card reveal"><span class="service-icon"><svg viewBox="0 0 24 24"><path d="M3 11a9 9 0 0 1 18 0v5a2 2 0 0 1-2 2h-3v-6h5M3 12h5v6H5a2 2 0 0 1-2-2Z"/><path d="M12 21h3"/></svg></span><h3>After-Sales Support</h3><p>Reach out when you need product or service assistance.</p><span class="service-index">04</span></article>
                </div>
            </div>
        </section>
<section class="section service-journey">
    <div class="container">
        <div class="center-heading reveal"><span class="section-kicker"><i></i> A CLEAR NEXT STEP <i></i></span><h2>Support from selection <span>to after purchase.</span></h2><p class="section-lead">Share your requirement with our team. We will help you understand the next practical step for your equipment needs.</p></div>
        <div class="journey-grid">
            <article class="journey-step reveal"><span>01</span><h3>Tell us your requirement</h3><p>Share the material, approximate load, accuracy needs and where the scale will be used.</p></article>
            <article class="journey-step reveal"><span>02</span><h3>Explore suitable options</h3><p>Discuss product categories and the key specifications to consider before choosing.</p></article>
            <article class="journey-step reveal"><span>03</span><h3>Get ongoing guidance</h3><p>Contact the team for setup guidance, calibration enquiries or after-sales assistance.</p></article>
        </div>
        <div class="section-inline-cta reveal"><div><span class="section-kicker"><i></i> WE'RE HERE TO HELP</span><h3>Let's discuss your weighing requirement.</h3></div><a class="button button-primary" href="{{ route('contact') }}">Contact Our Team <span class="button-arrow">→</span></a></div>
    </div>
</section>
@endsection
