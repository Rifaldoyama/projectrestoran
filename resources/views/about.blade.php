<x-layout>
    <div class="flex justify-center items-center min-h-screen px-4 py-10">
        <div class="bg-white shadow-lg rounded-lg p-8 md:max-w-[79rem] w-full">
            <h1 class="text-3xl font-bold text-gray-800 mb-4 text-center">Tentang Kami</h1>

            <p class="text-gray-600 text-lg text-center">Selamat datang di <span class="font-semibold">Dapur Nusa</span>, tempat di mana cita rasa tradisional bertemu dengan inovasi modern.</p>

            <!-- Sejarah Singkat -->
            <div class="mt-8">
                <h2 class="text-2xl font-semibold text-gray-700 text-center mb-4">Sejarah Singkat</h2>
                <div class="grid md:grid-cols-2 gap-8 md:flex md:flex-row-reverse">
                    <div>
                        <img src="{{ asset('storage/resto/restoold.jpeg') }}" alt="Sejarah Dapur Nusa" class="rounded-lg shadow-lg w-full">
                    </div>
                    <div>
                        <p class="text-gray-600 leading-relaxed">
                            Dapur Nusa didirikan pada tahun 1995 oleh keluarga pecinta kuliner yang ingin melestarikan cita rasa nusantara. Berawal dari sebuah kedai kecil, restoran ini berkembang menjadi tempat makan favorit dengan berbagai hidangan khas yang dikombinasikan dengan teknik memasak modern.
                        </p>
                        <p class="text-gray-600 leading-relaxed mt-4">
                            Hingga kini, Dapur Nusa terus mempertahankan keasliannya dengan menggunakan bahan-bahan alami serta menjaga kualitas rasa, sehingga pelanggan dapat merasakan kehangatan dan tradisi dalam setiap sajian.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cita Rasa -->
            <div class="mt-8 grid md:grid-cols-2 gap-8">
                <!-- Gambar -->
                <div>
                    <img src="{{ asset('storage/resto/resto.jpg') }}" alt="Dapur Nusa" class="rounded-lg shadow-lg">
                </div>

                <!-- Deskripsi -->
                <div>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-3">Cita Rasa Tradisional & Modern</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Dapur Nusa menghadirkan masakan tradisional dengan sentuhan inovasi, menciptakan perpaduan yang sempurna antara kelezatan otentik dan pengalaman baru dalam bersantap.
                    </p>

                    <h2 class="text-2xl font-semibold text-gray-700 mt-6 mb-3">Kenapa Memilih Kami?</h2>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Bahan segar & berkualitas tinggi</li>
                        <li>Pelayanan ramah & suasana nyaman</li>
                        <li>Menu inovatif yang mempertahankan cita rasa asli</li>
                    </ul>
                </div>
            </div>

            <!-- Kontak & Peta -->
            <div class="mt-10 text-center">
                <h2 class="text-xl font-semibold text-gray-700">Kunjungi Kami</h2>
                <p class="text-gray-600">📍 Alamat: Jl. Nusantara Rasa No. 45, Kota Nusa</p>
                <p class="text-gray-600">📞 Kontak: 0812-3456-7890</p>
                <p class="text-gray-600">🌐 Website: www.dapurnusa.com</p>

                <!-- Google Maps -->
                <div class="mt-6">
                    <iframe 
                        class="w-full h-64 md:h-96 rounded-lg shadow-lg"
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
