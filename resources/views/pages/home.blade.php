@extends('layouts.app')

@section('title', 'Emages Soft Services - Professional Web Development & Digital Solutions')
@section('meta_description', 'Emages Soft Services is a leading software development company offering web development, e-commerce, mobile apps, SEO, and digital marketing services worldwide.')

@section('content')

{{-- Hero Section --}}
<section class="relative pt-28 pb-20 lg:pt-36 lg:pb-28 overflow-hidden bg-linear-to-br from-surface-950 via-primary-950 to-surface-900" id="hero">
    {{-- Animated particle canvas --}}
    <canvas id="hero-particles" class="absolute inset-0 w-full h-full"></canvas>
    {{-- Animated gradient orbs --}}
    <div class="absolute top-0 left-1/4 w-125 h-125 rounded-full bg-primary-600/15 blur-[120px] animate-orb-1"></div>
    <div class="absolute bottom-0 right-1/4 w-100 h-100 rounded-full bg-accent-500/15 blur-[100px] animate-orb-2"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-150 h-150 rounded-full bg-primary-500/5 blur-[150px]"></div>
    {{-- Grid pattern --}}
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2040%2040%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.03%22%3E%3Cpath%20d%3D%22M0%200h1v1H0zM20%200h1v1h-1zM0%2020h1v1H0zM20%2020h1v1h-1z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 backdrop-blur-md border border-white/10 text-sm font-medium mb-8 animate-fade-in">
                    <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                    <span class="text-white/80">Premium Digital Solutions</span>
                    <span class="px-2 py-0.5 rounded-full bg-primary-500/20 text-primary-300 text-xs font-bold">NEW</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-display font-bold mb-6 animate-slide-up leading-[1.1]">
                    <span class="text-white">We Build Digital</span><br>
                    <span class="text-white">Products That</span><br>
                    <span class="hero-gradient-text">Drive Growth</span>
                </h1>
                <p class="text-lg lg:text-xl text-white/50 mb-10 max-w-xl animate-slide-up leading-relaxed" style="animation-delay: 0.15s;">
                    From custom software to digital marketing, we help businesses transform their digital presence with solutions that deliver measurable results.
                </p>
                <div class="flex flex-wrap gap-4 justify-center lg:justify-start animate-slide-up" style="animation-delay: 0.3s;">
                    <a href="{{ route('contact') }}" class="group inline-flex items-center gap-2 px-8 py-4 bg-linear-to-r from-primary-500 to-primary-600 text-white font-bold rounded-xl hover:from-primary-400 hover:to-primary-500 shadow-lg shadow-primary-500/25 hover:shadow-xl hover:shadow-primary-500/30 hover:-translate-y-0.5 transition-all duration-300">
                        Start Your Project <i class="ph ph-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="{{ route('portfolio') }}" class="group inline-flex items-center gap-2 px-8 py-4 border border-white/15 text-white/90 font-semibold rounded-xl hover:bg-white/5 hover:border-white/25 backdrop-blur-sm transition-all duration-300">
                        View Our Work <i class="ph ph-briefcase"></i>
                    </a>
                </div>
                {{-- Trust badges --}}
                <div class="mt-12 flex flex-wrap items-center gap-6 justify-center lg:justify-start animate-fade-in" style="animation-delay: 0.5s;">
                    <div class="flex items-center gap-2">
                        <div class="flex -space-x-2">
                            <div class="w-8 h-8 rounded-full bg-linear-to-br from-blue-400 to-blue-600 border-2 border-surface-900 flex items-center justify-center text-white text-[10px] font-bold">G</div>
                            <div class="w-8 h-8 rounded-full bg-linear-to-br from-green-400 to-green-600 border-2 border-surface-900 flex items-center justify-center text-white text-[10px] font-bold">Z</div>
                            <div class="w-8 h-8 rounded-full bg-linear-to-br from-orange-400 to-orange-600 border-2 border-surface-900 flex items-center justify-center text-white text-[10px] font-bold">A</div>
                        </div>
                        <span class="text-xs text-white/40">Trusted Partners</span>
                    </div>
                    <div class="h-5 w-px bg-white/10"></div>
                    <div class="flex items-center gap-1.5">
                        @for($i = 0; $i < 5; $i++)
                            <i class="ph-fill ph-star text-amber-400 text-sm"></i>
                            @endfor
                            <span class="text-xs text-white/40 ml-1">4.9/5 Rating</span>
                    </div>
                </div>
            </div>

            {{-- Right side: Interactive visual --}}
            <div class="hidden lg:block relative animate-fade-in" style="animation-delay: 0.3s;">
                <div class="relative">
                    {{-- Main visual card --}}
                    <div class="relative rounded-3xl bg-linear-to-br from-white/8 to-white/2 backdrop-blur-xl border border-white/10 p-8 overflow-hidden">
                        {{-- Inner glow --}}
                        <div class="absolute top-0 right-0 w-40 h-40 bg-primary-500/10 rounded-full blur-3xl"></div>
                        <div class="absolute bottom-0 left-0 w-40 h-40 bg-accent-500/10 rounded-full blur-3xl"></div>

                        {{-- Code-like visual --}}
                        <div class="relative space-y-4">
                            <div class="flex items-center gap-2 mb-6">
                                <div class="w-3 h-3 rounded-full bg-red-400/80"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400/80"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400/80"></div>
                                <span class="ml-3 text-xs text-white/30 font-mono">emagessoft.dev</span>
                            </div>
                            <div class="space-y-3 font-mono text-sm">
                                <div class="flex items-center gap-3">
                                    <span class="text-primary-400">const</span>
                                    <span class="text-accent-400">project</span>
                                    <span class="text-white/40">=</span>
                                    <span class="text-amber-300">buildDream</span><span class="text-white/40">(</span>
                                </div>
                                <div class="pl-6 flex items-center gap-3">
                                    <span class="text-white/40">{</span>
                                    <span class="text-emerald-400">design</span><span class="text-white/40">:</span>
                                    <span class="text-orange-300">'stunning'</span><span class="text-white/40">,</span>
                                </div>
                                <div class="pl-8 flex items-center gap-3">
                                    <span class="text-emerald-400">performance</span><span class="text-white/40">:</span>
                                    <span class="text-orange-300">'blazing'</span><span class="text-white/40">,</span>
                                </div>
                                <div class="pl-8 flex items-center gap-3">
                                    <span class="text-emerald-400">results</span><span class="text-white/40">:</span>
                                    <span class="text-orange-300">'guaranteed'</span>
                                </div>
                                <div class="pl-6"><span class="text-white/40">}</span></div>
                                <div><span class="text-white/40">);</span></div>
                            </div>

                            {{-- Animated progress bar --}}
                            <div class="mt-6 space-y-2">
                                <div class="flex justify-between text-xs">
                                    <span class="text-white/40">Building your vision...</span>
                                    <span class="text-primary-400 font-semibold">100%</span>
                                </div>
                                <div class="h-1.5 rounded-full bg-white/5 overflow-hidden">
                                    <div class="h-full rounded-full bg-linear-to-r from-primary-500 to-accent-500 animate-progress-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating stat cards --}}
                    <div class="absolute -bottom-6 -left-6 bg-surface-900/90 backdrop-blur-xl shadow-2xl shadow-black/20 rounded-2xl p-4 border border-white/10 animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-linear-to-br from-green-500/20 to-emerald-500/20 flex items-center justify-center">
                                <i class="ph-fill ph-users text-lg text-green-400"></i>
                            </div>
                            <div>
                                <p class="text-base font-bold text-white">150+</p>
                                <p class="text-[11px] text-white/40">Clients Worldwide</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-5 -right-5 bg-surface-900/90 backdrop-blur-xl shadow-2xl shadow-black/20 rounded-2xl p-4 border border-white/10 animate-float" style="animation-delay: 1.5s;">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-linear-to-br from-amber-500/20 to-orange-500/20 flex items-center justify-center">
                                <i class="ph-fill ph-star text-lg text-amber-400"></i>
                            </div>
                            <div>
                                <p class="text-base font-bold text-white">5-Star</p>
                                <p class="text-[11px] text-white/40">Google Rated</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute top-1/2 -right-8 -translate-y-1/2 bg-surface-900/90 backdrop-blur-xl shadow-2xl shadow-black/20 rounded-2xl p-4 border border-white/10 animate-float" style="animation-delay: 3s;">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-linear-to-br from-primary-500/20 to-blue-500/20 flex items-center justify-center">
                                <i class="ph-fill ph-rocket text-lg text-primary-400"></i>
                            </div>
                            <div>
                                <p class="text-base font-bold text-white">500+</p>
                                <p class="text-[11px] text-white/40">Projects Delivered</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Hero particles script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvas = document.getElementById('hero-particles');
            if (!canvas) return;
            const ctx = canvas.getContext('2d');
            let particles = [];
            let mouse = {
                x: null,
                y: null
            };

            function resize() {
                canvas.width = canvas.offsetWidth;
                canvas.height = canvas.offsetHeight;
            }

            canvas.addEventListener('mousemove', e => {
                const rect = canvas.getBoundingClientRect();
                mouse.x = e.clientX - rect.left;
                mouse.y = e.clientY - rect.top;
            });
            canvas.addEventListener('mouseleave', () => {
                mouse.x = null;
                mouse.y = null;
            });

            function createParticle() {
                return {
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    size: Math.random() * 2 + 0.3,
                    speedX: (Math.random() - 0.5) * 0.4,
                    speedY: (Math.random() - 0.5) * 0.4,
                    opacity: Math.random() * 0.4 + 0.05,
                    pulse: Math.random() * Math.PI * 2,
                    pulseSpeed: Math.random() * 0.015 + 0.005,
                    hue: Math.random() > 0.5 ? 230 : 165
                };
            }

            function init() {
                resize();
                particles = [];
                const count = Math.min(80, Math.floor(canvas.width * canvas.height / 7000));
                for (let i = 0; i < count; i++) particles.push(createParticle());
            }

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                for (let i = 0; i < particles.length; i++) {
                    const p = particles[i];
                    p.x += p.speedX;
                    p.y += p.speedY;
                    p.pulse += p.pulseSpeed;

                    if (mouse.x !== null) {
                        const dx = mouse.x - p.x,
                            dy = mouse.y - p.y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < 150) {
                            p.x -= dx * 0.005;
                            p.y -= dy * 0.005;
                        }
                    }

                    if (p.x < 0 || p.x > canvas.width) p.speedX *= -1;
                    if (p.y < 0 || p.y > canvas.height) p.speedY *= -1;

                    const po = p.opacity * (0.5 + 0.5 * Math.sin(p.pulse));
                    ctx.beginPath();
                    ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                    ctx.fillStyle = `hsla(${p.hue}, 70%, 70%, ${po})`;
                    ctx.fill();

                    for (let j = i + 1; j < particles.length; j++) {
                        const p2 = particles[j];
                        const dx = p.x - p2.x,
                            dy = p.y - p2.y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < 100) {
                            ctx.beginPath();
                            ctx.moveTo(p.x, p.y);
                            ctx.lineTo(p2.x, p2.y);
                            ctx.strokeStyle = `hsla(${p.hue}, 60%, 60%, ${0.04 * (1 - dist / 100)})`;
                            ctx.lineWidth = 0.5;
                            ctx.stroke();
                        }
                    }
                }
                requestAnimationFrame(animate);
            }

            init();
            animate();
            window.addEventListener('resize', init);
        });
    </script>
</section>

{{-- Stats Bar --}}
<section class="bg-linear-to-r from-primary-700 via-primary-600 to-accent-600 py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-16">
            @foreach([['20+', 'Years Experience'], ['150+', 'Happy Clients'], ['300+', 'Projects Completed'], ['15+', 'Countries Served']] as $stat)
            <div class="text-center reveal">
                <div class="text-4xl font-display font-bold text-white mb-1">{{ $stat[0] }}</div>
                <p class="text-sm text-white/70 uppercase tracking-wider">{{ $stat[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Services --}}
<section class="py-24 bg-linear-to-br from-white via-primary-50/30 to-accent-50/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-50 text-primary-600 text-sm font-medium mb-4">
                <i class="ph ph-sparkle"></i> What We Do
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">Services That Drive <span class="gradient-text">Results</span></h2>
            <p class="text-lg text-surface-500">End-to-end digital solutions tailored to your business needs.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
            ['ph-code', 'Web Development', 'Custom websites, web apps, and enterprise solutions built with cutting-edge technologies.', 'primary', route('services').'#web-development'],
            ['ph-shopping-cart', 'E-Commerce', 'Powerful online stores designed to convert visitors into loyal customers.', 'accent', route('services').'#ecommerce'],
            ['ph-layout', 'CMS Development', 'Flexible content management systems — WordPress, Joomla, and custom solutions.', 'green', route('services').'#cms-development'],
            ['ph-megaphone', 'Digital Marketing', 'Social media, PPC, content marketing strategies that drive qualified traffic.', 'pink', route('services').'#digital-marketing'],
            ['ph-magnifying-glass', 'SEO Services', 'Data-driven SEO strategies to boost rankings and organic visibility.', 'orange', route('services').'#seo'],
            ['ph-palette', 'Graphic Design', 'Stunning visual identities — logos, branding, and marketing collateral.', 'cyan', route('services').'#graphic-design'],
            ] as $service)
            <a href="{{ $service[4] }}" class="group p-6 rounded-2xl bg-white border border-surface-200 hover:shadow-lg hover:border-{{ $service[3] }}-200 transition-all duration-300 reveal">
                <div class="w-12 h-12 rounded-xl bg-{{ $service[3] }}-50 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ph {{ $service[0] }} text-xl text-{{ $service[3] }}-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-surface-900 mb-2">{{ $service[1] }}</h3>
                <p class="text-sm text-surface-500 leading-relaxed">{{ $service[2] }}</p>
                <span class="inline-flex items-center gap-1 mt-4 text-sm font-medium text-{{ $service[3] }}-600 group-hover:gap-2 transition-all">
                    Learn More <i class="ph ph-arrow-right text-xs"></i>
                </span>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- Why Choose Us --}}
<section class="relative py-28 bg-linear-to-br from-surface-950 via-primary-950 to-surface-900 overflow-hidden">
    {{-- Decorative elements --}}
    <div class="absolute top-0 left-0 w-full h-px bg-linear-to-r from-transparent via-primary-500/30 to-transparent"></div>
    <div class="absolute bottom-0 left-0 w-full h-px bg-linear-to-r from-transparent via-accent-500/30 to-transparent"></div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-primary-600/10 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-20 left-10 w-72 h-72 bg-accent-500/10 rounded-full blur-[120px]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20 reveal">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 backdrop-blur-sm border border-white/10 text-sm font-medium mb-6">
                <span class="w-2 h-2 rounded-full bg-accent-400 animate-pulse"></span>
                <span class="text-white/70">Our Process</span>
            </span>
            <h2 class="text-4xl lg:text-5xl font-display font-bold text-white mb-5">How We Bring Your <span class="hero-gradient-text">Vision to Life</span></h2>
            <p class="text-lg text-white/40">A battle-tested 4-step journey from idea to launch — built on 10+ years of delivering digital excellence.</p>
        </div>

        {{-- Process timeline --}}
        <div class="relative">
            {{-- Connecting line (desktop) --}}
            <div class="hidden lg:block absolute top-15 left-[calc(12.5%+28px)] right-[calc(12.5%+28px)] h-0.5">
                <div class="w-full h-full bg-linear-to-r from-primary-500/50 via-accent-500/50 to-orange-500/50 rounded-full"></div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach([
                ['01', 'Discover', 'We deep-dive into your goals, audience, market, and project needs to build a solid foundation.', 'from-primary-500 to-primary-600', 'ph-magnifying-glass', 'primary', '0s'],
                ['02', 'Plan', 'Strategic wireframing, architecture blueprints, and a clear project roadmap with milestones.', 'from-accent-500 to-accent-600', 'ph-map-trifold', 'accent', '0.1s'],
                ['03', 'Create', 'Pixel-perfect design meets clean code. Weekly demos keep you in the loop every step.', 'from-green-500 to-emerald-600', 'ph-paint-brush', 'green', '0.2s'],
                ['04', 'Launch', 'Rigorous testing, smooth deployment, and dedicated post-launch support for liftoff.', 'from-orange-500 to-amber-600', 'ph-rocket-launch', 'orange', '0.3s'],
                ] as $step)
                <div class="group relative text-center reveal" style="animation-delay: {{ $step[6] }};">
                    {{-- Step number circle --}}
                    <div class="relative z-10 w-30 h-30 mx-auto mb-8">
                        {{-- Animated ring --}}
                        <div class="absolute inset-0 rounded-full bg-linear-to-br {{ $step[3] }} opacity-20 group-hover:opacity-40 group-hover:scale-110 transition-all duration-500"></div>
                        <div class="absolute inset-0.75 rounded-full bg-surface-900/95"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <i class="ph {{ $step[4] }} text-2xl text-{{ $step[5] }}-400 group-hover:scale-125 transition-transform duration-300"></i>
                                <div class="text-[10px] font-bold text-white/30 mt-1 tracking-widest">STEP {{ $step[0] }}</div>
                            </div>
                        </div>
                    </div>
                    {{-- Content card --}}
                    <div class="p-6 rounded-2xl bg-white/3 border border-white/6 hover:bg-white/6 hover:border-{{ $step[5] }}-500/20 transition-all duration-500">
                        <h3 class="text-xl font-display font-bold text-white mb-3">{{ $step[1] }}</h3>
                        <p class="text-sm text-white/40 leading-relaxed">{{ $step[2] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Tech Stack --}}
<section class="py-20 bg-linear-to-b from-primary-50/60 via-white to-accent-50/30 border-y border-primary-100/50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-12 reveal">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-50 text-primary-600 text-sm font-medium mb-4">
            <i class="ph ph-code"></i> Our Stack
        </span>
        <h2 class="text-3xl font-display font-bold text-surface-900">Technologies We Work With</h2>
    </div>
    <div class="relative">
        <div class="absolute left-0 top-0 bottom-0 w-40 bg-linear-to-r from-primary-50/60 via-primary-50/30 to-transparent z-10"></div>
        <div class="absolute right-0 top-0 bottom-0 w-40 bg-linear-to-l from-accent-50/30 via-accent-50/15 to-transparent z-10"></div>
        <div class="flex gap-5 animate-marquee">
            @foreach([
            ['Laravel', 'devicon-laravel-original colored', 'from-red-50 to-red-100/50', 'red'],
            ['React', 'devicon-react-original colored', 'from-cyan-50 to-cyan-100/50', 'cyan'],
            ['Vue.js', 'devicon-vuejs-plain colored', 'from-green-50 to-emerald-100/50', 'green'],
            ['Node.js', 'devicon-nodejs-plain colored', 'from-green-50 to-lime-100/50', 'green'],
            ['PHP', 'devicon-php-plain colored', 'from-indigo-50 to-indigo-100/50', 'indigo'],
            ['WordPress', 'devicon-wordpress-plain colored', 'from-blue-50 to-blue-100/50', 'blue'],
            ['Shopify', 'ph ph-shopping-bag-open', 'from-green-50 to-emerald-100/50', 'green'],
            ['Python', 'devicon-python-plain colored', 'from-yellow-50 to-blue-100/50', 'blue'],
            ['Flutter', 'devicon-flutter-plain colored', 'from-cyan-50 to-blue-100/50', 'blue'],
            ['AWS', 'devicon-amazonwebservices-plain-wordmark colored', 'from-orange-50 to-amber-100/50', 'orange'],
            ['Docker', 'devicon-docker-plain colored', 'from-blue-50 to-cyan-100/50', 'blue'],
            ['MySQL', 'devicon-mysql-original colored', 'from-blue-50 to-orange-100/50', 'blue'],
            ['MongoDB', 'devicon-mongodb-plain colored', 'from-green-50 to-emerald-100/50', 'green'],
            ['Tailwind CSS', 'devicon-tailwindcss-original colored', 'from-cyan-50 to-sky-100/50', 'cyan'],
            ['Next.js', 'devicon-nextjs-plain', 'from-surface-50 to-surface-100/50', 'surface'],
            ['Angular', 'devicon-angularjs-plain colored', 'from-red-50 to-red-100/50', 'red'],
            ['Laravel', 'devicon-laravel-original colored', 'from-red-50 to-red-100/50', 'red'],
            ['React', 'devicon-react-original colored', 'from-cyan-50 to-cyan-100/50', 'cyan'],
            ['Vue.js', 'devicon-vuejs-plain colored', 'from-green-50 to-emerald-100/50', 'green'],
            ['Node.js', 'devicon-nodejs-plain colored', 'from-green-50 to-lime-100/50', 'green'],
            ['PHP', 'devicon-php-plain colored', 'from-indigo-50 to-indigo-100/50', 'indigo'],
            ['WordPress', 'devicon-wordpress-plain colored', 'from-blue-50 to-blue-100/50', 'blue'],
            ['Shopify', 'ph ph-shopping-bag-open', 'from-green-50 to-emerald-100/50', 'green'],
            ['Python', 'devicon-python-plain colored', 'from-yellow-50 to-blue-100/50', 'blue'],
            ['Flutter', 'devicon-flutter-plain colored', 'from-cyan-50 to-blue-100/50', 'blue'],
            ['AWS', 'devicon-amazonwebservices-plain-wordmark colored', 'from-orange-50 to-amber-100/50', 'orange'],
            ] as $tech)
            <div class="shrink-0 group flex flex-col items-center gap-2.5 w-28 py-5 rounded-2xl bg-linear-to-br {{ $tech[2] }} border border-white/80 shadow-sm whitespace-nowrap hover:shadow-lg hover:-translate-y-1 hover:border-{{ $tech[3] }}-200 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-white/80 backdrop-blur-sm shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <i class="{{ $tech[1] }} text-2xl"></i>
                </div>
                <span class="text-xs font-semibold text-surface-700">{{ $tech[0] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Portfolio --}}
<section class="py-28 bg-linear-to-b from-surface-50 via-white to-surface-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-16">
            <div class="max-w-2xl reveal">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-50 text-primary-600 text-sm font-medium mb-4">
                    <i class="ph ph-briefcase"></i> Our Work
                </span>
                <h2 class="text-4xl lg:text-5xl font-display font-bold text-surface-900 mb-4">Featured <span class="gradient-text">Projects</span></h2>
                <p class="text-lg text-surface-500">Real projects delivering real impact. See how we've helped businesses transform digitally across the globe.</p>
            </div>
            <div class="reveal">
                <a href="{{ route('portfolio') }}" class="group inline-flex items-center gap-2 px-7 py-3.5 bg-primary-600 text-white font-semibold rounded-xl hover:bg-primary-700 shadow-sm hover:shadow-lg transition-all">
                    View All Projects <i class="ph ph-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        {{-- Featured large project --}}
        <div class="mb-10 reveal">
            <div class="group relative rounded-3xl overflow-hidden bg-linear-to-br from-blue-600 via-primary-600 to-accent-600 p-1">
                <div class="rounded-[calc(1.5rem-4px)] bg-white overflow-hidden">
                    <div class="grid lg:grid-cols-2">
                        <div class="aspect-4/3 lg:aspect-auto bg-linear-to-br from-blue-50 via-primary-50 to-accent-50 flex items-center justify-center p-12 relative overflow-hidden">
                            <div class="absolute top-6 left-6 px-3 py-1 rounded-full bg-white/80 backdrop-blur-sm border border-surface-100 text-xs font-bold text-primary-600">FEATURED</div>
                            <div class="text-center relative z-10">
                                <div class="w-20 h-20 mx-auto rounded-3xl bg-white shadow-xl shadow-blue-500/10 flex items-center justify-center mb-5 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                                    <i class="ph ph-heartbeat text-4xl text-blue-600"></i>
                                </div>
                                <h3 class="text-2xl font-display font-bold text-surface-900">Mytokondria</h3>
                                <p class="text-sm text-surface-500 mt-1">Health & Wellness Platform</p>
                            </div>
                            {{-- Decorative circles --}}
                            <div class="absolute -bottom-10 -right-10 w-40 h-40 rounded-full bg-primary-100/50"></div>
                            <div class="absolute -top-10 -left-10 w-32 h-32 rounded-full bg-accent-100/30"></div>
                        </div>
                        <div class="p-10 lg:p-14 flex flex-col justify-center">
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-xs font-medium">Laravel</span>
                                <span class="px-3 py-1 rounded-full bg-green-50 text-green-600 text-xs font-medium">Vue.js</span>
                                <span class="px-3 py-1 rounded-full bg-purple-50 text-purple-600 text-xs font-medium">REST API</span>
                                <span class="px-3 py-1 rounded-full bg-orange-50 text-orange-600 text-xs font-medium">Payment Gateway</span>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-surface-900 mb-4">Complete Health & Wellness Digital Ecosystem</h3>
                            <p class="text-surface-500 leading-relaxed mb-8">A comprehensive health platform connecting wellness professionals with patients. Built with custom appointment booking, secure video consultations, content management, and integrated payment processing.</p>
                            <div class="flex items-center gap-8">
                                <div>
                                    <p class="text-2xl font-display font-bold text-primary-600">40%</p>
                                    <p class="text-xs text-surface-400">More Bookings</p>
                                </div>
                                <div class="w-px h-10 bg-surface-200"></div>
                                <div>
                                    <p class="text-2xl font-display font-bold text-accent-600">2x</p>
                                    <p class="text-xs text-surface-400">User Engagement</p>
                                </div>
                                <div class="w-px h-10 bg-surface-200"></div>
                                <div>
                                    <p class="text-2xl font-display font-bold text-green-600">99.9%</p>
                                    <p class="text-xs text-surface-400">Uptime</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Project grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
            ['Al-Hamd Agro Foods', 'E-Commerce Food Products', 'Full e-commerce platform with inventory management, order tracking, and secure payment integration.', 'from-green-500 to-emerald-600', 'from-green-50 to-emerald-50', 'ph-leaf', 'green', ['Shopify', 'Node.js', 'Stripe']],
            ['Wavelinx Technologies', 'Corporate Tech Portal', 'Modern corporate website showcasing tech services with lead generation and team profiles.', 'from-purple-500 to-violet-600', 'from-purple-50 to-violet-50', 'ph-cpu', 'purple', ['React', 'Next.js', 'Tailwind']],
            ['Celfanatic Films', 'Entertainment & Media', 'Creative portfolio for a film production house with video showcases and project galleries.', 'from-red-500 to-orange-600', 'from-red-50 to-orange-50', 'ph-film-strip', 'red', ['WordPress', 'Custom Theme']],
            ['Bluefish Tales', 'Content & Storytelling', 'CMS-powered storytelling platform with custom content types and subscription management.', 'from-cyan-500 to-blue-600', 'from-cyan-50 to-blue-50', 'ph-book-open', 'cyan', ['Laravel', 'Vue.js', 'MySQL']],
            ['National Neonatology Forum', 'Healthcare Organization', 'Large-scale portal with member management, event scheduling, and regional coordination.', 'from-pink-500 to-rose-600', 'from-pink-50 to-rose-50', 'ph-first-aid', 'pink', ['PHP', 'MySQL', 'jQuery']],
            ] as $project)
            <div class="group relative rounded-2xl overflow-hidden bg-white border border-surface-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-500 reveal">
                {{-- Gradient top bar --}}
                <div class="h-1.5 bg-linear-to-r {{ $project[3] }}"></div>
                <div class="aspect-16/10 bg-linear-to-br {{ $project[4] }} flex items-center justify-center relative p-6 overflow-hidden">
                    <div class="text-center relative z-10">
                        <div class="w-16 h-16 mx-auto rounded-2xl bg-white shadow-lg shadow-{{ $project[6] }}-500/10 flex items-center justify-center mb-3 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                            <i class="ph {{ $project[5] }} text-3xl text-{{ $project[6] }}-600"></i>
                        </div>
                        <h3 class="text-lg font-display font-bold text-surface-900">{{ $project[0] }}</h3>
                        <p class="text-xs text-surface-500 mt-0.5">{{ $project[1] }}</p>
                    </div>
                    {{-- Hover overlay --}}
                    <div class="absolute inset-0 bg-linear-to-br {{ $project[3] }} opacity-0 group-hover:opacity-90 flex items-center justify-center transition-all duration-500">
                        <div class="text-center px-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <p class="text-white/90 text-sm leading-relaxed">{{ $project[2] }}</p>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex flex-wrap gap-1.5">
                        @foreach($project[7] as $tag)
                        <span class="px-2.5 py-1 rounded-md bg-surface-50 text-[11px] font-medium text-surface-500">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Testimonials --}}
<section class="py-24 bg-linear-to-br from-accent-50/30 via-white to-primary-50/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent-50 text-accent-600 text-sm font-medium mb-4">
                <i class="ph ph-chat-circle-text"></i> Testimonials
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">What Our Clients <span class="gradient-text">Say</span></h2>
            <p class="text-lg text-surface-500">Trusted by businesses across the globe.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
            ['Vishal Kumar', 'CEO, Mytokondria', 'Emages Soft delivered an exceptional health platform that exceeded our expectations. Their attention to detail and commitment to quality is remarkable.'],
            ['Shahbaz Ahmed', 'Director, Al-Hamd Agro', 'Our e-commerce platform has seen a 200% increase in sales since the redesign. The team truly understands what it takes to build a converting store.'],
            ['Arjun Sharma', 'CTO, Wavelinx Technologies', 'Professional, timely, and technically sound. Emages Soft is our go-to partner for all web development needs. Highly recommended.'],
            ['Sarah Mitchell', 'Founder, Think OOTB', 'Their digital marketing expertise helped us triple our organic traffic within 6 months. A truly data-driven approach that delivers results.'],
            ['Dr. Rakesh Gupta', 'NNF National President', 'Managing a nationwide healthcare organization requires robust technology. Emages Soft delivered a portal that serves thousands of members seamlessly.'],
            ['Priya Nair', 'Owner, Ath Ayurdhamah', 'Beautiful design, fast loading, and great SEO performance. Our online bookings increased significantly after the website launch.'],
            ] as $testimonial)
            <div class="p-6 rounded-2xl bg-white border border-surface-200 hover:shadow-md transition-all reveal">
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < 5; $i++)
                        <i class="ph-fill ph-star text-amber-400 text-sm"></i>
                        @endfor
                </div>
                <p class="text-surface-600 text-sm leading-relaxed mb-6">&ldquo;{{ $testimonial[2] }}&rdquo;</p>
                <div class="flex items-center gap-3 pt-4 border-t border-surface-100">
                    <div class="w-10 h-10 rounded-full bg-primary-50 flex items-center justify-center">
                        <span class="text-sm font-bold text-primary-600">{{ substr($testimonial[0], 0, 1) }}</span>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-surface-900">{{ $testimonial[0] }}</p>
                        <p class="text-xs text-surface-400">{{ $testimonial[1] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Pricing --}}
<section class="py-24 bg-surface-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-50 text-green-600 text-sm font-medium mb-4">
                <i class="ph ph-tag"></i> Pricing
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">Simple, Transparent <span class="gradient-text">Pricing</span></h2>
            <p class="text-lg text-surface-500">Honest pricing for every stage of your business.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            @foreach([
            ['Starter', '$499', '/project', 'Perfect for small businesses', [
            'Up to 5-page website', 'Responsive design', 'Basic SEO setup', 'Contact form', '3 months support'
            ], false],
            ['Professional', '$1,499', '/project', 'For growing businesses', [
            'Up to 15-page website', 'Custom design & animations', 'Advanced SEO', 'CMS integration', 'Payment gateway', '6 months support'
            ], true],
            ['Enterprise', 'Custom', '', 'For large-scale operations', [
            'Unlimited pages', 'Custom web applications', 'E-commerce solutions', 'API integrations', 'Dedicated manager', '12 months priority support'
            ], false],
            ] as $plan)
            <div class="relative p-8 rounded-2xl bg-white border {{ $plan[5] ? 'border-2 border-primary-500 shadow-lg' : 'border-surface-200 hover:shadow-md' }} transition-all reveal">
                @if($plan[5])
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-4 py-1 bg-primary-600 rounded-full text-xs font-bold text-white">MOST POPULAR</div>
                @endif
                <div class="mb-6">
                    <h3 class="text-lg font-display font-bold text-surface-900 mb-1">{{ $plan[0] }}</h3>
                    <p class="text-sm text-surface-400 mb-4">{{ $plan[3] }}</p>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-display font-bold {{ $plan[5] ? 'text-primary-600' : 'text-surface-900' }}">{{ $plan[1] }}</span>
                        @if($plan[2])<span class="text-surface-400 text-sm">{{ $plan[2] }}</span>@endif
                    </div>
                </div>
                <ul class="space-y-3 mb-8">
                    @foreach($plan[4] as $feature)
                    <li class="flex items-center gap-3 text-sm text-surface-600">
                        <i class="ph ph-check-circle text-green-500"></i>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contact') }}" class="block text-center px-6 py-3 {{ $plan[5] ? 'bg-primary-600 text-white font-bold hover:bg-primary-700' : 'border border-surface-200 text-surface-700 font-semibold hover:bg-surface-50' }} rounded-lg transition-all">
                    {{ $plan[1] === 'Custom' ? 'Contact Sales' : 'Get Started' }}
                </a>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-8 reveal">
            <a href="{{ route('pricing') }}" class="text-sm font-medium text-primary-600 hover:text-primary-700">View all pricing options <i class="ph ph-arrow-right"></i></a>
        </div>
    </div>
</section>

{{-- Clients Section - Dark Cinematic with Parallax --}}
<section class="relative py-24 bg-linear-to-br from-surface-950 via-surface-900 to-primary-950 overflow-hidden" x-data="{ offsetY: 0 }" @scroll.window="offsetY = window.scrollY" id="clients-section">
    {{-- Animated Background Image --}}
    <div class="absolute inset-0 opacity-30" style="background: radial-gradient(ellipse at 20% 50%, rgba(88, 86, 214, 0.15) 0%, transparent 50%), radial-gradient(ellipse at 80% 80%, rgba(8, 185, 155, 0.15) 0%, transparent 50%); transform: translateY(calc(var(--scroll-y, 0px) * 0.5));"></div>

    {{-- Decorative elements with parallax --}}
    <div class="absolute top-0 left-1/3 w-100 h-100 rounded-full bg-primary-600/10 blur-[120px]" style="transform: translateY(calc(var(--scroll-y, 0px) * 0.3));"></div>
    <div class="absolute bottom-0 right-1/4 w-75 h-75 rounded-full bg-accent-500/10 blur-[100px]" style="transform: translateY(calc(var(--scroll-y, 0px) * 0.4));"></div>

    {{-- Grid pattern overlay --}}
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2040%2040%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.02%22%3E%3Cpath%20d%3D%22M0%200h1v1H0zM20%200h1v1h-1zM0%2020h1v1H0zM20%2020h1v1h-1z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="text-center mb-16 reveal">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 backdrop-blur-md border border-white/10 text-sm font-medium mb-6">
                <span class="w-2 h-2 rounded-full bg-accent-400 animate-pulse"></span>
                <span class="text-white/70">Trusted Partners</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-display font-bold mb-4">
                <span class="text-white">Trusted by </span><span class="hero-gradient-text">Businesses Worldwide</span>
            </h2>
            <p class="text-lg text-white/40 max-w-2xl mx-auto">From healthcare to tech, e-commerce to media — we've partnered with companies across industries to deliver digital excellence.</p>
        </div>

        {{-- Client Grid --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 lg:gap-5 mb-16 max-w-5xl mx-auto">
            @foreach([
            ['Mytokondria', 'mytokondria-logo.png'],
            ['Wavelinx', 'Wavelinx-Technologies-Private-Limited-logo.png'],
            ['NNF', 'nnflogo.jpg'],
            ['Al-Hamd Agro', 'al-hamd_agro_logo.jpg'],
            ['Celfanatic', 'logo_celfanatic.png'],
            ['Think OOTB', 'think-out-of-the-box-india-logo.png'],
            ['Bluefish Tales', 'bluefishtale-logo.png'],
            ['Ath Ayurdhamah', 'ath-ayurdhamah-logo.png'],
            ['Amicus Juris', 'Amicus-Juris-Lawyers-India-Logo.png'],
            ] as $index => $client)
            <div class="group relative aspect-3/2 rounded-2xl bg-white shadow-lg shadow-black/5 border border-white/80 hover:shadow-xl hover:shadow-primary-500/15 hover:-translate-y-1 flex items-center justify-center p-5 transition-all duration-500 overflow-hidden reveal" style="animation-delay: {{ $index * 0.08 }}s;">
                {{-- Hover glow --}}
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-linear-to-br from-primary-50 via-transparent to-accent-50"></div>
                {{-- Logo --}}
                <img src="{{ asset('images/logos/' . $client[1]) }}" alt="{{ $client[0] }}" class="relative max-h-14 max-w-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500" loading="lazy">
                {{-- Name tooltip --}}
                <div class="absolute bottom-0 left-0 right-0 translate-y-full group-hover:translate-y-0 transition-all duration-300 pointer-events-none">
                    <div class="bg-linear-to-t from-surface-900/90 via-surface-900/60 to-transparent pt-6 pb-2.5 px-3 text-center rounded-b-2xl">
                        <span class="text-white text-xs font-semibold whitespace-nowrap">{{ $client[0] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Stats row --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
            @foreach([
            ['150+', 'Happy Clients', 'ph-users-three', 'from-primary-500 to-primary-600'],
            ['15+', 'Countries Served', 'ph-globe-hemisphere-west', 'from-accent-500 to-accent-600'],
            ['500+', 'Projects Delivered', 'ph-folder-open', 'from-blue-500 to-blue-600'],
            ['99%', 'Client Satisfaction', 'ph-heart', 'from-pink-500 to-pink-600'],
            ] as $stat)
            <div class="text-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 reveal">
                <div class="w-10 h-10 mx-auto mb-3 rounded-xl bg-linear-to-br {{ $stat[3] }} flex items-center justify-center">
                    <i class="ph {{ $stat[2] }} text-white text-lg"></i>
                </div>
                <div class="text-2xl lg:text-3xl font-display font-bold text-white mb-1">{{ $stat[0] }}</div>
                <p class="text-xs text-white/40 uppercase tracking-wider">{{ $stat[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    // Parallax effect for clients section
    document.addEventListener('DOMContentLoaded', function() {
        const clientsSection = document.getElementById('clients-section');
        if (!clientsSection) return;

        function updateParallax() {
            const offsetY = window.scrollY;
            clientsSection.style.setProperty('--scroll-y', offsetY + 'px');
        }

        // Update on scroll with requestAnimationFrame for better performance
        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
            ticking = false;
        }, {
            passive: true
        });

        // Initial call
        updateParallax();
    });
</script>

{{-- FAQ --}}
<section class="py-24 bg-surface-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-50 text-primary-600 text-sm font-medium mb-4">
                <i class="ph ph-question"></i> FAQ
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">Frequently Asked <span class="gradient-text">Questions</span></h2>
        </div>
        <div class="space-y-3" x-data="{ open: null }">
            @foreach([
            ['What types of websites do you build?', 'We build everything from simple business websites to complex web applications, e-commerce stores, custom CMS solutions, and enterprise software. Our expertise spans PHP, Laravel, React, Vue.js, WordPress, Shopify, and more.'],
            ['How long does it take to build a website?', 'A standard website takes 2-4 weeks, while complex web applications may take 2-3 months. We provide a detailed timeline during the planning phase and keep you updated throughout the process.'],
            ['Do you provide website maintenance?', 'Yes! We offer ongoing maintenance packages that include security updates, performance optimization, content updates, and technical support. Our plans start from as low as $49/month.'],
            ['What is your development process?', 'We follow an agile methodology: Discovery, Planning, Design, Development, Testing, Launch, Support. You are involved at each stage with regular updates and feedback sessions.'],
            ['Do you work with international clients?', 'Absolutely! We work with clients from over 15 countries. We use modern collaboration tools and schedule meetings across time zones to ensure smooth communication.'],
            ['What payment methods do you accept?', 'We accept bank transfers, PayPal, Stripe, and UPI payments. For larger projects, we typically follow a milestone-based payment structure.'],
            ] as $index => $faq)
            <div class="rounded-xl bg-white border border-surface-200 overflow-hidden reveal">
                <button @click="open === {{ $index }} ? open = null : open = {{ $index }}" class="w-full flex items-center justify-between p-5 text-left hover:bg-surface-50 transition-colors">
                    <span class="font-semibold text-surface-900 text-sm pr-4">{{ $faq[0] }}</span>
                    <i class="ph ph-caret-down text-surface-400 transition-transform duration-200 shrink-0" :class="open === {{ $index }} && 'rotate-180'"></i>
                </button>
                <div x-show="open === {{ $index }}" x-collapse>
                    <div class="px-5 pb-5 text-sm text-surface-500 leading-relaxed">{{ $faq[1] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Blog Preview --}}
<section class="py-24 bg-linear-to-br from-white via-accent-50/20 to-primary-50/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent-50 text-accent-600 text-sm font-medium mb-4">
                <i class="ph ph-pen-nib"></i> From Our Blog
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">Latest <span class="gradient-text">Insights</span></h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
            ['The Future of Web Development: Trends Shaping 2026', 'Explore groundbreaking web development trends from AI interfaces to edge computing.', 'Mar 1, 2026', 'Web Dev', 'from-blue-50 to-cyan-50'],
            ['SEO Strategies for Zero-Click Searches', 'Optimize for featured snippets and maintain visibility in a zero-click world.', 'Feb 24, 2026', 'SEO', 'from-green-50 to-teal-50'],
            ['Why Your Business Needs a Mobile App in 2026', 'Mobile apps are essential. Here are compelling reasons to invest now.', 'Feb 12, 2026', 'Mobile', 'from-purple-50 to-pink-50'],
            ] as $post)
            <article class="group rounded-2xl overflow-hidden bg-white border border-surface-200 hover:shadow-lg transition-all reveal">
                <div class="aspect-16/10 bg-linear-to-br {{ $post[4] }} flex items-center justify-center p-6">
                    <h3 class="text-base font-display font-bold text-surface-800 text-center leading-snug group-hover:text-primary-700 transition-colors">{{ $post[0] }}</h3>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-3 text-xs text-surface-400 mb-3">
                        <span>{{ $post[2] }}</span>
                        <span class="px-2 py-0.5 rounded bg-primary-50 text-primary-600 text-[10px] font-medium">{{ $post[3] }}</span>
                    </div>
                    <p class="text-sm text-surface-500 leading-relaxed mb-4 line-clamp-2">{{ $post[1] }}</p>
                    <a href="{{ route('blog') }}" class="inline-flex items-center gap-1 text-sm font-medium text-primary-600 group-hover:gap-2 transition-all">
                        Read More <i class="ph ph-arrow-right text-xs"></i>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
        <div class="text-center mt-12 reveal">
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 px-7 py-3.5 border border-surface-200 text-surface-700 font-semibold rounded-lg hover:bg-surface-50 transition-all">
                View All Articles <i class="ph ph-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection