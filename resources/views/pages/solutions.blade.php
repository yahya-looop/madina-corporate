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
                    <a class="solution-card reveal" href="{{ route('contact') }}"><div class="product-art commercial-art"><svg viewBox="0 0 260 190"><path d="M92 64 169 64 177 133 83 133Z" fill="#66736e"/><path d="M99 72 161 72 166 125 94 125Z" fill="#c8d1cd"/><path d="M88 129 174 129 193 147 70 147Z" fill="#26342e"/><path d="M79 145 186 145 175 155 91 155Z" fill="#101b17"/><path d="M115 62 117 20 144 20 146 62" fill="#899690"/><path d="M105 20 156 20 164 53 97 53Z" fill="#293b33"/><rect x="108" y="27" width="45" height="18" rx="3" fill="#06120e"/><text x="130" y="41" font-size="12" text-anchor="middle" fill="#00e781" font-family="monospace">0.000</text><path d="M70 150 64 162M186 150 192 162" stroke="#25332c" stroke-width="7" stroke-linecap="round"/></svg></div><div class="solution-card-copy"><span class="card-number">01 / COMMERCIAL</span><h3>Commercial Scales</h3><p>For retail, trade and everyday weighing.</p><span class="card-arrow">↗</span></div></a>
                    <a class="solution-card reveal" href="{{ route('contact') }}"><div class="product-art industrial-art"><svg viewBox="0 0 260 190"><path d="M119 23 141 23 141 127 119 127Z" fill="#89958f"/><path d="M82 124 177 124 202 145 57 145Z" fill="#b8c2bd"/><path d="M58 145 201 145 185 158 76 158Z" fill="#26342e"/><path d="M108 25 154 25 161 60 101 60Z" fill="#273b31"/><rect x="113" y="31" width="39" height="19" rx="3" fill="#07150f"/><text x="132" y="45" font-size="10" text-anchor="middle" fill="#00e781" font-family="monospace">0.000</text><path d="M77 137 69 163M185 137 193 163" stroke="#27342e" stroke-width="8" stroke-linecap="round"/><path d="M81 163h18m77 0h18" stroke="#121e18" stroke-width="6" stroke-linecap="round"/></svg></div><div class="solution-card-copy"><span class="card-number">02 / INDUSTRIAL</span><h3>Industrial Scales</h3><p>For demanding, heavy-duty applications.</p><span class="card-arrow">↗</span></div></a>
                    <a class="solution-card reveal" href="{{ route('contact') }}"><div class="product-art counting-art"><svg viewBox="0 0 260 190"><path d="M61 102 190 102 210 135 43 135Z" fill="#b9c5bf"/><path d="M43 135 210 135 190 151 61 151Z" fill="#25352e"/><path d="M86 42 175 42 190 100 71 100Z" fill="#273b33"/><path d="M97 50 166 50 175 85 87 85Z" fill="#07150f"/><g fill="#00e781"><rect x="101" y="57" width="17" height="10" rx="2"/><rect x="122" y="57" width="17" height="10" rx="2"/><rect x="143" y="57" width="17" height="10" rx="2"/></g><g fill="#d7e1dc"><circle cx="103" cy="91" r="3"/><circle cx="117" cy="91" r="3"/><circle cx="131" cy="91" r="3"/><circle cx="145" cy="91" r="3"/><circle cx="159" cy="91" r="3"/></g><path d="M65 149 60 162M188 149 194 162" stroke="#25352e" stroke-width="7" stroke-linecap="round"/></svg></div><div class="solution-card-copy"><span class="card-number">03 / COUNTING</span><h3>Counting Scales</h3><p>For inventory and parts counting.</p><span class="card-arrow">↗</span></div></a>
                    <a class="solution-card reveal" href="{{ route('contact') }}"><div class="product-art precision-art"><svg viewBox="0 0 260 190"><path d="M78 139 181 139 198 153 62 153Z" fill="#27362f"/><path d="M88 138 99 35 161 35 174 138" fill="none" stroke="#899690" stroke-width="8"/><path d="M98 36h64M90 56h80" stroke="#c6d0cb" stroke-width="5"/><path d="M110 43 150 43 158 70 102 70Z" fill="#273b33"/><rect x="111" y="49" width="38" height="13" rx="2" fill="#06150f"/><text x="130" y="59" font-size="8" text-anchor="middle" fill="#00e781" font-family="monospace">0.000</text><path d="M102 88h56l-8 28h-40Z" fill="#d9e2dd" opacity=".75"/><path d="M104 119h52" stroke="#8a9891" stroke-width="4"/></svg></div><div class="solution-card-copy"><span class="card-number">04 / SPECIALIZED</span><h3>Specialized Scales</h3><p>For specific and precision applications.</p><span class="card-arrow">↗</span></div></a>
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
