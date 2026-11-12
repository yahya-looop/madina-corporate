@extends('layouts.app')

@section('title', 'Weighing Solutions | MADINA')
@section('description', 'Explore weighing solutions for commercial, industrial and specialized applications.')

@section('content')
<section class="section solutions-section" id="solutions">
            <div class="container">
                <div class="section-heading-row reveal">
                    <div><span class="section-kicker"><i></i> OUR SOLUTIONS</span><h2>Weighing solutions for <span>every need.</span></h2><p class="section-lead">Explore equipment categories designed around the way you work.</p></div>
                    <a class="text-link heading-link" href="{{ route('contact') }}">Need help choosing? <span>↗</span></a>
                </div>
                <div class="solution-grid">
                    <a class="solution-card reveal" href="{{ route('contact') }}"><div class="product-art"><img src="{{ asset('assets/images/solutions/commercial-scale.webp') }}" alt="MADINA commercial digital price computing scale" loading="lazy" decoding="async"></div><div class="solution-card-copy"><span class="card-number">01 / COMMERCIAL</span><h3>Commercial Scales</h3><p>For retail, trade and everyday weighing.</p><span class="card-arrow">↗</span></div></a>
                    <a class="solution-card reveal" href="{{ route('contact') }}"><div class="product-art"><img src="{{ asset('assets/images/solutions/industrial-scale.webp') }}" alt="MADINA industrial platform weighing scale" loading="lazy" decoding="async"></div><div class="solution-card-copy"><span class="card-number">02 / INDUSTRIAL</span><h3>Industrial Scales</h3><p>For demanding, heavy-duty applications.</p><span class="card-arrow">↗</span></div></a>
                    <a class="solution-card reveal" href="{{ route('contact') }}"><div class="product-art"><img src="{{ asset('assets/images/solutions/counting-scale.webp') }}" alt="MADINA pocket scale for cotton GSM measurement" loading="lazy" decoding="async"></div><div class="solution-card-copy"><span class="card-number">03 / COUNTING</span><h3>Counting Scales</h3><p>For inventory and parts counting.</p><span class="card-arrow">↗</span></div></a>
                    <a class="solution-card reveal" href="{{ route('contact') }}"><div class="product-art"><img src="{{ asset('assets/images/solutions/specialized-scale-d4.webp') }}" alt="MADINA D4 digital body weight scale" loading="lazy" decoding="async"></div><div class="solution-card-copy"><span class="card-number">04 / SPECIALIZED</span><h3>Specialized Scales</h3><p>For specific and precision applications.</p><span class="card-arrow">↗</span></div></a>
                </div>
            </div>
        </section>
<section class="section application-section">
    <div class="container">
        <div class="center-heading reveal"><span class="section-kicker"><i></i> MADE FOR YOUR WORK <i></i></span><h2>One requirement. <span>The right weighing approach.</span></h2><p class="section-lead">Start with what you need to measure, how often you measure it and the environment where the equipment will be used.</p></div>
        <div class="application-grid">
            <article class="application-card reveal"><span>01</span><h3>Retail &amp; Trade</h3><p>Everyday weighing for shops, markets, counters and commercial transactions.</p></article>
            <article class="application-card reveal"><span>02</span><h3>Warehouse &amp; Logistics</h3><p>Weighing workflows for receiving, dispatch, stock handling and operational checks.</p></article>
            <article class="application-card reveal"><span>03</span><h3>Production &amp; Industry</h3><p>Equipment categories for heavier loads and demanding work environments.</p></article>
            <article class="application-card reveal"><span>04</span><h3>Parts &amp; Inventory</h3><p>Counting and precision-oriented options for small items and inventory tasks.</p></article>
        </div>
        <div class="section-inline-cta reveal"><div><span class="section-kicker"><i></i> NOT SURE WHICH TYPE?</span><h3>Tell us what you need to weigh.</h3></div><a class="button button-primary" href="{{ route('contact') }}">Get Product Guidance <span class="button-arrow">→</span></a></div>
    </div>
</section>
@endsection
