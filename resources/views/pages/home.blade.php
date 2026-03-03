@extends('layouts.app')

@section('title', 'Emages Soft Services - Software Development & Digital Solutions')

@section('content')

{{-- ==================== HERO SECTION ==================== --}}
<section class="relative min-h-screen flex items-center overflow-hidden">
    {{-- Background --}}
    <div class="absolute inset-0 bg-surface-950 mesh-gradient noise-overlay">
        {{-- Animated blobs --}}
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary-500/20 rounded-full blur-3xl animate-blob"></div>
        <div class="absolute top-40 right-20 w-96 h-96 bg-accent-500/15 rounded-full blur-3xl animate-blob" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 left-1/3 w-80 h-80 bg-primary-400/10 rounded-full blur-3xl animate-blob" style="animation-delay: 4s;"></div>

        {{-- Grid pattern --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.02)_1px,transparent_1px)] bg-[size:64px_64px]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 w-full">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Left Content --}}
            <div class="space-y-8">
                {{-- Badge --}}
                <div class="animate-fade-in inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-sm">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-sm text-white/70 font-medium">Trusted by 100+ businesses worldwide</span>
                </div>

                {{-- Headline --}}
                <h1 class="animate-slide-up text-5xl sm:text-6xl lg:text-7xl font-display font-bold leading-[1.1] tracking-tight">
                    We Build
                    <span class="gradient-text">Digital</span>
                    <br>
                    <span class="relative inline-block">
                        Experiences
                        <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 300 12" fill="none"><path d="M2 10C50 4 150 0 298 6" stroke="url(#grad1)" stroke-width="3" stroke-linecap="round"/><defs><linearGradient id="grad1" x1="0" y1="0" x2="300" y2="0"><stop stop-color="#3b82f6"/><stop offset="1" stop-color="#d946ef"/></linearGradient></defs></svg>
                    </span>
                    <br>That Matter.
                </h1>

                {{-- Subtext --}}
                <p class="animate-slide-up delay-200 text-lg sm:text-xl text-white/60 max-w-lg leading-relaxed">
                    From custom software & stunning websites to powerful digital marketing — we deliver end-to-end IT solutions that accelerate your business growth.
                </p>

                {{-- CTA Buttons --}}
                <div class="animate-slide-up delay-300 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-r from-primary-600 to-accent-600 text-white font-bold rounded-full hover:shadow-2xl hover:shadow-primary-500/30 hover:scale-105 transition-all duration-300">
                        Start Your Project
                        <i class="ph ph-arrow-right text-lg group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="{{ route('portfolio') }}" class="group inline-flex items-center justify-center gap-3 px-8 py-4 border border-white/15 text-white font-semibold rounded-full hover:bg-white/5 hover:border-white/30 transition-all duration-300">
                        <i class="ph ph-play-circle text-lg"></i>
                        View Our Work
                    </a>
                </div>

                {{-- Trust indicators --}}
                <div class="animate-slide-up delay-400 flex items-center gap-8 pt-4">
                    <div class="flex -space-x-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 border-2 border-surface-950 flex items-center justify-center text-xs font-bold">MK</div>
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 border-2 border-surface-950 flex items-center justify-center text-xs font-bold">AH</div>
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-400 to-pink-600 border-2 border-surface-950 flex items-center justify-center text-xs font-bold">WT</div>
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-green-400 to-green-600 border-2 border-surface-950 flex items-center justify-center text-xs font-bold">NF</div>
                        <div class="w-10 h-10 rounded-full bg-white/10 border-2 border-surface-950 flex items-center justify-center text-xs text-white/50">+50</div>
                    </div>
                    <div>
                        <div class="flex items-center gap-1 text-yellow-400 text-sm">
                            <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star-half"></i>
                        </div>
                        <p class="text-xs text-white/40 mt-1">4.8/5 from happy clients</p>
                    </div>
                </div>
            </div>

            {{-- Right: 3D-ish Card Stack --}}
            <div class="hidden lg:block relative">
                <div class="relative">
                    {{-- Floating cards --}}
                    <div class="absolute -top-4 -left-4 w-64 glass rounded-2xl p-6 animate-float" style="animation-delay: 0s;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-primary-500/20 flex items-center justify-center">
                                <i class="ph ph-code text-primary-400 text-lg"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-white">Web Development</p>
                                <p class="text-xs text-white/40">Full-stack solutions</p>
                            </div>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2">
                            <div class="bg-gradient-to-r from-primary-500 to-accent-500 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                        <p class="text-xs text-white/40 mt-2">92% client satisfaction</p>
                    </div>

                    <div class="absolute top-32 -right-8 w-56 glass rounded-2xl p-5 animate-float" style="animation-delay: 1s;">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-xl bg-green-500/20 flex items-center justify-center">
                                <i class="ph ph-chart-line-up text-green-400 text-lg"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-white">SEO Growth</p>
                                <p class="text-xs text-white/40">+240% traffic</p>
                            </div>
                        </div>
                        <div class="flex items-end gap-1 h-12">
                            <div class="w-3 bg-green-500/30 rounded-t" style="height: 30%"></div>
                            <div class="w-3 bg-green-500/40 rounded-t" style="height: 45%"></div>
                            <div class="w-3 bg-green-500/50 rounded-t" style="height: 35%"></div>
                            <div class="w-3 bg-green-500/60 rounded-t" style="height: 55%"></div>
                            <div class="w-3 bg-green-500/70 rounded-t" style="height: 70%"></div>
                            <div class="w-3 bg-green-500/80 rounded-t" style="height: 85%"></div>
                            <div class="w-3 bg-green-500 rounded-t" style="height: 100%"></div>
                        </div>
                    </div>

                    <div class="absolute bottom-12 left-8 w-60 glass rounded-2xl p-5 animate-float" style="animation-delay: 2s;">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-accent-500/20 flex items-center justify-center">
                                <i class="ph ph-device-mobile text-accent-400 text-lg"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-white">App Delivered</p>
                                <p class="text-xs text-green-400">Completed ✓</p>
                            </div>
                        </div>
                    </div>

                    {{-- Center piece --}}
                    <div class="relative mx-auto w-80 h-96 rounded-3xl bg-gradient-to-br from-primary-500/20 to-accent-500/20 border border-white/10 backdrop-blur-sm flex items-center justify-center">
                        <div class="text-center space-y-4">
                            <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-primary-500 to-accent-500 flex items-center justify-center animate-pulse-glow">
                                <i class="ph ph-rocket-launch text-3xl text-white"></i>
                            </div>
                            <p class="text-2xl font-display font-bold text-white">100+</p>
                            <p class="text-sm text-white/50">Projects Delivered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
        <span class="text-xs text-white/30 tracking-widest uppercase">Scroll</span>
        <div class="w-5 h-8 border-2 border-white/20 rounded-full flex items-start justify-center p-1">
            <div class="w-1 h-2 bg-white/50 rounded-full animate-pulse"></div>
        </div>
    </div>
</section>


{{-- ==================== STATS SECTION ==================== --}}
<section class="relative py-20 bg-surface-900/50 border-y border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-16">
            <div class="text-center reveal" data-delay="0">
                <div class="text-4xl lg:text-5xl font-display font-bold gradient-text mb-2" data-count="10">10+</div>
                <p class="text-sm text-white/50 uppercase tracking-wider">Years in Service</p>
            </div>
            <div class="text-center reveal" data-delay="100">
                <div class="text-4xl lg:text-5xl font-display font-bold gradient-text mb-2" data-count="150">150+</div>
                <p class="text-sm text-white/50 uppercase tracking-wider">Happy Clients</p>
            </div>
            <div class="text-center reveal" data-delay="200">
                <div class="text-4xl lg:text-5xl font-display font-bold gradient-text mb-2" data-count="300">300+</div>
                <p class="text-sm text-white/50 uppercase tracking-wider">Projects Completed</p>
            </div>
            <div class="text-center reveal" data-delay="300">
                <div class="text-4xl lg:text-5xl font-display font-bold gradient-text mb-2" data-count="15">15+</div>
                <p class="text-sm text-white/50 uppercase tracking-wider">Countries Served</p>
            </div>
        </div>
    </div>
</section>


{{-- ==================== SERVICES SECTION ==================== --}}
<section class="relative py-24 lg:py-32 overflow-hidden" id="services">
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent-500/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-20 reveal">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-6">
                <i class="ph ph-sparkle"></i> Our Services
            </span>
            <h2 class="text-4xl lg:text-5xl font-display font-bold text-white mb-6">
                Expert Digital Solutions for <span class="gradient-text">Your Success</span>
            </h2>
            <p class="text-lg text-white/50 leading-relaxed">
                We deliver powerful digital solutions that help your business grow, compete, and lead in the online world.
            </p>
        </div>

        {{-- Services Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Service 1: Web Development --}}
            <div class="group relative bg-surface-900/50 rounded-2xl p-8 border border-white/5 hover:border-primary-500/30 card-hover reveal" data-delay="0">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl bg-primary-500/10 flex items-center justify-center mb-6 group-hover:bg-primary-500/20 transition-colors">
                        <i class="ph ph-code text-2xl text-primary-400"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-white mb-3">Web Development</h3>
                    <p class="text-white/50 leading-relaxed mb-6">Custom websites, web applications, and software solutions built with the latest technologies for performance and scale.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-primary-400"></i> Mobile Application Development</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-primary-400"></i> Custom Software Development</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-primary-400"></i> POS & CRM Solutions</li>
                    </ul>
                    <a href="{{ route('services') }}#web-development" class="inline-flex items-center gap-2 text-sm text-primary-400 font-medium group-hover:gap-3 transition-all">
                        Learn More <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>

            {{-- Service 2: E-Commerce --}}
            <div class="group relative bg-surface-900/50 rounded-2xl p-8 border border-white/5 hover:border-accent-500/30 card-hover reveal" data-delay="100">
                <div class="absolute inset-0 bg-gradient-to-br from-accent-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl bg-accent-500/10 flex items-center justify-center mb-6 group-hover:bg-accent-500/20 transition-colors">
                        <i class="ph ph-shopping-cart text-2xl text-accent-400"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-white mb-3">E-Commerce Development</h3>
                    <p class="text-white/50 leading-relaxed mb-6">Powerful online stores that drive sales. From OpenCart to Magento, we build commerce platforms that convert.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-accent-400"></i> OpenCart & Magento</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-accent-400"></i> Payment Gateway Integration</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-accent-400"></i> Custom Shopping Solutions</li>
                    </ul>
                    <a href="{{ route('services') }}#ecommerce" class="inline-flex items-center gap-2 text-sm text-accent-400 font-medium group-hover:gap-3 transition-all">
                        Learn More <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>

            {{-- Service 3: CMS Development --}}
            <div class="group relative bg-surface-900/50 rounded-2xl p-8 border border-white/5 hover:border-green-500/30 card-hover reveal" data-delay="200">
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl bg-green-500/10 flex items-center justify-center mb-6 group-hover:bg-green-500/20 transition-colors">
                        <i class="ph ph-layout text-2xl text-green-400"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-white mb-3">CMS Development</h3>
                    <p class="text-white/50 leading-relaxed mb-6">Flexible content management systems that put you in control. WordPress, Joomla, PHP, and .NET platforms.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-green-400"></i> WordPress Development</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-green-400"></i> Joomla & PHP Solutions</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-green-400"></i> .NET Development</li>
                    </ul>
                    <a href="{{ route('services') }}#cms-development" class="inline-flex items-center gap-2 text-sm text-green-400 font-medium group-hover:gap-3 transition-all">
                        Learn More <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>

            {{-- Service 4: Website Designing --}}
            <div class="group relative bg-surface-900/50 rounded-2xl p-8 border border-white/5 hover:border-orange-500/30 card-hover reveal" data-delay="300">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl bg-orange-500/10 flex items-center justify-center mb-6 group-hover:bg-orange-500/20 transition-colors">
                        <i class="ph ph-paint-brush text-2xl text-orange-400"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-white mb-3">Website Designing</h3>
                    <p class="text-white/50 leading-relaxed mb-6">Beautiful, responsive designs that captivate visitors. Static, dynamic, mobile-first — we craft pixel-perfect interfaces.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-orange-400"></i> Responsive & Mobile Design</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-orange-400"></i> UI/UX Strategy</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-orange-400"></i> Web Re-Designing</li>
                    </ul>
                    <a href="{{ route('services') }}#design" class="inline-flex items-center gap-2 text-sm text-orange-400 font-medium group-hover:gap-3 transition-all">
                        Learn More <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>

            {{-- Service 5: Digital Marketing --}}
            <div class="group relative bg-surface-900/50 rounded-2xl p-8 border border-white/5 hover:border-pink-500/30 card-hover reveal" data-delay="400">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl bg-pink-500/10 flex items-center justify-center mb-6 group-hover:bg-pink-500/20 transition-colors">
                        <i class="ph ph-megaphone text-2xl text-pink-400"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-white mb-3">Digital Marketing</h3>
                    <p class="text-white/50 leading-relaxed mb-6">Comprehensive SEO, SEM, and social media strategies that boost your online visibility and drive qualified leads.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-pink-400"></i> SEO & Content Marketing</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-pink-400"></i> PPC & Display Advertising</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-pink-400"></i> Social Media Management</li>
                    </ul>
                    <a href="{{ route('services') }}#digital-marketing" class="inline-flex items-center gap-2 text-sm text-pink-400 font-medium group-hover:gap-3 transition-all">
                        Learn More <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>

            {{-- Service 6: Graphic Design --}}
            <div class="group relative bg-surface-900/50 rounded-2xl p-8 border border-white/5 hover:border-cyan-500/30 card-hover reveal" data-delay="500">
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 flex items-center justify-center mb-6 group-hover:bg-cyan-500/20 transition-colors">
                        <i class="ph ph-palette text-2xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-white mb-3">Graphic Design</h3>
                    <p class="text-white/50 leading-relaxed mb-6">Stunning visual identities that tell your brand story. Logos, banners, brochures, and creative assets.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-cyan-400"></i> Logo & Brand Identity</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-cyan-400"></i> Banner & Brochure Design</li>
                        <li class="flex items-center gap-2 text-sm text-white/40"><i class="ph ph-check-circle text-cyan-400"></i> Social Media Creatives</li>
                    </ul>
                    <a href="{{ route('services') }}#graphic-design" class="inline-flex items-center gap-2 text-sm text-cyan-400 font-medium group-hover:gap-3 transition-all">
                        Learn More <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-12 reveal">
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 px-8 py-4 border border-white/10 text-white font-semibold rounded-full hover:bg-white/5 hover:border-white/20 transition-all duration-300">
                View All Services
                <i class="ph ph-arrow-right"></i>
            </a>
        </div>
    </div>
</section>


{{-- ==================== ABOUT / WHY CHOOSE US ==================== --}}
<section class="relative py-24 lg:py-32 bg-surface-900/30 overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.01)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.01)_1px,transparent_1px)] bg-[size:80px_80px]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Left: Content --}}
            <div class="reveal-left">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-6">
                    <i class="ph ph-buildings"></i> Why Choose Us
                </span>
                <h2 class="text-4xl lg:text-5xl font-display font-bold text-white mb-6 leading-tight">
                    Your Reliable Partner for <span class="gradient-text">Digital Transformation</span>
                </h2>
                <p class="text-lg text-white/50 leading-relaxed mb-8">
                    With over a decade of experience, we focus on helping businesses grow digitally by understanding their unique needs and providing custom solutions. Our dedicated team tailors strategies for each client, ensuring attractive and effective digital outcomes.
                </p>

                <div class="grid sm:grid-cols-2 gap-6 mb-8">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-primary-500/10 flex items-center justify-center">
                            <i class="ph ph-target text-primary-400 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">Customized Solutions</h4>
                            <p class="text-sm text-white/40">Tailored to your specific needs and business goals</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-accent-500/10 flex items-center justify-center">
                            <i class="ph ph-lightbulb text-accent-400 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">Creative Design</h4>
                            <p class="text-sm text-white/40">Visually stunning, modern and captivating interfaces</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-green-500/10 flex items-center justify-center">
                            <i class="ph ph-device-mobile text-green-400 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">Mobile Friendly</h4>
                            <p class="text-sm text-white/40">Seamless experience across all devices</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-orange-500/10 flex items-center justify-center">
                            <i class="ph ph-timer text-orange-400 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">Timely Delivery</h4>
                            <p class="text-sm text-white/40">Realistic timelines, on-schedule completion</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-primary-400 font-semibold hover:gap-3 transition-all">
                    Learn more about us <i class="ph ph-arrow-right"></i>
                </a>
            </div>

            {{-- Right: Feature cards --}}
            <div class="reveal-right space-y-6">
                <div class="relative">
                    {{-- Process cards --}}
                    <div class="space-y-4">
                        <div class="flex items-center gap-6 p-6 bg-surface-800/50 rounded-2xl border border-white/5 hover:border-primary-500/20 transition-all group">
                            <div class="w-16 h-16 shrink-0 rounded-2xl bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg shadow-primary-500/20">01</div>
                            <div>
                                <h4 class="text-lg font-semibold text-white mb-1">Discovery & Strategy</h4>
                                <p class="text-sm text-white/40">We understand your business goals, audience, and competitive landscape to craft a winning digital strategy.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-6 p-6 bg-surface-800/50 rounded-2xl border border-white/5 hover:border-accent-500/20 transition-all group">
                            <div class="w-16 h-16 shrink-0 rounded-2xl bg-gradient-to-br from-accent-500 to-accent-600 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg shadow-accent-500/20">02</div>
                            <div>
                                <h4 class="text-lg font-semibold text-white mb-1">Design & Development</h4>
                                <p class="text-sm text-white/40">Our team crafts beautiful designs and builds robust, scalable solutions with clean code architecture.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-6 p-6 bg-surface-800/50 rounded-2xl border border-white/5 hover:border-green-500/20 transition-all group">
                            <div class="w-16 h-16 shrink-0 rounded-2xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg shadow-green-500/20">03</div>
                            <div>
                                <h4 class="text-lg font-semibold text-white mb-1">Testing & Launch</h4>
                                <p class="text-sm text-white/40">Rigorous testing ensures flawless performance before we launch your project to the world.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-6 p-6 bg-surface-800/50 rounded-2xl border border-white/5 hover:border-orange-500/20 transition-all group">
                            <div class="w-16 h-16 shrink-0 rounded-2xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white text-2xl font-display font-bold shadow-lg shadow-orange-500/20">04</div>
                            <div>
                                <h4 class="text-lg font-semibold text-white mb-1">Support & Growth</h4>
                                <p class="text-sm text-white/40">Ongoing maintenance, performance optimization, and strategic support for continuous growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ==================== TECH STACK / EXPERTISE ==================== --}}
<section class="relative py-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent-500/10 text-accent-400 text-sm font-medium mb-6">
                <i class="ph ph-cpu"></i> Our Expertise
            </span>
            <h2 class="text-4xl lg:text-5xl font-display font-bold text-white mb-6">
                Unmatched Expertise in <span class="gradient-text">Diverse Technologies</span>
            </h2>
            <p class="text-lg text-white/50">Mastering tools, crafting brilliance — we deliver expert solutions tailored to you.</p>
        </div>

        {{-- Tech Marquee --}}
        <div class="relative overflow-hidden py-8 reveal">
            <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-surface-950 to-transparent z-10"></div>
            <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-surface-950 to-transparent z-10"></div>

            <div class="flex animate-marquee">
                @foreach(['PHP', 'Laravel', 'WordPress', 'React', 'Node.js', 'Python', 'MySQL', 'MongoDB', 'AWS', 'Docker', 'Android', 'iOS', 'Shopify', 'Magento', 'Vue.js', 'Angular', '.NET', 'Java', 'Firebase', 'PostgreSQL', 'PHP', 'Laravel', 'WordPress', 'React', 'Node.js', 'Python', 'MySQL', 'MongoDB', 'AWS', 'Docker', 'Android', 'iOS', 'Shopify', 'Magento', 'Vue.js', 'Angular', '.NET', 'Java', 'Firebase', 'PostgreSQL'] as $tech)
                    <div class="flex-shrink-0 mx-3 px-8 py-4 bg-surface-800/50 rounded-xl border border-white/5 hover:border-primary-500/30 hover:bg-surface-800 transition-all duration-300 cursor-default">
                        <span class="text-sm font-medium text-white/60 whitespace-nowrap">{{ $tech }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Tech Categories --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
            <div class="p-6 rounded-2xl bg-surface-900/50 border border-white/5 text-center reveal" data-delay="0">
                <div class="w-12 h-12 mx-auto rounded-xl bg-primary-500/10 flex items-center justify-center mb-4">
                    <i class="ph ph-browser text-primary-400 text-xl"></i>
                </div>
                <h4 class="font-semibold text-white mb-2">Frontend</h4>
                <p class="text-xs text-white/40">React, Vue, Angular, Next.js, Tailwind CSS, TypeScript</p>
            </div>
            <div class="p-6 rounded-2xl bg-surface-900/50 border border-white/5 text-center reveal" data-delay="100">
                <div class="w-12 h-12 mx-auto rounded-xl bg-accent-500/10 flex items-center justify-center mb-4">
                    <i class="ph ph-database text-accent-400 text-xl"></i>
                </div>
                <h4 class="font-semibold text-white mb-2">Backend</h4>
                <p class="text-xs text-white/40">PHP, Laravel, Node.js, Python, .NET, Java, Express</p>
            </div>
            <div class="p-6 rounded-2xl bg-surface-900/50 border border-white/5 text-center reveal" data-delay="200">
                <div class="w-12 h-12 mx-auto rounded-xl bg-green-500/10 flex items-center justify-center mb-4">
                    <i class="ph ph-cloud text-green-400 text-xl"></i>
                </div>
                <h4 class="font-semibold text-white mb-2">Cloud & DevOps</h4>
                <p class="text-xs text-white/40">AWS, Google Cloud, Azure, Docker, Kubernetes, CI/CD</p>
            </div>
            <div class="p-6 rounded-2xl bg-surface-900/50 border border-white/5 text-center reveal" data-delay="300">
                <div class="w-12 h-12 mx-auto rounded-xl bg-orange-500/10 flex items-center justify-center mb-4">
                    <i class="ph ph-device-mobile text-orange-400 text-xl"></i>
                </div>
                <h4 class="font-semibold text-white mb-2">Mobile</h4>
                <p class="text-xs text-white/40">React Native, Flutter, Swift, Kotlin, Android, iOS</p>
            </div>
        </div>
    </div>
</section>


{{-- ==================== PORTFOLIO / OUR WORK ==================== --}}
<section class="relative py-24 lg:py-32 bg-surface-900/30 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-6">
                <i class="ph ph-briefcase"></i> Our Portfolio
            </span>
            <h2 class="text-4xl lg:text-5xl font-display font-bold text-white mb-6">
                Showcasing Our <span class="gradient-text">Passion for Innovation</span>
            </h2>
            <p class="text-lg text-white/50">Real projects. Real results. See how we've helped businesses transform digitally.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['Mytokondria', 'Health & Wellness Platform', 'from-blue-500/20 to-cyan-500/20', 'ph-heartbeat', 'Web Application'],
                ['Al-Hamd Agro Foods', 'E-Commerce Food Products', 'from-green-500/20 to-emerald-500/20', 'ph-leaf', 'E-Commerce'],
                ['Wavelinx Technologies', 'Corporate Technology Portal', 'from-purple-500/20 to-violet-500/20', 'ph-cpu', 'Web Development'],
                ['Celfanatic Films', 'Entertainment & Media Site', 'from-red-500/20 to-orange-500/20', 'ph-film-strip', 'Website Design'],
                ['Bluefish Tales', 'Content & Storytelling Platform', 'from-cyan-500/20 to-blue-500/20', 'ph-book-open', 'CMS Development'],
                ['National Neonatology Forum', 'Healthcare Organization', 'from-pink-500/20 to-rose-500/20', 'ph-first-aid', 'Web Portal'],
            ] as $project)
                <div class="group relative rounded-2xl overflow-hidden border border-white/5 hover:border-white/15 card-hover reveal" data-delay="{{ $loop->index * 100 }}">
                    <div class="aspect-[4/3] bg-gradient-to-br {{ $project[2] }} flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto rounded-2xl bg-white/10 backdrop-blur-sm flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <i class="ph {{ $project[3] }} text-3xl text-white"></i>
                            </div>
                            <h3 class="text-lg font-bold text-white">{{ $project[0] }}</h3>
                        </div>
                    </div>
                    <div class="p-6 bg-surface-900/80 backdrop-blur-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="font-semibold text-white text-sm">{{ $project[1] }}</h4>
                                <span class="text-xs text-primary-400">{{ $project[4] }}</span>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-primary-500/20 transition-colors">
                                <i class="ph ph-arrow-up-right text-white/50 group-hover:text-primary-400 transition-colors"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12 reveal">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-primary-600 to-accent-600 text-white font-semibold rounded-full hover:shadow-lg hover:shadow-primary-500/25 hover:scale-105 transition-all duration-300">
                View Full Portfolio
                <i class="ph ph-arrow-right"></i>
            </a>
        </div>
    </div>
</section>


{{-- ==================== TESTIMONIALS ==================== --}}
<section class="relative py-24 lg:py-32 overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary-500/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent-500/10 text-accent-400 text-sm font-medium mb-6">
                <i class="ph ph-chat-circle-dots"></i> Testimonials
            </span>
            <h2 class="text-4xl lg:text-5xl font-display font-bold text-white mb-6">
                What Our <span class="gradient-text">Clients Say</span>
            </h2>
            <p class="text-lg text-white/50">Our clients' satisfaction speaks volumes about our dedication and expertise.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['The team delivered exactly what we needed — a modern, fast and SEO-friendly website. Their attention to detail was impressive and the project was completed ahead of schedule.', 'Amit Kumar', 'CEO, Tech Solutions', 'AK', 'from-blue-400 to-blue-600'],
                ['Emages Soft transformed our online presence completely. Our e-commerce sales increased by 180% within just 3 months of launching the new store.', 'Sarah Chen', 'Founder, Fashion Retail', 'SC', 'from-purple-400 to-purple-600'],
                ['Professional, responsive, and incredibly skilled. They built our custom CRM system that has streamlined our entire operation. Highly recommend!', 'Rahul Sharma', 'Director, Logistics Corp', 'RS', 'from-green-400 to-green-600'],
                ['The SEO results have been phenomenal. We went from page 5 to page 1 for our key terms. Their digital marketing expertise is top-notch.', 'Priya Patel', 'Marketing Head, EdTech', 'PP', 'from-pink-400 to-pink-600'],
                ['We trusted them with our complete brand identity redesign and website overhaul. The results exceeded our expectations in every way.', 'Michael Roberts', 'CTO, FinStart', 'MR', 'from-orange-400 to-orange-600'],
                ['Innovative features, exceptional personal support and a custom admin panel that changed everything for our healthcare platform.', 'Dr. Neha Singh', 'Head, HealthOrg', 'NS', 'from-cyan-400 to-cyan-600'],
            ] as $testimonial)
                <div class="p-8 bg-surface-900/50 rounded-2xl border border-white/5 hover:border-white/10 card-hover reveal" data-delay="{{ $loop->index * 100 }}">
                    <div class="flex items-center gap-1 text-yellow-400 mb-4">
                        <i class="ph-fill ph-star text-sm"></i><i class="ph-fill ph-star text-sm"></i><i class="ph-fill ph-star text-sm"></i><i class="ph-fill ph-star text-sm"></i><i class="ph-fill ph-star text-sm"></i>
                    </div>
                    <p class="text-white/60 leading-relaxed mb-6 text-sm">"{{ $testimonial[0] }}"</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br {{ $testimonial[4] }} flex items-center justify-center text-xs font-bold text-white">{{ $testimonial[3] }}</div>
                        <div>
                            <p class="text-sm font-semibold text-white">{{ $testimonial[1] }}</p>
                            <p class="text-xs text-white/40">{{ $testimonial[2] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ==================== PRICING SECTION ==================== --}}
<section class="relative py-24 lg:py-32 bg-surface-900/30 overflow-hidden" id="pricing">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-green-500/10 text-green-400 text-sm font-medium mb-6">
                <i class="ph ph-tag"></i> Pricing Plans
            </span>
            <h2 class="text-4xl lg:text-5xl font-display font-bold text-white mb-6">
                Transparent Pricing, <span class="gradient-text">Exceptional Value</span>
            </h2>
            <p class="text-lg text-white/50">Choose the perfect plan for your business. No hidden fees, no surprises.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            {{-- Starter --}}
            <div class="relative p-8 rounded-2xl bg-surface-900/50 border border-white/5 hover:border-white/15 card-hover reveal" data-delay="0">
                <div class="mb-8">
                    <h3 class="text-lg font-display font-bold text-white mb-2">Starter</h3>
                    <p class="text-sm text-white/40 mb-6">Perfect for small businesses & startups</p>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-display font-bold text-white">$499</span>
                        <span class="text-white/40 text-sm">/ project</span>
                    </div>
                </div>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-green-400"></i> Up to 5-page website</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-green-400"></i> Responsive design</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-green-400"></i> Basic SEO setup</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-green-400"></i> Contact form</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-green-400"></i> 3 months free support</li>
                    <li class="flex items-center gap-3 text-sm text-white/30"><i class="ph ph-x-circle text-white/20"></i> Custom features</li>
                    <li class="flex items-center gap-3 text-sm text-white/30"><i class="ph ph-x-circle text-white/20"></i> E-commerce integration</li>
                </ul>
                <a href="{{ route('contact') }}" class="block text-center px-6 py-3 border border-white/15 text-white font-semibold rounded-full hover:bg-white/5 transition-all">
                    Get Started
                </a>
            </div>

            {{-- Professional --}}
            <div class="relative p-8 rounded-2xl bg-surface-900/50 border-2 border-primary-500/50 card-hover reveal scale-[1.02]" data-delay="100">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1 bg-gradient-to-r from-primary-600 to-accent-600 rounded-full text-xs font-bold text-white">
                    MOST POPULAR
                </div>
                <div class="mb-8">
                    <h3 class="text-lg font-display font-bold text-white mb-2">Professional</h3>
                    <p class="text-sm text-white/40 mb-6">For growing businesses</p>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-display font-bold gradient-text">$1,499</span>
                        <span class="text-white/40 text-sm">/ project</span>
                    </div>
                </div>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-primary-400"></i> Up to 15-page website</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-primary-400"></i> Custom design & animations</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-primary-400"></i> Advanced SEO optimization</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-primary-400"></i> CMS integration</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-primary-400"></i> Payment integration</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-primary-400"></i> 6 months free support</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-primary-400"></i> Performance optimization</li>
                </ul>
                <a href="{{ route('contact') }}" class="block text-center px-6 py-3 bg-gradient-to-r from-primary-600 to-accent-600 text-white font-bold rounded-full hover:shadow-lg hover:shadow-primary-500/25 transition-all">
                    Get Started
                </a>
            </div>

            {{-- Enterprise --}}
            <div class="relative p-8 rounded-2xl bg-surface-900/50 border border-white/5 hover:border-white/15 card-hover reveal" data-delay="200">
                <div class="mb-8">
                    <h3 class="text-lg font-display font-bold text-white mb-2">Enterprise</h3>
                    <p class="text-sm text-white/40 mb-6">For large-scale operations</p>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-display font-bold text-white">Custom</span>
                    </div>
                </div>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-accent-400"></i> Unlimited pages</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-accent-400"></i> Custom web applications</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-accent-400"></i> E-commerce solutions</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-accent-400"></i> API & integrations</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-accent-400"></i> Dedicated project manager</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-accent-400"></i> 12 months support</li>
                    <li class="flex items-center gap-3 text-sm text-white/60"><i class="ph ph-check-circle text-accent-400"></i> Priority support channel</li>
                </ul>
                <a href="{{ route('contact') }}" class="block text-center px-6 py-3 border border-white/15 text-white font-semibold rounded-full hover:bg-white/5 transition-all">
                    Contact Sales
                </a>
            </div>
        </div>
    </div>
</section>


{{-- ==================== CLIENTS / TRUST BANNER ==================== --}}
<section class="relative py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 reveal">
            <h3 class="text-lg font-display font-semibold text-white/40 uppercase tracking-wider">Trusted by Leading Brands Worldwide</h3>
        </div>
        <div class="relative overflow-hidden reveal">
            <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-surface-950 to-transparent z-10"></div>
            <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-surface-950 to-transparent z-10"></div>
            <div class="flex animate-marquee items-center" style="animation-duration: 25s;">
                @foreach(['Mytokondria', 'Al-Hamd Agro', 'Wavelinx Tech', 'Celfanatic Films', 'Bluefish Tales', 'Amicus Juris', 'Ath Ayurdhamah', 'Think OOTB', 'NNF India', 'Mytokondria', 'Al-Hamd Agro', 'Wavelinx Tech', 'Celfanatic Films', 'Bluefish Tales', 'Amicus Juris', 'Ath Ayurdhamah', 'Think OOTB', 'NNF India'] as $client)
                    <div class="flex-shrink-0 mx-6 px-8 py-4 bg-white/5 rounded-xl">
                        <span class="text-sm font-medium text-white/30 whitespace-nowrap">{{ $client }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ==================== FAQ SECTION ==================== --}}
<section class="relative py-24 lg:py-32 bg-surface-900/30 overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-6">
                <i class="ph ph-question"></i> FAQ
            </span>
            <h2 class="text-4xl lg:text-5xl font-display font-bold text-white mb-6">
                Frequently Asked <span class="gradient-text">Questions</span>
            </h2>
        </div>

        <div class="space-y-4 reveal" x-data="{ openFaq: null }">
            @foreach([
                ['What services does Emages Soft offer?', 'We offer a comprehensive suite of IT services including web development, mobile app development, e-commerce solutions, CMS development, SEO, digital marketing, social media optimization, graphic design, and Zoho partnership services. We provide end-to-end solutions from strategy to deployment.'],
                ['How long does a typical web development project take?', 'Project timelines vary based on scope and complexity. A simple website takes 2-4 weeks, a custom web application 6-12 weeks, and enterprise-level projects 3-6 months. We establish realistic timelines during discovery and work closely with you to ensure on-time delivery.'],
                ['Do you provide post-delivery support?', 'Absolutely! All our plans include free post-launch support ranging from 3-12 months depending on your package. We also offer flexible prepaid support hours for ongoing maintenance, updates, bug fixes, and performance optimization.'],
                ['What technologies do you specialize in?', 'We have expertise across multiple platforms and technologies including PHP, Laravel, WordPress, React, Vue.js, Node.js, Python, .NET, Android, iOS, MySQL, MongoDB, AWS, and more. We recommend the best technology stack based on your project requirements.'],
                ['Can you help improve our existing website?', 'Yes! We offer website redesign, performance optimization, SEO improvements, and feature additions to existing websites. Whether you need a complete overhaul or incremental improvements, our team can help elevate your online presence.'],
                ['How do you handle project pricing?', 'We offer transparent pricing with no hidden fees. We provide detailed project estimates after understanding your requirements during a free consultation. Payment is typically milestone-based, so you only pay for completed work stages.'],
            ] as $index => $faq)
                <div class="border border-white/5 rounded-2xl overflow-hidden hover:border-white/10 transition-colors" x-data>
                    <button @click="openFaq = openFaq === {{ $index }} ? null : {{ $index }}" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="text-white font-medium pr-4">{{ $faq[0] }}</span>
                        <i class="ph ph-plus text-white/40 transition-transform duration-300 flex-shrink-0" :class="openFaq === {{ $index }} ? 'rotate-45 text-primary-400' : ''"></i>
                    </button>
                    <div x-show="openFaq === {{ $index }}" x-collapse x-cloak>
                        <div class="px-6 pb-6 text-white/50 leading-relaxed text-sm">{{ $faq[1] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ==================== BLOG PREVIEW ==================== --}}
<section class="relative py-24 lg:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 mb-16 reveal">
            <div>
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent-500/10 text-accent-400 text-sm font-medium mb-4">
                    <i class="ph ph-pen-nib"></i> Our Blog
                </span>
                <h2 class="text-4xl font-display font-bold text-white">Latest <span class="gradient-text">Insights</span></h2>
            </div>
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 text-primary-400 font-semibold hover:gap-3 transition-all">
                View All Posts <i class="ph ph-arrow-right"></i>
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['The Future of Web Development: Trends to Watch in 2026', 'Explore the latest web development trends shaping 2026 — from AI-powered interfaces to WebAssembly and edge computing...', 'Mar 1, 2026', '5 min read', 'from-blue-500/20 to-purple-500/20'],
                ['How SEO Has Evolved: Strategies for Zero-Click Searches', 'Google keeps evolving, and so should your SEO strategy. Learn how to optimize for zero-click searches and featured snippets...', 'Feb 24, 2026', '7 min read', 'from-green-500/20 to-teal-500/20'],
                ['Best Digital Marketing Tools to Grow Your Business Online', 'Getting customers online is about controlling the customer decision journey. Discover the essential tools for 2026...', 'Feb 18, 2026', '6 min read', 'from-orange-500/20 to-red-500/20'],
            ] as $post)
                <article class="group rounded-2xl overflow-hidden border border-white/5 hover:border-white/15 card-hover reveal" data-delay="{{ $loop->index * 100 }}">
                    <div class="aspect-[16/10] bg-gradient-to-br {{ $post[4] }} flex items-center justify-center p-8">
                        <h3 class="text-lg font-display font-bold text-white text-center leading-snug group-hover:scale-105 transition-transform">{{ $post[0] }}</h3>
                    </div>
                    <div class="p-6 bg-surface-900/80">
                        <div class="flex items-center gap-4 text-xs text-white/30 mb-3">
                            <span>{{ $post[2] }}</span>
                            <span>·</span>
                            <span>{{ $post[3] }}</span>
                        </div>
                        <p class="text-sm text-white/50 leading-relaxed mb-4">{{ $post[1] }}</p>
                        <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 text-sm text-primary-400 font-medium group-hover:gap-3 transition-all">
                            Read More <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

@endsection
