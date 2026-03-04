@extends('layouts.app')

@section('title', 'Pricing - Emages Soft Services')

@section('content')

{{-- Hero - Dark Cinematic --}}
<section class="relative pt-28 pb-20 lg:pt-36 lg:pb-24 overflow-hidden bg-gradient-to-br from-surface-950 via-primary-950 to-surface-900">
    {{-- Gradient orbs --}}
    <div class="absolute top-0 right-1/3 w-[400px] h-[400px] rounded-full bg-accent-500/15 blur-[120px] animate-orb-1"></div>
    <div class="absolute bottom-0 left-1/4 w-[350px] h-[350px] rounded-full bg-primary-600/15 blur-[100px] animate-orb-2"></div>
    {{-- Grid pattern --}}
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2040%2040%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.03%22%3E%3Cpath%20d%3D%22M0%200h1v1H0zM20%200h1v1h-1zM0%2020h1v1H0zM20%2020h1v1h-1z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 backdrop-blur-md border border-white/10 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-tag text-green-400"></i>
            <span class="text-white/70">Pricing</span>
        </div>
        <h1 class="text-5xl lg:text-6xl font-display font-bold mb-6 animate-slide-up leading-tight">
            <span class="text-white">Transparent Pricing,</span><br>
            <span class="hero-gradient-text">Exceptional Value</span>
        </h1>
        <p class="text-xl text-white/40 max-w-3xl mx-auto animate-slide-up" style="animation-delay: 0.15s;">
            Simple, honest pricing for every stage of your business. No hidden fees, no surprises.
        </p>
    </div>
</section>

{{-- Pricing --}}
<section class="pb-24 bg-gradient-to-br from-surface-50 via-primary-50/20 to-accent-50/10 pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Web Development Plans --}}
        <div class="mb-20">
            <h2 class="text-2xl font-display font-bold text-surface-900 text-center mb-12 reveal">
                <i class="ph ph-code text-primary-600"></i> Web Development Packages
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
                <div class="relative p-8 rounded-2xl bg-white border {{ $plan[5] ? 'border-2 border-primary-500 shadow-lg' : 'border-surface-200 hover:shadow-md' }} transition-all reveal">
                    @if($plan[5])
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-4 py-1 bg-primary-600 rounded-full text-xs font-bold text-white">MOST POPULAR</div>
                    @endif
                    <div class="mb-8">
                        <h3 class="text-lg font-display font-bold text-surface-900 mb-2">{{ $plan[0] }}</h3>
                        <p class="text-sm text-surface-400 mb-6">{{ $plan[3] }}</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-display font-bold {{ $plan[5] ? 'text-primary-600' : 'text-surface-900' }}">{{ $plan[1] }}</span>
                            @if($plan[2])<span class="text-surface-400 text-sm">/ {{ $plan[2] }}</span>@endif
                        </div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        @foreach($plan[4] as $feature)
                        <li class="flex items-center gap-3 text-sm {{ $feature[0] ? 'text-surface-600' : 'text-surface-300' }}">
                            <i class="ph {{ $feature[0] ? 'ph-check-circle text-green-500' : 'ph-x-circle text-surface-300' }}"></i>
                            {{ $feature[1] }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('contact') }}" class="block text-center px-6 py-3 {{ $plan[5] ? 'bg-primary-600 text-white font-bold hover:bg-primary-700 shadow-sm' : 'border border-surface-200 text-surface-700 font-semibold hover:bg-surface-50' }} rounded-lg transition-all">
                        {{ $plan[1] === 'Custom' ? 'Contact Sales' : 'Get Started' }}
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Digital Marketing Plans --}}
        <div class="mb-20">
            <h2 class="text-2xl font-display font-bold text-surface-900 text-center mb-12 reveal">
                <i class="ph ph-megaphone text-pink-600"></i> Digital Marketing Packages
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
                <div class="relative p-8 rounded-2xl bg-white border {{ $plan[5] ? 'border-2 border-pink-500 shadow-lg' : 'border-surface-200 hover:shadow-md' }} transition-all reveal">
                    @if($plan[5])
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-4 py-1 bg-gradient-to-r from-pink-600 to-accent-600 rounded-full text-xs font-bold text-white">BEST VALUE</div>
                    @endif
                    <div class="mb-8">
                        <h3 class="text-lg font-display font-bold text-surface-900 mb-2">{{ $plan[0] }}</h3>
                        <p class="text-sm text-surface-400 mb-6">{{ $plan[3] }}</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-display font-bold {{ $plan[5] ? 'text-pink-600' : 'text-surface-900' }}">{{ $plan[1] }}</span>
                            <span class="text-surface-400 text-sm">/ {{ $plan[2] }}</span>
                        </div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        @foreach($plan[4] as $feature)
                        <li class="flex items-center gap-3 text-sm {{ $feature[0] ? 'text-surface-600' : 'text-surface-300' }}">
                            <i class="ph {{ $feature[0] ? 'ph-check-circle text-green-500' : 'ph-x-circle text-surface-300' }}"></i>
                            {{ $feature[1] }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('contact') }}" class="block text-center px-6 py-3 {{ $plan[5] ? 'bg-gradient-to-r from-pink-600 to-accent-600 text-white font-bold hover:shadow-lg' : 'border border-surface-200 text-surface-700 font-semibold hover:bg-surface-50' }} rounded-lg transition-all">
                        Get Started
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Prepaid Support Hours --}}
        <div class="max-w-3xl mx-auto text-center p-12 rounded-3xl bg-gradient-to-br from-orange-50/50 via-white to-accent-50/30 border border-orange-100/50 shadow-sm reveal">
            <div class="w-14 h-14 mx-auto rounded-2xl bg-orange-50 flex items-center justify-center mb-6">
                <i class="ph ph-clock text-2xl text-orange-600"></i>
            </div>
            <h2 class="text-3xl font-display font-bold text-surface-900 mb-4">Prepaid Support Hours</h2>
            <p class="text-surface-500 mb-6">Need regular website help without monthly contracts? Buy prepaid hours and use them whenever you need.</p>
            <div class="flex flex-wrap justify-center gap-3 mb-6">
                <span class="px-4 py-2 rounded-full bg-orange-50 border border-orange-100 text-orange-700 text-sm">No monthly contracts</span>
                <span class="px-4 py-2 rounded-full bg-orange-50 border border-orange-100 text-orange-700 text-sm">No expiry</span>
                <span class="px-4 py-2 rounded-full bg-orange-50 border border-orange-100 text-orange-700 text-sm">All platforms</span>
            </div>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-orange-600 text-white font-bold rounded-lg hover:bg-orange-700 shadow-sm transition-all">
                Learn More <i class="ph ph-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection