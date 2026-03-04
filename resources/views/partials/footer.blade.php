{{-- Footer --}}
<footer class="relative bg-surface-50 border-t border-surface-200 overflow-hidden">

    {{-- CTA Banner --}}
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        <div class="relative rounded-2xl bg-gradient-to-r from-primary-600 to-accent-600 p-10 lg:p-14 overflow-hidden">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.05%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')] opacity-30"></div>
            <div class="relative flex flex-col lg:flex-row items-center justify-between gap-8">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-display font-bold text-white mb-3">Ready to Transform Your Digital Presence?</h2>
                    <p class="text-lg text-white/80 max-w-xl">Let's build something extraordinary together. Get a free consultation and project estimate today.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-primary-700 font-bold rounded-lg hover:bg-white/90 transition-all duration-200 shadow-lg">
                        Start Your Project
                        <i class="ph ph-arrow-right"></i>
                    </a>
                    <a href="tel:+919557399588" class="inline-flex items-center justify-center gap-2 px-8 py-4 border-2 border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 transition-all duration-200">
                        <i class="ph ph-phone"></i>
                        Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Footer --}}
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8">

            {{-- Brand Column --}}
            <div class="lg:col-span-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary-500 to-accent-500 flex items-center justify-center font-display font-bold text-lg text-white">E</div>
                    <div>
                        <span class="text-xl font-display font-bold text-surface-900">Emages</span>
                        <span class="text-xl font-display font-light text-primary-600">Soft</span>
                    </div>
                </a>
                <p class="text-surface-500 leading-relaxed mb-6 max-w-sm text-sm">
                    We are a software company delivering high-quality digital solutions for domestic and overseas clients. Consultancy and total IT solutions at reasonable cost.
                </p>
                <div class="flex items-center gap-2.5">
                    <a href="https://www.facebook.com/emagessoftservices" target="_blank" class="w-9 h-9 rounded-lg bg-surface-100 flex items-center justify-center hover:bg-primary-50 hover:text-primary-600 transition-all text-surface-500">
                        <i class="ph ph-facebook-logo text-base"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="w-9 h-9 rounded-lg bg-surface-100 flex items-center justify-center hover:bg-primary-50 hover:text-primary-600 transition-all text-surface-500">
                        <i class="ph ph-x-logo text-base"></i>
                    </a>
                    <a href="https://linkedin.com/" target="_blank" class="w-9 h-9 rounded-lg bg-surface-100 flex items-center justify-center hover:bg-primary-50 hover:text-primary-600 transition-all text-surface-500">
                        <i class="ph ph-linkedin-logo text-base"></i>
                    </a>
                    <a href="https://instagram.com/" target="_blank" class="w-9 h-9 rounded-lg bg-surface-100 flex items-center justify-center hover:bg-primary-50 hover:text-primary-600 transition-all text-surface-500">
                        <i class="ph ph-instagram-logo text-base"></i>
                    </a>
                </div>

                {{-- Google Workspace Partner Badge --}}
                <div class="mt-6 px-4 py-3 rounded-xl bg-white border border-surface-200 inline-block">
                    <p class="text-xs text-surface-400 mb-0.5">Authorized Partner</p>
                    <p class="text-sm font-semibold text-surface-700">Google Workspace Partner</p>
                </div>
            </div>

            {{-- Services --}}
            <div class="lg:col-span-2">
                <h4 class="text-sm font-semibold text-surface-900 uppercase tracking-wider mb-5">Services</h4>
                <ul class="space-y-2.5">
                    <li><a href="{{ route('services') }}#web-development" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">Web Development</a></li>
                    <li><a href="{{ route('services') }}#mobile-apps" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">Mobile Apps</a></li>
                    <li><a href="{{ route('services') }}#ecommerce" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">E-Commerce</a></li>
                    <li><a href="{{ route('services') }}#cms-development" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">CMS Development</a></li>
                    <li><a href="{{ route('services') }}#digital-marketing" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">Digital Marketing</a></li>
                    <li><a href="{{ route('services') }}#graphic-design" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">Graphic Design</a></li>
                    <li><a href="{{ route('services') }}#seo" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">SEO Services</a></li>
                </ul>
            </div>

            {{-- Company --}}
            <div class="lg:col-span-2">
                <h4 class="text-sm font-semibold text-surface-900 uppercase tracking-wider mb-5">Company</h4>
                <ul class="space-y-2.5">
                    <li><a href="{{ route('about') }}" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">About Us</a></li>
                    <li><a href="{{ route('portfolio') }}" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">Portfolio</a></li>
                    <li><a href="{{ route('blog') }}" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">Blog</a></li>
                    <li><a href="{{ route('pricing') }}" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">Pricing</a></li>
                    <li><a href="{{ route('contact') }}" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">Contact</a></li>
                    <li><a href="#" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">Careers</a></li>
                    <li><a href="#" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">Support Center</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div class="lg:col-span-4">
                <h4 class="text-sm font-semibold text-surface-900 uppercase tracking-wider mb-5">Get in Touch</h4>
                <ul class="space-y-3.5">
                    <li class="flex items-start gap-3">
                        <i class="ph ph-map-pin text-primary-600 text-base mt-0.5"></i>
                        <span class="text-sm text-surface-500 leading-relaxed">F-13, Vidyut Nagar Colony, G.T. Road,<br>Dhanipur, Aligarh-202001, UP, India</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ph ph-phone text-primary-600 text-base"></i>
                        <a href="tel:+919557399588" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">+91 955 739 9588</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ph ph-envelope text-primary-600 text-base"></i>
                        <a href="mailto:sales@emagessoft.com" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">sales@emagessoft.com</a>
                    </li>
                </ul>

                {{-- Payment --}}
                <div class="mt-6">
                    <a href="#" class="inline-flex items-center gap-2 px-5 py-2.5 bg-primary-600 rounded-lg text-sm font-semibold text-white hover:bg-primary-700 transition-colors shadow-sm">
                        <i class="ph ph-credit-card"></i>
                        Pay For Services
                    </a>
                </div>

                {{-- Policies --}}
                <div class="mt-5 flex flex-wrap gap-x-4 gap-y-2">
                    <a href="#" class="text-xs text-surface-400 hover:text-surface-600 transition-colors">Privacy Policy</a>
                    <a href="#" class="text-xs text-surface-400 hover:text-surface-600 transition-colors">Terms & Conditions</a>
                    <a href="#" class="text-xs text-surface-400 hover:text-surface-600 transition-colors">Refund Policy</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-surface-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-sm text-surface-400">&copy; {{ date('Y') }} Emages Soft Services. All Rights Reserved.</p>
            <p class="text-sm text-surface-400">Crafted with <span class="text-red-400">&hearts;</span> for digital excellence</p>
        </div>
    </div>
</footer>
