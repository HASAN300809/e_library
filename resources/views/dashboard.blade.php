<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Grid Buku -->
    <div class=" container mx-auto py-10">
        <div id="bookList" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-10 m-6">
            @foreach ($books as $book)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('storage/products/' . $book->gambarbuku) }}" alt="Buku" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold mt-3 text-center">{{ $book->judulbuku }}</h3>
                    <p class="text-center">"Membaca Buku Sangat Bermanfaat Untuk Menambah Ilmu-Ilmu Baru"</p>
                    <div class="flex justify-center gap-4 mt-5">
                        <a href="{{ route('baca', $book->id) }}">Baca Disini</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
