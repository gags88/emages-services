@extends('layouts.app')

@section('title', 'Our Services - Emages Soft Services')

@section('content')

{{-- Page Hero --}}
<section class="relative pt-32 pb-20 overflow-hidden bg-white">
    <div class="absolute inset-0 hero-gradient"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-50 border border-primary-100 text-primary-600 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-sparkle"></i> Our Services
        </span>
        <h1 class="text-5xl lg:text-6xl font-display font-bold text-surface-900 mb-6 animate-slide-up">
            Expert Solutions for <br><span class="gradient-text">Your Digital Growth</span>
        </h1>
        <p class="text-xl text-surface-500 max-w-3xl mx-auto animate-slide-up delay-200">
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
<section id="{{ $service[0] }}" class="py-24 {{ $index % 2 === 0 ? 'bg-white' : 'bg-surface-50' }} overflow-hidden">
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
<section class="py-24 bg-surface-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto reveal">
            <div class="w-14 h-14 mx-auto rounded-2xl bg-yellow-50 flex items-center justify-center mb-6">
                <i class="ph ph-handshake text-2xl text-yellow-600"></i>
            </div>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">Zoho Authorized Partner</h2>
            <p class="text-lg text-surface-500 mb-8">We are an authorized Zoho Workplace partner, helping businesses set up and manage Zoho Mail, Connect, Sheet, Docs, and Sites.</p>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach(['Zoho Mail', 'Zoho Connect', 'Zoho Sheet', 'Zoho Docs', 'Zoho Sites'] as $zoho)
                <span class="px-4 py-2 rounded-full bg-yellow-50 border border-yellow-100 text-yellow-700 text-sm font-medium">{{ $zoho }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
