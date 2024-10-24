<x-layout>
    <x-slot name="title">{{ 'Diskusikan Project Dengan Kami' }}</x-slot>

    <div class="max-w-4xl mx-auto text-center mt-10">
        <h2 class="text-3xl font-bold mb-3">Punya Ide? Yuk, Ngobrol!</h2>
        <p class="text-lg mb-6">Ceritakan ide kamu, biar kami bantu wujudkan jadi solusi digital yang keren dan tepat
            guna.</p>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6">
        <p class="text-gray-600 mt-2">Kamu dapat membuat janji atau berdiskusi tentang perusahaan atau produk kamu
            melalui <span class="font-semibold">melalui formulir dibawah ini.</span> </p>

        <form action="{{ route('contact.send') }}" method="POST" class="mt-4">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="name" id="name"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-600 focus:border-blue-600 sm:text-sm"
                        required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-600 focus:border-blue-600 sm:text-sm"
                        required>
                </div>
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subjek</label>
                    <input type="text" name="subject" id="subject"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-600 focus:border-blue-600 sm:text-sm"
                        required>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                    <textarea name="message" id="message" rows="4"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-600 focus:border-blue-600 sm:text-sm"
                        required></textarea>
                </div>
                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                        Kirim
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="mt-6 grid md:grid-cols-2 gap-8">
        <div class="h-[400px]">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6093530724391!2d107.00881886960683!3d-6.205889966365447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6989567f198041%3A0xbc9af43b6461c609!2sJl.%20Vila%20Mas%20Garden%2C%20RT.007%2FRW.009%2C%20Perwira%2C%20Kec.%20Bekasi%20Utara%2C%20Kota%20Bks%2C%20Jawa%20Barat%2017122!5e0!3m2!1sid!2sid!4v1729733985318!5m2!1sid!2sid"
                class="w-full h-full rounded-lg" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <div class="space-y-8">
            <h2 class="text-2xl font-semibold text-gray-900">Kontak Kami</h2>
            <div class="space-y-6">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 mt-1">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">Alamat</h3>
                        <p class="mt-1 text-gray-600">Jl. Vila Mas Garden, RT.007/RW.009, Perwira, Kec. Bekasi
                            Utara, Kota Bks, Jawa Barat 17122</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 mt-1">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">Telepon</h3>
                        <p class="mt-1 text-gray-600">+62 896 1324 082</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 mt-1">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">Email</h3>
                        <p class="mt-1 text-gray-600">sigmasatein@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
