@extends('layouts.app')

@section('title', 'Portfolio - Emages Soft Services')

@section('content')

{{-- Hero - Dark Cinematic --}}
<section class="relative pt-28 pb-20 lg:pt-36 lg:pb-24 overflow-hidden bg-linear-to-br from-surface-950 via-primary-950 to-surface-900">
    {{-- Gradient orbs --}}
    <div class="absolute top-0 left-1/3 w-100 h-100 rounded-full bg-primary-600/15 blur-[120px] animate-orb-1"></div>
    <div class="absolute bottom-0 right-1/3 w-87.5 h-87.5 rounded-full bg-accent-500/15 blur-[100px] animate-orb-2"></div>
    {{-- Grid pattern --}}
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2040%2040%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.03%22%3E%3Cpath%20d%3D%22M0%200h1v1H0zM20%200h1v1h-1zM0%2020h1v1H0zM20%2020h1v1h-1z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 backdrop-blur-md border border-white/10 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-briefcase text-primary-400"></i>
            <span class="text-white/70">Our Work</span>
        </div>
        <h1 class="text-5xl lg:text-6xl font-display font-bold mb-6 animate-slide-up leading-tight">
            <span class="text-white">Projects That</span> <span class="hero-gradient-text">Speak Results</span>
        </h1>
        <p class="text-xl text-white/40 max-w-3xl mx-auto animate-slide-up" style="animation-delay: 0.15s;">
            Real projects. Real impact. See how we've helped businesses across the globe transform digitally.
        </p>
    </div>
</section>

{{-- Filter Tabs --}}
<section class="pb-24 bg-linear-to-br from-surface-50 via-primary-50/20 to-accent-50/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16" x-data="{ filter: 'all' }">
        <div class="flex flex-wrap justify-center gap-3 mb-12 reveal">
            @foreach(['all' => 'All Projects', 'web' => 'Web Development', 'ecommerce' => 'E-Commerce', 'design' => 'Design', 'marketing' => 'Marketing'] as $key => $label)
            <button @click="filter = '{{ $key }}'" :class="filter === '{{ $key }}' ? 'bg-primary-600 text-white shadow-sm' : 'bg-white text-surface-500 border border-surface-200 hover:border-primary-200 hover:text-primary-600'" class="px-5 py-2 rounded-lg text-sm font-medium transition-all duration-300">{{ $label }}</button>
            @endforeach
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
            ['Mytokondria', 'Health & Wellness Platform', 'A comprehensive health platform connecting wellness professionals with patients. Built with custom appointment booking and content management.', 'from-blue-50 to-cyan-50', 'ph-heartbeat', 'Web Application', 'web', 'blue'],
            ['Al-Hamd Agro Foods', 'E-Commerce Food Products', 'Full e-commerce platform with inventory management, order tracking, and secure payment integration for organic food products.', 'from-green-50 to-emerald-50', 'ph-leaf', 'E-Commerce', 'ecommerce', 'green'],
            ['Wavelinx Technologies', 'Corporate Technology Portal', 'Modern corporate website showcasing tech services, team capabilities, and client portfolio with lead generation.', 'from-purple-50 to-violet-50', 'ph-cpu', 'Web Development', 'web', 'purple'],
            ['Celfanatic Films', 'Entertainment & Media Site', 'Creative portfolio site for a film production house featuring video showcases, project galleries, and team profiles.', 'from-red-50 to-orange-50', 'ph-film-strip', 'Website Design', 'design', 'red'],
            ['Bluefish Tales', 'Content & Storytelling', 'CMS-powered storytelling platform with custom content types, community features, and subscription management.', 'from-cyan-50 to-blue-50', 'ph-book-open', 'CMS Development', 'web', 'cyan'],
            ['National Neonatology Forum', 'Healthcare Organization', 'Large-scale organization portal with member management, event scheduling, publications, and regional chapter coordination.', 'from-pink-50 to-rose-50', 'ph-first-aid', 'Web Portal', 'web', 'pink'],
            ['Amicus Juris Lawyers', 'Legal Services Platform', 'Professional law firm website with case study showcases, practice areas, appointment booking, and document portals.', 'from-amber-50 to-yellow-50', 'ph-scales', 'Web Development', 'web', 'amber'],
            ['Ath Ayurdhamah', 'Ayurvedic Health Portal', 'Health and wellness platform promoting ayurvedic treatments with online consultation booking and product catalog.', 'from-teal-50 to-green-50', 'ph-plant', 'Design & Dev', 'design', 'teal'],
            ['Think OOTB', 'Advertising Agency', 'Creative agency website with dynamic portfolio, campaign showcases, and client testimonials with animated presentations.', 'from-indigo-50 to-blue-50', 'ph-lightbulb', 'Marketing', 'marketing', 'indigo'],
            ] as $project)
            <div x-show="filter === 'all' || filter === '{{ $project[6] }}'" x-transition class="group rounded-2xl overflow-hidden bg-white border border-surface-200 hover:shadow-lg transition-all reveal">
                <div class="aspect-4/3 bg-linear-to-br {{ $project[3] }} flex items-center justify-center relative p-6">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto rounded-2xl bg-white shadow-sm flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i class="ph {{ $project[4] }} text-3xl text-{{ $project[7] }}-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-surface-800">{{ $project[0] }}</h3>
                        <p class="text-xs text-surface-500 mt-1">{{ $project[5] }}</p>
                    </div>
                    <div class="absolute inset-0 bg-white/90 backdrop-blur-sm opacity-0 group-hover:opacity-100 flex items-center justify-center transition-all duration-300">
                        <p class="text-sm text-surface-600 px-8 text-center leading-relaxed">{{ $project[2] }}</p>
                    </div>
                </div>
                <div class="p-5">
                    <h4 class="font-semibold text-surface-800 text-sm">{{ $project[1] }}</h4>
                    <span class="text-xs text-primary-600">{{ $project[5] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection