@extends('layouts.app')

@section('title', 'Contact Us - Emages Soft Services')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 mesh-gradient opacity-50"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-chat-circle-dots"></i> Contact Us
        </span>
        <h1 class="text-5xl lg:text-6xl font-display font-bold text-white mb-6 animate-slide-up">
            Let's Build Something <br><span class="gradient-text">Extraordinary Together</span>
        </h1>
        <p class="text-xl text-white/50 max-w-3xl mx-auto animate-slide-up delay-200">Have a project in mind? Get in touch and let's discuss how we can help transform your digital presence.</p>
    </div>
</section>

{{-- Contact Section --}}
<section class="relative pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12">
            {{-- Contact Info --}}
            <div class="lg:col-span-2 space-y-8 reveal-left">
                <div>
                    <h2 class="text-2xl font-display font-bold text-white mb-6">Get In Touch</h2>
                    <p class="text-white/50 leading-relaxed">We'd love to hear from you. Whether you have a question about our services, pricing, or anything else, our team is ready to answer all your questions.</p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-surface-900/50 border border-white/5 hover:border-primary-500/20 transition-all">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-primary-500/10 flex items-center justify-center">
                            <i class="ph ph-map-pin text-xl text-primary-400"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">Our Office</h4>
                            <p class="text-sm text-white/40 leading-relaxed">F-13, Vidyut Nagar Colony, G.T. Road, Dhanipur, Aligarh-202001, UP, India</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-surface-900/50 border border-white/5 hover:border-primary-500/20 transition-all">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-accent-500/10 flex items-center justify-center">
                            <i class="ph ph-phone text-xl text-accent-400"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">Phone</h4>
                            <a href="tel:+919557399588" class="text-sm text-white/40 hover:text-primary-400 transition-colors">+91 955 739 9588</a><br>
                            <a href="tel:+917579809049" class="text-sm text-white/40 hover:text-primary-400 transition-colors">+91 757 980 9049</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-surface-900/50 border border-white/5 hover:border-primary-500/20 transition-all">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-green-500/10 flex items-center justify-center">
                            <i class="ph ph-envelope text-xl text-green-400"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">Email</h4>
                            <a href="mailto:sales@emagessoft.com" class="text-sm text-white/40 hover:text-primary-400 transition-colors">sales@emagessoft.com</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-surface-900/50 border border-white/5 hover:border-primary-500/20 transition-all">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-green-500/10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">WhatsApp</h4>
                            <a href="https://api.whatsapp.com/send?phone=+917579809049" target="_blank" class="text-sm text-white/40 hover:text-green-400 transition-colors">Chat with us on WhatsApp</a>
                        </div>
                    </div>
                </div>

                {{-- Social --}}
                <div>
                    <h4 class="text-sm font-semibold text-white mb-4">Follow Us</h4>
                    <div class="flex gap-3">
                        <a href="https://www.facebook.com/emagessoftservices" target="_blank" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary-500/20 text-white/50 hover:text-primary-400 transition-all"><i class="ph ph-facebook-logo text-lg"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary-500/20 text-white/50 hover:text-primary-400 transition-all"><i class="ph ph-x-logo text-lg"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary-500/20 text-white/50 hover:text-primary-400 transition-all"><i class="ph ph-linkedin-logo text-lg"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary-500/20 text-white/50 hover:text-primary-400 transition-all"><i class="ph ph-instagram-logo text-lg"></i></a>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-3 reveal-right">
                <div class="p-8 lg:p-10 rounded-3xl bg-surface-900/50 border border-white/5">
                    <h3 class="text-xl font-display font-bold text-white mb-6">Send Us Your Enquiry</h3>

                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-xl bg-green-500/10 border border-green-500/20 text-green-400 text-sm">
                            <i class="ph ph-check-circle"></i> {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-white/60 mb-2">First Name *</label>
                                <input type="text" name="first_name" required value="{{ old('first_name') }}"
                                       class="w-full px-4 py-3 bg-surface-800/50 border border-white/10 rounded-xl text-white placeholder-white/30 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none"
                                       placeholder="John">
                                @error('first_name')<span class="text-xs text-red-400 mt-1">{{ $message }}</span>@enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-white/60 mb-2">Last Name *</label>
                                <input type="text" name="last_name" required value="{{ old('last_name') }}"
                                       class="w-full px-4 py-3 bg-surface-800/50 border border-white/10 rounded-xl text-white placeholder-white/30 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none"
                                       placeholder="Doe">
                                @error('last_name')<span class="text-xs text-red-400 mt-1">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-white/60 mb-2">Email *</label>
                                <input type="email" name="email" required value="{{ old('email') }}"
                                       class="w-full px-4 py-3 bg-surface-800/50 border border-white/10 rounded-xl text-white placeholder-white/30 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none"
                                       placeholder="john@example.com">
                                @error('email')<span class="text-xs text-red-400 mt-1">{{ $message }}</span>@enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-white/60 mb-2">Phone</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                       class="w-full px-4 py-3 bg-surface-800/50 border border-white/10 rounded-xl text-white placeholder-white/30 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none"
                                       placeholder="+91 9876543210">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-white/60 mb-2">Service Interested In</label>
                            <select name="service" class="w-full px-4 py-3 bg-surface-800/50 border border-white/10 rounded-xl text-white focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none">
                                <option value="" class="bg-surface-800">Select a service</option>
                                <option value="web-development" class="bg-surface-800">Web Development</option>
                                <option value="mobile-apps" class="bg-surface-800">Mobile App Development</option>
                                <option value="ecommerce" class="bg-surface-800">E-Commerce Development</option>
                                <option value="cms" class="bg-surface-800">CMS Development</option>
                                <option value="seo" class="bg-surface-800">SEO Services</option>
                                <option value="digital-marketing" class="bg-surface-800">Digital Marketing</option>
                                <option value="graphic-design" class="bg-surface-800">Graphic Design</option>
                                <option value="other" class="bg-surface-800">Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-white/60 mb-2">Budget Range</label>
                            <select name="budget" class="w-full px-4 py-3 bg-surface-800/50 border border-white/10 rounded-xl text-white focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none">
                                <option value="" class="bg-surface-800">Select budget range</option>
                                <option value="under-500" class="bg-surface-800">Under $500</option>
                                <option value="500-1000" class="bg-surface-800">$500 - $1,000</option>
                                <option value="1000-5000" class="bg-surface-800">$1,000 - $5,000</option>
                                <option value="5000-10000" class="bg-surface-800">$5,000 - $10,000</option>
                                <option value="10000+" class="bg-surface-800">$10,000+</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-white/60 mb-2">Message *</label>
                            <textarea name="message" rows="5" required
                                      class="w-full px-4 py-3 bg-surface-800/50 border border-white/10 rounded-xl text-white placeholder-white/30 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none resize-none"
                                      placeholder="Tell us about your project...">{{ old('message') }}</textarea>
                            @error('message')<span class="text-xs text-red-400 mt-1">{{ $message }}</span>@enderror
                        </div>
                        <button type="submit" class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-primary-600 to-accent-600 text-white font-bold rounded-full hover:shadow-2xl hover:shadow-primary-500/30 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                            Send Message
                            <i class="ph ph-paper-plane-tilt"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
