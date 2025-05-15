<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Library</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">


    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-[#fefae0] text-gray-800">
    <!-- Navbar -->
    <nav class="bg-blue-900 px-6 py-4 flex justify-between items-center shadow-md flex-wrap">
        <h1 class="text-2xl font-bold text-white">📚 My E-Library</h1>
        <button id="menu-toggle" class="text-white md:hidden focus:outline-none">
        ☰
        </button>
        <div id="menu" class="w-full md:flex md:items-center md:w-auto hidden md:space-x-6 mt-4 md:mt-0">
        <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 mb-4 md:mb-0">
            <li><a href="/" class="text-white hover:text-yellow-300 hover:underline transition">Home</a></li>
            <li><a href="/books" class="text-white hover:text-yellow-300 hover:underline transition">Books</a></li>
            <li><a href="/store" class="text-white hover:text-yellow-300 hover:underline transition">Store</a></li>
            <li><a href="/contact" class="text-white hover:text-yellow-300 hover:underline transition">Contact</a></li>
        </ul>
        <div class="space-x-3">
            <a href="/login" class="px-4 py-1 border border-yellow-400 text-yellow-400 rounded hover:bg-yellow-400 hover:text-blue-900 transition">Login</a>
            <a href="/register" class="px-4 py-1 bg-yellow-400 text-blue-900 font-semibold rounded hover:bg-yellow-300 transition">Register</a>
        </div>
        </div>
    </nav>

    {{-- isi halaman store --}}
    <div class="container mx-auto px-6 py-12">
        <h1 class=" text-3xl font-bold text-center mb-8 text-gray-800">Lokasi Toko Perpustakan</h1>
        <div class="grid md:grid-cols-3 gap-6">
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Jakarta</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Jakarta</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Bandung</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Bandung</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Depok</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Depok</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Bogor</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Bogor</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Tangerang</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Tangerang</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Malang</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Malang</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
        </div>
    </div>

    <!-- JavaScript for Navbar Toggle -->
    <script>
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');

        toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>