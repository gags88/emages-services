@extends('layouts.app')

@section('title', 'Contact Us - Emages Soft Services')

@section('content')

{{-- Hero - Dark Cinematic --}}
<section class="relative pt-28 pb-20 lg:pt-36 lg:pb-24 overflow-hidden bg-gradient-to-br from-surface-950 via-primary-950 to-surface-900">
    {{-- Gradient orbs --}}
    <div class="absolute top-0 left-1/4 w-[400px] h-[400px] rounded-full bg-primary-600/15 blur-[120px] animate-orb-1"></div>
    <div class="absolute bottom-0 right-1/4 w-[350px] h-[350px] rounded-full bg-accent-500/10 blur-[100px] animate-orb-2"></div>
    {{-- Grid pattern --}}
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2040%2040%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.03%22%3E%3Cpath%20d%3D%22M0%200h1v1H0zM20%200h1v1h-1zM0%2020h1v1H0zM20%2020h1v1h-1z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 backdrop-blur-md border border-white/10 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-chat-circle-dots text-primary-400"></i>
            <span class="text-white/70">Contact Us</span>
        </div>
        <h1 class="text-5xl lg:text-6xl font-display font-bold mb-6 animate-slide-up leading-tight">
            <span class="text-white">Let's Build Something</span><br>
            <span class="hero-gradient-text">Extraordinary Together</span>
        </h1>
        <p class="text-xl text-white/40 max-w-3xl mx-auto animate-slide-up" style="animation-delay: 0.15s;">
            Have a project in mind? Get in touch and let's discuss how we can help transform your digital presence.
        </p>
    </div>
</section>

{{-- Contact Section --}}
<section class="pb-24 bg-gradient-to-br from-surface-50 via-primary-50/20 to-accent-50/20 pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12">
            {{-- Contact Info --}}
            <div class="lg:col-span-2 space-y-8 reveal-left">
                <div>
                    <h2 class="text-2xl font-display font-bold text-surface-900 mb-6">Get In Touch</h2>
                    <p class="text-surface-500 leading-relaxed">We'd love to hear from you. Whether you have a question about our services, pricing, or anything else, our team is ready to answer all your questions.</p>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-surface-200 hover:shadow-sm hover:border-primary-200 transition-all">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-primary-50 flex items-center justify-center">
                            <i class="ph ph-map-pin text-xl text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-surface-900 mb-1">Our Office</h4>
                            <p class="text-sm text-surface-400 leading-relaxed">F-13, Vidyut Nagar Colony, G.T. Road, Dhanipur, Aligarh-202001, UP, India</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-surface-200 hover:shadow-sm hover:border-accent-200 transition-all">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-accent-50 flex items-center justify-center">
                            <i class="ph ph-phone text-xl text-accent-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-surface-900 mb-1">Phone</h4>
                            <a href="tel:+919557399588" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">+91 955 739 9588</a><br>
                            <a href="tel:+917579809049" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">+91 757 980 9049</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-surface-200 hover:shadow-sm hover:border-green-200 transition-all">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-green-50 flex items-center justify-center">
                            <i class="ph ph-envelope text-xl text-green-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-surface-900 mb-1">Email</h4>
                            <a href="mailto:sales@emagessoft.com" class="text-sm text-surface-500 hover:text-primary-600 transition-colors">sales@emagessoft.com</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-surface-200 hover:shadow-sm hover:border-green-200 transition-all">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-green-50 flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-surface-900 mb-1">WhatsApp</h4>
                            <a href="https://api.whatsapp.com/send?phone=+917579809049" target="_blank" class="text-sm text-surface-500 hover:text-green-600 transition-colors">Chat with us on WhatsApp</a>
                        </div>
                    </div>
                </div>

                {{-- Social --}}
                <div>
                    <h4 class="text-sm font-semibold text-surface-900 mb-4">Follow Us</h4>
                    <div class="flex gap-3">
                        <a href="https://www.facebook.com/emagessoftservices" target="_blank" class="w-10 h-10 rounded-xl bg-surface-100 flex items-center justify-center hover:bg-primary-50 text-surface-500 hover:text-primary-600 transition-all"><i class="ph ph-facebook-logo text-lg"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-surface-100 flex items-center justify-center hover:bg-primary-50 text-surface-500 hover:text-primary-600 transition-all"><i class="ph ph-x-logo text-lg"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-surface-100 flex items-center justify-center hover:bg-primary-50 text-surface-500 hover:text-primary-600 transition-all"><i class="ph ph-linkedin-logo text-lg"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-surface-100 flex items-center justify-center hover:bg-primary-50 text-surface-500 hover:text-primary-600 transition-all"><i class="ph ph-instagram-logo text-lg"></i></a>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-3 reveal-right">
                <div class="p-8 lg:p-10 rounded-3xl bg-white border border-surface-200 shadow-sm">
                    <h3 class="text-xl font-display font-bold text-surface-900 mb-6">Send Us Your Enquiry</h3>

                    @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-green-50 border border-green-200 text-green-700 text-sm">
                        <i class="ph ph-check-circle"></i> {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-surface-700 mb-2">First Name *</label>
                                <input type="text" name="first_name" required value="{{ old('first_name') }}"
                                    class="w-full px-4 py-3 bg-surface-50 border border-surface-200 rounded-xl text-surface-900 placeholder-surface-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none"
                                    placeholder="John">
                                @error('first_name')<span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-surface-700 mb-2">Last Name *</label>
                                <input type="text" name="last_name" required value="{{ old('last_name') }}"
                                    class="w-full px-4 py-3 bg-surface-50 border border-surface-200 rounded-xl text-surface-900 placeholder-surface-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none"
                                    placeholder="Doe">
                                @error('last_name')<span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-surface-700 mb-2">Email *</label>
                                <input type="email" name="email" required value="{{ old('email') }}"
                                    class="w-full px-4 py-3 bg-surface-50 border border-surface-200 rounded-xl text-surface-900 placeholder-surface-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none"
                                    placeholder="john@example.com">
                                @error('email')<span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-surface-700 mb-2">Phone</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                    class="w-full px-4 py-3 bg-surface-50 border border-surface-200 rounded-xl text-surface-900 placeholder-surface-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none"
                                    placeholder="+91 9876543210">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-surface-700 mb-2">Service Interested In</label>
                            <select name="service" class="w-full px-4 py-3 bg-surface-50 border border-surface-200 rounded-xl text-surface-900 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none">
                                <option value="">Select a service</option>
                                <option value="web-development">Web Development</option>
                                <option value="mobile-apps">Mobile App Development</option>
                                <option value="ecommerce">E-Commerce Development</option>
                                <option value="cms">CMS Development</option>
                                <option value="seo">SEO Services</option>
                                <option value="digital-marketing">Digital Marketing</option>
                                <option value="graphic-design">Graphic Design</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-surface-700 mb-2">Budget Range</label>
                            <select name="budget" class="w-full px-4 py-3 bg-surface-50 border border-surface-200 rounded-xl text-surface-900 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none">
                                <option value="">Select budget range</option>
                                <option value="under-500">Under $500</option>
                                <option value="500-1000">$500 - $1,000</option>
                                <option value="1000-5000">$1,000 - $5,000</option>
                                <option value="5000-10000">$5,000 - $10,000</option>
                                <option value="10000+">$10,000+</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-surface-700 mb-2">Message *</label>
                            <textarea name="message" rows="5" required
                                class="w-full px-4 py-3 bg-surface-50 border border-surface-200 rounded-xl text-surface-900 placeholder-surface-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-all outline-none resize-none"
                                placeholder="Tell us about your project...">{{ old('message') }}</textarea>
                            @error('message')<span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                        </div>
                        <button type="submit" class="w-full sm:w-auto px-8 py-4 bg-primary-600 text-white font-bold rounded-lg hover:bg-primary-700 shadow-sm transition-all flex items-center justify-center gap-2">
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