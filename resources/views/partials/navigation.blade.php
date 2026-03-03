{{-- Sticky Navigation --}}
<nav id="mainNav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500"
    x-data="{ mobileOpen: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
    :class="scrolled ? 'bg-surface-950/90 backdrop-blur-xl shadow-2xl shadow-primary-500/5 border-b border-white/5' : 'bg-transparent'">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary-500 to-accent-500 flex items-center justify-center font-display font-bold text-lg text-white group-hover:scale-110 transition-transform duration-300">
                    E
                </div>
                <div>
                    <span class="text-xl font-display font-bold text-white tracking-tight">Emages</span>
                    <span class="text-xl font-display font-light text-primary-400 tracking-tight">Soft</span>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden lg:flex items-center gap-1">
                <a href="{{ route('home') }}" class="px-4 py-2 text-sm font-medium text-white/80 hover:text-white rounded-lg hover:bg-white/5 transition-all duration-300 {{ request()->routeIs('home') ? 'text-white bg-white/10' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="px-4 py-2 text-sm font-medium text-white/80 hover:text-white rounded-lg hover:bg-white/5 transition-all duration-300 {{ request()->routeIs('about') ? 'text-white bg-white/10' : '' }}">About</a>

                {{-- Services Dropdown --}}
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('services') }}" class="px-4 py-2 text-sm font-medium text-white/80 hover:text-white rounded-lg hover:bg-white/5 transition-all duration-300 flex items-center gap-1 {{ request()->routeIs('services*') ? 'text-white bg-white/10' : '' }}">
                        Services
                        <i class="ph ph-caret-down text-xs transition-transform duration-300" :class="open ? 'rotate-180' : ''"></i>
                    </a>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2"
                        class="absolute top-full left-0 mt-2 w-72 bg-surface-900/95 backdrop-blur-xl rounded-2xl border border-white/10 shadow-2xl p-3 grid gap-1">
                        <a href="{{ route('services') }}#web-development" class="flex items-center gap-3 p-3 rounded-xl hover:bg-white/5 transition-all group/item">
                            <div class="w-10 h-10 rounded-lg bg-primary-500/10 flex items-center justify-center"><i class="ph ph-code text-primary-400 text-lg"></i></div>
                            <div>
                                <div class="text-sm font-medium text-white">Web Development</div>
                                <div class="text-xs text-white/50">Custom websites & apps</div>
                            </div>
                        </a>
                        <a href="{{ route('services') }}#mobile-apps" class="flex items-center gap-3 p-3 rounded-xl hover:bg-white/5 transition-all group/item">
                            <div class="w-10 h-10 rounded-lg bg-accent-500/10 flex items-center justify-center"><i class="ph ph-device-mobile text-accent-400 text-lg"></i></div>
                            <div>
                                <div class="text-sm font-medium text-white">Mobile Apps</div>
                                <div class="text-xs text-white/50">iOS & Android solutions</div>
                            </div>
                        </a>
                        <a href="{{ route('services') }}#ecommerce" class="flex items-center gap-3 p-3 rounded-xl hover:bg-white/5 transition-all group/item">
                            <div class="w-10 h-10 rounded-lg bg-green-500/10 flex items-center justify-center"><i class="ph ph-shopping-cart text-green-400 text-lg"></i></div>
                            <div>
                                <div class="text-sm font-medium text-white">E-Commerce</div>
                                <div class="text-xs text-white/50">Online store solutions</div>
                            </div>
                        </a>
                        <a href="{{ route('services') }}#digital-marketing" class="flex items-center gap-3 p-3 rounded-xl hover:bg-white/5 transition-all group/item">
                            <div class="w-10 h-10 rounded-lg bg-orange-500/10 flex items-center justify-center"><i class="ph ph-megaphone text-orange-400 text-lg"></i></div>
                            <div>
                                <div class="text-sm font-medium text-white">Digital Marketing</div>
                                <div class="text-xs text-white/50">SEO, SEM & social media</div>
                            </div>
                        </a>
                        <a href="{{ route('services') }}#graphic-design" class="flex items-center gap-3 p-3 rounded-xl hover:bg-white/5 transition-all group/item">
                            <div class="w-10 h-10 rounded-lg bg-pink-500/10 flex items-center justify-center"><i class="ph ph-paint-brush text-pink-400 text-lg"></i></div>
                            <div>
                                <div class="text-sm font-medium text-white">Graphic Design</div>
                                <div class="text-xs text-white/50">Logos, banners & more</div>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="{{ route('portfolio') }}" class="px-4 py-2 text-sm font-medium text-white/80 hover:text-white rounded-lg hover:bg-white/5 transition-all duration-300 {{ request()->routeIs('portfolio') ? 'text-white bg-white/10' : '' }}">Portfolio</a>
                <a href="{{ route('pricing') }}" class="px-4 py-2 text-sm font-medium text-white/80 hover:text-white rounded-lg hover:bg-white/5 transition-all duration-300 {{ request()->routeIs('pricing') ? 'text-white bg-white/10' : '' }}">Pricing</a>
                <a href="{{ route('blog') }}" class="px-4 py-2 text-sm font-medium text-white/80 hover:text-white rounded-lg hover:bg-white/5 transition-all duration-300 {{ request()->routeIs('blog') ? 'text-white bg-white/10' : '' }}">Blog</a>
                <a href="{{ route('contact') }}" class="px-4 py-2 text-sm font-medium text-white/80 hover:text-white rounded-lg hover:bg-white/5 transition-all duration-300 {{ request()->routeIs('contact') ? 'text-white bg-white/10' : '' }}">Contact</a>
            </div>

            {{-- CTA + Mobile Toggle --}}
            <div class="flex items-center gap-4">
                <a href="{{ route('contact') }}" class="hidden lg:inline-flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-primary-600 to-accent-600 text-white text-sm font-semibold rounded-full hover:shadow-lg hover:shadow-primary-500/25 hover:scale-105 transition-all duration-300">
                    Get Started
                    <i class="ph ph-arrow-right"></i>
                </a>

                {{-- Mobile Menu Button --}}
                <button @click="mobileOpen = !mobileOpen" class="lg:hidden relative w-10 h-10 flex items-center justify-center rounded-xl bg-white/5 hover:bg-white/10 transition-colors">
                    <div class="w-5 h-4 flex flex-col justify-between">
                        <span class="w-full h-0.5 bg-white rounded-full transition-all duration-300" :class="mobileOpen ? 'rotate-45 translate-y-[7px]' : ''"></span>
                        <span class="w-full h-0.5 bg-white rounded-full transition-all duration-300" :class="mobileOpen ? 'opacity-0' : ''"></span>
                        <span class="w-full h-0.5 bg-white rounded-full transition-all duration-300" :class="mobileOpen ? '-rotate-45 -translate-y-[7px]' : ''"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4"
        class="lg:hidden bg-surface-900/98 backdrop-blur-xl border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 py-6 space-y-2">
            <a href="{{ route('home') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/5 rounded-xl transition-all">Home</a>
            <a href="{{ route('about') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/5 rounded-xl transition-all">About Us</a>
            <a href="{{ route('services') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/5 rounded-xl transition-all">Services</a>
            <a href="{{ route('portfolio') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/5 rounded-xl transition-all">Portfolio</a>
            <a href="{{ route('pricing') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/5 rounded-xl transition-all">Pricing</a>
            <a href="{{ route('blog') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/5 rounded-xl transition-all">Blog</a>
            <a href="{{ route('contact') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/5 rounded-xl transition-all">Contact</a>
            <div class="pt-4">
                <a href="{{ route('contact') }}" class="block text-center px-6 py-3 bg-gradient-to-r from-primary-600 to-accent-600 text-white font-semibold rounded-full hover:shadow-lg transition-all">
                    Get Started <i class="ph ph-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</nav>