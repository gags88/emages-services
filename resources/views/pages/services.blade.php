@extends('layouts.app')

@section('title', 'Our Services - Emages Soft Services')

@section('content')

{{-- Page Hero - Dark Cinematic --}}
<section class="relative pt-28 pb-20 lg:pt-36 lg:pb-24 overflow-hidden bg-gradient-to-br from-surface-950 via-primary-950 to-surface-900">
    {{-- Gradient orbs --}}
    <div class="absolute top-0 right-1/4 w-[400px] h-[400px] rounded-full bg-accent-500/15 blur-[120px] animate-orb-1"></div>
    <div class="absolute bottom-0 left-1/3 w-[350px] h-[350px] rounded-full bg-primary-600/15 blur-[100px] animate-orb-2"></div>
    {{-- Grid pattern --}}
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2040%2040%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.03%22%3E%3Cpath%20d%3D%22M0%200h1v1H0zM20%200h1v1h-1zM0%2020h1v1H0zM20%2020h1v1h-1z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 backdrop-blur-md border border-white/10 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-sparkle text-accent-400"></i>
            <span class="text-white/70">Our Services</span>
        </div>
        <h1 class="text-5xl lg:text-6xl font-display font-bold mb-6 animate-slide-up leading-tight">
            <span class="text-white">Expert Solutions for</span><br>
            <span class="hero-gradient-text">Your Digital Growth</span>
        </h1>
        <p class="text-xl text-white/40 max-w-3xl mx-auto animate-slide-up" style="animation-delay: 0.15s;">
            From concept to deployment, we deliver end-to-end digital solutions that drive results.
        </p>
    </div>
</section>

{{-- Services Detail --}}
@foreach([
['web-development', 'ph-code', 'Web Development', 'primary', 'Custom websites, web applications, and enterprise software solutions built with cutting-edge technologies for maximum performance and scalability.', [
['Software Development', 'End-to-end custom software tailored to your specific business needs and workflows.'],
['Mobile Application Development', 'Native and cross-platform mobile apps for iOS and Android platforms.'],
['Point of Sale Systems', 'Modern POS solutions for retail, restaurant, and hospitality businesses.'],
['CRM Solutions', 'Custom CRM systems to manage customer relationships and boost sales efficiency.'],
]],
['ecommerce', 'ph-shopping-cart', 'E-Commerce Development', 'accent', 'Powerful online stores designed to convert visitors into customers. We build feature-rich e-commerce platforms with seamless checkout experiences.', [
['OpenCart Development', 'Flexible open-source shopping cart solutions with extensive customization.'],
['Magento Development', 'Enterprise-grade e-commerce platforms for large-scale online stores.'],
['Custom Shopping Solutions', 'Bespoke e-commerce platforms tailored to your unique business model.'],
['Payment Integration', 'Secure payment gateway setup — Stripe, PayPal, Razorpay, and more.'],
]],
['cms-development', 'ph-layout', 'CMS Development', 'green', 'Flexible content management systems that give you complete control over your digital content and online presence.', [
['WordPress Development', 'Custom themes, plugins, and full WordPress website development.'],
['Joomla Development', 'Robust Joomla-based websites with advanced features and functionality.'],
['PHP Development', 'Custom PHP applications with clean, maintainable, and scalable code.'],
['.NET Development', 'Enterprise solutions built on the Microsoft .NET framework.'],
]],
['digital-marketing', 'ph-megaphone', 'Digital Marketing', 'pink', 'Comprehensive digital marketing strategies that increase your visibility, drive qualified traffic, and convert leads into loyal customers.', [
['Search Engine Marketing', 'PPC campaigns, display advertising, and email marketing for rapid growth.'],
['Social Media Optimization', 'Facebook, Instagram, YouTube, and Twitter strategies that engage audiences.'],
['Content Marketing', 'High-quality content creation and distribution to build authority and trust.'],
['Email Marketing', 'Targeted email campaigns that nurture leads and drive conversions.'],
]],
['seo', 'ph-magnifying-glass', 'SEO Services', 'orange', 'Data-driven SEO strategies that boost your search engine rankings, increase organic traffic, and deliver sustainable long-term results.', [
['On-Page SEO', 'Content optimization, meta tags, schema markup, and internal linking.'],
['Off-Page SEO', 'Link building, guest posts, directory submissions, and authority building.'],
['Technical SEO', 'Site speed, mobile optimization, crawlability, and core web vitals.'],
['Local SEO', 'Google My Business optimization and local search visibility.'],
]],
['graphic-design', 'ph-palette', 'Graphic Design', 'cyan', 'Stunning visual identities that make your brand memorable. From logos to complete brand systems, we craft designs that communicate your story.', [
['Logo Design', 'Unique, memorable logos that embody your brand identity and values.'],
['Banner Design', 'Eye-catching digital and print banners for campaigns and promotions.'],
['Brochure Design', 'Professional brochures and marketing collateral that impress.'],
['Social Media Creatives', 'Engaging social media graphics that drive engagement and shares.'],
]],
] as $index => $service)
<section id="{{ $service[0] }}" class="py-24 {{ $index % 2 === 0 ? 'bg-gradient-to-br from-white via-primary-50/20 to-accent-50/10' : 'bg-gradient-to-br from-surface-50 via-accent-50/20 to-primary-50/10' }} overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="{{ $index % 2 !== 0 ? 'lg:order-2' : '' }} reveal-left">
                <div class="w-14 h-14 rounded-2xl bg-{{ $service[3] }}-50 flex items-center justify-center mb-6">
                    <i class="ph {{ $service[1] }} text-2xl text-{{ $service[3] }}-600"></i>
                </div>
                <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">{{ $service[2] }}</h2>
                <p class="text-lg text-surface-500 leading-relaxed mb-8">{{ $service[4] }}</p>
                <div class="space-y-4">
                    @foreach($service[5] as $sub)
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white border border-surface-200 hover:shadow-sm hover:border-{{ $service[3] }}-200 transition-all">
                        <i class="ph ph-check-circle text-{{ $service[3] }}-600 text-lg mt-0.5"></i>
                        <div>
                            <h4 class="font-semibold text-surface-900 text-sm">{{ $sub[0] }}</h4>
                            <p class="text-xs text-surface-400 mt-1">{{ $sub[1] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 mt-8 px-6 py-3 bg-{{ $service[3] }}-600 text-white font-semibold rounded-lg hover:bg-{{ $service[3] }}-700 shadow-sm transition-all">
                    Get a Quote <i class="ph ph-arrow-right"></i>
                </a>
            </div>
            <div class="{{ $index % 2 !== 0 ? 'lg:order-1' : '' }} reveal-right">
                <div class="aspect-square rounded-3xl bg-gradient-to-br from-{{ $service[3] }}-50 to-{{ $service[3] }}-100/50 border border-surface-100 flex items-center justify-center">
                    <i class="ph {{ $service[1] }} text-[120px] text-{{ $service[3] }}-200"></i>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach

{{-- Zoho Partner Section --}}
<section class="py-24 bg-gradient-to-r from-primary-700 via-primary-600 to-accent-600 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto reveal">
            <div class="w-14 h-14 mx-auto rounded-2xl bg-white/10 flex items-center justify-center mb-6">
                <i class="ph ph-handshake text-2xl text-white"></i>
            </div>
            <h2 class="text-4xl font-display font-bold text-white mb-4">Zoho Authorized Partner</h2>
            <p class="text-lg text-white/70 mb-8">We are an authorized Zoho Workplace partner, helping businesses set up and manage Zoho Mail, Connect, Sheet, Docs, and Sites.</p>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach(['Zoho Mail', 'Zoho Connect', 'Zoho Sheet', 'Zoho Docs', 'Zoho Sites'] as $zoho)
                <span class="px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white text-sm font-medium">{{ $zoho }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection