<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="min-h-screen bg-cover" style="background-image: url('https://images.unsplash.com/photo-1543352634-4c3efee2435a?auto=format&fit=crop&w=1470&q=80');">
        <div class="flex flex-col min-h-screen bg-black/50">
            <div class="container flex flex-col flex-1 px-6 py-12 mx-auto">
                <div class="flex-1 lg:flex lg:items-center lg:-mx-6">
                    <div class="text-white lg:w-1/2 lg:mx-6">
                        <h1 class="text-2xl font-semibold capitalize lg:text-3xl">Nikmati Cita Rasa Tradisional</h1>
                        <p class="max-w-xl mt-6">
                            Dapur Nusa menghadirkan hidangan khas Nusantara dengan sentuhan modern. Rasakan kehangatan suasana keluarga dan nikmati makanan autentik yang menggugah selera.
                        </p>
                        <button class="px-8 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-400 focus:ring-opacity-50">
                            Hubungi Kami
                        </button>
                        <div class="mt-6 md:mt-8">
                            <h3 class="text-gray-300">Ikuti Kami</h3>
                            <div class="flex mt-4 -mx-1.5">
                                <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-red-500" href="#">
                                    <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24"><path d="M18.6668 6.67334C18.0002 ..." /></svg>
                                </a>
                                <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-red-500" href="#">
                                    <svg class="w-8 h-8" viewBox="0 0 24 24"><path d="M15.2 8.80005C16.4731 ..." /></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 lg:w-1/2 lg:mx-6">
                        <div class="w-full px-8 py-10 mx-auto bg-white shadow-2xl rounded-xl dark:bg-gray-900 lg:max-w-xl">
                            <h1 class="text-xl font-medium text-gray-700 dark:text-gray-200">Formulir Kontak</h1>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">
                                Hubungi kami untuk reservasi atau pertanyaan lainnya.
                            </p>
                            <form class="mt-6">
                                <div class="flex-1">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Nama Lengkap</label>
                                    <input type="text" placeholder="Nama Anda" class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:ring-red-300 focus:ring-opacity-40 focus:outline-none focus:ring" />
                                </div>
                                <div class="flex-1 mt-6">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Alamat Email</label>
                                    <input type="email" placeholder="email@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:ring-red-300 focus:ring-opacity-40 focus:outline-none focus:ring" />
                                </div>
                                <div class="w-full mt-6">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Pesan</label>
                                    <textarea class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:ring-red-300 focus:ring-opacity-40 focus:outline-none focus:ring" placeholder="Pesan Anda"></textarea>
                                </div>
                                <button class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-400 focus:ring-opacity-50">
                                    Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</x-layout>