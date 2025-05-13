<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h1 class=" text-center text-3xl">{{ __('Halaman Manajemen Buku') }}</h1>
        </h2>
    </x-slot>

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-10">E-Library</h1>
        
        {{-- Tambah tombol Data --}}
        <div class="mb-10 text-center">
            <a href="{{ route('manajemen.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg shadow-lg">
                Tambah Data
            </a>
        </div>


        {{-- Grid Buku --}}
        <div id="booklist" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($books as $book)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('storage/products/' . $book->gambarbuku) }}" alt="buku" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold mt-3 text-center">{{ $book->judulbuku }}</h3>
                    <p class=" text-center">"Setiap halaman novel adalah pintu menuju dunia baru. Buka dan biarkan imajinasimu terbang!"</p>
                    <div class=" flex justify-center gap-4 mt-5">
                        <a href="{{ route('manajemen.edit', $book->id) }}" class=" bg-sky-500 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition">
                            Edit
                        </a>
                        <form action="{{ route('manajemen.destroy', $book->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (session('success')) 
          Swal.fire({
            icon: "success",
            title: "Berhasil!",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
          });
        @elseif(session('error'))
          Swal.fire({
            icon: "error",
            title: "Gagal!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
          });
        @endif
      </script>

</x-app-layout>