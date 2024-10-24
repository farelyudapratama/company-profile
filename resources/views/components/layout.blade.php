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

            // Generic animation for all elements with the class 'animate-on-scroll'
            gsap.utils.toArray('.animate-on-scroll').forEach((element, index) => {
                gsap.from(element, {
                    scrollTrigger: {
                        trigger: element,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    },
                    opacity: 0,
                    y: 50,
                    duration: 0.6,
                    delay: index * 0.2
                });
            });

            gsap.utils.toArray('.grid-cols-1 > div').forEach((card, index) => {
                gsap.from(card, {
                    scrollTrigger: {
                        trigger: card,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    },
                    opacity: 0,
                    y: 50,
                    duration: 0.6,
                    delay: index * 0.2
                });
            });

            gsap.utils.toArray('.flex-wrap img').forEach((img, index) => {
                gsap.from(img, {
                    scrollTrigger: {
                        trigger: img,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    },
                    opacity: 0,
                    y: 50,
                    duration: 0.7,
                    delay: index * 0.2
                });
            });

            gsap.to('html, body', {
                scrollBehavior: 'smooth',
                duration: 1
            });
        });
    </script>

    <!-- Tailwind CSS for vercel-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-poppins" style="font-family: 'Poppins', sans-serif;">

    <x-navbar></x-navbar>
    @if (Request::path() !== '/')
        <x-hero-section title="{{ $title }}" />
    @endif

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <x-footer></x-footer>
</body>

</html>
