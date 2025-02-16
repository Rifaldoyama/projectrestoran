<x-layout>
    <div class="flex justify-center items-center min-h-screen px-6 py-12 bg-[#f3e5ab]">
        <div class="bg-[#fff2cc] shadow-xl rounded-2xl p-10 md:max-w-[80rem] w-full border-4 border-[#d4a373] relative overflow-hidden">
            
            <!-- Header Section -->
            <div class="text-center">
                <h1 class="text-4xl font-bold text-[#8b4513] mb-4">Tentang Kami</h1>
                <p class="text-[#5c3d2e] text-lg max-w-2xl mx-auto">
                    Selamat datang di <span class="font-semibold text-[#a05a2c]">Dapur Nusa</span>, tempat cita rasa tradisional berpadu dengan inovasi modern.
                </p>
            </div>
            
            <!-- Sejarah Singkat -->
            <div class="mt-12 grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <img src="{{ asset('storage/resto/restoold.jpeg') }}" alt="Sejarah Dapur Nusa" class="rounded-xl shadow-lg w-full border-2 border-[#a05a2c]">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-[#8b4513] mb-4">Sejarah Kami</h2>
                    <p class="text-[#5c3d2e] leading-relaxed">
                        Berdiri sejak tahun 1995, <span class="font-semibold">Dapur Nusa</span> awalnya hanya kedai kecil yang menyajikan hidangan khas Nusantara.
                        Dengan komitmen mempertahankan rasa otentik dan inovasi dalam teknik memasak, kini kami menjadi salah satu destinasi kuliner favorit.
                    </p>
                    <p class="text-[#5c3d2e] leading-relaxed mt-4">
                        Kami selalu menggunakan bahan-bahan alami berkualitas, menghadirkan kehangatan dan tradisi dalam setiap hidangan.
                    </p>
                </div>
            </div>
            
            <!-- Cita Rasa Tradisional & Modern -->
            <div class="mt-12 grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <h2 class="text-3xl font-semibold text-[#8b4513] mb-4">Cita Rasa Unik</h2>
                    <p class="text-[#5c3d2e] leading-relaxed">
                        Menghadirkan masakan tradisional dengan sentuhan modern, menciptakan pengalaman bersantap yang tak terlupakan.
                    </p>
                    <ul class="list-disc list-inside text-[#5c3d2e] mt-4 space-y-2">
                        <li>Bahan segar & berkualitas</li>
                        <li>Pelayanan ramah & suasana nyaman</li>
                        <li>Menu inovatif yang mempertahankan cita rasa asli</li>
                    </ul>
                </div>
                <div>
                    <img src="{{ asset('storage/resto/resto.jpg') }}" alt="Dapur Nusa" class="rounded-xl shadow-lg border-2 border-[#a05a2c]">
                </div>
            </div>

            <!-- Lokasi & Kontak -->
            <div class="mt-16 text-center">
                <h2 class="text-3xl font-semibold text-[#8b4513]">Kunjungi Kami</h2>
                <p class="text-[#5c3d2e]">📍 Jl. Nusantara Rasa No. 45, Kota Nusa</p>
                <p class="text-[#5c3d2e]">📞 0812-3456-7890 | 🌐 www.dapurnusa.com</p>

                <!-- Google Maps -->
                <div class="mt-6">
                    <iframe 
                        class="w-full h-72 md:h-96 rounded-xl shadow-lg border-2 border-[#a05a2c]"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.0155753889545!2d110.36879731477524!3d-7.782393179055902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57843b1476eb%3A0x5e3bfa5e8b1cbb58!2sDapur%20Nusa!5e0!3m2!1sid!2sid!4v1707500000000!5m2!1sid!2sid" 
                        frameborder="0" 
                        allowfullscreen 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</x-layout>
