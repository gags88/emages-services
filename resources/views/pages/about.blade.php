@extends('layouts.app')

@section('title', 'About Us - Emages Soft Services')
@section('meta_description', 'Emages Soft Services is a leading Indian software development and web solutions company, established in 2010, serving domestic and international clients with IT consultancy and cloud-focused solutions.')

@section('content')

<section class="relative pt-28 pb-20 lg:pt-36 lg:pb-24 overflow-hidden bg-linear-to-br from-surface-950 via-primary-950 to-surface-900">
    <div class="absolute top-0 left-1/4 w-100 h-100 rounded-full bg-primary-600/15 blur-[120px] animate-orb-1"></div>
    <div class="absolute bottom-0 right-1/4 w-87.5 h-87.5 rounded-full bg-accent-500/15 blur-[100px] animate-orb-2"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2040%2040%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.03%22%3E%3Cpath%20d%3D%22M0%200h1v1H0zM20%200h1v1h-1zM0%2020h1v1H0zM20%2020h1v1h-1z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 backdrop-blur-md border border-white/10 text-sm font-medium mb-6 animate-fade-in">
            <i class="ph ph-buildings text-primary-400"></i>
            <span class="text-white/70">About Us</span>
        </div>
        <h1 class="text-5xl lg:text-6xl font-display font-bold mb-6 animate-slide-up leading-tight">
            <span class="text-white">Emages Soft Services</span><br>
            <span class="hero-gradient-text">About Company</span>
        </h1>
        <p class="text-xl text-white/40 max-w-3xl mx-auto animate-slide-up" style="animation-delay: 0.15s;">
            Emages Soft Services is a leading Indian software development and web solutions company serving domestic and international clients.
        </p>
    </div>
</section>

{{-- Stats --}}
<section class="bg-linear-to-r from-primary-700 via-primary-600 to-accent-600 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-16">
            @foreach([['20+', 'Years Experience'], ['150+', 'Happy Clients'], ['300+', 'Projects Done'], ['15+', 'Countries Served']] as $stat)
            <div class="text-center reveal">
                <div class="text-4xl font-display font-bold text-white mb-2">{{ $stat[0] }}</div>
                <p class="text-sm text-white/70 uppercase tracking-wider">{{ $stat[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-12 bg-linear-to-br from-white via-primary-50/20 to-accent-50/20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal-left">
                <h2 class="text-4xl font-display font-bold text-surface-900 mb-6">About <span class="gradient-text">Company</span></h2>
                <p class="text-surface-500 leading-relaxed mb-6">
                    Emages Soft Services is a leading Indian software development and web solutions company serving domestic and international clients.
                </p>
                <p class="text-surface-500 leading-relaxed mb-6">
                    We also provide IT consultancy for industries, professionals, and individuals, along with complete solutions for your information technology needs. We develop high-quality application software at a reasonable cost.
                </p>
                <p class="text-surface-500 leading-relaxed mb-6">
                    Emages Soft Services was established in 2010 in Aligarh, Uttar Pradesh, India, with a strong vision to transform information technology in the cloud world.
                </p>
                <p class="text-surface-500 leading-relaxed mb-6">
                    Emages Soft Services is the one and only company from Aligarh, Uttar Pradesh, to be a Google Workspace (formerly G Suite) Authorized Reseller Partner (India &amp; USA Billing) since 2012. Over the last few years, we have experienced strong growth and adoption across industries. We have operations in the US, UK, Canada, and India with a global customer base.
                </p>
                <p class="text-surface-500 leading-relaxed mb-8">
                    Our team consists of dedicated, educated, trained, and experienced professionals who are acquainted with international quality standards and the latest tools and techniques in the field of information technology.
                </p>
                <div class="grid sm:grid-cols-2 gap-4">
                    @foreach(['Leading Indian software development and web solutions company', 'IT consultancy for industries, professionals, and individuals', 'High-quality application software at a reasonable cost', 'Established in 2010 in Aligarh, Uttar Pradesh, India', 'Google Workspace Authorized Reseller since 2012 (India & USA Billing)', 'Operations in the US, UK, Canada, and India'] as $item)
                    <div class="flex items-center gap-3 text-sm text-surface-600">
                        <i class="ph ph-check-circle text-primary-600"></i>
                        {{ $item }}
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="reveal-right">
                <div class="relative">
                    <div class="aspect-square rounded-3xl bg-linear-to-br from-primary-50 to-accent-50 border border-surface-100 flex items-center justify-center">
                        <div class="text-center space-y-6 p-12">
                            <div class="w-24 h-24 mx-auto rounded-3xl bg-linear-to-br from-primary-500 to-accent-500 flex items-center justify-center">
                                <i class="ph ph-rocket-launch text-4xl text-white"></i>
                            </div>
                            <h3 class="text-3xl font-display font-bold text-surface-900">Cloud Vision Since 2010</h3>
                            <p class="text-surface-400">Delivering quality solutions across the globe</p>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-48 bg-white shadow-lg border border-surface-100 rounded-2xl p-4 animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center">
                                <i class="ph ph-handshake text-green-600"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-surface-900">Google Workspace</p>
                                <p class="text-xs text-surface-400">Authorized Since 2012</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-linear-to-br from-primary-50/30 via-surface-50 to-accent-50/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-10 rounded-3xl bg-white border border-surface-200 hover:shadow-md transition-all reveal">
                <div class="w-14 h-14 rounded-2xl bg-accent-50 flex items-center justify-center mb-6">
                    <i class="ph ph-eye text-2xl text-accent-600"></i>
                </div>
                <h3 class="text-2xl font-display font-bold text-surface-900 mb-4">VISION</h3>
                <p class="text-surface-500 leading-relaxed">
                    It is our way of doing business and the way we interpret the world around us, our customers' requirements, the future of technology, and the business environment. Whatever the future holds, our Vision, or Emages Soft Vision, will be our guiding force.
                </p>
            </div>
            <div class="p-10 rounded-3xl bg-white border border-surface-200 hover:shadow-md transition-all reveal">
                <div class="w-14 h-14 rounded-2xl bg-primary-50 flex items-center justify-center mb-6">
                    <i class="ph ph-target text-2xl text-primary-600"></i>
                </div>
                <h3 class="text-2xl font-display font-bold text-surface-900 mb-4">MISSION</h3>
                <p class="text-surface-500 leading-relaxed">
                    To achieve excellence in cloud solutions and build long-term client relationships based on industry-best services as well as mutual trust.
                </p>
            </div>
            <div class="p-10 rounded-3xl bg-white border border-surface-200 hover:shadow-md transition-all reveal">
                <div class="w-14 h-14 rounded-2xl bg-green-50 flex items-center justify-center mb-6">
                    <i class="ph ph-diamond text-2xl text-green-600"></i>
                </div>
                <h3 class="text-2xl font-display font-bold text-surface-900 mb-4">VALUES</h3>
                <p class="text-surface-500 leading-relaxed">
                    To provide our customers with high-quality, market-defining solutions that create value and mark a competitive edge over our competitors around the world.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-linear-to-br from-accent-50/20 via-white to-primary-50/20 overflow-hidden">
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
