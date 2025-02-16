<!-- Carousel -->
<div id="default-carousel" class="relative w-full h-[80vh] overflow-hidden shadow-2xl" 
    x-data="{ active: 0, interval: null }" 
    x-init="interval = setInterval(() => { active = (active + 1) % 3 }, 5000)">

    <!-- Carousel wrapper -->
    <div class="relative w-full h-full flex transition-transform duration-700 ease-in-out"
        x-bind:style="'transform: translateX(-' + (active * 100) + '%);'">

        <!-- Item 1 -->
        <div class="w-full h-full flex-shrink-0 relative">
            <img src="{{ asset('storage/resto/makanan1.jpg') }}" class="w-full h-full object-cover" alt="Slide 1">
            <div class="absolute inset-0 flex items-center justify-center bg-black/60">
                <h2 class="text-2xl md:text-3xl font-bold text-white text-center p-4">Menu Rekomendasi</h2>
            </div>
        </div>
        
        <!-- Item 2 -->
        <div class="w-full h-full flex-shrink-0 relative">
            <img src="{{ asset('storage/resto/alam.jpg') }}" class="w-full h-full object-cover" alt="Slide 2">
            <div class="absolute inset-0 flex items-center justify-center bg-black/60">
                <h2 class="text-2xl md:text-3xl font-bold text-white text-center p-4">Jelajahi Keindahan Alam</h2>
            </div>
        </div>
        
        <!-- Item 3 -->
        <div class="w-full h-full flex-shrink-0 relative">
            <img src="{{ asset('storage/resto/ressort.jpg') }}" class="w-full h-full object-cover" alt="Slide 3">
            <div class="absolute inset-0 flex items-center justify-center bg-black/60">
                <h2 class="text-2xl md:text-3xl font-bold text-white text-center p-4">Nikmati Pengalaman Terbaik</h2>
            </div>
        </div>
    </div>

    <!-- Slider indicators -->
    <div class="absolute z-30 flex bottom-4 left-1/2 -translate-x-1/2 space-x-3">
        <button @click="active = 0; clearInterval(interval); interval = setInterval(() => { active = (active + 1) % 3 }, 5000)" 
            class="w-3 h-3 rounded-full bg-white" :class="{ 'opacity-100': active === 0, 'opacity-50': active !== 0 }"></button>
        <button @click="active = 1; clearInterval(interval); interval = setInterval(() => { active = (active + 1) % 3 }, 5000)" 
            class="w-3 h-3 rounded-full bg-white" :class="{ 'opacity-100': active === 1, 'opacity-50': active !== 1 }"></button>
        <button @click="active = 2; clearInterval(interval); interval = setInterval(() => { active = (active + 1) % 3 }, 5000)" 
            class="w-3 h-3 rounded-full bg-white" :class="{ 'opacity-100': active === 2, 'opacity-50': active !== 2 }"></button>
    </div>

    <!-- Slider controls -->
    <button @click="active = active > 0 ? active - 1 : 2; clearInterval(interval); interval = setInterval(() => { active = (active + 1) % 3 }, 5000)"
        class="absolute top-1/2 left-4 transform -translate-y-1/2 z-30 flex items-center justify-center w-10 h-10 rounded-full bg-white/50 hover:bg-white transition duration-300">
        <svg class="w-6 h-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
        </svg>
    </button>

    <button @click="active = active < 2 ? active + 1 : 0; clearInterval(interval); interval = setInterval(() => { active = (active + 1) % 3 }, 5000)"
        class="absolute top-1/2 right-4 transform -translate-y-1/2 z-30 flex items-center justify-center w-10 h-10 rounded-full bg-white/50 hover:bg-white transition duration-300">
        <svg class="w-6 h-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
    </button>
</div>
