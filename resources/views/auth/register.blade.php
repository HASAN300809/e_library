<x-guest-layout>
    <div class=" flex items-center justify-center bg-blue-50 py-12 px-6">
        <form method="POST" action="{{ route('register') }}" class="w-full max-w-md bg-white rounded-xl shadow-lg p-8 space-y-6">
            @csrf

            <div class="text-center">
                <h2 class="text-3xl font-bold text-blue-900">Buat Akun Baru 📚</h2>
                <p class="text-sm text-gray-600 mt-1">Gabung dengan My E-Library sekarang!</p>
            </div>

            {{-- Name --}}
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus
                    class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:ring-blue-600 focus:border-blue-600 shadow-sm"
                    placeholder="Nama Lengkap">
                @error('name')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                <input id="email" type="email" name="email" :value="old('email')" required
                    class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:ring-blue-600 focus:border-blue-600 shadow-sm"
                    placeholder="youremail@example.com">
                @error('email')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:ring-blue-600 focus:border-blue-600 shadow-sm"
                    placeholder="••••••••">
                @error('password')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:ring-blue-600 focus:border-blue-600 shadow-sm"
                    placeholder="••••••••">
            </div>

            {{-- Tombol Daftar --}}
            <div>
                <button type="submit"
                    class="w-full bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-semibold py-2 px-4 rounded-md transition duration-200 shadow-md">
                    Daftar Sekarang
                </button>
            </div>

            {{-- Link Login --}}
            <p class="text-center text-sm text-gray-600">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline">Login di sini</a>
            </p>
        </form>
    </div>
</x-guest-layout>
