<!DOCTYPE html>
<html lang="en">
<head class="h-full bg-gray-100">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    
    <title>
        @auth
            Resto_Org - Dashboard
        @else
            Resto_Org - Welcome
        @endauth
    </title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="flex flex-col min-h-screen">
    <x-navbar></x-navbar>

    @auth
        <main>
            <div>
                {{ $slot }}
            </div>
        </main>
    @else
        <x-header>Welcome to Resto_Org</x-header>
        <main>
            <div class="text-center p-4">
                <p>Please <a href="{{ route('login') }}" class="text-blue-500">log in</a> to access the dashboard.</p>
            </div>
        </main>
    @endauth
    <x-footer></x-footer>
    <script src="./node_modules/preline/dist/preline.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
