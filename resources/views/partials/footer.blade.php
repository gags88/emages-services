{{-- Footer --}}
<footer class="relative bg-surface-900 overflow-hidden">

    {{-- CTA Banner --}}
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        <div class="relative rounded-3xl bg-gradient-to-br from-primary-600 via-primary-700 to-accent-600 p-10 lg:p-14 overflow-hidden" id="cta-banner">
            {{-- Animated particles canvas --}}
            <canvas id="cta-particles" class="absolute inset-0 w-full h-full pointer-events-none"></canvas>
            {{-- Decorative gradient orbs --}}
            <div class="absolute -top-24 -right-24 w-72 h-72 rounded-full bg-accent-400/20 blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-24 -left-24 w-72 h-72 rounded-full bg-primary-400/20 blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full bg-white/5 blur-3xl"></div>
            {{-- Grid pattern overlay --}}
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.04%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')] opacity-40"></div>
            <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-sm text-white/90 font-medium mb-5">
                        <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                        Available for new projects
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-display font-bold text-white mb-3 leading-tight">Ready to Transform Your<br>Digital Presence?</h2>
                    <p class="text-lg text-white/70 max-w-xl">Let's build something extraordinary together. Get a free consultation and project estimate today.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-primary-700 font-bold rounded-xl hover:bg-white/90 hover:shadow-2xl hover:shadow-white/20 transition-all duration-300 shadow-lg">
                        Start Your Project
                        <i class="ph ph-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="tel:+919557399588" class="inline-flex items-center justify-center gap-2 px-8 py-4 border-2 border-white/20 text-white font-semibold rounded-xl hover:bg-white/10 hover:border-white/40 backdrop-blur-sm transition-all duration-300">
                        <i class="ph ph-phone"></i>
                        Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Particle animation script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvas = document.getElementById('cta-particles');
            if (!canvas) return;
            const ctx = canvas.getContext('2d');
            let particles = [];
            let animationId;

            function resize() {
                const rect = canvas.parentElement.getBoundingClientRect();
                canvas.width = rect.width;
                canvas.height = rect.height;
            }

            function createParticle() {
                return {
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    size: Math.random() * 2.5 + 0.5,
                    speedX: (Math.random() - 0.5) * 0.5,
                    speedY: (Math.random() - 0.5) * 0.5,
                    opacity: Math.random() * 0.5 + 0.1,
                    pulse: Math.random() * Math.PI * 2,
                    pulseSpeed: Math.random() * 0.02 + 0.005
                };
            }

            function init() {
                resize();
                particles = [];
                const count = Math.min(60, Math.floor(canvas.width * canvas.height / 8000));
                for (let i = 0; i < count; i++) {
                    particles.push(createParticle());
                }
            }

            function drawParticle(p) {
                const pulsedOpacity = p.opacity * (0.6 + 0.4 * Math.sin(p.pulse));
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255, 255, 255, ${pulsedOpacity})`;
                ctx.fill();
            }

            function drawLines() {
                for (let i = 0; i < particles.length; i++) {
                    for (let j = i + 1; j < particles.length; j++) {
                        const dx = particles[i].x - particles[j].x;
                        const dy = particles[i].y - particles[j].y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < 120) {
                            ctx.beginPath();
                            ctx.moveTo(particles[i].x, particles[i].y);
                            ctx.lineTo(particles[j].x, particles[j].y);
                            ctx.strokeStyle = `rgba(255, 255, 255, ${0.06 * (1 - dist / 120)})`;
                            ctx.lineWidth = 0.5;
                            ctx.stroke();
                        }
                    }
                }
            }

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                particles.forEach(p => {
                    p.x += p.speedX;
                    p.y += p.speedY;
                    p.pulse += p.pulseSpeed;
                    if (p.x < 0 || p.x > canvas.width) p.speedX *= -1;
                    if (p.y < 0 || p.y > canvas.height) p.speedY *= -1;
                    drawParticle(p);
                });
                drawLines();
                animationId = requestAnimationFrame(animate);
            }

            // Intersection Observer: only animate when visible
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (!animationId) animate();
                    } else {
                        cancelAnimationFrame(animationId);
                        animationId = null;
                    }
                });
            }, {
                threshold: 0.1
            });

            init();
            observer.observe(canvas.parentElement);
            window.addEventListener('resize', () => {
                resize();
            });
        });
    </script>

    {{-- Main Footer --}}
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8">

            {{-- Brand Column --}}
            <div class="lg:col-span-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary-500 to-accent-500 flex items-center justify-center font-display font-bold text-lg text-white">E</div>
                    <div>
                        <span class="text-xl font-display font-bold text-white">Emages</span>
                        <span class="text-xl font-display font-light text-primary-400">Soft</span>
                    </div>
                </a>
                <p class="text-surface-400 leading-relaxed mb-6 max-w-sm text-sm">
                    We are a software company delivering high-quality digital solutions for domestic and overseas clients. Consultancy and total IT solutions at reasonable cost.
                </p>
                <div class="flex items-center gap-2.5">
                    <a href="https://www.facebook.com/emagessoftservices" target="_blank" class="w-9 h-9 rounded-lg bg-surface-800 flex items-center justify-center hover:bg-primary-600/20 hover:text-primary-400 transition-all text-surface-400">
                        <i class="ph ph-facebook-logo text-base"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="w-9 h-9 rounded-lg bg-surface-800 flex items-center justify-center hover:bg-primary-600/20 hover:text-primary-400 transition-all text-surface-400">
                        <i class="ph ph-x-logo text-base"></i>
                    </a>
                    <a href="https://linkedin.com/" target="_blank" class="w-9 h-9 rounded-lg bg-surface-800 flex items-center justify-center hover:bg-primary-600/20 hover:text-primary-400 transition-all text-surface-400">
                        <i class="ph ph-linkedin-logo text-base"></i>
                    </a>
                    <a href="https://instagram.com/" target="_blank" class="w-9 h-9 rounded-lg bg-surface-800 flex items-center justify-center hover:bg-primary-600/20 hover:text-primary-400 transition-all text-surface-400">
                        <i class="ph ph-instagram-logo text-base"></i>
                    </a>
                </div>

                {{-- Google Workspace Partner Badge --}}
                <div class="mt-6 px-4 py-3 rounded-xl bg-surface-800 border border-surface-700 inline-block">
                    <p class="text-xs text-surface-500 mb-0.5">Authorized Partner</p>
                    <p class="text-sm font-semibold text-surface-300">Google Workspace Partner</p>
                </div>
            </div>

            {{-- Services --}}
            <div class="lg:col-span-2">
                <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-5">Services</h4>
                <ul class="space-y-2.5">
                    <li><a href="{{ route('services') }}#web-development" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">Web Development</a></li>
                    <li><a href="{{ route('services') }}#mobile-apps" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">Mobile Apps</a></li>
                    <li><a href="{{ route('services') }}#ecommerce" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">E-Commerce</a></li>
                    <li><a href="{{ route('services') }}#cms-development" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">CMS Development</a></li>
                    <li><a href="{{ route('services') }}#digital-marketing" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">Digital Marketing</a></li>
                    <li><a href="{{ route('services') }}#graphic-design" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">Graphic Design</a></li>
                    <li><a href="{{ route('services') }}#seo" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">SEO Services</a></li>
                </ul>
            </div>

            {{-- Company --}}
            <div class="lg:col-span-2">
                <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-5">Company</h4>
                <ul class="space-y-2.5">
                    <li><a href="{{ route('about') }}" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">About Us</a></li>
                    <li><a href="{{ route('portfolio') }}" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">Portfolio</a></li>
                    <li><a href="{{ route('blog') }}" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">Blog</a></li>
                    <li><a href="{{ route('pricing') }}" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">Pricing</a></li>
                    <li><a href="{{ route('contact') }}" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">Contact</a></li>
                    <li><a href="#" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">Careers</a></li>
                    <li><a href="#" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">Support Center</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div class="lg:col-span-4">
                <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-5">Get in Touch</h4>
                <ul class="space-y-3.5">
                    <li class="flex items-start gap-3">
                        <i class="ph ph-map-pin text-primary-400 text-base mt-0.5"></i>
                        <span class="text-sm text-surface-400 leading-relaxed">F-13, Vidyut Nagar Colony, G.T. Road,<br>Dhanipur, Aligarh-202001, UP, India</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ph ph-phone text-primary-400 text-base"></i>
                        <a href="tel:+919557399588" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">+91 955 739 9588</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ph ph-envelope text-primary-400 text-base"></i>
                        <a href="mailto:sales@emagessoft.com" class="text-sm text-surface-400 hover:text-primary-400 transition-colors">sales@emagessoft.com</a>
                    </li>
                </ul>

                {{-- Payment --}}
                <div class="mt-6">
                    <a href="#" class="inline-flex items-center gap-2 px-5 py-2.5 bg-primary-600 rounded-lg text-sm font-semibold text-white hover:bg-primary-500 transition-colors shadow-sm">
                        <i class="ph ph-credit-card"></i>
                        Pay For Services
                    </a>
                </div>

                {{-- Policies --}}
                <div class="mt-5 flex flex-wrap gap-x-4 gap-y-2">
                    <a href="#" class="text-xs text-surface-500 hover:text-surface-300 transition-colors">Privacy Policy</a>
                    <a href="#" class="text-xs text-surface-500 hover:text-surface-300 transition-colors">Terms & Conditions</a>
                    <a href="#" class="text-xs text-surface-500 hover:text-surface-300 transition-colors">Refund Policy</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-surface-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-sm text-surface-500">&copy; {{ date('Y') }} Emages Soft Services. All Rights Reserved.</p>
            <p class="text-sm text-surface-500">Crafted with <span class="text-red-400">&hearts;</span> for digital excellence</p>
        </div>
    </div>
</footer>