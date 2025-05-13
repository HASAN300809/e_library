<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Baca E-book Disini') }}
        </h2>
    </x-slot>

        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
            <h1 class="text-2xl font-bold mb-4 text-center"> {{ $books->judulbuku }}</h1>
            <div class="flex justify-center">
                <img src="{{ asset('storage/products/' . $books->gambarbuku) }}" alt="buku" class="w-96 h-[30rem] object-cover rounded items-center">
            </div>

            <!-- Books Details Table -->
            <div class="mt-6">
                <h2 class="text-lg font-bold mb-2">Books details:</h2>
                <table class="w-full border-collapse border border-gray-300">
                    <tr class="bg-gray-100">
                        <td class="p-2 font-semibold">Judul Buku</td>
                        <td class="p-2">{{ $books->judulbuku }}</td>
                    </tr>
                    <tr>
                        <td class="p-2 font-semibold">Penulis</td>
                        <td class="p-2 text-orange-600 font-bold">{{ $books->detailmanajemen->penulis }}</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="p-2 font-semibold">Penerbit</td>
                        <td class="p-2">{{ $books->detailmanajemen->penerbit }}</td>
                    </tr>
                    <tr>
                        <td class="p-2 font-semibold">Tahun Terbit</td>
                        <td class="p-2">{{ $books->detailmanajemen->tahun_terbit }}</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="p-2 font-semibold">Halaman</td>
                        <td class="p-2">400 Halaman</td>
                    </tr>
                    <tr>
                        <td class="p-2 font-semibold">Kategori</td>
                        <td class="p-2">Novel</td>
                    </tr>
                </table>
            </div>

            <!-- Books deskripsi -->
            <div class="mt-6">
                <h2 class="text-lg font-bold mb-2">Isi Buku:</h2>
                <p class="text-gray-700 text-justify">
                    {{ $books->deskripsi }}
                </p> 
            </div>

            {{-- tombol kembali --}}
            @if (Auth::user()->usertype == 'admin')
                <a href="{{ route('admin.dashboard') }}" class=" inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline shadow-lg mt-5">Kembali</a>
            @else
            <a href="{{ route('dashboard') }}" class=" inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline shadow-lg mt-5">Kembali</a>
            @endif

        </div>
    
</x-app-layout>