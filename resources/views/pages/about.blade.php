@extends('layouts.app')

@section('title', 'About Us - Emages Soft Services')
@section('meta_description', 'Learn about Emages Soft Services - a leading software company with 10+ years of experience delivering high-quality digital solutions worldwide.')

@section('content')

{{-- Page Hero --}}
<section class="relative pt-32 pb-20 overflow-hidden bg-white">
    <div class="absolute inset-0 hero-gradient"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-50 border border-primary-100 text-primary-600 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-buildings"></i> About Us
        </span>
        <h1 class="text-5xl lg:text-6xl font-display font-bold text-surface-900 mb-6 animate-slide-up">
            Your Reliable Partner for <br><span class="gradient-text">Digital Transformation</span>
        </h1>
        <p class="text-xl text-surface-500 max-w-3xl mx-auto animate-slide-up delay-200">
            A highly-rated software development company with over a decade of experience, specializing in accelerating businesses' digital transformation.
        </p>
    </div>
</section>

{{-- Stats --}}
<section class="bg-surface-50 border-y border-surface-200 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-16">
            @foreach([['10+', 'Years Experience'], ['150+', 'Happy Clients'], ['300+', 'Projects Done'], ['15+', 'Countries Served']] as $stat)
            <div class="text-center reveal">
                <div class="text-4xl font-display font-bold text-primary-600 mb-2">{{ $stat[0] }}</div>
                <p class="text-sm text-surface-400 uppercase tracking-wider">{{ $stat[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Who We Are --}}
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal-left">
                <h2 class="text-4xl font-display font-bold text-surface-900 mb-6">What We <span class="gradient-text">Stand For</span></h2>
                <p class="text-surface-500 leading-relaxed mb-6">
                    We are a software company engaged in software development for domestic and overseas clients. We provide consultancy and total solutions for your information technology needs. We develop high quality software at reasonable cost.
                </p>
                <p class="text-surface-500 leading-relaxed mb-8">
                    We have as members of our work force a set of dedicated, highly educated, trained and experienced professionals who are acquainted with international quality standards and are aware of the latest tools and techniques in the field of information technology.
                </p>
                <div class="grid sm:grid-cols-2 gap-4">
                    @foreach(['Expertise & Experience', 'Customized Solutions', 'Creative Design', 'User-Centric Approach', 'SEO Best Practices', 'Cost-Effective'] as $item)
                    <div class="flex items-center gap-3 text-sm text-surface-600">
                        <i class="ph ph-check-circle text-primary-600"></i>
                        {{ $item }}
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="reveal-right">
                <div class="relative">
                    <div class="aspect-square rounded-3xl bg-gradient-to-br from-primary-50 to-accent-50 border border-surface-100 flex items-center justify-center">
                        <div class="text-center space-y-6 p-12">
                            <div class="w-24 h-24 mx-auto rounded-3xl bg-gradient-to-br from-primary-500 to-accent-500 flex items-center justify-center">
                                <i class="ph ph-rocket-launch text-4xl text-white"></i>
                            </div>
                            <h3 class="text-3xl font-display font-bold text-surface-900">Innovating Since 2014</h3>
                            <p class="text-surface-400">Delivering excellence across the globe</p>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-48 bg-white shadow-lg border border-surface-100 rounded-2xl p-4 animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center">
                                <i class="ph ph-handshake text-green-600"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-surface-900">Google Partner</p>
                                <p class="text-xs text-surface-400">Workspace Authorized</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Mission & Vision --}}
<section class="py-24 bg-surface-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="p-10 rounded-3xl bg-white border border-surface-200 hover:shadow-md transition-all reveal">
                <div class="w-14 h-14 rounded-2xl bg-primary-50 flex items-center justify-center mb-6">
                    <i class="ph ph-target text-2xl text-primary-600"></i>
                </div>
                <h3 class="text-2xl font-display font-bold text-surface-900 mb-4">Our Mission</h3>
                <p class="text-surface-500 leading-relaxed">
                    We believe every business has the potential to achieve success and growth through a powerful online presence. We are committed to providing a comprehensive suite of services that seamlessly integrate web design, development, and digital marketing to create a transformative online experience for our clients.
                </p>
            </div>
            <div class="p-10 rounded-3xl bg-white border border-surface-200 hover:shadow-md transition-all reveal">
                <div class="w-14 h-14 rounded-2xl bg-accent-50 flex items-center justify-center mb-6">
                    <i class="ph ph-eye text-2xl text-accent-600"></i>
                </div>
                <h3 class="text-2xl font-display font-bold text-surface-900 mb-4">Our Vision</h3>
                <p class="text-surface-500 leading-relaxed">
                    We deliver our services in the most consistent, predictable and cost effective manner. EMAGES believes in achieving greater heights — "Those who dare to dream, work towards achieving them." We aspire to be right every time in anticipating future technology trends, shape them into our solutions and deliver simple, elegant and efficient results.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Why Choose Us --}}
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-6">Why Select <span class="gradient-text">Emages Soft?</span></h2>
            <p class="text-lg text-surface-500">Compelling factors that make us an excellent choice for highly professional and cost-effective digital solutions.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
            ['ph-medal', 'Expertise & Experience', 'Highly skilled professionals with extensive experience ensuring highest standards.', 'primary'],
            ['ph-puzzle-piece', 'Customized Solutions', 'Tailored solutions recognizing your uniqueness and specific business goals.', 'accent'],
            ['ph-sparkle', 'Creative & Innovative', 'Latest trends and innovative techniques for modern, captivating user experiences.', 'green'],
            ['ph-users', 'User-Centric Approach', 'Intuitive navigation, seamless UX, and effective engagement for your audience.', 'orange'],
            ['ph-device-mobile', 'Mobile Friendly', 'Responsive websites adapting seamlessly to all screen sizes and devices.', 'pink'],
            ['ph-magnifying-glass', 'SEO Optimized', 'Built-in SEO best practices for enhanced visibility and organic traffic.', 'cyan'],
            ['ph-plugs-connected', 'Integration Ready', 'E-commerce, third-party integrations, and interactive elements seamlessly built in.', 'blue'],
            ['ph-clock-countdown', 'Timely Delivery', 'Realistic timelines and close collaboration ensuring on-schedule completion.', 'yellow'],
            ['ph-coins', 'Cost-Effective', 'High quality at transparent pricing, helping you optimize your budget effectively.', 'emerald'],
            ] as $item)
            <div class="p-6 rounded-2xl bg-white border border-surface-200 hover:shadow-md hover:border-{{ $item[3] }}-200 transition-all reveal">
                <div class="w-12 h-12 rounded-xl bg-{{ $item[3] }}-50 flex items-center justify-center mb-4">
                    <i class="ph {{ $item[0] }} text-xl text-{{ $item[3] }}-600"></i>
                </div>
                <h4 class="text-lg font-semibold text-surface-900 mb-2">{{ $item[1] }}</h4>
                <p class="text-sm text-surface-500 leading-relaxed">{{ $item[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
