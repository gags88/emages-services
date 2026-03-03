import './bootstrap';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';

Alpine.plugin(collapse);
window.Alpine = Alpine;
Alpine.start();

// ========== Intersection Observer for Scroll Animations ==========
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Add stagger delay if specified
                const delay = entry.target.dataset.delay || 0;
                setTimeout(() => {
                    entry.target.classList.add('active');
                }, parseInt(delay));
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all reveal elements
    document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale').forEach((el) => {
        observer.observe(el);
    });

    // ========== Counter Animation ==========
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const countTo = parseInt(target.dataset.count);
                if (!countTo) return;

                let current = 0;
                const increment = countTo / 60;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= countTo) {
                        current = countTo;
                        clearInterval(timer);
                    }
                    target.textContent = Math.floor(current) + '+';
                }, 30);

                counterObserver.unobserve(target);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('[data-count]').forEach((el) => {
        counterObserver.observe(el);
    });

    // ========== Smooth anchor scrolling with offset ==========
    document.querySelectorAll('a[href*="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            const hashIndex = href.indexOf('#');
            if (hashIndex === -1) return;

            const hash = href.substring(hashIndex);
            const target = document.querySelector(hash);
            if (!target) return;

            // Only prevent default if same page
            const currentPath = window.location.pathname;
            const linkPath = href.substring(0, hashIndex) || currentPath;
            if (linkPath === currentPath || linkPath === '') {
                e.preventDefault();
                const offset = 100;
                const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });
});
