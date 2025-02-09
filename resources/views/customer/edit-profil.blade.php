<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profil</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-lg bg-white p-8 rounded-2xl shadow-lg">
            <h2 class="text-3xl font-semibold text-gray-800 text-center mb-6">Edit Profil</h2>
    
            @if(session('success'))
                <p class="bg-green-100 text-green-700 border border-green-300 p-3 rounded-lg mb-4 text-center">
                    {{ session('success') }}
                </p>
            @endif
    
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
    
                <div>
                    <label class="block text-gray-700 font-medium">Nama</label>
                    <input type="text" name="name" value="{{ old('name', $profile->name) }}" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
                    @error('name') 
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
                    @enderror
                </div>
    
                <div>
                    <label class="block text-gray-700 font-medium">Email</label>
                    <input type="email" name="email" value="{{ old('email', $profile->email) }}" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
                    @error('email') 
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
                    @enderror
                </div>
    
                <div>
                    <label class="block text-gray-700 font-medium">Telepon</label>
                    <input type="text" name="phone" value="{{ old('phone', $profile->phone) }}" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
                </div>
    
                <div>
                    <label class="block text-gray-700 font-medium">Alamat</label>
                    <input type="text" name="address" value="{{ old('address', $profile->address) }}" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
                </div>
    
                <div>
                    <label class="block text-gray-700 font-medium">Foto Profil</label>
                    <input type="file" name="foto" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
                    @error('foto') 
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
                    @enderror
                </div>
    
                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('profile') }}" class="text-blue-500 hover:underline">Batal</a>
                    <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>