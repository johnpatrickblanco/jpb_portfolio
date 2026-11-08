import './app.css';

const initScrollReveal = () => {
    const elements = document.querySelectorAll('.reveal');

    if (!('IntersectionObserver' in window)) {
        elements.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1 }
    );

    elements.forEach((el) => observer.observe(el));
};

const initSmoothScroll = () => {
    document.querySelectorAll('[data-scroll]').forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const target = document.getElementById(btn.dataset.scroll);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                document.getElementById('mobileMenu')?.classList.remove('open');
                document.getElementById('menuIcon')?.classList.remove('hidden');
                document.getElementById('closeIcon')?.classList.add('hidden');
            }
        });
    });
};

const initThemeToggle = () => {
    const toggle = document.getElementById('themeToggle');
    if (!toggle) return;

    const applyTheme = (dark) => {
        document.documentElement.classList.toggle('dark', dark);
        const sun = document.getElementById('iconSun');
        const moon = document.getElementById('iconMoon');
        if (sun && moon) {
            sun.classList.toggle('hidden', !dark);
            moon.classList.toggle('hidden', dark);
        }
    };

    const stored = localStorage.getItem('theme');
    const savedDark = stored === 'dark';

    applyTheme(savedDark);

    toggle.addEventListener('click', () => {
        const next = !document.documentElement.classList.contains('dark');
        localStorage.setItem('theme', next ? 'dark' : 'light');
        applyTheme(next);
    });
};

const initMobileMenu = () => {
    const toggle = document.getElementById('menuToggle');
    const menu = document.getElementById('mobileMenu');
    if (!toggle || !menu) return;

    toggle.addEventListener('click', () => {
        const open = menu.classList.toggle('open');
        document.getElementById('menuIcon')?.classList.toggle('hidden', open);
        document.getElementById('closeIcon')?.classList.toggle('hidden', !open);
    });
};

const initCarousels = () => {
    document.querySelectorAll('[data-carousel]').forEach((carousel) => {
        const track = carousel.querySelector('[data-carousel-track]');
        if (!track) return;

        const slides = Array.from(track.children);
        if (slides.length <= 1) return;

        const dots = Array.from(carousel.querySelectorAll('[data-carousel-dot]'));
        let index = 0;

        const update = () => {
            track.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach((dot, dotIndex) => {
                dot.classList.toggle('is-active', dotIndex === index);
            });
        };

        const goTo = (nextIndex) => {
            index = (nextIndex + slides.length) % slides.length;
            update();
        };

        carousel.querySelector('[data-carousel-prev]')?.addEventListener('click', () => goTo(index - 1));
        carousel.querySelector('[data-carousel-next]')?.addEventListener('click', () => goTo(index + 1));

        dots.forEach((dot, dotIndex) => {
            dot.addEventListener('click', () => goTo(dotIndex));
        });

        let startX = null;

        carousel.addEventListener(
            'touchstart',
            (event) => {
                startX = event.touches[0].clientX;
            },
            { passive: true }
        );

        carousel.addEventListener(
            'touchend',
            (event) => {
                if (startX === null) return;

                const deltaX = event.changedTouches[0].clientX - startX;

                if (Math.abs(deltaX) > 40) {
                    goTo(index + (deltaX < 0 ? 1 : -1));
                }

                startX = null;
            },
            { passive: true }
        );

        update();
    });
};

const initYear = () => {
    const year = document.getElementById('year');
    if (year) {
        year.textContent = new Date().getFullYear();
    }
};

document.addEventListener('DOMContentLoaded', () => {
    initScrollReveal();
    initSmoothScroll();
    initThemeToggle();
    initMobileMenu();
    initCarousels();
    initYear();
});
