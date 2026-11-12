const header = document.querySelector('.site-header');
const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.primary-nav');
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

let headerCompact = false;
const setHeaderState = () => {
    const compact = window.scrollY > 36;
    if (compact === headerCompact) return;
    headerCompact = compact;
    header?.classList.toggle('is-scrolled', compact);

    // GSAP enhances the compact transition when its CDN bundle is available.
    if (window.gsap && header) {
        const gsap = window.gsap;
        const shell = header.querySelector('.nav-shell');
        const logo = header.querySelector('.brand-logo');
        const links = header.querySelectorAll('.nav-link');
        const cta = header.querySelector('.nav-cta');
        const announcement = header.querySelector('.announcement-bar');
        gsap.killTweensOf([shell, logo, links, cta, announcement]);
        if (compact) {
            gsap.to(announcement, { height: 0, paddingTop: 0, paddingBottom: 0, autoAlpha: 0, duration: .32, ease: 'power2.out' });
            gsap.to(shell, { minHeight: 66, duration: .48, ease: 'power3.out' });
            gsap.to(logo, { width: 132, duration: .48, ease: 'power3.out' });
            gsap.to(links, { fontSize: 12, paddingTop: 22, paddingBottom: 20, duration: .42, stagger: .018, ease: 'power3.out' });
            gsap.to(cta, { minHeight: 40, paddingLeft: 19, paddingRight: 19, fontSize: 12, duration: .42, ease: 'power3.out' });
        } else {
            gsap.to(announcement, { height: 38, paddingTop: 7, paddingBottom: 7, autoAlpha: 1, duration: .3, ease: 'power2.out' });
            gsap.to(shell, { minHeight: 84, duration: .45, ease: 'power3.out' });
            gsap.to(logo, { width: 'clamp(132px, 12vw, 164px)', duration: .45, ease: 'power3.out' });
            gsap.to(links, { fontSize: 14, paddingTop: 31, paddingBottom: 28, duration: .4, stagger: .018, ease: 'power3.out' });
            gsap.to(cta, { minHeight: 48, paddingLeft: 24, paddingRight: 24, fontSize: 13, duration: .4, ease: 'power3.out' });
        }
    }
};
setHeaderState();
window.addEventListener('scroll', setHeaderState, { passive: true });

if (menuButton && navigation) {
    const closeMenu = () => {
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.setAttribute('aria-label', 'Open navigation');
        navigation.classList.remove('is-open');
    };
    menuButton.addEventListener('click', () => {
        const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', String(!isOpen));
        menuButton.setAttribute('aria-label', isOpen ? 'Open navigation' : 'Close navigation');
        navigation.classList.toggle('is-open', !isOpen);
    });
    navigation.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
    document.addEventListener('keydown', (event) => { if (event.key === 'Escape') closeMenu(); });
    document.addEventListener('click', (event) => {
        if (!navigation.contains(event.target) && !menuButton.contains(event.target)) closeMenu();
    });
}

const slides = [...document.querySelectorAll('.hero-slide')];
const dots = [...document.querySelectorAll('.hero-dot')];
const slideCount = document.querySelector('.hero-slide-count');
const previousButton = document.querySelector('.hero-prev');
const nextButton = document.querySelector('.hero-next');
const slider = document.querySelector('.hero-slider');
const slidesStage = document.querySelector('.hero-slides');
let activeSlide = Math.max(0, slides.findIndex((slide) => slide.classList.contains('is-active')));
let sliderTimer = null;
let sliderPaused = false;
let resizeFrame = null;
const slideDuration = 6500;

const measureSlideStage = () => {
    if (!slidesStage || !slides.length) return;
    // Every slide is absolutely stacked. Size the shared stage to the tallest
    // slide so text/image transitions never create a second hero row.
    slidesStage.style.height = 'auto';
    const tallest = Math.max(...slides.map((slide) => {
        const grid = slide.querySelector('.hero-grid');
        return Math.ceil(Math.max(slide.scrollHeight, grid?.scrollHeight || 0));
    }));
    slidesStage.style.height = `${tallest}px`;
};

const scheduleStageMeasure = () => {
    if (resizeFrame !== null) window.cancelAnimationFrame(resizeFrame);
    resizeFrame = window.requestAnimationFrame(() => {
        resizeFrame = null;
        measureSlideStage();
    });
};

const updateSlideControls = (next) => {
    dots.forEach((dot, index) => {
        const current = index === next;
        dot.classList.toggle('is-current', current);
        dot.setAttribute('aria-pressed', String(current));
    });
    if (slideCount) {
        slideCount.innerHTML = `<b>${String(next + 1).padStart(2, '0')}</b> / ${String(slides.length).padStart(2, '0')}`;
    }
};

const setSlide = (nextIndex) => {
    if (!slides.length) return;
    const next = (nextIndex + slides.length) % slides.length;
    if (next === activeSlide) return;

    const outgoing = slides[activeSlide];
    const incoming = slides[next];
    activeSlide = next;

    // Keep all slides in the same absolute stage. CSS handles the cross-fade;
    // GSAP only animates the incoming content, never the slide's layout box.
    slides.forEach((slide, index) => {
        const isActive = index === next;
        slide.classList.toggle('is-active', isActive);
        slide.setAttribute('aria-hidden', String(!isActive));
        slide.inert = !isActive;
    });
    updateSlideControls(next);

    if (window.gsap && !prefersReducedMotion) {
        const incomingCopy = incoming.querySelector('.hero-copy');
        const incomingVisual = incoming.querySelector('.hero-visual');
        window.gsap.killTweensOf([incomingCopy, incomingVisual]);
        window.gsap.fromTo(incomingCopy,
            { autoAlpha: 0, y: 25 },
            { autoAlpha: 1, y: 0, duration: .72, ease: 'power3.out', clearProps: 'opacity,visibility,transform' }
        );
        window.gsap.fromTo(incomingVisual,
            { autoAlpha: 0, x: 30, scale: .975 },
            { autoAlpha: 1, x: 0, scale: 1, duration: .9, ease: 'power3.out', clearProps: 'opacity,visibility,transform' }
        );
    }

    scheduleStageMeasure();
};

const stopSliderTimer = () => {
    if (sliderTimer !== null) window.clearInterval(sliderTimer);
    sliderTimer = null;
};
const startSliderTimer = () => {
    stopSliderTimer();
    if (slides.length > 1 && !prefersReducedMotion && !sliderPaused && !document.hidden) {
        sliderTimer = window.setInterval(() => setSlide(activeSlide + 1), slideDuration);
    }
};

dots.forEach((dot, index) => dot.addEventListener('click', () => {
    setSlide(index);
    startSliderTimer();
}));
previousButton?.addEventListener('click', () => {
    setSlide(activeSlide - 1);
    startSliderTimer();
});
nextButton?.addEventListener('click', () => {
    setSlide(activeSlide + 1);
    startSliderTimer();
});

if (slider) {
    slider.addEventListener('mouseenter', () => {
        sliderPaused = true;
        stopSliderTimer();
    });
    slider.addEventListener('mouseleave', () => {
        sliderPaused = false;
        startSliderTimer();
    });
    slider.addEventListener('focusin', () => {
        sliderPaused = true;
        stopSliderTimer();
    });
    slider.addEventListener('focusout', (event) => {
        if (!slider.contains(event.relatedTarget)) {
            sliderPaused = false;
            startSliderTimer();
        }
    });
}
document.addEventListener('visibilitychange', () => {
    if (document.hidden) stopSliderTimer();
    else startSliderTimer();
});

if (slides.length) {
    slides.forEach((slide, index) => {
        const isActive = index === activeSlide;
        slide.classList.toggle('is-active', isActive);
        slide.setAttribute('aria-hidden', String(!isActive));
        slide.inert = !isActive;
    });
    updateSlideControls(activeSlide);
    measureSlideStage();
    if (window.gsap && !prefersReducedMotion) {
        const first = slides[activeSlide];
        window.gsap.fromTo(first.querySelector('.hero-copy'),
            { autoAlpha: 0, y: 22 },
            { autoAlpha: 1, y: 0, duration: .85, ease: 'power3.out', delay: .12, clearProps: 'opacity,visibility,transform' }
        );
        window.gsap.fromTo(first.querySelector('.hero-visual'),
            { autoAlpha: 0, x: 26, scale: .975 },
            { autoAlpha: 1, x: 0, scale: 1, duration: 1, ease: 'power3.out', delay: .16, clearProps: 'opacity,visibility,transform' }
        );
    }
    startSliderTimer();
    window.addEventListener('resize', scheduleStageMeasure, { passive: true });
    window.addEventListener('load', scheduleStageMeasure, { once: true });
    slides.forEach((slide) => {
        slide.querySelectorAll('img').forEach((image) => {
            if (!image.complete) image.addEventListener('load', scheduleStageMeasure, { once: true });
        });
    });
}

// Progressive reveal: never leave content hidden if JS/observer is unavailable.
const revealItems = document.querySelectorAll('.reveal');
if ('IntersectionObserver' in window && !prefersReducedMotion) {
    const observer = new IntersectionObserver((entries, currentObserver) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('is-pending');
                entry.target.classList.add('is-visible');
                currentObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08, rootMargin: '0px 0px 80px 0px' });

    revealItems.forEach((item, index) => {
        item.style.transitionDelay = `${Math.min(index % 4, 3) * 70}ms`;
        item.classList.remove('is-visible');
        item.classList.add('is-pending');
        observer.observe(item);
    });
} else {
    revealItems.forEach((item) => {
        item.classList.remove('is-pending');
        item.classList.add('is-visible');
    });
}

const year = document.querySelector('[data-year]');
if (year) year.textContent = new Date().getFullYear();
