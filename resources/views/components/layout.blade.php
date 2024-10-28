<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PT Sigma Teknologi Inovasi Nusantara</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            gsap.utils.toArray('.animate-on-scroll').forEach((element, index) => {
                gsap.from(element, {
                    scrollTrigger: {
                        trigger: element,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    },
                    opacity: 0,
                    y: 50,
                    duration: 0.4,
                    delay: index * 0.2
                });
            });
            gsap.to('html, body', {
                scrollBehavior: 'smooth',
                duration: 0.5
            });
        });
    </script>

    <!-- Tailwind CSS for vercel-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-poppins m-0" style="font-family: 'Poppins', sans-serif;" x-data="{ showBackToTop: false }"
    @scroll.window="showBackToTop = window.pageYOffset > 300">

    <x-navbar></x-navbar>
    <div class="bg-gradient-to-r from-blue-400 to-blue-600 shadow-md" style="padding: 48.24px"></div>
    @if (Request::path() !== '/')
        <x-hero-section title="{{ $title }}" />
    @endif

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <x-footer></x-footer>

    <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })" x-show="showBackToTop" x-transition
        class="fixed bottom-14 right-5 bg-blue-500 text-white rounded-full p-3 shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700"
        style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
        <i class="fas fa-arrow-up"></i>
    </button>

</body>

</html>
