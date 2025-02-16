<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-croushel2></x-croushel2>
    
    <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-8">
        <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-8">Menu Spesial Dapur Nusa</h1>
        
        <!-- Makanan Tradisional -->
        <section>
            <h2 class="text-2xl font-bold text-gray-800 border-b-4 border-red-500 pb-3 mb-6">Makanan Tradisional Indonesia</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ([
                    ['nasgor.jpg', 'Nasi Goreng', 'Nasi goreng khas Indonesia dengan campuran bumbu rempah, telur, dan ayam.'], 
                    ['rendang.jpg', 'Rendang', 'Daging sapi dimasak perlahan dengan santan dan rempah-rempah khas Padang.'], 
                    ['sate.jpg', 'Sate Ayam', 'Daging ayam yang dipanggang dengan bumbu kacang khas Indonesia.'], 
                    ['gado.jpg', 'Gado-Gado', 'Salad sayuran dengan saus kacang gurih khas Indonesia.'], 
                    ['soto.jpg', 'Soto Ayam', 'Sup ayam dengan kuah bening kaya rempah, disajikan dengan nasi atau ketupat.']
                ] as $food)
                <div class="bg-yellow-50 p-5 rounded-lg shadow-md flex items-center gap-4 border border-yellow-300">
                    <img src="{{ asset('storage/resto/makanan/' . $food[0]) }}" alt="{{ $food[1] }}" class="w-20 h-20 rounded-lg object-cover">
                    <div>
                        <span class="text-lg font-semibold text-gray-900">{{ $food[1] }}</span>
                        <p class="text-sm text-gray-600">{{ $food[2] }}</p>
                    </div>
                    <button class="ml-auto bg-red-600 text-white px-5 py-2 rounded-lg hover:bg-red-700 transition">Pesan</button>
                </div>
                @endforeach
            </div>
        </section>
        
        <!-- Minuman Tradisional -->
        <section class="mt-10">
            <h2 class="text-2xl font-bold text-gray-800 border-b-4 border-blue-500 pb-3 mb-6">Minuman Tradisional Indonesia</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ([
                    ['cendol.jpg', 'Es Cendol', 'Minuman segar berbahan dasar santan, gula merah, dan tepung beras hijau.'], 
                    ['wedang.jpg', 'Wedang Jahe', 'Minuman hangat berbahan jahe yang memberikan sensasi pedas dan menyegarkan.'], 
                    ['teh.jpg', 'Teh Tarik', 'Teh susu khas dengan teknik penuangan unik untuk menciptakan busa lembut.'], 
                    ['kopi.jpg', 'Kopi Tubruk', 'Kopi hitam khas Indonesia yang diseduh langsung dengan ampasnya.'], 
                    ['bbajugur.jpg', 'Bajigur', 'Minuman hangat dari santan dan gula aren, sering disajikan dengan kolang-kaling.']
                ] as $drink)
                <div class="bg-blue-50 p-5 rounded-lg shadow-md flex items-center gap-4 border border-blue-300">
                    <img src="{{ asset('storage/resto/makanan/' . $drink[0]) }}" alt="{{ $drink[1] }}" class="w-20 h-20 rounded-lg object-cover">
                    <div>
                        <span class="text-lg font-semibold text-gray-900">{{ $drink[1] }}</span>
                        <p class="text-sm text-gray-600">{{ $drink[2] }}</p>
                    </div>
                    <button class="ml-auto bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700 transition">Pesan</button>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
