<x-layout>
    <x-slot name="title">{{ $project['title'] }}</x-slot>

    <div class="p-4 md:p-8 {{ $project['id'] % 2 == 0 ? 'bg-blue-400' : 'bg-red-400' }} rounded-lg">

        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-72 object-cover mb-6 rounded-lg">

        <p class="text-gray-800 mb-4">{{ $project['description1'] }}</p>
        <p class="text-gray-800 mb-4">{{ $project['description2'] }}</p>

        <h3 class="text-xl font-semibold text-gray-800 mb-2">Kategori:</h3>
        <div class="mb-4">
            @foreach (explode(', ', $project['category']) as $category)
                <span
                    class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-1 mr-1">{{ trim($category) }}</span>
            @endforeach
        </div>

        <div class="mt-6">
            <a href="/projects"
                class="{{ $project['id'] % 2 == 0 ? 'text-red-800' : 'text-blue-800' }} hover:underline">Kembali ke
                daftar proyek</a>
        </div>
    </div>
</x-layout>
