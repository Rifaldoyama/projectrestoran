<x-layout>
    <x-header>Welcome, {{ Auth::user()->name }}</x-header>
    <x-croushel></x-croushel>
    <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-2 ml-48 md:text-4xl">Rekomendasi</h1>
    <div class="max-w-[104rem] flex flex-wrap mx-auto mb-10 gap-4 justify-center">
        <a href="#" class="flex bg-white border border-gray-200 rounded-lg shadow-sm md:w-[40rem] hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-[10rem] h-[8rem] rounded-s-lg" src="{{ asset('storage/resto/restoold.jpeg') }}" alt="">
            <div class="flex-1 p-4 flex flex-col justify-center">
                <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="text-sm text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
    
        <a href="#" class="flex bg-white border border-gray-200 rounded-lg shadow-sm md:w-[40rem] hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-[10rem] h-[8rem] rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="">
            <div class="flex-1 p-4 flex flex-col justify-center">
                <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="text-sm text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
    
        <a href="#" class="flex bg-white border border-gray-200 rounded-lg shadow-sm md:w-[40rem] hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-[10rem] h-[8rem] rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="">
            <div class="flex-1 p-4 flex flex-col justify-center">
                <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="text-sm text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
    
        <a href="#" class="flex bg-white border border-gray-200 rounded-lg shadow-sm md:w-[40rem] hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-[10rem] h-[8rem] rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="">
            <div class="flex-1 p-4 flex flex-col justify-center">
                <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="text-sm text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
    </div>
    
    






    <br>
    <h2>Customer Dashboard</h2>
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</x-layout>
