<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h1 class=" text-center text-3xl">{{ __('Halaman Edit Data Buku') }}</h1>
        </h2>
    </x-slot>

    <div class=" container mx-auto py-10">
        <form action="{{ route('manajemen.update', $manajemen->id) }}" method="POST" enctype="multipart/form-data" class=" m-5">
            @csrf
            @method('PUT')

            <div class=" mb-4">
                <label for="" class=" block font-bold">Judul Buku</label>
                <input type="text" name="judulbuku" value="{{ $manajemen->judulbuku }}" class=" w-full border border-gray-400 p-2 rounded">
            </div>

            <div class=" mb-4">
                <label for="" class=" block font-bold">Deskripsi</label>
                <textarea rows="10" name="deskripsi" value="{{ $manajemen->deskripsi }}" class=" w-full border border-gray-400 p-2 rounded">{{ $manajemen->deskripsi }}</textarea>
            </div>

            <div class=" mb-4">
                <label for="" class=" block font-bold">Kode Buku</label>
                <input type="text" name="kodebuku" value="{{ $manajemen->detailmanajemen->kodebuku }}" class=" w-full border border-gray-400 p-2 rounded">
            </div>

            <div class=" mb-4">
                <label for="" class=" block font-bold">Penulis</label>
                <input type="text" name="penulis" value="{{ $manajemen->detailmanajemen->penulis }}" class=" w-full border border-gray-400 p-2 rounded">
            </div>

            <div class=" mb-4">
                <label for="" class=" block font-bold">Penerbit</label>
                <input type="text" name="penerbit" value="{{ $manajemen->detailmanajemen->penerbit }}" class=" w-full border border-gray-400 p-2 rounded">
            </div>
            
            <div class=" mb-4">
                <label for="" class=" block font-bold">Tahun Terbit</label>
                <input type="text" name="tahunterbit" value="{{ $manajemen->detailmanajemen->tahun_terbit }}" class=" w-full border border-gray-400 p-2 rounded">
            </div>

            <div class=" mb-4">
                <label for="" class=" block font-bold">Gambar Buku</label>
                <input type="file" name="image" class=" w-full border border-gray-400 p-2 rounded">
                <img src="{{ asset('storage/products/' . $manajemen->gambarbuku) }}" class=" w-40 mt-2">
            </div>

            <div class=" flex gap-3">
                <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline shadow-lg" type="submit">
                    Simpan
                </button>

                <a href="{{ route('manajemen.index') }}" class=" bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline shadow-lg" class="">Kembali</a>
            </div>
        </form>
    </div>
</x-app-layout>