<x-app-layout>
    <x-slot name="header"></x-slot>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Special Book</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>

        <div class=" container mx-auto">
            {{-- section 1 --}}
            <section class=" mb-8 m-6">
                <h2 class=" text-2xl font-bold mb-4 ">Islamic</h2>

                <div class=" grid grid-cols-1 md:grid-cols-2 gap-6 justify-center">
                    <div class=" bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage/image/15 Faedah Menyambut Bulan Ramadan EBS.jpg') }}" alt="Book Image" class=" w-full h-25 object-cover rounded-lg">
                        <h3 class=" text-xl font-semibold mt-4 text-center ">15 Faedah Menyambut Bulan Ramadan</h3>
                        <p class=" text-gray-600 mt-2">"15 Faedah Menyambut Bulan Ramadan" menyajikan pelajaran dan hikmah penting dalam menyambut bulan suci. Buku ini menjadi pengingat agar Ramadan dijalani dengan semangat, ilmu, dan makna yang lebih dalam.</p>
                        <button class=" w-full mt-4 px4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg transition font-semibold"><a href="https://drive.google.com/file/d/1Ll-Q1ig2m2eyydjl8kYTI0yv4lum04iD/view?usp=sharing" target="_blank">Baca</a></button>
                    </div>
                    
                    <div class=" bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage/image/Mendulang Pelajaran Dari Kebakaran Los Angeles EBS.jpg') }}" alt="Book Image" class=" w-full h-25 object-cover rounded-lg">
                        <h3 class=" text-xl font-semibold mt-4 text-center ">Mendulang Pelajaran Dari Kebakaran Los Angeles</h3>
                        <p class=" text-gray-600 mt-2">"Mendulang Pelajaran dari Kebakaran Los Angeles" mengangkat kisah di balik peristiwa kebakaran besar di Los Angeles dan menggali hikmah serta pelajaran hidup dari tragedi tersebut. Buku ini mengajak pembaca untuk merenungi makna ujian, ketabahan, dan harapan di tengah bencana.</p>
                        <button class=" w-full mt-4 px4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg transition font-semibold"><a href="" target="_blank">Baca</a></button>
                    </div>
                </div>
            </section>
            {{-- section 2 --}}
            <section class=" mb-8 m-6">
                <h2 class=" text-2xl font-bold mb-4 ">Language</h2>

                <div class=" grid grid-cols-1 md:grid-cols-2 gap-6 justify-center">
                    <div class=" bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage/image/Nihongo No Nyuumon_Annisaa Nurul Atiqah.png') }}" alt="Book Image" class=" w-full h-25 object-cover rounded-lg">
                        <h3 class=" text-xl font-semibold mt-4 text-center ">Nihongo No Nyuumon</h3>
                        <p class=" text-gray-600 mt-2">"Nihongo no Nyuumon" adalah buku pengantar bahasa Jepang yang dirancang untuk pemula. Buku ini membahas dasar-dasar tata bahasa, kosakata, dan percakapan sehari-hari, sehingga cocok sebagai langkah awal dalam mempelajari bahasa Jepang secara sistematis dan menyenangkan.</p>
                        <button class=" w-full mt-4 px4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg transition font-semibold"><a href="" target="_blank">Baca</a></button>
                    </div>

                    <div class=" bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage/image/The Book Of Complete English Grammar (Tata bahasa Inggris Lengkap).webp') }}" alt="Book Image" class=" w-full h-25 object-cover rounded-lg">
                        <h3 class=" text-xl font-semibold mt-4 text-center ">The Book Of Complete English Grammar</h3>
                        <p class=" text-gray-600 mt-2">"The Book of Complete English Grammar" adalah panduan lengkap untuk memahami tata bahasa Inggris, mulai dari dasar hingga tingkat lanjutan. Cocok untuk pelajar, pengajar, maupun siapa saja yang ingin memperkuat kemampuan bahasa Inggris secara menyeluruh.</p>
                        <button class=" w-full mt-4 px4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg transition font-semibold"><a href="" target="_blank">Baca</a></button>
                    </div>
                </div>
            </section>
            {{-- section 3 --}}
            <section class=" mb-8 m-6">
                <h2 class=" text-2xl font-bold mb-4 ">Technology & Creativity</h2>

                <div class=" grid grid-cols-1 md:grid-cols-2 gap-6 justify-center">
                    <div class=" bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage/image/Aplikasi teknologi informasi teori dan implementasi.jpeg') }}" alt="Book Image" class=" w-full h-25 object-cover rounded-lg">
                        <h3 class=" text-xl font-semibold mt-4 text-center ">Aplikasi Teknologi Informasi</h3>
                        <p class=" text-gray-600 mt-2">"Aplikasi Teknologi Informasi" membahas pemanfaatan teknologi dalam berbagai bidang kehidupan, mulai dari pendidikan, bisnis, hingga pemerintahan. Buku ini cocok untuk pelajar dan pemula yang ingin memahami peran penting TI di era digital.</p>
                        <button class=" w-full mt-4 px4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg transition font-semibold"><a href="" target="_blank">Baca</a></button>
                    </div>

                    <div class=" bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage/image/KreativitasdalamKonteksPembelajaranCOVER-digabungkan.jpeg') }}" alt="Book Image" class=" w-full h-25 object-cover rounded-lg">
                        <h3 class=" text-xl font-semibold mt-4 text-center ">Kreativitas dalam Konteks Pembelajaran</h3>
                        <p class=" text-gray-600 mt-2">"Kreativitas dalam Konteks Pembelajaran" mengulas pentingnya kreativitas dalam proses belajar mengajar serta bagaimana guru dan siswa dapat mengembangkannya. Buku ini menjadi panduan praktis untuk menciptakan suasana belajar yang inovatif dan inspiratif.</p>
                        <button class=" w-full mt-4 px4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg transition font-semibold"><a href="" target="_blank">Baca</a></button>
                    </div>
                </div>
            </section>
        </div>
        
    </body>
    </html>
</x-app-layout>