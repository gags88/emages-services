@extends('layouts.app')

@section('title', 'Portfolio - Emages Soft Services')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 overflow-hidden bg-white">
    <div class="absolute inset-0 hero-gradient"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-50 border border-primary-100 text-primary-600 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-briefcase"></i> Our Work
        </span>
        <h1 class="text-5xl lg:text-6xl font-display font-bold text-surface-900 mb-6 animate-slide-up">
            Projects That <span class="gradient-text">Speak Results</span>
        </h1>
        <p class="text-xl text-surface-500 max-w-3xl mx-auto animate-slide-up delay-200">Real projects. Real impact. See how we've helped businesses across the globe transform digitally.</p>
    </div>
</section>

{{-- Filter Tabs --}}
<section class="pb-24 bg-surface-50">
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
                <div class="aspect-[4/3] bg-gradient-to-br {{ $project[3] }} flex items-center justify-center relative p-6">
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
