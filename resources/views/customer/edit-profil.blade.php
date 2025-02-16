<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profil Pelanggan</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#f8f1e4] flex items-center justify-center min-h-screen p-6">
    <div class="w-full max-w-2xl bg-[#fff7e6] p-8 rounded-2xl shadow-lg border border-[#d4a373]">
        <h2 class="text-3xl font-semibold text-[#8b4513] text-center mb-6">Edit Profil Pelanggan</h2>

        @if(session('success'))
            <p class="bg-green-100 text-green-700 border border-green-300 p-3 rounded-lg mb-4 text-center">
                {{ session('success') }}
            </p>
        @endif

        <div class="flex items-center space-x-6 mb-6">
            <img id="preview" src="{{ asset('storage/' . ($profile->foto ?? 'default.png')) }}" 
                class="w-24 h-24 rounded-full border-4 border-[#d4a373]" alt="Foto Profil">
            <div>
                <label class="block text-[#8b4513] font-medium">Ubah Foto Profil</label>
                <input type="file" name="foto" id="fotoInput"
                    class="w-full p-3 border border-[#d4a373] rounded-lg focus:ring focus:ring-[#c48f65]">
                @error('foto') 
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
                @enderror
            </div>
        </div>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label class="block text-[#8b4513] font-medium">Nama</label>
                <input type="text" name="name" value="{{ old('name', $profile->name) }}" 
                    class="w-full p-3 border border-[#d4a373] rounded-lg focus:ring focus:ring-[#c48f65]">
                @error('name') 
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
                @enderror
            </div>

            <div>
                <label class="block text-[#8b4513] font-medium">Email</label>
                <input type="email" name="email" value="{{ old('email', $profile->email) }}" 
                    class="w-full p-3 border border-[#d4a373] rounded-lg focus:ring focus:ring-[#c48f65]">
                @error('email') 
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
                @enderror
            </div>

            <div>
                <label class="block text-[#8b4513] font-medium">Nomor Telepon</label>
                <input type="text" name="phone" value="{{ old('phone', $profile->phone) }}" 
                    class="w-full p-3 border border-[#d4a373] rounded-lg focus:ring focus:ring-[#c48f65]">
            </div>

            <div>
                <label class="block text-[#8b4513] font-medium">Alamat</label>
                <input type="text" name="address" value="{{ old('address', $profile->address) }}" 
                    class="w-full p-3 border border-[#d4a373] rounded-lg focus:ring focus:ring-[#c48f65]">
            </div>

            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('profile') }}" class="text-[#c48f65] hover:underline">Batal</a>
                <button type="submit" class="bg-[#8b4513] text-white px-6 py-3 rounded-lg font-medium hover:bg-[#6f321f] transition">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('fotoInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
