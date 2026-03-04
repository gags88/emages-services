@extends('layouts.app')

@section('title', 'Blog - Emages Soft Services')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 overflow-hidden bg-white">
    <div class="absolute inset-0 hero-gradient"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent-50 border border-accent-100 text-accent-600 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-pen-nib"></i> Our Blog
        </span>
        <h1 class="text-5xl lg:text-6xl font-display font-bold text-surface-900 mb-6 animate-slide-up">
            Latest <span class="gradient-text">Insights & Articles</span>
        </h1>
        <p class="text-xl text-surface-500 max-w-3xl mx-auto animate-slide-up delay-200">Stay ahead with the latest trends, tips, and insights from our expert team.</p>
    </div>
</section>

{{-- Blog Grid --}}
<section class="pb-24 bg-surface-50 pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Featured Post --}}
        <div class="mb-16 reveal">
            <div class="grid lg:grid-cols-2 gap-0 rounded-2xl overflow-hidden bg-white border border-surface-200 hover:shadow-lg transition-all">
                <div class="aspect-[16/10] lg:aspect-auto bg-gradient-to-br from-primary-50 to-accent-50 flex items-center justify-center p-12">
                    <div class="text-center">
                        <span class="px-3 py-1 rounded-full bg-primary-100 text-primary-700 text-xs font-medium">Featured</span>
                        <h2 class="text-3xl font-display font-bold text-surface-900 mt-6 leading-snug">The Future of Web Development: Trends Shaping 2026 and Beyond</h2>
                    </div>
                </div>
                <div class="p-10 flex flex-col justify-center">
                    <div class="flex items-center gap-4 text-xs text-surface-400 mb-4">
                        <span>March 1, 2026</span><span>&middot;</span><span>8 min read</span><span>&middot;</span><span class="text-primary-600">Web Development</span>
                    </div>
                    <p class="text-surface-500 leading-relaxed mb-6">Explore the groundbreaking web development trends shaping 2026 — from AI-powered interfaces and WebAssembly to edge computing and spatial web experiences. Learn how these technologies are revolutionizing how we build for the web.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-primary-600 font-semibold hover:gap-3 transition-all">
                        Read Full Article <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Blog Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
            ['How SEO Has Evolved: Strategies for Zero-Click Searches', 'Google keeps evolving, and so should your SEO strategy. Learn how to optimize for zero-click searches and featured snippets to maintain visibility in an increasingly competitive landscape.', 'Feb 24, 2026', '7 min read', 'SEO', 'from-green-50 to-teal-50'],
            ['Best Digital Marketing Tools to Grow Your Business Online', 'Getting customers online is about controlling the customer decision journey. Discover the essential digital marketing tools every business needs in 2026 to attract, engage, and convert.', 'Feb 18, 2026', '6 min read', 'Marketing', 'from-orange-50 to-red-50'],
            ['Why Your Business Needs a Custom Mobile App in 2026', 'Mobile apps are no longer optional — they are essential. Explore the compelling reasons why investing in a custom mobile app can transform your business and customer engagement.', 'Feb 12, 2026', '5 min read', 'Mobile', 'from-purple-50 to-pink-50'],
            ['E-Commerce Trends: Building Stores That Convert', 'Conversion is the ultimate metric for e-commerce success. Learn the latest design patterns, checkout optimizations, and personalization strategies that top-performing stores use.', 'Feb 5, 2026', '6 min read', 'E-Commerce', 'from-cyan-50 to-blue-50'],
            ['The Complete Guide to WordPress Development in 2026', 'WordPress powers over 40% of the web. This comprehensive guide covers modern WordPress development practices, performance optimization, and security best practices.', 'Jan 28, 2026', '10 min read', 'CMS', 'from-blue-50 to-indigo-50'],
            ['Graphic Design Trends That Will Dominate 2026', 'From AI-generated visuals to immersive 3D graphics, discover the design trends that will shape brand identities and digital experiences throughout 2026 and beyond.', 'Jan 20, 2026', '5 min read', 'Design', 'from-pink-50 to-rose-50'],
            ] as $post)
            <article class="group rounded-2xl overflow-hidden bg-white border border-surface-200 hover:shadow-lg transition-all reveal" data-delay="{{ $loop->index * 100 }}">
                <div class="aspect-[16/10] bg-gradient-to-br {{ $post[5] }} flex items-center justify-center p-6">
                    <h3 class="text-lg font-display font-bold text-surface-800 text-center leading-snug group-hover:text-primary-700 transition-colors">{{ $post[0] }}</h3>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-surface-400 mb-3">
                        <span>{{ $post[2] }}</span><span>&middot;</span><span>{{ $post[3] }}</span>
                        <span class="ml-auto px-2 py-0.5 rounded bg-primary-50 text-primary-600 text-[10px] font-medium">{{ $post[4] }}</span>
                    </div>
                    <p class="text-sm text-surface-500 leading-relaxed mb-4 line-clamp-3">{{ $post[1] }}</p>
                    <a href="#" class="inline-flex items-center gap-2 text-sm text-primary-600 font-medium group-hover:gap-3 transition-all">
                        Read More <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        {{-- Load More --}}
        <div class="text-center mt-12 reveal">
            <button class="inline-flex items-center gap-2 px-8 py-4 border border-surface-200 bg-white text-surface-700 font-semibold rounded-lg hover:bg-surface-50 transition-all">
                Load More Articles
                <i class="ph ph-arrow-down"></i>
            </button>
        </div>
    </div>
</section>

@endsection
