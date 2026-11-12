const header = document.querySelector('.site-header');
const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.primary-nav');

const updateHeader = () => {
    if (header) header.classList.toggle('is-scrolled', window.scrollY > 24);
};

updateHeader();
window.addEventListener('scroll', updateHeader, { passive: true });

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

    navigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') closeMenu();
    });

    document.addEventListener('click', (event) => {
        if (!navigation.contains(event.target) && !menuButton.contains(event.target)) closeMenu();
    });
}

const revealItems = document.querySelectorAll('.reveal');
if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const observer = new IntersectionObserver((entries, currentObserver) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                currentObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -35px 0px' });

    revealItems.forEach((item, index) => {
        item.style.transitionDelay = `${Math.min(index % 4, 3) * 70}ms`;
        observer.observe(item);
    });
} else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
}

const year = document.querySelector('[data-year]');
if (year) year.textContent = new Date().getFullYear();


/* Home hero carousel */
const heroCarousel = document.querySelector('.hero-slider');
if (heroCarousel) {
    const slides = Array.from(heroCarousel.querySelectorAll('.hero-slide'));
    const dots = Array.from(heroCarousel.querySelectorAll('.hero-dot'));
    const previousButton = heroCarousel.querySelector('.hero-prev');
    const nextButton = heroCarousel.querySelector('.hero-next');
    const counter = heroCarousel.querySelector('.hero-slide-count b');
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let activeIndex = Math.max(0, slides.findIndex((slide) => slide.classList.contains('is-active')));
    let autoplayId = null;
    const autoplayDelay = 5600;

    const showSlide = (requestedIndex) => {
        if (!slides.length) return;
        activeIndex = (requestedIndex + slides.length) % slides.length;

        slides.forEach((slide, index) => {
            const active = index === activeIndex;
            slide.classList.toggle('is-active', active);
            slide.setAttribute('aria-hidden', String(!active));
            slide.querySelectorAll('a, button').forEach((control) => {
                if (active) {
                    control.removeAttribute('tabindex');
                } else {
                    control.setAttribute('tabindex', '-1');
                }
            });
        });

        dots.forEach((dot, index) => {
            const active = index === activeIndex;
            dot.classList.toggle('is-current', active);
            dot.setAttribute('aria-pressed', String(active));
        });

        if (counter) counter.textContent = String(activeIndex + 1).padStart(2, '0');
    };

    const stopAutoplay = () => {
        if (autoplayId !== null) {
            window.clearInterval(autoplayId);
            autoplayId = null;
        }
    };

    const startAutoplay = () => {
        stopAutoplay();
        if (slides.length < 2 || reducedMotion.matches || document.hidden) return;
        autoplayId = window.setInterval(() => showSlide(activeIndex + 1), autoplayDelay);
    };

    const goToSlide = (index) => {
        showSlide(index);
        startAutoplay();
    };

    previousButton?.addEventListener('click', () => goToSlide(activeIndex - 1));
    nextButton?.addEventListener('click', () => goToSlide(activeIndex + 1));
    dots.forEach((dot, index) => dot.addEventListener('click', () => goToSlide(index)));

    heroCarousel.addEventListener('mouseenter', stopAutoplay);
    heroCarousel.addEventListener('mouseleave', startAutoplay);
    heroCarousel.addEventListener('focusin', stopAutoplay);
    heroCarousel.addEventListener('focusout', (event) => {
        if (!heroCarousel.contains(event.relatedTarget)) startAutoplay();
    });
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) stopAutoplay();
        else startAutoplay();
    });
    reducedMotion.addEventListener?.('change', startAutoplay);

    showSlide(activeIndex);
    startAutoplay();
}
