<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pelanggan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f8f1e4] flex items-center justify-center min-h-screen p-6">
    <div class="max-w-3xl w-full bg-[#fff7e6] p-10 rounded-lg shadow-md border border-[#d4a373] flex items-center space-x-8">
        <div class="w-1/3 flex justify-center">
            <img src="{{ asset('storage/' . ($profile->foto ?? 'default.png')) }}" 
                class="w-40 h-40 rounded-lg border-4 border-[#d4a373] object-cover" alt="Foto Profil">
        </div>
        <div class="w-2/3">
            <h2 class="text-3xl font-semibold text-[#8b4513]">{{ $profile->name }}</h2>
            <p class="text-lg text-gray-600 mb-4">{{ $profile->email }}</p>
            <div class="text-[#8b4513] space-y-3 text-lg">
                <p><span class="font-semibold">Telepon:</span> {{ $profile->phone ?? 'Tidak tersedia' }}</p>
                <p><span class="font-semibold">Alamat:</span> {{ $profile->address ?? 'Tidak tersedia' }}</p>
                <p><span class="font-semibold">Tanggal Bergabung:</span> {{ $profile->created_at->format('d M Y') }}</p>
                <p><span class="font-semibold">Jumlah Transaksi:</span> {{ $profile->transaction_count ?? 0 }}</p>
                <p><span class="font-semibold">Status Keanggotaan:</span> 
                    <span class="font-medium {{ $profile->membership == 'Premium' ? 'text-green-600' : 'text-gray-600' }}">
                        {{ $profile->membership ?? 'Standar' }}
                    </span>
                </p>
                <p><span class="font-semibold">Metode Pembayaran Favorit:</span> {{ $profile->payment_method ?? 'Belum disetel' }}</p>
            </div>
            <div class="flex justify-between mt-6">
                <a href="{{ route('customer.dashboard') }}" class="bg-gray-600 text-white px-5 py-3 rounded-lg hover:bg-gray-700 transition text-md">Kembali</a>
                <a href="{{ route('profile.edit') }}" class="bg-[#8b4513] text-white px-5 py-3 rounded-lg hover:bg-[#6f321f] transition text-md">Edit Profil</a>
            </div>
        </div>
    </div>
</body>
</html>