<x-layout>
    <x-slot name="title">{{ 'Project yang pernah kami buat' }}</x-slot>

    <div class="p-4 md:p-8 bg-gray-50 rounded-lg animate-on-scroll">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-8">
            Proyek Kami <i class="fas fa-project-diagram text-blue-600"></i>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projects as $project)
                <div
                    class="bg-white rounded-lg shadow-lg transform transition-transform duration-200 hover:scale-105 overflow-hidden group h-full flex flex-col animate-on-scroll">
                    <img src="{{ $project['image'] }}" alt="Proyek 1"
                        class="w-full h-56 object-cover transition-opacity duration-300 group-hover:opacity-80">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($project['description1'], 100) }}</p>
                        <div class="mb-4">
                            @foreach (explode(', ', $project['category']) as $category)
                                <span
                                    class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-1 mr-1">{{ trim($category) }}</span>
                            @endforeach
                        </div>
                        <div class="mt-auto"> <!-- This ensures the button stays at bottom -->
                            <a href="/projects/{{ $project['slug'] }}"
                                class="block w-full text-center bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-500 transition-colors">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
