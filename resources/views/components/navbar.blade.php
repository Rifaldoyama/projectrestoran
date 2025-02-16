<div class="min-h-full bg-[#F5DEB3]">
  <nav class="bg-[#8B4513] fixed top-0 left-0 w-full z-50" x-data="{ isOpen: false, menuOpen: false }">
    <div class="mx-auto max-w-[110rem] px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        
        <!-- Logo + Judul -->
        <div class="flex items-center space-x-3">
          <img class="size-10" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Logo">
          <a href="/" class="text-2xl font-bold text-[#DAA520]">DapurNusa</a>
        </div>

        <!-- Menu Tengah (Desktop) -->
        <div class="hidden md:flex justify-center flex-1 space-x-16">
          <a href="/customer" class="text-[#F5DEB3] text-lg font-medium hover:text-[#DAA520]">Home</a>
          <a href="/menu" class="text-[#F5DEB3] text-lg font-medium hover:text-[#DAA520]">Menu</a>
          <a href="/about" class="text-[#F5DEB3] text-lg font-medium hover:text-[#DAA520]">About</a>
          <a href="/contact" class="text-[#F5DEB3] text-lg font-medium hover:text-[#DAA520]">Contact</a>
        </div>

        <!-- Tombol Mobile Menu -->
        <div class="md:hidden flex items-center">
          <button @click="menuOpen = !menuOpen" class="text-[#F5DEB3]">
            <svg class="size-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path x-show="!menuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
              <path x-show="menuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>

        <!-- Profil di kanan (Desktop) -->
        <div class="hidden md:block">
          <div class="relative">
            <button type="button" @click="isOpen = !isOpen"
              class="flex items-center rounded-full p-2 text-[#F5DEB3]">
              <img class="size-10 rounded-full" src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Profile">
            </button>
            <div x-show="isOpen" class="absolute right-0 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5">
              <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F5DEB3]">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F5DEB3]">Settings</a>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F5DEB3]">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Menu Mobile -->
      <div x-show="menuOpen" class="md:hidden">
        <div class="flex flex-col space-y-2 mt-2 bg-[#8B4513] p-4 rounded-md">
          <a href="/customer" class="text-[#F5DEB3] text-lg font-medium hover:text-[#DAA520]">Home</a>
          <a href="/menu" class="text-[#F5DEB3] text-lg font-medium hover:text-[#DAA520]">Menu</a>
          <a href="/about" class="text-[#F5DEB3] text-lg font-medium hover:text-[#DAA520]">About</a>
          <a href="/contact" class="text-[#F5DEB3] text-lg font-medium hover:text-[#DAA520]">Contact</a>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <div class="mx-auto max-w-full px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
    </div>
  </main>
</div>
