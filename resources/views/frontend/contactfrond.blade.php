<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-blue-100">
    <!-- Navbar -->
  <nav class="bg-blue-900 px-6 py-4 flex justify-between items-center shadow-md">
    <h1 class="text-2xl font-bold text-white">📚 My E-Library</h1>
    <ul class="flex space-x-6">
      <li><a href="/" class="text-white hover:text-yellow-300 transition">Home</a></li>
      <li><a href="/books" class="text-white hover:text-yellow-300 transition">Books</a></li>
      <li><a href="/store" class="text-white hover:text-yellow-300 transition">Store</a></li>
      <li><a href="/contact" class="text-white hover:text-yellow-300 transition">Contact</a></li>
    </ul>
    <div class="space-x-3">
      <a href="/login" class="px-4 py-1 border border-yellow-400 text-yellow-400 rounded hover:bg-yellow-400 hover:text-blue-900 transition">Login</a>
      <a href="/register" class="px-4 py-1 bg-yellow-400 text-blue-900 font-semibold rounded hover:bg-yellow-300 transition">Register</a>
    </div>
  </nav>

    {{-- isi halaman contact --}}

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 shadow-lg rounded-2xl max-w-lg w-full">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Kontak Kami</h2>
            <p class="text-gray-600 mb-4">Jika Anda memiliki pertanyaan atau ingin bekerja sama dengan kami, silakan hubungi melalui informasi di bawah ini:</p>
            
            <div class="space-y-4">
                <div class="flex items-center space-x-4">
                    <span class="text-blue-500">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-9 13V5" />
                        </svg>
                    </span>
                    <span class="text-gray-700">contact@teenagertech.id</span>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-green-500">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m5 18h5m-5 0a5 5 0 005-5V9a5 5 0 00-5-5" />
                        </svg>
                    </span>
                    <span class="text-gray-700">+62 812-3456-7890</span>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-red-500">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2m4-4h4m-2-2v4" />
                        </svg>
                    </span>
                    <span class="text-gray-700">Jl. Teknologi No. 10, Jakarta</span>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>