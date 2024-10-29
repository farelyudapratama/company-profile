<x-layout>
    <x-slot name="title">@lang('services.title')</x-slot>

    <div class="p-4 md:p-8 bg-gray-50 rounded-lg">

        <p class="text-gray-700 text-center mb-8 animate-on-scroll">
            @lang('services.intro_text')
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 animate-on-scroll">
            <div
                class="bg-white rounded-lg shadow-lg transform transition-transform duration-200 hover:scale-105 overflow-hidden group">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        @lang('services.services.web_development.title')</h3>
                    <p class="text-gray-600 mb-4">@lang('services.services.web_development.description')</p>
                </div>
            </div>

            <div
                class="bg-white rounded-lg shadow-lg transform transition-transform duration-200 hover:scale-105 overflow-hidden group">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        @lang('services.services.it_consultant.title')</h3>
                    <p class="text-gray-600 mb-4">@lang('services.services.it_consultant.description')</p>
                </div>
            </div>

            <div
                class="bg-white rounded-lg shadow-lg transform transition-transform duration-200 hover:scale-105 overflow-hidden group">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        @lang('services.services.software_development.title')</h3>
                    <p class="text-gray-600 mb-4">@lang('services.services.software_development.description')</p>
                </div>
            </div>

            <div
                class="bg-white rounded-lg shadow-lg transform transition-transform duration-200 hover:scale-105 overflow-hidden group">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        @lang('services.services.design_graphic.title')</h3>
                    <p class="text-gray-600 mb-4">@lang('services.services.design_graphic.description')</p>
                </div>
            </div>
        </div>

        <h3 class="text-xl md:text-2xl font-bold text-gray-800 text-center mt-12 mb-6 animate-on-scroll">
            @lang('services.portfolio_title')</h3>
        <div class="flex flex-wrap justify-center gap-4 mb-8 animate-on-scroll">
            <img src="img/projects/project1.jpg" alt="Proyek 1" class="w-1/2 md:w-1/4 rounded-lg shadow-md">
            <img src="img/projects/project2.jpg" alt="Proyek 2" class="w-1/2 md:w-1/4 rounded-lg shadow-md">
            <img src="img/projects/project3.jpg" alt="Proyek 3" class="w-1/2 md:w-1/4 rounded-lg shadow-md">
        </div>

        <div class="text-center mb-12 animate-on-scroll">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">@lang('services.help_title')</h3>
            <p class="text-gray-600 mb-4">@lang('services.help_text')</p>
            <a href="/contact"
                class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-500 transition-colors">
                @lang('services.contact_button')
            </a>
        </div>
    </div>
</x-layout>
