<x-layout>
    <div class="relative bg-gray-50">
        <div
            class="flex flex-col justify-center items-center text-center bg-gradient-to-b from-blue-600 to-purple-600 py-20 animate-on-scroll">
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4 z-10">@lang('welcome.title')</h1>
            <p class="text-lg md:text-xl text-white mb-6">@lang('welcome.description')</p>
            <a href="/contact"
                class="bg-white text-blue-800 font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-gray-200 transition">@lang('welcome.button1')</a>
        </div>

        <div class="p-6 md:p-10 text-center bg-gradient-to-b from-purple-600 to-red-600 shadow-md animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">@lang('welcome.about')</h2>
            <p class="text-base md:text-lg text-white mb-4">@lang('welcome.about_description')</p>
            <a href="/about" class="text-white font-semibold">@lang('welcome.about_button')</a>
        </div>

        <div class="p-6 md:p-10 bg-gray-100">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 text-center mb-8 animate-on-scroll">
                @lang('welcome.services_title')
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-200 hover:scale-105 animate-on-scroll">
                    <div class="bg-red-500 h-2"></div>
                    <img src="https://cdn.dribbble.com/users/10907003/screenshots/19102950/media/ba37a5e4ef55d0889afcd1eba88e7872.png?resize=800x600&vertical=center"
                        alt="Web Development" class="w-full h-32 object-cover mb-4" />
                    <div class="p-6 text-center">
                        <h3 class="text-lg md:text-xl font-semibold text-[#0B2F9F] mb-2">Web Development</h3>
                        <p class="text-gray-600">@lang('welcome.service1_description')</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-200 hover:scale-105 animate-on-scroll">
                    <div class="bg-red-500 h-2"></div>

                    <img src="https://cdn.prod.website-files.com/651e60e1561c984caff90974/662f4d960f66fa1a5e6ffa4c_benefits%20of%20machine%20learning%20in%20business-p-500.webp"
                        alt="IT Consultant" class="w-full h-32 object-cover mb-4" />
                    <div class="p-6 text-center">
                        <h3 class="text-lg md:text-xl font-semibold text-[#0B2F9F] mb-2">IT Consultant</h3>
                        <p class="text-gray-600">@lang('welcome.service2_description')</p>
                    </div>
                </div>

                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-200 hover:scale-105 animate-on-scroll">
                    <div class="bg-red-500 h-2"></div>
                    <img src="https://img.freepik.com/free-vector/app-development-concept-with-programming-languages_23-2148688949.jpg?t=st=1729758250~exp=1729761850~hmac=e01955b0ee453705a64469903927a33d3eed8cae1c8f8c06c4f9d8b6283d3ce2&w=740"
                        alt="Software Development" class="w-full h-32 object-cover mb-4" />
                    <div class="p-6 text-center">
                        <h3 class="text-lg md:text-xl font-semibold text-[#0B2F9F] mb-2">Software Development</h3>
                        <p class="text-gray-600">@lang('welcome.service3_description')</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-200 hover:scale-105 animate-on-scroll">
                    <div class="bg-red-500 h-2"></div>
                    <img src="img/design.jpg" alt="Design & Graphic" class="w-full h-32 object-cover mb-4" />
                    <div class="p-6 text-center">
                        <h3 class="text-lg md:text-xl font-semibold text-[#0B2F9F] mb-2">Design & Graphic</h3>
                        <p class="text-gray-600">@lang('welcome.service4_description')</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 md:p-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 animate-on-scroll">@lang('welcome.portfolio_title')</h2>
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <img src="img/projects/project1.jpg" alt="Proyek 1"
                    class="w-full md:w-1/2 lg:w-1/4 rounded-lg shadow-md transition-transform duration-200 hover:scale-105 animate-on-scroll">
                <img src="img/projects/project2.jpg" alt="Proyek 2"
                    class="w-full md:w-1/2 lg:w-1/4 rounded-lg shadow-md transition-transform duration-200 hover:scale-105 animate-on-scroll">
                <img src="img/projects/project3.jpg" alt="Proyek 3"
                    class="w-full md:w-1/2 lg:w-1/4 rounded-lg shadow-md transition-transform duration-200 hover:scale-105 animate-on-scroll">
            </div>
            <a href="/projects" class="text-[#0B2F9F] font-semibold animate-on-scroll">@lang('welcome.portfolio_view_all')</a>
        </div>

        <div class="text-center p-6 md:p-10 bg-[#0B2F9F] text-white animate-on-scroll">
            <h3 class="text-2xl md:text-3xl font-bold mb-4">@lang('welcome.help_title')</h3>
            <p class="mb-6">@lang('welcome.help_description')</p>
            <a href="mailto:sigmasatein@gmail.com"
                class="inline-block bg-white text-[#0B2F9F] font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-gray-200 transition animate-pulse">@lang('welcome.help_button')</a>
        </div>
    </div>
</x-layout>
