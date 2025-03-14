<x-layout>
    <x-slot name="title">@lang('about.title')</x-slot>

    <div class="flex flex-col md:flex-row p-4 md:p-6">
        <div class="md:w-2/3 mb-4 md:mb-0 md:pr-6">
            <p class="text-gray-700 mb-4 animate-on-scroll">
                @lang('about.about_us') @lang('about.mission_statement')
            </p>
            <p class="text-gray-700 mb-4 animate-on-scroll">
                @lang('about.simple_solution') @lang('about.efficiency_business')
            </p>
            <p class="text-gray-700 animate-on-scroll">
                @lang('about.from_bekasi')
            </p>
        </div>
        <div class="md:w-1/3 animate-on-scroll">
            <img src="img/design2.jpg" alt="Gambar Ilustrasi" class="w-full h-auto rounded-lg shadow-md">
        </div>
    </div>

    <div class="p-4 md:p-6  rounded-lg mt-6 ">
        <h2 class="text-xl md:text-2xl font-bold text-gray-800 text-center mb-6 animate-on-scroll">
            @lang('about.why_choose_us') <i class="fas fa-question-circle text-blue-600 mr-2"></i>
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center animate-on-scroll">
                <i class="fas fa-users text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">@lang('about.our_professionals')</h3>
                <p class="text-sm text-gray-600 text-center">
                    @lang('about.professional_team')
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center animate-on-scroll">
                <i class="fas fa-cogs text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">@lang('about.advanced_technology')</h3>
                <p class="text-sm text-gray-600 text-center">
                    @lang('about.use_latest_tech')
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center animate-on-scroll">
                <i class="fas fa-handshake text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">@lang('about.collaborative_approach')</h3>
                <p class="text-sm text-gray-600 text-center">
                    @lang('about.effective_collaboration')
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center animate-on-scroll">
                <i class="fas fa-leaf text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800 text-center">@lang('about.sustainable_growth')</h3>
                <p class="text-sm text-gray-600 text-center">
                    @lang('about.commit_sustainability')
                </p>
            </div>
        </div>
    </div>

    <div class="p-4 md:p-6  rounded-lg mt-6">
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm animate-on-scroll">
                <div class="flex items-center mb-4 animate-on-scroll">
                    <i class="fas fa-eye text-2xl text-blue-600 mr-3"></i>
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">@lang('about.vision')</h2>
                </div>
                <p class="text-gray-700 leading-relaxed animate-on-scroll">
                    @lang('about.vision_text')
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm animate-on-scroll">
                <div class="flex items-center mb-4 animate-on-scroll">
                    <i class="fas fa-bullseye text-2xl text-blue-600 mr-3"></i>
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">@lang('about.mission')</h2>
                </div>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start animate-on-scroll">
                        <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                        <span>@lang('about.mission_list_1')</span>
                    </li>
                    <li class="flex items-start animate-on-scroll">
                        <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                        <span>@lang('about.mission_list_2')</span>
                    </li>
                    <li class="flex items-start animate-on-scroll">
                        <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                        <span>@lang('about.mission_list_3')</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="p-4 md:p-6 rounded-lg mt-6 animate-on-scroll">
        <div class="flex items-center mb-6 animate-on-scroll">
            <i class="fas fa-users text-2xl text-blue-600 mr-3"></i>
            <h2 class="text-xl md:text-2xl font-bold text-gray-800 animate-bounce">@lang('about.team')</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 animate-on-scroll">
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
                    <p class="text-gray-700 text-center">@lang('about.project_manager_quote')</p>
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
                    <p class="text-gray-700 text-center">@lang('about.lead_programmer_quote')</p>
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
                    <p class="text-gray-700 text-center">@lang('about.lead_designer_quote')</p>
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
                    <p class="text-gray-700 text-center">@lang('about.lead_analyst_quote')</p>
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
                    <p class="text-gray-700 text-center">@lang('about.lead_writer_quote')</p>
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
                    <p class="text-gray-700 text-center">@lang('about.lead_tester_quote')</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="p-6 md:p-8 lg:p-12 max-w-7xl mx-auto" x-data="{
        certificates: {{ json_encode($certificates) }},
        isOpen: false,
        currentImageIndex: 0,
        currentImageSrc: '',
    
        init() {
            this.shuffleCertificates();
    
            window.addEventListener('keydown', (e) => {
                if (!this.isOpen) return;
    
                if (e.key === 'ArrowLeft') this.prevImage();
                if (e.key === 'ArrowRight') this.nextImage();
                if (e.key === 'Escape') this.closeModal();
            });
        },
    
        shuffleCertificates() {
            for (let i = this.certificates.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [this.certificates[i], this.certificates[j]] = [this.certificates[j], this.certificates[i]];
            }
        },
    
        openModal(index) {
            this.currentImageIndex = index;
            this.currentImageSrc = this.certificates[index].src;
            this.isOpen = true;
            document.body.style.overflow = 'hidden';
        },
    
        closeModal() {
            this.isOpen = false;
            document.body.style.overflow = 'auto';
        },
    
        nextImage() {
            this.currentImageIndex = (this.currentImageIndex + 1) % this.certificates.length;
            this.currentImageSrc = this.certificates[this.currentImageIndex].src;
        },
    
        prevImage() {
            this.currentImageIndex = (this.currentImageIndex - 1 + this.certificates.length) % this.certificates.length;
            this.currentImageSrc = this.certificates[this.currentImageIndex].src;
        }
    }">
        <div class="flex items-center space-x-4 mb-8 border-b border-gray-200 pb-4 animate-on-scroll">
            <div class="p-3 bg-blue-100 rounded-full">
                <i class="fas fa-certificate text-2xl text-blue-600"></i>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 animate-bounce">@lang('about.our_certificates')
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 animate-on-scroll">
            <template x-for="(certificate, index) in certificates" :key="index">
                <div
                    class="group relative overflow-hidden rounded-xl shadow-md transition-all duration-300 hover:shadow-xl">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img :src="certificate.src" :alt="certificate.alt"
                            class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <button @click="openModal(index)"
                                    class="w-full rounded-lg bg-white/90 py-2 text-sm font-medium text-gray-900 backdrop-blur-sm transition-colors hover:bg-white">
                                    <i class="fas fa-search-plus mr-2"></i>@lang('about.see_details')
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <div x-show="isOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75 backdrop-blur-sm"
            x-cloak>
            <div class="relative w-full h-full flex items-center justify-center p-4">
                <button @click="closeModal" class="absolute top-4 right-4 text-white hover:text-gray-300 z-10">
                    <i class="fas fa-times text-2xl"></i>
                </button>

                <button @click="prevImage" class="absolute left-4 text-white hover:text-gray-300 z-10">
                    <i class="fas fa-chevron-left text-2xl"></i>
                </button>
                <button @click="nextImage" class="absolute right-4 text-white hover:text-gray-300 z-10">
                    <i class="fas fa-chevron-right text-2xl"></i>
                </button>

                <img :src="currentImageSrc" class="max-w-[90%] max-h-[90vh] object-contain rounded-lg shadow-2xl">
            </div>
        </div>
    </div> -->

</x-layout>
