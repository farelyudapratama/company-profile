<x-layout>
    <x-slot name="title">{{ 'SIAPA KAMI?' }}</x-slot>

    <div class="flex flex-col md:flex-row p-4 md:p-6">
        <div class="md:w-2/3 mb-4 md:mb-0 md:pr-6">
            <p class="text-gray-700 mb-4">
                Kami adalah <strong>PT. Sigma Teknologi Inovasi Nusantara</strong>, lahir di tahun 2024 untuk membantu
                bisnis siap tempur di dunia digital. Misi kami simpel: bikin teknologi yang bikin hidup lebih mudah,
                terutama buat UMKM yang ingin berkembang di era serba cepat ini.
            </p>
            <p class="text-gray-700 mb-4">
                Kita nggak pakai bahasa rumit, kita nggak kasih solusi ribet. Dengan tim yang ngerti banget teknologi
                terkini, kita hadir untuk jadi partner yang bisa diandalkan. Mau efisiensi? Mau bisnis makin lincah?
                Kami punya caranya!
            </p>
            <p class="text-gray-700">
                Dari Bekasi, kita siap bantu bisnis kamu <em>grow</em> dengan teknologi yang tepat, biar kamu bisa fokus
                pada hal-hal yang paling penting: bikin bisnis makin besar dan tetap relevan di zaman sekarang. Yuk,
                bareng kita kembangkan masa depan!
            </p>
        </div>
        <div class="md:w-1/3">
            <img src="img/design2.jpg" alt="Gambar Ilustrasi" class="w-full h-auto rounded-lg shadow-md">
        </div>
    </div>

    <div class="p-4 md:p-6  rounded-lg mt-6">
        <h2 class="text-xl md:text-2xl font-bold text-gray-800 text-center mb-6">
            Kenapa Memilih Kami <i class="fas fa-question-circle text-blue-600 mr-2"></i>
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                <i class="fas fa-users text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">Profesional Andal</h3>
                <p class="text-sm text-gray-600 text-center">
                    Tim kami terdiri dari profesional andal di bidang teknologi, yang akan memberikan solusi inovatif
                    sesuai kebutuhan bisnis Anda.
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                <i class="fas fa-cogs text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">Teknologi Mutakhir</h3>
                <p class="text-sm text-gray-600 text-center">
                    Kami menggunakan teknologi mutakhir untuk menjamin kualitas terbaik dalam setiap produk dan layanan
                    yang kami hadirkan.
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                <i class="fas fa-handshake text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">Pendekatan Kolaboratif</h3>
                <p class="text-sm text-gray-600 text-center">
                    Kami bekerja sama erat dengan klien untuk mencapai hasil terbaik, menerapkan pendekatan kolaboratif
                    yang efektif.
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                <i class="fas fa-leaf text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800 text-center">Pembangunan Berkelanjutan</h3>
                <p class="text-sm text-gray-600 text-center">
                    Kami berkomitmen untuk membangun ekosistem digital yang mendorong pertumbuhan ekonomi dan
                    pembangunan berkelanjutan di Indonesia.
                </p>
            </div>
        </div>
    </div>

    <div class="p-4 md:p-6  rounded-lg mt-6">
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <i class="fas fa-eye text-2xl text-blue-600 mr-3"></i>
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">Visi</h2>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Menjadi perusahaan teknologi terdepan di Indonesia yang menghadirkan solusi inovatif berkelanjutan
                    untuk
                    memajukan transformasi digital nusantara.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <i class="fas fa-bullseye text-2xl text-blue-600 mr-3"></i>
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">Misi</h2>
                </div>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                        <span>Mengembangkan produk dan layanan teknologi yang inovatif dan berkualitas tinggi untuk
                            memenuhi kebutuhan pasar Indonesia</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                        <span>Memberikan solusi teknologi yang efisien dan efektif untuk meningkatkan daya saing bisnis
                            klien</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                        <span>Membangun ekosistem digital yang mendorong pertumbuhan ekonomi dan pembangunan
                            berkelanjutan di
                            Indonesia</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="p-4 md:p-6 rounded-lg mt-6">
        <div class="flex items-center mb-6">
            <i class="fas fa-users text-2xl text-blue-600 mr-3"></i>
            <h2 class="text-xl md:text-2xl font-bold text-gray-800">Tim Kami</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Project Manager -->
            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                <div class="relative">
                    <img src="img/IMG_5155.png" alt="Foto Tim" class="w-full h-96 object-cover object-[center_80%]">
                    <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 p-4 text-white">
                        <h3 class="text-lg font-bold">Rivandi Mizwar</h3>
                        <p class="font-medium">Project Manager</p>
                    </div>
                </div>
                <div
                    class="absolute inset-0 bg-white bg-opacity-95 p-6 flex flex-col justify-center items-center translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-gray-800">Rivandi Mizwar</h3>
                    <p class="text-blue-600 font-medium mb-2">Project Manager</p>
                    <p class="text-gray-700 text-center">"Sebagai Project Manager, saya memastikan setiap proyek
                        berjalan sesuai timeline dan memenuhi ekspektasi klien. Fokus kami adalah menghadirkan
                        solusi
                        yang tepat guna dan bernilai tambah."</p>
                </div>
            </div>

            <!-- Existing Team Members -->
            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                <div class="relative">
                    <img src="img/IMG_5150.png" alt="Foto Tim" class="w-full h-96 object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 p-4 text-white">
                        <h3 class="text-lg font-bold">Farel Yuda P</h3>
                        <p class="font-medium">Lead Programmer</p>
                    </div>
                </div>
                <div
                    class="absolute inset-0 bg-white bg-opacity-95 p-6 flex flex-col justify-center items-center translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-gray-800">Farel Yuda P</h3>
                    <p class="text-blue-600 font-medium mb-2">Lead Programmer</p>
                    <p class="text-gray-700 text-center">"Kami bertanggung jawab mengembangkan solusi perangkat lunak
                        yang inovatif dan handal. Kami memastikan setiap aplikasi yang kami buat mampu mendukung UMKM
                        dalam menjalani transformasi digital dengan mudah dan efisien."</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                <div class="relative">
                    <img src="img/IMG_5147.png" alt="Foto Tim" class="w-full h-96 object-cover object-[center_20%]">
                    <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 p-4 text-white">
                        <h3 class="text-lg font-bold">Fadhilah Khusnul K</h3>
                        <p class="font-medium">Lead Designer</p>
                    </div>
                </div>
                <div
                    class="absolute inset-0 bg-white bg-opacity-95 p-6 flex flex-col justify-center items-center translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-gray-800">Fadhilah Khusnul K</h3>
                    <p class="text-blue-600 font-medium mb-2">Lead Designer</p>
                    <p class="text-gray-700 text-center">"Kami berfokus menciptakan antarmuka yang menarik dan intuitif.
                        Kami memastikan bahwa setiap desain tidak hanya indah, tetapi juga memudahkan pengguna untuk
                        berinteraksi dengan produk kami."</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                <div class="relative">
                    <img src="img/IMG_5149.png" alt="Foto Tim" class="w-full h-96 object-cover object-[center_25%]">
                    <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 p-4 text-white">
                        <h3 class="text-lg font-bold">Imam Zaki N</h3>
                        <p class="font-medium">Lead Analyst</p>
                    </div>
                </div>
                <div
                    class="absolute inset-0 bg-white bg-opacity-95 p-6 flex flex-col justify-center items-center translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-gray-800">Imam Zaki N</h3>
                    <p class="text-blue-600 font-medium mb-2">Lead Analyst</p>
                    <p class="text-gray-700 text-center">"Kami menggali kebutuhan UMKM dan menerjemahkannya ke dalam
                        solusi teknologi yang efektif. Dengan pendekatan berbasis data, kami membantu menemukan solusi
                        yang tepat untuk meningkatkan daya saing bisnis klien."</p>
                </div>
            </div>

            <div
                class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                <div class="relative">
                    <img src="img/IMG_5145.png" alt="Foto Tim" class="w-full h-96 object-cover object-[center_20%]">
                    <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 p-4 text-white">
                        <h3 class="text-lg font-bold">Muhammad Thariq A M</h3>
                        <p class="font-medium">Lead Technical Writer</p>
                    </div>
                </div>
                <div
                    class="absolute inset-0 bg-white bg-opacity-95 p-6 flex flex-col justify-center items-center translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-gray-800">Muhammad Thariq A M</h3>
                    <p class="text-blue-600 font-medium mb-2">Lead Technical Writer</p>
                    <p class="text-gray-700 text-center">"Kami bertanggung jawab untuk menyusun dokumentasi yang jelas
                        dan mudah dipahami. Dengan panduan yang kami buat, pengguna dapat memaksimalkan produk yang kami
                        hadirkan."</p>
                </div>
            </div>

            <div
                class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                <div class="relative">
                    <img src="img/IMG_5153.png" alt="Foto Tim" class="w-full h-96 object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-gray-800 bg-opacity-75 p-4 text-white">
                        <h3 class="text-lg font-bold">Putra Bahariawan</h3>
                        <p class="font-medium">Lead Tester</p>
                    </div>
                </div>
                <div
                    class="absolute inset-0 bg-white bg-opacity-95 p-6 flex flex-col justify-center items-center translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="text-lg font-bold text-gray-800">Putra Bahariawan</h3>
                    <p class="text-blue-600 font-medium mb-2">Lead Tester</p>
                    <p class="text-gray-700 text-center">"Kami memastikan setiap produk berfungsi sempurna sebelum
                        sampai ke tangan klien. Kami menguji setiap aspek aplikasi untuk memastikan tidak ada bug dan
                        produk berjalan dengan optimal."</p>
                </div>
            </div>
        </div>
    </div>

</x-layout>
