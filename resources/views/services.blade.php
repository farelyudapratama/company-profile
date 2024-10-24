<x-layout>
    <x-slot name="title">{{ 'LAYANAN KAMI' }}</x-slot>

    <div class="p-4 md:p-8 bg-gray-50 rounded-lg">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-8 animate-on-scroll">
            Layanan Kami 🚀
        </h2>
        <p class="text-gray-700 text-center mb-8 animate-on-scroll">
            Kami hadir untuk mendukung perjalanan digital bisnismu dengan berbagai layanan yang dirancang untuk memenuhi
            kebutuhanmu. Yuk, cek layanan yang kami tawarkan!
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 animate-on-scroll">
            <!-- Web Development -->
            <div
                class="bg-white rounded-lg shadow-lg transform transition-transform duration-200 hover:scale-105 overflow-hidden group">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Web Development</h3>
                    <p class="text-gray-600 mb-4">Bikin website kece yang ngga cuma bagus, tapi juga fungsional. Sesuai
                        banget sama kebutuhan bisnis kamu!</p>
                </div>
            </div>

            <!-- IT Consultant -->
            <div
                class="bg-white rounded-lg shadow-lg transform transition-transform duration-200 hover:scale-105 overflow-hidden group">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">IT Consultant</h3>
                    <p class="text-gray-600 mb-4">Kami siap bantu kamu dengan solusi IT yang pas, biar bisnis kamu makin
                        optimal dan siap bersaing!</p>
                </div>
            </div>

            <!-- Software Development -->
            <div
                class="bg-white rounded-lg shadow-lg transform transition-transform duration-200 hover:scale-105 overflow-hidden group">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Software Development</h3>
                    <p class="text-gray-600 mb-4">Kita bikin software yang tepat banget buat kamu. Semua sesuai sama
                        kebutuhan unik bisnis kamu!</p>
                </div>
            </div>

            <!-- Design & Graphic -->
            <div
                class="bg-white rounded-lg shadow-lg transform transition-transform duration-200 hover:scale-105 overflow-hidden group">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Design & Graphic</h3>
                    <p class="text-gray-600 mb-4">Kita bantu kamu bikin desain visual yang keren, biar merek kamu makin
                        mencolok dan diingat!</p>
                </div>
            </div>
        </div>

        <h3 class="text-xl md:text-2xl font-bold text-gray-800 text-center mt-12 mb-6 animate-on-scroll">Apa Kata
            Mereka? 💬</h3>
        <div class="flex flex-col items-center space-y-4 mb-8 animate-on-scroll">
            <blockquote class="bg-gray-100 rounded-lg p-4 shadow-md max-w-md text-center animate-on-scroll">
                <p class="text-gray-600">"Layanan web development dari Sigma Teknologi benar-benar mengubah cara kami
                    berbisnis! Terima kasih!"</p>
                <footer class="mt-2 text-gray-500">- Klien A</footer>
            </blockquote>
            <blockquote class="bg-gray-100 rounded-lg p-4 shadow-md max-w-md text-center animate-on-scroll">
                <p class="text-gray-600">"Tim IT Consultant sangat membantu dalam mengoptimalkan sistem kami. Sangat
                    direkomendasikan!"</p>
                <footer class="mt-2 text-gray-500">- Klien B</footer>
            </blockquote>
        </div>

        <h3 class="text-xl md:text-2xl font-bold text-gray-800 text-center mt-12 mb-6 animate-on-scroll">Portofolio Kami
            🎨</h3>
        <div class="flex flex-wrap justify-center gap-4 mb-8 animate-on-scroll">
            <img src="img/projects/project1.jpg" alt="Proyek 1" class="w-1/2 md:w-1/4 rounded-lg shadow-md">
            <img src="img/projects/project2.jpg" alt="Proyek 2" class="w-1/2 md:w-1/4 rounded-lg shadow-md">
            <img src="img/projects/project3.jpg" alt="Proyek 3" class="w-1/2 md:w-1/4 rounded-lg shadow-md">
        </div>

        <div class="text-center mb-12 animate-on-scroll">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Butuh Bantuan? 💡</h3>
            <p class="text-gray-600 mb-4">Kami siap membantu kamu menemukan solusi terbaik untuk bisnis kamu. Hubungi
                kami untuk konsultasi gratis!</p>
            <a href="/contact"
                class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-500 transition-colors">Hubungi
                Kami</a>
        </div>
    </div>
</x-layout>
