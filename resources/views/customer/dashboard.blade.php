<x-layout>
    <x-header class="bg-[#8B4513]">Welcome, {{ Auth::user()->name }}</x-header>
    <x-croushel></x-croushel>
    <h1 class="text-2xl font-bold text-[#8B4513] mb-4 mt-2 ml-[19rem] md:text-4xl">Services</h1>
    <div class="max-w-[120rem] flex flex-wrap mx-auto mb-10 gap-9 justify-center">
        <div class="grid gap-14 md:grid-cols-3">
            <a href="#" onclick="openModal()" class="flex items-center bg-[#FFF8DC] border border-[#8B4513] rounded-lg shadow-sm hover:bg-[#DEB887] p-4">
                <img class="object-cover w-24 h-24 rounded-lg" src="{{ asset('storage/resto/reservasi.png') }}" alt="Reservasi">
                <div class="flex-1 pl-4">
                    <h5 class="text-lg font-bold text-[#8B4513]">Reservasi</h5>
                    <p class="text-sm text-[#654321]">Pesan tempat untuk acara spesial Anda.</p>
                </div>
            </a>
            <a href="#" class="flex items-center bg-[#FFF8DC] border border-[#8B4513] rounded-lg shadow-sm hover:bg-[#DEB887] p-4">
                <img class="object-cover w-24 h-24 rounded-lg" src="{{ asset('storage/resto/delivery.png') }}" alt="Delivery">
                <div class="flex-1 pl-4">
                    <h5 class="text-lg font-bold text-[#8B4513]">Delivery</h5>
                    <p class="text-sm text-[#654321]">Nikmati hidangan favorit di rumah Anda.</p>
                </div>
            </a>
        
            <a href="#" class="flex items-center bg-[#FFF8DC] border border-[#8B4513] rounded-lg shadow-sm hover:bg-[#DEB887] p-4">
                <img class="object-cover w-24 h-24 rounded-lg" src="{{ asset('storage/resto/katering.png') }}" alt="Prasmanan">
                <div class="flex-1 pl-4">
                    <h5 class="text-lg font-bold text-[#8B4513]">Prasmanan</h5>
                    <p class="text-sm text-[#654321]">Hidangan lengkap untuk berbagai acara.</p>
                </div>
            </a>
        </div>   
    </div>
    
    <h1 class="text-2xl font-bold text-[#8B4513] mb-4 mt-2 ml-[19rem] md:text-4xl">Menu</h1>
    <div class="max-w-[87rem] mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 p-6">
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
            <img class="rounded-t-lg w-full h-40 object-cover" src="{{ asset('storage/resto/resto.jpg') }}" alt="" />
            <div class="p-4">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Judul 1</h5>
                <p class="mb-2 text-sm text-gray-700">Deskripsi singkat mengenai item pertama.</p>
            </div>
        </div>
    
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
            <img class="rounded-t-lg w-full h-40 object-cover" src="{{ asset('storage/resto/resto.jpg') }}" alt="" />
            <div class="p-4">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Judul 2</h5>
                <p class="mb-2 text-sm text-gray-700">Deskripsi singkat mengenai item kedua.</p>
            </div>
        </div>
    
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
            <img class="rounded-t-lg w-full h-40 object-cover" src="{{ asset('storage/resto/resto.jpg') }}" alt="" />
            <div class="p-4">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Judul 3</h5>
                <p class="mb-2 text-sm text-gray-700">Deskripsi singkat mengenai item ketiga.</p>
            </div>
        </div>
    
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
            <img class="rounded-t-lg w-full h-40 object-cover" src="{{ asset('storage/resto/resto.jpg') }}" alt="" />
            <div class="p-4">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Judul 4</h5>
                <p class="mb-2 text-sm text-gray-700">Deskripsi singkat mengenai item keempat.</p>
            </div>
        </div>
    </div>
    
    <div class="flex justify-center mt-1 mb-6">
        <a href="/menu" class="bg-[#8B4513] text-white px-5 py-3 rounded-lg hover:bg-[#6f321f] transition text-md">Click For More</a>
    </div>
    <!-- Popup Modal -->
    <div id="reservation-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-bold text-[#8B4513] mb-4">Reservasi</h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-[#8B4513] font-medium">Nama</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="w-full p-2 border border-[#8B4513] rounded-lg" readonly>
                </div>
                <div class="mb-4">
                    <label class="block text-[#8B4513] font-medium">Nomor Meja</label>
                    <select name="table_number" class="w-full p-2 border border-[#8B4513] rounded-lg">
                        @for ($i = 1; $i <= 30; $i++)
                            <option value="{{ $i }}">Meja {{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-[#8B4513] font-medium">Tanggal</label>
                    <input type="date" name="date" class="w-full p-2 border border-[#8B4513] rounded-lg">
                </div>
                <div class="mb-4">
                    <label class="block text-[#8B4513] font-medium">Jumlah Orang</label>
                    <input type="number" name="people" min="1" class="w-full p-2 border border-[#8B4513] rounded-lg">
                </div>
                <div class="mb-4">
                    <label class="block text-[#8B4513] font-medium">Deskripsi</label>
                    <textarea name="description" rows="3" class="w-full p-2 border border-[#8B4513] rounded-lg" placeholder="Catatan tambahan..."></textarea>
                </div>
                <div class="flex justify-end gap-2">
                    <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Batal</button>
                    <button type="submit" class="bg-[#8B4513] text-white px-4 py-2 rounded-lg">Pesan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('reservation-modal').classList.remove('hidden');
        }
        function closeModal() {
            document.getElementById('reservation-modal').classList.add('hidden');
        }
    </script>
</x-layout>
