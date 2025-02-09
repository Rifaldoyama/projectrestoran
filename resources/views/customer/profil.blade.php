<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg">
        <div class="text-center">
            <img src="{{ asset('storage/' . ($profile->foto ?? 'default.png')) }}" 
                class="w-32 h-32 rounded-full mx-auto" alt="Foto Profil">
            <h2 class="text-2xl font-bold mt-4">{{ $profile->name }}</h2>
            <p class="text-gray-600">{{ $profile->email }}</p>
        </div>
        <div class="mt-6">
            <p><strong>Telepon:</strong> {{ $profile->phone ?? 'Tidak tersedia' }}</p>
            <p><strong>Alamat:</strong> {{ $profile->address ?? 'Tidak tersedia' }}</p>
        </div>
        <div class="text-center mt-6">
            <a href="{{ route('profile.edit') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit Profil</a>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('customer.dashboard') }}" class="bg-gray-600 text-white px-4 py-2 rounded">Kembali ke Dashboard</a>
        </div>
    </div>
</body>
</html>
