<footer class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-6 py-12">
            <div class="space-y-4">
                <h3 class="text-white text-xl font-bold tracking-wider mb-3">{{ __('footer.company_name') }}</h3>
                <p class="text-gray-400 text-sm leading-loose">
                    {{ __('footer.company_description') }}
                </p>
                <div class="pt-2">
                    <a href="#" class="inline-flex items-center text-blue-400 hover:text-blue-300 transition">
                        <span class="mr-2">{{ __('footer.learn_more') }}</span>
                    </a>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="text-white text-lg font-semibold tracking-wider mb-3">{{ __('footer.services') }}</h3>
                <ul class="space-y-2">
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition duration-300">{{ __('footer.web_development') }}</a>
                    </li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition duration-300">{{ __('footer.app_development') }}</a>
                    </li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition duration-300">{{ __('footer.system_analysis') }}</a>
                    </li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition duration-300">{{ __('footer.ui_ux_design') }}</a>
                    </li>
                </ul>
            </div>

            <div class="space-y-4">
                <h3 class="text-white text-lg font-semibold tracking-wider mb-3">{{ __('footer.contact_us') }}</h3>
                <div class="space-y-3">
                    <p class="flex items-center text-gray-400">
                        <i class="fas fa-map-marker-alt w-5 h-5 mr-3"></i>
                        {{ __('footer.address') }}
                    </p>
                    <p class="flex items-center text-gray-400">
                        <i class="fas fa-envelope w-5 h-5 mr-3"></i>
                        {{ __('footer.email') }}
                    </p>
                    <p class="flex items-center text-gray-400">
                        <i class="fas fa-phone w-5 h-5 mr-3"></i>
                        {{ __('footer.phone') }}
                    </p>
                </div>
            </div>

            <div class="space-y-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6093530724391!2d107.00881886960683!3d-6.205889966365447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6989567f198041%3A0xbc9af43b6461c609!2sJl.%20Vila%20Mas%20Garden%2C%20RT.007%2FRW.009%2C%20Perwira%2C%20Kec.%20Bekasi%20Utara%2C%20Kota%20Bks%2C%20Jawa%20Barat%2017122!5e0!3m2!1sid!2sid!4v1729733985318!5m2!1sid!2sid"
                    class="w-full h-full rounded-lg" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <div class="border-t border-gray-700">
            <div class="flex flex-col md:flex-row justify-between items-center px-6 py-4">
                <div class="text-gray-400 text-sm">
                    {{ __('footer.copyright') }}
                </div>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <span class="sr-only">Facebook</span>
                        <i class="fab fa-facebook w-6 h-6"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <span class="sr-only">Instagram</span>
                        <i class="fab fa-instagram w-6 h-6"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <span class="sr-only">Twitter</span>
                        <i class="fab fa-twitter w-6 h-6"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
