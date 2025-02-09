<footer class="bg-white rounded-lg shadow-sm dark:bg-gray-900 m-4 mt-auto">
    <div class="w-full max-w-[96rem] mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Dapur Nusa Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Dapur Nusa</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="/about" class="hover:underline me-4 md:me-6">Tentang Kami</a>
                </li>
                <li>
                    <a href="/privacy-policy" class="hover:underline me-4 md:me-6">Kebijakan Privasi</a>
                </li>
                <li>
                    <a href="/terms" class="hover:underline me-4 md:me-6">Syarat & Ketentuan</a>
                </li>
                <li>
                    <a href="/contact" class="hover:underline">Kontak</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
            © {{ date('Y') }} <a href="/" class="hover:underline">Dapur Nusa</a>. All Rights Reserved.
        </span>
    </div>
</footer>
