<x-layout>
    <x-slot name="title">@lang('contact.title')</x-slot>

    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="text-center mb-16">
            <span class="bg-blue-100 text-blue-800 text-sm font-medium px-4 py-1.5 rounded-full">@lang('contact.contact_us')</span>
            <h2
                class="text-4xl font-bold mt-4 mb-6 bg-gradient-to-r from-blue-600 via-purple-500 to-red-600 bg-clip-text text-transparent">
                @lang('contact.realize_idea')
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                @lang('contact.description')
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8 mb-16">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">@lang('contact.operational_hours')</h3>
                <div class="space-y-2 text-gray-600">
                    <p>@lang('contact.weekdays')</p>
                    <p>@lang('contact.saturday')</p>
                    <p>@lang('contact.sunday')</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">@lang('contact.communication_channels')</h3>
                <div class="space-y-2 text-gray-600">
                    <p>@lang('contact.whatsapp')</p>
                    <p>@lang('contact.telegram')</p>
                    <p>@lang('contact.google_meet')</p>
                    <p>@lang('contact.zoom_meeting')</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">@lang('contact.quick_response')</h3>
                <div class="space-y-2 text-gray-600">
                    <p>@lang('contact.email_response')</p>
                    <p>@lang('contact.whatsapp_response')</p>
                    <p>@lang('contact.telegram_response')</p>
                    <p>@lang('contact.meeting_response')</p>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <div class="h-[500px] rounded-xl overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6093530724391!2d107.00881886960683!3d-6.205889966365447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6989567f198041%3A0xbc9af43b6461c609!2sJl.%20Vila%20Mas%20Garden%2C%20RT.007%2FRW.009%2C%20Perwira%2C%20Kec.%20Bekasi%20Utara%2C%20Kota%20Bks%2C%20Jawa%20Barat%2017122!5e0!3m2!1sid!2sid!4v1729733985318!5m2!1sid!2sid"
                    class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold mb-6">@lang('contact.contact_info')</h2>
                    <div class="space-y-6">
                        <div
                            class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">@lang('contact.our_office')</h3>
                                <p class="mt-1 text-gray-600">@lang('contact.office_address')</p>
                                <a href="#"
                                    class="text-blue-600 hover:text-blue-700 mt-2 inline-block">@lang('contact.view_on_maps')</a>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">@lang('contact.call_us')</h3>
                                <p class="mt-1 text-gray-600">@lang('contact.phone_number')</p>
                                <p class="text-sm text-gray-500 mt-1">@lang('contact.whatsapp_service')</p>
                                <a href="https://wa.me/6289613240824"
                                    class="text-blue-600 hover:text-blue-700 mt-2 inline-block">@lang('contact.chat_whatsapp')</a>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">@lang('contact.email')</h3>
                                <p class="mt-1 text-gray-600">@lang('contact.email_address')</p>
                                <p class="text-sm text-gray-500 mt-1">@lang('contact.email_response_time')</p>
                                <a href="mailto:sigmasatein@gmail.com"
                                    class="text-blue-600 hover:text-blue-700 mt-2 inline-block">@lang('contact.send_email')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 text-center bg-gradient-to-r from-blue-600 via-purple-600 to-red-500 rounded-2xl p-8 md:p-12">
            <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">@lang('contact.cta_title')</h3>
            <p class="text-white/90 mb-6 max-w-2xl mx-auto">
                @lang('contact.cta_description')
            </p>
            <a href="https://wa.me/6289613240824"
                class="inline-flex items-center px-6 py-3 rounded-lg bg-white text-blue-600 font-semibold hover:bg-blue-50 transition-colors">
                <i class="fab fa-whatsapp w-5 h-5 mr-2"></i>
                @lang('contact.start_chat')
            </a>
        </div>
    </div>

</x-layout>
