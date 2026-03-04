@extends('layouts.app')

@section('title', 'Emages Soft Services - Professional Web Development & Digital Solutions')
@section('meta_description', 'Emages Soft Services is a leading software development company offering web development, e-commerce, mobile apps, SEO, and digital marketing services worldwide.')

@section('content')

{{-- Hero Section --}}
<section class="relative pt-32 pb-24 overflow-hidden bg-white">
    <div class="absolute inset-0 hero-gradient"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="text-center lg:text-left">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-50 border border-primary-100 text-primary-600 text-sm font-medium mb-6 animate-fade-in">
                    <i class="ph ph-sparkle"></i> Premium Digital Solutions
                </span>
                <h1 class="text-5xl lg:text-6xl font-display font-bold text-surface-900 mb-6 animate-slide-up leading-tight">
                    We Build Digital <br>Products That <span class="gradient-text">Drive Growth</span>
                </h1>
                <p class="text-lg text-surface-500 mb-8 max-w-xl animate-slide-up leading-relaxed">
                    From custom software to digital marketing, we help businesses transform their digital presence with solutions that deliver measurable results.
                </p>
                <div class="flex flex-wrap gap-4 justify-center lg:justify-start animate-slide-up">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-7 py-3.5 bg-primary-600 text-white font-semibold rounded-lg hover:bg-primary-700 shadow-sm transition-all">
                        Start Your Project <i class="ph ph-arrow-right"></i>
                    </a>
                    <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 px-7 py-3.5 border border-surface-200 text-surface-700 font-semibold rounded-lg hover:bg-surface-50 transition-all">
                        View Our Work <i class="ph ph-briefcase"></i>
                    </a>
                </div>
            </div>
            <div class="hidden lg:block relative animate-fade-in">
                <div class="relative">
                    <div class="aspect-square rounded-3xl bg-gradient-to-br from-primary-50 to-accent-50 border border-surface-100 flex items-center justify-center">
                        <div class="text-center space-y-4">
                            <div class="w-20 h-20 mx-auto rounded-2xl bg-primary-100 flex items-center justify-center">
                                <i class="ph ph-code text-4xl text-primary-600"></i>
                            </div>
                            <p class="text-surface-400 font-medium">10+ Years of Excellence</p>
                        </div>
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-white shadow-lg rounded-2xl p-4 border border-surface-100 animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center">
                                <i class="ph ph-users text-green-600"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-surface-900">150+ Clients</p>
                                <p class="text-xs text-surface-400">Worldwide</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 bg-white shadow-lg rounded-2xl p-4 border border-surface-100 animate-float" style="animation-delay: 1s;">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-accent-50 flex items-center justify-center">
                                <i class="ph ph-star text-accent-600"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-surface-900">5-Star Rated</p>
                                <p class="text-xs text-surface-400">On Google</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Stats Bar --}}
<section class="bg-surface-50 border-y border-surface-200 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-16">
            @foreach([['10+', 'Years Experience'], ['150+', 'Happy Clients'], ['300+', 'Projects Completed'], ['15+', 'Countries Served']] as $stat)
            <div class="text-center reveal">
                <div class="text-4xl font-display font-bold text-primary-600 mb-1">{{ $stat[0] }}</div>
                <p class="text-sm text-surface-400 uppercase tracking-wider">{{ $stat[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Services --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-50 text-primary-600 text-sm font-medium mb-4">
                <i class="ph ph-sparkle"></i> What We Do
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">Services That Drive <span class="gradient-text">Results</span></h2>
            <p class="text-lg text-surface-500">End-to-end digital solutions tailored to your business needs.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
            ['ph-code', 'Web Development', 'Custom websites, web apps, and enterprise solutions built with cutting-edge technologies.', 'primary', route('services').'#web-development'],
            ['ph-shopping-cart', 'E-Commerce', 'Powerful online stores designed to convert visitors into loyal customers.', 'accent', route('services').'#ecommerce'],
            ['ph-layout', 'CMS Development', 'Flexible content management systems — WordPress, Joomla, and custom solutions.', 'green', route('services').'#cms-development'],
            ['ph-megaphone', 'Digital Marketing', 'Social media, PPC, content marketing strategies that drive qualified traffic.', 'pink', route('services').'#digital-marketing'],
            ['ph-magnifying-glass', 'SEO Services', 'Data-driven SEO strategies to boost rankings and organic visibility.', 'orange', route('services').'#seo'],
            ['ph-palette', 'Graphic Design', 'Stunning visual identities — logos, branding, and marketing collateral.', 'cyan', route('services').'#graphic-design'],
            ] as $service)
            <a href="{{ $service[4] }}" class="group p-6 rounded-2xl bg-white border border-surface-200 hover:shadow-lg hover:border-{{ $service[3] }}-200 transition-all duration-300 reveal">
                <div class="w-12 h-12 rounded-xl bg-{{ $service[3] }}-50 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ph {{ $service[0] }} text-xl text-{{ $service[3] }}-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-surface-900 mb-2">{{ $service[1] }}</h3>
                <p class="text-sm text-surface-500 leading-relaxed">{{ $service[2] }}</p>
                <span class="inline-flex items-center gap-1 mt-4 text-sm font-medium text-{{ $service[3] }}-600 group-hover:gap-2 transition-all">
                    Learn More <i class="ph ph-arrow-right text-xs"></i>
                </span>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- Why Choose Us --}}
<section class="py-24 bg-surface-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent-50 text-accent-600 text-sm font-medium mb-4">
                <i class="ph ph-rocket-launch"></i> Our Process
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">How We Bring Your <span class="gradient-text">Vision to Life</span></h2>
            <p class="text-lg text-surface-500">A streamlined approach that ensures quality delivery every time.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
            ['01', 'Discover', 'We listen to understand your goals, audience, and project requirements.', 'primary', 'ph-magnifying-glass'],
            ['02', 'Plan', 'Strategic planning with wireframes, architecture, and project roadmap.', 'accent', 'ph-map-trifold'],
            ['03', 'Create', 'Design and development with regular updates and quality assurance.', 'green', 'ph-paint-brush'],
            ['04', 'Launch', 'Thorough testing, deployment, and ongoing support to ensure success.', 'orange', 'ph-rocket-launch'],
            ] as $step)
            <div class="text-center p-8 rounded-2xl bg-white border border-surface-200 hover:shadow-md transition-all reveal">
                <div class="w-14 h-14 mx-auto rounded-2xl bg-{{ $step[3] }}-600 text-white flex items-center justify-center text-lg font-bold mb-5">{{ $step[0] }}</div>
                <h3 class="text-lg font-semibold text-surface-900 mb-2">{{ $step[1] }}</h3>
                <p class="text-sm text-surface-500 leading-relaxed">{{ $step[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Tech Stack --}}
<section class="py-16 bg-white border-y border-surface-200 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-10 reveal">
        <h2 class="text-2xl font-display font-bold text-surface-900">Technologies We Work With</h2>
    </div>
    <div class="relative">
        <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-white to-transparent z-10"></div>
        <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-white to-transparent z-10"></div>
        <div class="flex gap-8 animate-marquee">
            @foreach(['Laravel', 'React', 'Vue.js', 'Node.js', 'PHP', 'WordPress', 'Shopify', 'Python', 'Flutter', 'AWS', 'Docker', 'MySQL', 'MongoDB', 'Tailwind CSS', 'Next.js', 'Angular', 'Laravel', 'React', 'Vue.js', 'Node.js', 'PHP', 'WordPress', 'Shopify', 'Python', 'Flutter', 'AWS'] as $tech)
            <div class="shrink-0 px-6 py-3 rounded-xl bg-surface-50 border border-surface-200 text-sm font-medium text-surface-600 whitespace-nowrap">{{ $tech }}</div>
            @endforeach
        </div>
    </div>
</section>

{{-- Portfolio --}}
<section class="py-24 bg-surface-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-50 text-primary-600 text-sm font-medium mb-4">
                <i class="ph ph-briefcase"></i> Our Work
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">Featured <span class="gradient-text">Projects</span></h2>
            <p class="text-lg text-surface-500">Real projects delivering real results for clients worldwide.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
            ['Mytokondria', 'Health & Wellness Platform', 'Custom appointment booking and health content management.', 'from-blue-50 to-cyan-50', 'ph-heartbeat', 'blue'],
            ['Al-Hamd Agro Foods', 'E-Commerce Food Products', 'Full e-commerce with inventory and secure payments.', 'from-green-50 to-emerald-50', 'ph-leaf', 'green'],
            ['Wavelinx Technologies', 'Corporate Tech Portal', 'Modern corporate website with lead generation.', 'from-purple-50 to-violet-50', 'ph-cpu', 'purple'],
            ['Celfanatic Films', 'Entertainment & Media', 'Creative portfolio with video showcases and galleries.', 'from-red-50 to-orange-50', 'ph-film-strip', 'red'],
            ['Bluefish Tales', 'Content Platform', 'CMS-powered storytelling with subscription management.', 'from-cyan-50 to-blue-50', 'ph-book-open', 'cyan'],
            ['National Neonatology Forum', 'Healthcare Organization', 'Member management, events, and publications portal.', 'from-pink-50 to-rose-50', 'ph-first-aid', 'pink'],
            ] as $project)
            <div class="group rounded-2xl overflow-hidden bg-white border border-surface-200 hover:shadow-lg transition-all reveal">
                <div class="aspect-[4/3] bg-gradient-to-br {{ $project[3] }} flex items-center justify-center relative p-6">
                    <div class="text-center">
                        <div class="w-14 h-14 mx-auto rounded-2xl bg-white shadow-sm flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                            <i class="ph {{ $project[4] }} text-2xl text-{{ $project[5] }}-600"></i>
                        </div>
                        <h3 class="font-bold text-surface-900">{{ $project[0] }}</h3>
                    </div>
                </div>
                <div class="p-5">
                    <h4 class="font-semibold text-surface-800 text-sm mb-1">{{ $project[1] }}</h4>
                    <p class="text-xs text-surface-500">{{ $project[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-12 reveal">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 px-7 py-3.5 border border-surface-200 text-surface-700 font-semibold rounded-lg hover:bg-surface-50 transition-all">
                View All Projects <i class="ph ph-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

{{-- Testimonials --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent-50 text-accent-600 text-sm font-medium mb-4">
                <i class="ph ph-chat-circle-text"></i> Testimonials
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">What Our Clients <span class="gradient-text">Say</span></h2>
            <p class="text-lg text-surface-500">Trusted by businesses across the globe.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
            ['Vishal Kumar', 'CEO, Mytokondria', 'Emages Soft delivered an exceptional health platform that exceeded our expectations. Their attention to detail and commitment to quality is remarkable.'],
            ['Shahbaz Ahmed', 'Director, Al-Hamd Agro', 'Our e-commerce platform has seen a 200% increase in sales since the redesign. The team truly understands what it takes to build a converting store.'],
            ['Arjun Sharma', 'CTO, Wavelinx Technologies', 'Professional, timely, and technically sound. Emages Soft is our go-to partner for all web development needs. Highly recommended.'],
            ['Sarah Mitchell', 'Founder, Think OOTB', 'Their digital marketing expertise helped us triple our organic traffic within 6 months. A truly data-driven approach that delivers results.'],
            ['Dr. Rakesh Gupta', 'NNF National President', 'Managing a nationwide healthcare organization requires robust technology. Emages Soft delivered a portal that serves thousands of members seamlessly.'],
            ['Priya Nair', 'Owner, Ath Ayurdhamah', 'Beautiful design, fast loading, and great SEO performance. Our online bookings increased significantly after the website launch.'],
            ] as $testimonial)
            <div class="p-6 rounded-2xl bg-white border border-surface-200 hover:shadow-md transition-all reveal">
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <i class="ph-fill ph-star text-amber-400 text-sm"></i>
                    @endfor
                </div>
                <p class="text-surface-600 text-sm leading-relaxed mb-6">&ldquo;{{ $testimonial[2] }}&rdquo;</p>
                <div class="flex items-center gap-3 pt-4 border-t border-surface-100">
                    <div class="w-10 h-10 rounded-full bg-primary-50 flex items-center justify-center">
                        <span class="text-sm font-bold text-primary-600">{{ substr($testimonial[0], 0, 1) }}</span>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-surface-900">{{ $testimonial[0] }}</p>
                        <p class="text-xs text-surface-400">{{ $testimonial[1] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Pricing --}}
<section class="py-24 bg-surface-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-50 text-green-600 text-sm font-medium mb-4">
                <i class="ph ph-tag"></i> Pricing
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">Simple, Transparent <span class="gradient-text">Pricing</span></h2>
            <p class="text-lg text-surface-500">Honest pricing for every stage of your business.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            @foreach([
            ['Starter', '$499', '/project', 'Perfect for small businesses', [
            'Up to 5-page website', 'Responsive design', 'Basic SEO setup', 'Contact form', '3 months support'
            ], false],
            ['Professional', '$1,499', '/project', 'For growing businesses', [
            'Up to 15-page website', 'Custom design & animations', 'Advanced SEO', 'CMS integration', 'Payment gateway', '6 months support'
            ], true],
            ['Enterprise', 'Custom', '', 'For large-scale operations', [
            'Unlimited pages', 'Custom web applications', 'E-commerce solutions', 'API integrations', 'Dedicated manager', '12 months priority support'
            ], false],
            ] as $plan)
            <div class="relative p-8 rounded-2xl bg-white border {{ $plan[5] ? 'border-2 border-primary-500 shadow-lg' : 'border-surface-200 hover:shadow-md' }} transition-all reveal">
                @if($plan[5])
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-4 py-1 bg-primary-600 rounded-full text-xs font-bold text-white">MOST POPULAR</div>
                @endif
                <div class="mb-6">
                    <h3 class="text-lg font-display font-bold text-surface-900 mb-1">{{ $plan[0] }}</h3>
                    <p class="text-sm text-surface-400 mb-4">{{ $plan[3] }}</p>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-display font-bold {{ $plan[5] ? 'text-primary-600' : 'text-surface-900' }}">{{ $plan[1] }}</span>
                        @if($plan[2])<span class="text-surface-400 text-sm">{{ $plan[2] }}</span>@endif
                    </div>
                </div>
                <ul class="space-y-3 mb-8">
                    @foreach($plan[4] as $feature)
                    <li class="flex items-center gap-3 text-sm text-surface-600">
                        <i class="ph ph-check-circle text-green-500"></i>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contact') }}" class="block text-center px-6 py-3 {{ $plan[5] ? 'bg-primary-600 text-white font-bold hover:bg-primary-700' : 'border border-surface-200 text-surface-700 font-semibold hover:bg-surface-50' }} rounded-lg transition-all">
                    {{ $plan[1] === 'Custom' ? 'Contact Sales' : 'Get Started' }}
                </a>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-8 reveal">
            <a href="{{ route('pricing') }}" class="text-sm font-medium text-primary-600 hover:text-primary-700">View all pricing options <i class="ph ph-arrow-right"></i></a>
        </div>
    </div>
</section>

{{-- Clients Marquee --}}
<section class="py-16 bg-white border-y border-surface-200 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-10 reveal">
        <h2 class="text-2xl font-display font-bold text-surface-900">Trusted by Businesses Worldwide</h2>
    </div>
    <div class="relative">
        <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-white to-transparent z-10"></div>
        <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-white to-transparent z-10"></div>
        <div class="flex gap-8 animate-marquee">
            @foreach(['Mytokondria', 'Wavelinx', 'NNF India', 'Al-Hamd Agro', 'Celfanatic', 'Think OOTB', 'Bluefish Tales', 'Ath Ayurdhamah', 'Amicus Juris', 'Mytokondria', 'Wavelinx', 'NNF India', 'Al-Hamd Agro', 'Celfanatic', 'Think OOTB', 'Bluefish Tales'] as $client)
            <div class="shrink-0 px-8 py-3 rounded-xl bg-surface-50 border border-surface-200 text-sm font-medium text-surface-500 whitespace-nowrap">{{ $client }}</div>
            @endforeach
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="py-24 bg-surface-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-50 text-primary-600 text-sm font-medium mb-4">
                <i class="ph ph-question"></i> FAQ
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">Frequently Asked <span class="gradient-text">Questions</span></h2>
        </div>
        <div class="space-y-3" x-data="{ open: null }">
            @foreach([
            ['What types of websites do you build?', 'We build everything from simple business websites to complex web applications, e-commerce stores, custom CMS solutions, and enterprise software. Our expertise spans PHP, Laravel, React, Vue.js, WordPress, Shopify, and more.'],
            ['How long does it take to build a website?', 'A standard website takes 2-4 weeks, while complex web applications may take 2-3 months. We provide a detailed timeline during the planning phase and keep you updated throughout the process.'],
            ['Do you provide website maintenance?', 'Yes! We offer ongoing maintenance packages that include security updates, performance optimization, content updates, and technical support. Our plans start from as low as $49/month.'],
            ['What is your development process?', 'We follow an agile methodology: Discovery, Planning, Design, Development, Testing, Launch, Support. You are involved at each stage with regular updates and feedback sessions.'],
            ['Do you work with international clients?', 'Absolutely! We work with clients from over 15 countries. We use modern collaboration tools and schedule meetings across time zones to ensure smooth communication.'],
            ['What payment methods do you accept?', 'We accept bank transfers, PayPal, Stripe, and UPI payments. For larger projects, we typically follow a milestone-based payment structure.'],
            ] as $index => $faq)
            <div class="rounded-xl bg-white border border-surface-200 overflow-hidden reveal">
                <button @click="open === {{ $index }} ? open = null : open = {{ $index }}" class="w-full flex items-center justify-between p-5 text-left hover:bg-surface-50 transition-colors">
                    <span class="font-semibold text-surface-900 text-sm pr-4">{{ $faq[0] }}</span>
                    <i class="ph ph-caret-down text-surface-400 transition-transform duration-200 shrink-0" :class="open === {{ $index }} && 'rotate-180'"></i>
                </button>
                <div x-show="open === {{ $index }}" x-collapse>
                    <div class="px-5 pb-5 text-sm text-surface-500 leading-relaxed">{{ $faq[1] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Blog Preview --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent-50 text-accent-600 text-sm font-medium mb-4">
                <i class="ph ph-pen-nib"></i> From Our Blog
            </span>
            <h2 class="text-4xl font-display font-bold text-surface-900 mb-4">Latest <span class="gradient-text">Insights</span></h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
            ['The Future of Web Development: Trends Shaping 2026', 'Explore groundbreaking web development trends from AI interfaces to edge computing.', 'Mar 1, 2026', 'Web Dev', 'from-blue-50 to-cyan-50'],
            ['SEO Strategies for Zero-Click Searches', 'Optimize for featured snippets and maintain visibility in a zero-click world.', 'Feb 24, 2026', 'SEO', 'from-green-50 to-teal-50'],
            ['Why Your Business Needs a Mobile App in 2026', 'Mobile apps are essential. Here are compelling reasons to invest now.', 'Feb 12, 2026', 'Mobile', 'from-purple-50 to-pink-50'],
            ] as $post)
            <article class="group rounded-2xl overflow-hidden bg-white border border-surface-200 hover:shadow-lg transition-all reveal">
                <div class="aspect-[16/10] bg-gradient-to-br {{ $post[4] }} flex items-center justify-center p-6">
                    <h3 class="text-base font-display font-bold text-surface-800 text-center leading-snug group-hover:text-primary-700 transition-colors">{{ $post[0] }}</h3>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-3 text-xs text-surface-400 mb-3">
                        <span>{{ $post[2] }}</span>
                        <span class="px-2 py-0.5 rounded bg-primary-50 text-primary-600 text-[10px] font-medium">{{ $post[3] }}</span>
                    </div>
                    <p class="text-sm text-surface-500 leading-relaxed mb-4 line-clamp-2">{{ $post[1] }}</p>
                    <a href="{{ route('blog') }}" class="inline-flex items-center gap-1 text-sm font-medium text-primary-600 group-hover:gap-2 transition-all">
                        Read More <i class="ph ph-arrow-right text-xs"></i>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
        <div class="text-center mt-12 reveal">
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 px-7 py-3.5 border border-surface-200 text-surface-700 font-semibold rounded-lg hover:bg-surface-50 transition-all">
                View All Articles <i class="ph ph-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
