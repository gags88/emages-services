<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Emages Soft Services - Leading software development company providing web development, mobile apps, digital marketing, and IT consulting solutions.')">
    <meta name="keywords" content="@yield('meta_keywords', 'software development, web development, mobile apps, digital marketing, SEO, e-commerce, IT solutions')">
    <meta name="author" content="Emages Soft Services">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'Emages Soft Services')">
    <meta property="og:description" content="@yield('meta_description', 'Leading software development company providing innovative digital solutions.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <title>@yield('title', 'Emages Soft Services - Software Development & Digital Solutions')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<body class="bg-surface-950 text-white font-sans antialiased overflow-x-hidden">

    {{-- Navigation --}}
    @include('partials.navigation')

    {{-- Main Content --}}
    <main class="page-transition">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- WhatsApp Float --}}
    <a href="https://api.whatsapp.com/send?phone=+917579809049&text=Hello%20Emages%20Soft%20Services" target="_blank"
       class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 hover:scale-110 transition-all duration-300 group">
        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full animate-ping"></span>
        <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full"></span>
    </a>

    {{-- Back to top --}}
    <button id="backToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
            class="fixed bottom-6 left-6 z-50 w-12 h-12 bg-primary-600/80 backdrop-blur-sm rounded-full items-center justify-center shadow-lg hover:bg-primary-500 transition-all duration-300 opacity-0 translate-y-4 pointer-events-none hidden lg:flex"
            style="transition: opacity 0.3s, transform 0.3s;">
        <i class="ph ph-arrow-up text-xl text-white"></i>
    </button>

    @yield('scripts')

    <script>
        // Back to top button
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTop.style.opacity = '1';
                backToTop.style.transform = 'translateY(0)';
                backToTop.style.pointerEvents = 'auto';
            } else {
                backToTop.style.opacity = '0';
                backToTop.style.transform = 'translateY(1rem)';
                backToTop.style.pointerEvents = 'none';
            }
        });
    </script>
</body>
</html>
