<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My E-Library</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-indigo-100 font-sans">

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

  <!-- Hero Section -->
  <section class="text-center py-20 px-6 bg-gradient-to-r from-sky-100 to-blue-100">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-800 mb-6">
      Selamat Datang di <span class="text-blue-600">My E-Library</span>
    </h2>
    <p class="text-base sm:text-lg md:text-xl text-gray-700 max-w-2xl mx-auto mb-8">
      "Buku adalah jendela dunia. Setiap halaman yang kamu baca adalah langkah kecil menuju impian besar."
    </p>
    <a href="#" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
      📖 Baca Sekarang
    </a>
  </section>

  <!-- Highlight Features -->
  <section class="py-16 bg-white text-center px-4">
    <h3 class="text-2xl sm:text-3xl font-semibold text-gray-800 mb-10">Kenapa Memilih My E-Library?</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
      <div class="p-6 bg-yellow-50 rounded shadow hover:shadow-lg">
        <h4 class="text-lg sm:text-xl font-bold text-blue-600 mb-2">📚 Koleksi Lengkap</h4>
        <p class="text-gray-600">Dari fiksi hingga ilmiah, semua tersedia di satu tempat.</p>
      </div>
      <div class="p-6 bg-yellow-50 rounded shadow hover:shadow-lg">
        <h4 class="text-lg sm:text-xl font-bold text-blue-600 mb-2">⚡ Akses Cepat</h4>
        <p class="text-gray-600">Cari dan baca buku favoritmu tanpa ribet.</p>
      </div>
      <div class="p-6 bg-yellow-50 rounded shadow hover:shadow-lg">
        <h4 class="text-lg sm:text-xl font-bold text-blue-600 mb-2">🌐 Bisa Diakses Kapan Saja</h4>
        <p class="text-gray-600">Website ini bisa kamu akses 24/7 tanpa batas.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-100 text-center py-6 mt-10 text-gray-500 text-sm">
    &copy; 2025 My E-Library. All rights reserved.
  </footer>

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
