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

    {{-- isi halaman book --}}
    <div class=" p-6 bg-gray-100 min-h-screen">
        <div class=" overflow-x-auto bg-white rounded-2xl shadow-md">
            <table class=" min-w-full text-sm text-left text-gray-700">
                <thead class=" bg-indigo-600 text-white">
                    <th scope="col" class=" px-6 py-4">No</th>
                    <th scope="col" class=" px-6 py-4">Gambar</th>
                    <th scope="col" class=" px-6 py-4">Nama Buku</th>
                </thead>
                <tbody class=" divide-y divide-gray-200">
                    @foreach ($books as $book)
                        <tr class=" hover:bg-indigo-50 transition">
                            <td class=" px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                            <td class=" px-6 py-4">
                                <img src="{{ asset('storage/products/' . $book->gambarbuku) }}" alt="" class=" w-12 h-14 object-cover rounded-md">
                            </td>
                            <td class=" px-6 py-4">{{ $book->judulbuku }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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