@extends('layouts.app')

@section('title', 'Portfolio - Emages Soft Services')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 mesh-gradient opacity-50"></div>
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.02)_1px,transparent_1px)] bg-[size:64px_64px]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-500/10 text-primary-400 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-briefcase"></i> Our Work
        </span>
        <h1 class="text-5xl lg:text-6xl font-display font-bold text-white mb-6 animate-slide-up">
            Projects That <span class="gradient-text">Speak Results</span>
        </h1>
        <p class="text-xl text-white/50 max-w-3xl mx-auto animate-slide-up delay-200">Real projects. Real impact. See how we've helped businesses across the globe transform digitally.</p>
    </div>
</section>

{{-- Filter Tabs --}}
<section class="relative pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ filter: 'all' }">
        <div class="flex flex-wrap justify-center gap-3 mb-12 reveal">
            @foreach(['all' => 'All Projects', 'web' => 'Web Development', 'ecommerce' => 'E-Commerce', 'design' => 'Design', 'marketing' => 'Marketing'] as $key => $label)
            <button @click="filter = '{{ $key }}'" :class="filter === '{{ $key }}' ? 'bg-primary-600 text-white' : 'bg-white/5 text-white/50 hover:bg-white/10'" class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-300">{{ $label }}</button>
            @endforeach
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
            ['Mytokondria', 'Health & Wellness Platform', 'A comprehensive health platform connecting wellness professionals with patients. Built with custom appointment booking and content management.', 'from-blue-500/20 to-cyan-500/20', 'ph-heartbeat', 'Web Application', 'web'],
            ['Al-Hamd Agro Foods', 'E-Commerce Food Products', 'Full e-commerce platform with inventory management, order tracking, and secure payment integration for organic food products.', 'from-green-500/20 to-emerald-500/20', 'ph-leaf', 'E-Commerce', 'ecommerce'],
            ['Wavelinx Technologies', 'Corporate Technology Portal', 'Modern corporate website showcasing tech services, team capabilities, and client portfolio with lead generation.', 'from-purple-500/20 to-violet-500/20', 'ph-cpu', 'Web Development', 'web'],
            ['Celfanatic Films', 'Entertainment & Media Site', 'Creative portfolio site for a film production house featuring video showcases, project galleries, and team profiles.', 'from-red-500/20 to-orange-500/20', 'ph-film-strip', 'Website Design', 'design'],
            ['Bluefish Tales', 'Content & Storytelling', 'CMS-powered storytelling platform with custom content types, community features, and subscription management.', 'from-cyan-500/20 to-blue-500/20', 'ph-book-open', 'CMS Development', 'web'],
            ['National Neonatology Forum', 'Healthcare Organization', 'Large-scale organization portal with member management, event scheduling, publications, and regional chapter coordination.', 'from-pink-500/20 to-rose-500/20', 'ph-first-aid', 'Web Portal', 'web'],
            ['Amicus Juris Lawyers', 'Legal Services Platform', 'Professional law firm website with case study showcases, practice areas, appointment booking, and document portals.', 'from-amber-500/20 to-yellow-500/20', 'ph-scales', 'Web Development', 'web'],
            ['Ath Ayurdhamah', 'Ayurvedic Health Portal', 'Health and wellness platform promoting ayurvedic treatments with online consultation booking and product catalog.', 'from-teal-500/20 to-green-500/20', 'ph-plant', 'Design & Dev', 'design'],
            ['Think OOTB', 'Advertising Agency', 'Creative agency website with dynamic portfolio, campaign showcases, and client testimonials with animated presentations.', 'from-indigo-500/20 to-blue-500/20', 'ph-lightbulb', 'Marketing', 'marketing'],
            ] as $project)
            <div x-show="filter === 'all' || filter === '{{ $project[6] }}'" x-transition class="group relative rounded-2xl overflow-hidden border border-white/5 hover:border-white/15 card-hover reveal">
                <div class="aspect-[4/3] bg-gradient-to-br {{ $project[3] }} flex items-center justify-center relative">
                    <div class="text-center p-6">
                        <div class="w-16 h-16 mx-auto rounded-2xl bg-white/10 backdrop-blur-sm flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i class="ph {{ $project[4] }} text-3xl text-white"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white">{{ $project[0] }}</h3>
                        <p class="text-xs text-white/50 mt-1">{{ $project[5] }}</p>
                    </div>
                    <div class="absolute inset-0 bg-surface-950/80 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-all duration-300">
                        <p class="text-sm text-white/70 px-8 text-center leading-relaxed">{{ $project[2] }}</p>
                    </div>
                </div>
                <div class="p-5 bg-surface-900/80">
                    <h4 class="font-semibold text-white text-sm">{{ $project[1] }}</h4>
                    <span class="text-xs text-primary-400">{{ $project[5] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection