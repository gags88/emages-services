import "./bootstrap";
import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";

const connection =
    navigator.connection ||
    navigator.mozConnection ||
    navigator.webkitConnection;
const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
).matches;
const isMobileViewport = window.matchMedia("(max-width: 1023px)").matches;
const hasSaveData = connection?.saveData === true;
const isSlowNetwork = ["slow-2g", "2g"].includes(connection?.effectiveType);
const lowCpu = (navigator.hardwareConcurrency || 8) <= 4;
const lowMemory = (navigator.deviceMemory || 8) <= 4;
const forceLiteMode = true;

const isLiteMode =
    forceLiteMode ||
    prefersReducedMotion ||
    isMobileViewport ||
    hasSaveData ||
    isSlowNetwork ||
    lowCpu ||
    lowMemory;

window.__EMAGES_LITE_MODE__ = isLiteMode;
document.documentElement.classList.toggle("lite-mode", isLiteMode);

Alpine.plugin(collapse);
window.Alpine = Alpine;
Alpine.start();

// Keep this class to preserve existing animation styles.
document.documentElement.classList.add("js-ready");

// ========== Intersection Observer for Scroll Animations ==========
document.addEventListener("DOMContentLoaded", () => {
    const revealElements = document.querySelectorAll(
        ".reveal, .reveal-left, .reveal-right, .reveal-scale",
    );
    const revealAll = () =>
        revealElements.forEach((el) => el.classList.add("active"));
    const supportsIntersectionObserver = "IntersectionObserver" in window;

    if (isLiteMode || !supportsIntersectionObserver) {
        revealAll();
    } else {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px",
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Add stagger delay if specified
                    const delay = Number.parseInt(
                        entry.target.dataset.delay || "0",
                        10,
                    );
                    window.setTimeout(() => {
                        entry.target.classList.add("active");
                    }, delay);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        revealElements.forEach((el) => observer.observe(el));

        // Fail-safe: never keep sections hidden if observers are delayed.
        window.setTimeout(revealAll, 1500);
    }

    // ========== Counter Animation ==========
    const counters = document.querySelectorAll("[data-count]");
    if (!supportsIntersectionObserver || isLiteMode) {
        counters.forEach((el) => {
            const countTo = Number.parseInt(el.dataset.count || "0", 10);
            if (countTo) {
                el.textContent = `${countTo}+`;
            }
        });
    } else {
        const counterObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const target = entry.target;
                        const countTo = Number.parseInt(
                            target.dataset.count || "0",
                            10,
                        );
                        if (!countTo) return;

                        let current = 0;
                        const increment = countTo / 60;
                        const timer = window.setInterval(() => {
                            current += increment;
                            if (current >= countTo) {
                                current = countTo;
                                window.clearInterval(timer);
                            }
                            target.textContent = `${Math.floor(current)}+`;
                        }, 30);

                        counterObserver.unobserve(target);
                    }
                });
            },
            { threshold: 0.5 },
        );

        counters.forEach((el) => {
            counterObserver.observe(el);
        });
    }

    // ========== Smooth anchor scrolling with offset ==========
    const smoothBehavior = isLiteMode ? "auto" : "smooth";
    document.querySelectorAll('a[href*="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            const href = this.getAttribute("href");
            if (!href) return;

            const hashIndex = href.indexOf("#");
            if (hashIndex === -1) return;

            const hash = href.substring(hashIndex);
            if (hash.length <= 1) return;

            const target = document.querySelector(hash);
            if (!target) return;

            // Only prevent default if same page
            const currentPath = window.location.pathname;
            const linkPath = href.substring(0, hashIndex) || currentPath;
            if (linkPath === currentPath || linkPath === "") {
                e.preventDefault();
                const offset = 100;
                const top =
                    target.getBoundingClientRect().top +
                    window.pageYOffset -
                    offset;
                window.scrollTo({ top, behavior: smoothBehavior });
            }
        });
    });
});
