<div class="min-h-full">
  <nav class="bg-gray-800 fixed top-0 left-0 w-full z-50" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-[110rem] px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        
        <!-- Logo + Judul -->
        <div class="flex items-center space-x-3">
          <img class="size-10" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Logo">
          <a href="/" class="text-2xl font-bold text-white">DapurNusa</a>
        </div>

        <!-- Menu Tengah (Desktop) -->
        <div class="hidden md:flex justify-center flex-1 space-x-10">
          <a href="/" class="text-white text-lg font-medium hover:text-gray-300">Home</a>
          <a href="/menu" class="text-white text-lg font-medium hover:text-gray-300">Menu</a>
          <a href="/about" class="text-white text-lg font-medium hover:text-gray-300">About</a>
          <a href="/contact" class="text-white text-lg font-medium hover:text-gray-300">Contact</a>
        </div>

        <!-- Profil di kanan -->
        <div class="hidden md:block">
          <div class="relative">
            <button type="button" @click="isOpen = !isOpen"
              class="flex items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <img class="size-10 rounded-full" src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Profile">
            </button>
            <div x-show="isOpen" class="absolute right-0 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5">
              <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700">Settings</a>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </div>
        </div>

        <!-- Tombol menu mobile -->
        <div class="-mr-2 flex md:hidden">
          <button type="button" @click="isOpen = !isOpen" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white">
            <span class="sr-only">Open main menu</span>
            <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="isOpen" class="md:hidden">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700">Home</a>
        <a href="/menu" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700">Menu</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700">About</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700">Contact</a>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <img class="size-10 rounded-full" src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Profile">
          <div class="ml-3">
            <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
            <div class="text-sm font-medium text-gray-400">{{ Auth::user()->email }}</div>
          </div>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Logout</a>
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
