@extends('layouts.app')

@section('title', 'Pricing - Emages Soft Services')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 mesh-gradient opacity-50"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-green-500/10 text-green-400 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-tag"></i> Pricing
        </span>
        <h1 class="text-5xl lg:text-6xl font-display font-bold text-white mb-6 animate-slide-up">
            Transparent Pricing, <br><span class="gradient-text">Exceptional Value</span>
        </h1>
        <p class="text-xl text-white/50 max-w-3xl mx-auto animate-slide-up delay-200">Simple, honest pricing for every stage of your business. No hidden fees, no surprises.</p>
    </div>
</section>

{{-- Pricing Toggle --}}
<section class="relative pb-24" x-data="{ annual: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Web Development Plans --}}
        <div class="mb-20">
            <h2 class="text-2xl font-display font-bold text-white text-center mb-12 reveal">
                <i class="ph ph-code text-primary-400"></i> Web Development Packages
            </h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                @foreach([
                ['Starter', '$499', 'project', 'Perfect for small businesses & startups', [
                [true, 'Up to 5-page website'], [true, 'Responsive design'], [true, 'Basic SEO setup'], [true, 'Contact form integration'], [true, '3 months free support'], [false, 'Custom features'], [false, 'E-commerce integration'], [false, 'CMS integration']
                ], false],
                ['Professional', '$1,499', 'project', 'For growing businesses needing more', [
                [true, 'Up to 15-page website'], [true, 'Custom design & animations'], [true, 'Advanced SEO optimization'], [true, 'CMS integration'], [true, 'Payment gateway setup'], [true, '6 months free support'], [true, 'Performance optimization'], [false, 'Dedicated project manager']
                ], true],
                ['Enterprise', 'Custom', '', 'For large-scale operations', [
                [true, 'Unlimited pages'], [true, 'Custom web applications'], [true, 'E-commerce solutions'], [true, 'API & third-party integrations'], [true, 'Dedicated project manager'], [true, '12 months priority support'], [true, 'Cloud deployment'], [true, 'Security audit & hardening']
                ], false],
                ] as $plan)
                <div class="relative p-8 rounded-2xl bg-surface-900/50 border {{ $plan[5] ? 'border-2 border-primary-500/50 scale-[1.02]' : 'border-white/5 hover:border-white/15' }} card-hover reveal">
                    @if($plan[5])
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1 bg-gradient-to-r from-primary-600 to-accent-600 rounded-full text-xs font-bold text-white">MOST POPULAR</div>
                    @endif
                    <div class="mb-8">
                        <h3 class="text-lg font-display font-bold text-white mb-2">{{ $plan[0] }}</h3>
                        <p class="text-sm text-white/40 mb-6">{{ $plan[3] }}</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-display font-bold {{ $plan[5] ? 'gradient-text' : 'text-white' }}">{{ $plan[1] }}</span>
                            @if($plan[2])<span class="text-white/40 text-sm">/ {{ $plan[2] }}</span>@endif
                        </div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        @foreach($plan[4] as $feature)
                        <li class="flex items-center gap-3 text-sm {{ $feature[0] ? 'text-white/60' : 'text-white/30' }}">
                            <i class="ph {{ $feature[0] ? 'ph-check-circle text-green-400' : 'ph-x-circle text-white/20' }}"></i>
                            {{ $feature[1] }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('contact') }}" class="block text-center px-6 py-3 {{ $plan[5] ? 'bg-gradient-to-r from-primary-600 to-accent-600 text-white font-bold hover:shadow-lg hover:shadow-primary-500/25' : 'border border-white/15 text-white font-semibold hover:bg-white/5' }} rounded-full transition-all">
                        {{ $plan[1] === 'Custom' ? 'Contact Sales' : 'Get Started' }}
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Digital Marketing Plans --}}
        <div class="mb-20">
            <h2 class="text-2xl font-display font-bold text-white text-center mb-12 reveal">
                <i class="ph ph-megaphone text-pink-400"></i> Digital Marketing Packages
            </h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                @foreach([
                ['Basic SEO', '$299', 'month', 'Essential visibility boost', [
                [true, 'Keyword research (20 keywords)'], [true, 'On-page optimization'], [true, 'Monthly reporting'], [true, 'Google Analytics setup'], [false, 'Content creation'], [false, 'Link building']
                ], false],
                ['Growth', '$799', 'month', 'Comprehensive digital growth', [
                [true, 'Everything in Basic SEO'], [true, '50+ keywords targeting'], [true, 'Content creation (4 articles/mo)'], [true, 'Link building strategy'], [true, 'Social media management'], [true, 'Weekly reporting']
                ], true],
                ['Premium', '$1,499', 'month', 'Full-service marketing', [
                [true, 'Everything in Growth'], [true, 'Unlimited keywords'], [true, 'PPC campaign management'], [true, 'Video marketing'], [true, 'Conversion rate optimization'], [true, 'Dedicated account manager']
                ], false],
                ] as $plan)
                <div class="relative p-8 rounded-2xl bg-surface-900/50 border {{ $plan[5] ? 'border-2 border-pink-500/50 scale-[1.02]' : 'border-white/5 hover:border-white/15' }} card-hover reveal">
                    @if($plan[5])
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1 bg-gradient-to-r from-pink-600 to-accent-600 rounded-full text-xs font-bold text-white">BEST VALUE</div>
                    @endif
                    <div class="mb-8">
                        <h3 class="text-lg font-display font-bold text-white mb-2">{{ $plan[0] }}</h3>
                        <p class="text-sm text-white/40 mb-6">{{ $plan[3] }}</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-display font-bold {{ $plan[5] ? 'gradient-text' : 'text-white' }}">{{ $plan[1] }}</span>
                            <span class="text-white/40 text-sm">/ {{ $plan[2] }}</span>
                        </div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        @foreach($plan[4] as $feature)
                        <li class="flex items-center gap-3 text-sm {{ $feature[0] ? 'text-white/60' : 'text-white/30' }}">
                            <i class="ph {{ $feature[0] ? 'ph-check-circle text-green-400' : 'ph-x-circle text-white/20' }}"></i>
                            {{ $feature[1] }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('contact') }}" class="block text-center px-6 py-3 {{ $plan[5] ? 'bg-gradient-to-r from-pink-600 to-accent-600 text-white font-bold hover:shadow-lg' : 'border border-white/15 text-white font-semibold hover:bg-white/5' }} rounded-full transition-all">
                        Get Started
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Prepaid Support Hours --}}
        <div class="max-w-3xl mx-auto text-center p-12 rounded-3xl bg-gradient-to-br from-surface-800/50 to-surface-900/50 border border-white/5 reveal">
            <div class="w-14 h-14 mx-auto rounded-2xl bg-orange-500/10 flex items-center justify-center mb-6">
                <i class="ph ph-clock text-2xl text-orange-400"></i>
            </div>
            <h2 class="text-3xl font-display font-bold text-white mb-4">Prepaid Support Hours</h2>
            <p class="text-white/50 mb-6">Need regular website help without monthly contracts? Buy prepaid hours and use them whenever you need.</p>
            <div class="flex flex-wrap justify-center gap-3 mb-6">
                <span class="px-4 py-2 rounded-full bg-orange-500/10 text-orange-400 text-sm">No monthly contracts</span>
                <span class="px-4 py-2 rounded-full bg-orange-500/10 text-orange-400 text-sm">No expiry</span>
                <span class="px-4 py-2 rounded-full bg-orange-500/10 text-orange-400 text-sm">All platforms</span>
            </div>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-orange-600 to-orange-500 text-white font-bold rounded-full hover:shadow-lg transition-all">
                Learn More <i class="ph ph-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection