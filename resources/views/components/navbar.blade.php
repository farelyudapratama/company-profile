<header class="bg-gradient-to-r from-blue-400 to-blue-600 shadow-md relative" x-data="{ isOpen: false }">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5 flex items-center group">
                <span class="sr-only">Sigma Teknologi Inovasi Nusantara</span>
                <img class="h-8 w-auto" src="{{ asset('img/sigmalogo.png') }}" alt="Company Logo">
                <div class="ml-4 flex flex-col">
                    <span class="text-xl font-bold text-red-800">Sigma Teknologi</span>
                    <span class="text-sm font-semibold text-gray-800">Inovasi Nusantara</span>
                </div>
            </a>
        </div>

        <div class="flex lg:hidden z-50">
            <button type="button" @click="isOpen = !isOpen"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200 focus:outline-none">
                <span class="sr-only">Toggle menu</span>
                <div class="space-y-2 transition-all duration-300 ease-in-out"
                    :class="{ 'rotate-90': isOpen, 'rotate-0': !isOpen }">
                    <div class="w-8 h-0.5 bg-gray-200 transition-all duration-300"
                        :class="{ 'bg-gray-800 transform rotate-45 translate-y-2.5': isOpen }"></div>
                    <div class="w-8 h-0.5 bg-gray-200 transition-all duration-300" :class="{ 'opacity-0': isOpen }">
                    </div>
                    <div class="w-8 h-0.5 bg-gray-200 transition-all duration-300"
                        :class="{ 'bg-gray-800 transform -rotate-45 -translate-y-2.5': isOpen }"></div>
                </div>
            </button>
        </div>

        <div class="ml-9 hidden lg:flex lg:gap-x-6">
            <a href="/"
                class="text-base font-semibold leading-6 px-4 py-2 border rounded-lg 
                      {{ Request::is('/') ? 'bg-blue-300 text-black border-blue-400' : 'text-white border-transparent hover:bg-gray-700' }}">
                Home
            </a>
            <a href="/about"
                class="text-base font-semibold leading-6 px-4 py-2 border rounded-lg 
                      {{ Request::is('about') ? 'bg-blue-300 text-black border-blue-400' : 'text-white border-transparent hover:bg-gray-700' }}">
                @lang('navbar.about')
            </a>
            <a href="/services"
                class="text-base font-semibold leading-6 px-4 py-2 border rounded-lg 
                      {{ Request::is('services') ? 'bg-blue-300 text-black border-blue-400' : 'text-white border-transparent hover:bg-gray-700' }}">
                @lang('navbar.services')
            </a>
            <a href="/projects"
                class="text-base font-semibold leading-6 px-4 py-2 border rounded-lg 
                      {{ Request::is('projects') ? 'bg-blue-300 text-black border-blue-400' : 'text-white border-transparent hover:bg-gray-700' }}">
                @lang('navbar.portfolio')
            </a>
            <a href="/contact"
                class="text-base font-semibold leading-6 px-4 py-2 border rounded-lg 
                      {{ Request::is('contact') ? 'bg-blue-300 text-black border-blue-400' : 'text-white border-transparent hover:bg-gray-700' }}">
                @lang('navbar.contact')
            </a>
        </div>



        <!-- Desktop Language Switcher -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <div class="relative">
                <button type="button" class="flex items-center text-white focus:outline-none"
                    @click="isOpen = !isOpen">
                    <span class="sr-only">Change Language</span>
                    <img src="{{ asset('img/flag_' . app()->getLocale() . '.png') }}" alt="Language Flag"
                        class="h-6 w-6 rounded" />
                </button>
                <div x-show="isOpen" @click.away="isOpen = false"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                    <a href="locale/en"
                        class="flex items-center px-4 py-2 text-sm {{ app()->getLocale() == 'en' ? 'bg-blue-50 text-blue-700' : 'text-gray-700 hover:bg-gray-100' }}">
                        <img src="{{ asset('img/flag_en.png') }}" alt="English" class="h-5 w-5 mr-2" />
                        English
                        @if (app()->getLocale() == 'en')
                            <svg class="ml-auto h-5 w-5 text-blue-700" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        @endif
                    </a>
                    <a href="locale/id"
                        class="flex items-center px-4 py-2 text-sm {{ app()->getLocale() == 'id' ? 'bg-blue-50 text-blue-700' : 'text-gray-700 hover:bg-gray-100' }}">
                        <img src="{{ asset('img/flag_id.png') }}" alt="Bahasa Indonesia" class="h-5 w-5 mr-2" />
                        Bahasa Indonesia
                        @if (app()->getLocale() == 'id')
                            <svg class="ml-auto h-5 w-5 text-blue-700" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="lg:hidden fixed inset-0 z-40 bg-gray-900 bg-opacity-50 transition-opacity duration-300" x-show="isOpen"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="isOpen = false">
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
            x-show="isOpen" x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full">
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="/"
                            class="block px-4 py-3 text-base font-semibold border rounded-lg {{ Request::is('/') ? 'bg-blue-300 text-black border-blue-400' : 'text-blue-900 border-transparent hover:bg-gray-100' }}">
                            Home
                        </a>
                        <a href="/about"
                            class="block px-4 py-3 text-base font-semibold border rounded-lg {{ Request::is('about') ? 'bg-blue-300 text-black border-blue-400' : 'text-blue-900 border-transparent hover:bg-gray-100' }}">
                            @lang('navbar.about')
                        </a>
                        <a href="/services"
                            class="block px-4 py-3 text-base font-semibold border rounded-lg {{ Request::is('services') ? 'bg-blue-300 text-black border-blue-400' : 'text-blue-900 border-transparent hover:bg-gray-100' }}">
                            @lang('navbar.services')
                        </a>
                        <a href="/projects"
                            class="block px-4 py-3 text-base font-semibold border rounded-lg {{ Request::is('projects') ? 'bg-blue-300 text-black border-blue-400' : 'text-blue-900 border-transparent hover:bg-gray-100' }}">
                            @lang('navbar.portfolio')
                        </a>
                        <a href="/contact"
                            class="block px-4 py-3 text-base font-semibold border rounded-lg {{ Request::is('contact') ? 'bg-blue-300 text-black border-blue-400' : 'text-blue-900 border-transparent hover:bg-gray-100' }}">
                            @lang('navbar.contact')
                        </a>

                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <div class="space-y-3">
                                <span class="text-sm font-medium text-gray-500">Select Language</span>
                                <div class="grid grid-cols-2 gap-3">
                                    <a href="locale/en"
                                        class="flex items-center space-x-2 p-2 rounded {{ app()->getLocale() == 'en' ? 'bg-blue-50 ring-2 ring-blue-500' : 'hover:bg-gray-100' }}">
                                        <img src="{{ asset('img/flag_en.png') }}" alt="English" class="h-5 w-5" />
                                        <span
                                            class="text-sm {{ app()->getLocale() == 'en' ? 'text-blue-700 font-medium' : 'text-gray-700' }}">English</span>
                                        @if (app()->getLocale() == 'en')
                                            <svg class="ml-auto h-5 w-5 text-blue-700" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        @endif
                                    </a>
                                    <a href="locale/id"
                                        class="flex items-center space-x-2 p-2 rounded {{ app()->getLocale() == 'id' ? 'bg-blue-50 ring-2 ring-blue-500' : 'hover:bg-gray-100' }}">
                                        <img src="{{ asset('img/flag_id.png') }}" alt="Bahasa Indonesia"
                                            class="h-5 w-5" />
                                        <span
                                            class="text-sm {{ app()->getLocale() == 'id' ? 'text-blue-700 font-medium' : 'text-gray-700' }}">Indonesia</span>
                                        @if (app()->getLocale() == 'id')
                                            <svg class="ml-auto h-5 w-5 text-blue-700" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
