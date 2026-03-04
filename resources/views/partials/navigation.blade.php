{{-- Sticky Navigation --}}
<nav id="mainNav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    x-data="{ mobileOpen: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
    :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-sm border-b border-surface-200' : 'bg-transparent'">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-18">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                <div class="w-9 h-9 rounded-lg bg-primary-600 flex items-center justify-center font-display font-bold text-base text-white group-hover:bg-primary-700 transition-colors duration-200">
                    E
                </div>
                <div>
                    <span class="text-lg font-display font-bold tracking-tight transition-colors duration-300" :class="scrolled ? 'text-surface-900' : 'text-white'">Emages Soft</span>
                    <span class="text-lg font-display font-medium text-primary-600 tracking-tight" :class="scrolled ? 'text-primary-600' : 'text-primary-400'">Services</span>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden lg:flex items-center gap-1">
                <a href="{{ route('home') }}" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200" :class="scrolled ? '{{ request()->routeIs('home') ? 'text-primary-600 bg-primary-50 font-semibold' : 'text-surface-600 hover:text-surface-900 hover:bg-surface-100' }}' : '{{ request()->routeIs('home') ? 'text-primary-400 bg-white/15 font-semibold' : 'text-white/80 hover:text-white hover:bg-white/10' }}'">Home</a>
                <a href="{{ route('about') }}" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200" :class="scrolled ? '{{ request()->routeIs('about') ? 'text-primary-600 bg-primary-50 font-semibold' : 'text-surface-600 hover:text-surface-900 hover:bg-surface-100' }}' : '{{ request()->routeIs('about') ? 'text-primary-400 bg-white/15 font-semibold' : 'text-white/80 hover:text-white hover:bg-white/10' }}'">About</a>

                {{-- Services Dropdown --}}
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('services') }}" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200 flex items-center gap-1" :class="scrolled ? '{{ request()->routeIs('services*') ? 'text-primary-600 bg-primary-50 font-semibold' : 'text-surface-600 hover:text-surface-900 hover:bg-surface-100' }}' : '{{ request()->routeIs('services*') ? 'text-primary-400 bg-white/15 font-semibold' : 'text-white/80 hover:text-white hover:bg-white/10' }}'">
                        Services
                        <i class="ph ph-caret-down text-xs transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                    </a>
                    <div x-show="open" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1"
                        class="absolute top-full left-0 mt-1 w-64 bg-white rounded-xl border border-surface-200 shadow-lg shadow-surface-200/50 p-2 grid gap-0.5">
                        <a href="{{ route('services') }}#web-development" class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-50 transition-all group/item">
                            <div class="w-9 h-9 rounded-lg bg-primary-50 flex items-center justify-center"><i class="ph ph-code text-primary-600 text-base"></i></div>
                            <div>
                                <div class="text-sm font-medium text-surface-800">Web Development</div>
                                <div class="text-xs text-surface-400">Custom websites & apps</div>
                            </div>
                        </a>
                        <a href="{{ route('services') }}#mobile-apps" class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-50 transition-all group/item">
                            <div class="w-9 h-9 rounded-lg bg-accent-50 flex items-center justify-center"><i class="ph ph-device-mobile text-accent-600 text-base"></i></div>
                            <div>
                                <div class="text-sm font-medium text-surface-800">Mobile Apps</div>
                                <div class="text-xs text-surface-400">iOS & Android solutions</div>
                            </div>
                        </a>
                        <a href="{{ route('services') }}#ecommerce" class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-50 transition-all group/item">
                            <div class="w-9 h-9 rounded-lg bg-emerald-50 flex items-center justify-center"><i class="ph ph-shopping-cart text-emerald-600 text-base"></i></div>
                            <div>
                                <div class="text-sm font-medium text-surface-800">E-Commerce</div>
                                <div class="text-xs text-surface-400">Online store solutions</div>
                            </div>
                        </a>
                        <a href="{{ route('services') }}#digital-marketing" class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-50 transition-all group/item">
                            <div class="w-9 h-9 rounded-lg bg-amber-50 flex items-center justify-center"><i class="ph ph-megaphone text-amber-600 text-base"></i></div>
                            <div>
                                <div class="text-sm font-medium text-surface-800">Digital Marketing</div>
                                <div class="text-xs text-surface-400">SEO, SEM & social media</div>
                            </div>
                        </a>
                        <a href="{{ route('services') }}#graphic-design" class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-50 transition-all group/item">
                            <div class="w-9 h-9 rounded-lg bg-rose-50 flex items-center justify-center"><i class="ph ph-paint-brush text-rose-600 text-base"></i></div>
                            <div>
                                <div class="text-sm font-medium text-surface-800">Graphic Design</div>
                                <div class="text-xs text-surface-400">Logos, banners & more</div>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="{{ route('portfolio') }}" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200" :class="scrolled ? '{{ request()->routeIs('portfolio') ? 'text-primary-600 bg-primary-50 font-semibold' : 'text-surface-600 hover:text-surface-900 hover:bg-surface-100' }}' : '{{ request()->routeIs('portfolio') ? 'text-primary-400 bg-white/15 font-semibold' : 'text-white/80 hover:text-white hover:bg-white/10' }}'">Portfolio</a>
                <a href="{{ route('pricing') }}" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200" :class="scrolled ? '{{ request()->routeIs('pricing') ? 'text-primary-600 bg-primary-50 font-semibold' : 'text-surface-600 hover:text-surface-900 hover:bg-surface-100' }}' : '{{ request()->routeIs('pricing') ? 'text-primary-400 bg-white/15 font-semibold' : 'text-white/80 hover:text-white hover:bg-white/10' }}'">Pricing</a>
                {{-- Blog link hidden --}}
                <a href="{{ route('contact') }}" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200" :class="scrolled ? '{{ request()->routeIs('contact') ? 'text-primary-600 bg-primary-50 font-semibold' : 'text-surface-600 hover:text-surface-900 hover:bg-surface-100' }}' : '{{ request()->routeIs('contact') ? 'text-primary-400 bg-white/15 font-semibold' : 'text-white/80 hover:text-white hover:bg-white/10' }}'">Contact</a>
            </div>

            {{-- CTA + Mobile Toggle --}}
            <div class="flex items-center gap-4">
                <a href="{{ route('contact') }}" class="hidden lg:inline-flex items-center gap-2 px-5 py-2.5 bg-primary-600 text-white text-sm font-semibold rounded-lg hover:bg-primary-700 transition-colors duration-200 shadow-sm">
                    Get Started
                    <i class="ph ph-arrow-right text-sm"></i>
                </a>

                {{-- Mobile Menu Button --}}
                <button @click="mobileOpen = !mobileOpen" class="lg:hidden relative w-10 h-10 flex items-center justify-center rounded-lg transition-colors" :class="scrolled ? 'bg-surface-100 hover:bg-surface-200' : 'bg-white/10 hover:bg-white/20'">
                    <div class="w-5 h-4 flex flex-col justify-between">
                        <span class="w-full h-0.5 rounded-full transition-all duration-300" :class="[mobileOpen ? 'rotate-45 translate-y-[7px]' : '', scrolled ? 'bg-surface-700' : 'bg-white']"></span>
                        <span class="w-full h-0.5 rounded-full transition-all duration-300" :class="[mobileOpen ? 'opacity-0' : '', scrolled ? 'bg-surface-700' : 'bg-white']"></span>
                        <span class="w-full h-0.5 rounded-full transition-all duration-300" :class="[mobileOpen ? '-rotate-45 -translate-y-[7px]' : '', scrolled ? 'bg-surface-700' : 'bg-white']"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2"
        class="lg:hidden bg-white border-t border-surface-200 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
            <a href="{{ route('home') }}" class="block px-4 py-3 text-surface-700 hover:text-primary-600 hover:bg-surface-50 rounded-lg transition-all">Home</a>
            <a href="{{ route('about') }}" class="block px-4 py-3 text-surface-700 hover:text-primary-600 hover:bg-surface-50 rounded-lg transition-all">About Us</a>
            <a href="{{ route('services') }}" class="block px-4 py-3 text-surface-700 hover:text-primary-600 hover:bg-surface-50 rounded-lg transition-all">Services</a>
            <a href="{{ route('portfolio') }}" class="block px-4 py-3 text-surface-700 hover:text-primary-600 hover:bg-surface-50 rounded-lg transition-all">Portfolio</a>
            <a href="{{ route('pricing') }}" class="block px-4 py-3 text-surface-700 hover:text-primary-600 hover:bg-surface-50 rounded-lg transition-all">Pricing</a>
            {{-- Blog link hidden --}}
            <a href="{{ route('contact') }}" class="block px-4 py-3 text-surface-700 hover:text-primary-600 hover:bg-surface-50 rounded-lg transition-all">Contact</a>
            <div class="pt-3">
                <a href="{{ route('contact') }}" class="block text-center px-6 py-3 bg-primary-600 text-white font-semibold rounded-lg hover:bg-primary-700 transition-colors">
                    Get Started <i class="ph ph-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</nav>