<x-guest-layout>
    <div class=" flex items-center justify-center bg-blue-50 py-10 px-6">
        <form method="POST" action="{{ route('login') }}" class="w-full max-w-md bg-white rounded-xl shadow-lg p-8 space-y-6">
            @csrf

            <div class="text-center">
                <h2 class="text-3xl font-bold text-blue-900">Selamat Datang 👋</h2>
                <p class="text-sm text-gray-600 mt-1">Login ke akun My E-Library kamu</p>
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="email"
                    class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:ring-blue-600 focus:border-blue-600 shadow-sm"
                    placeholder="youremail@example.com">
                @error('email')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:ring-blue-600 focus:border-blue-600 shadow-sm"
                    placeholder="••••••••">
                @error('password')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            {{-- Remember & Forgot --}}
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <span class="ml-2 text-gray-700">Ingat saya</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">Lupa Password?</a>
                @endif
            </div>

            {{-- Tombol Login --}}
            <div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition duration-200 shadow-md">
                    Login
                </button>
            </div>

            {{-- Link Register --}}
            <p class="text-center text-sm text-gray-600">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-yellow-500 font-medium hover:underline">Daftar Sekarang</a>
            </p>
        </form>
    </div>
</x-guest-layout>
