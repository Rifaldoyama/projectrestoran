<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body class="flex min-h-screen w-screen w-full items-center justify-center text-gray-600 bg-gray-50">
    <div class="relative">
        <div class="hidden sm:block h-56 w-56 text-indigo-300 absolute a-z-10 -left-20 -top-20">
            <svg id='patternId' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg'><defs><pattern id='a' patternUnits='userSpaceOnUse' width='40' height='40' patternTransform='scale(0.6) rotate(0)'><rect x='0' y='0' width='100%' height='100%' fill='none'/><path d='M11 6a5 5 0 01-5 5 5 5 0 01-5-5 5 5 0 015-5 5 5 0 015 5'  stroke-width='1' stroke='none' fill='currentColor'/></pattern></defs><rect width='800%' height='800%' transform='translate(0,0)' fill='url(#a)'/></svg>
        </div>
        <div class="hidden sm:block h-28 w-28 text-indigo-300 absolute a-z-10 -right-20 -bottom-20">
            <svg id='patternId' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg'><defs><pattern id='b' patternUnits='userSpaceOnUse' width='40' height='40' patternTransform='scale(0.5) rotate(0)'><rect x='0' y='0' width='100%' height='100%' fill='none'/><path d='M11 6a5 5 0 01-5 5 5 5 0 01-5-5 5 5 0 015-5 5 5 0 015 5'  stroke-width='1' stroke='none' fill='currentColor'/></pattern></defs><rect width='800%' height='800%' transform='translate(0,0)' fill='url(#b)'/></svg>
        </div>
        <!-- Register -->
        <div class="relative flex flex-col sm:w-[30rem] rounded-lg border-gray-400 bg-[#F6E9B2] shadow-lg px-4">
            <div class="flex-auto p-6">
                <div class="mb-10 flex flex-shrink-0 flex-grow-0 items-center justify-center overflow-hidden">
                    <a href="#" class="flex cursor-pointer items-center gap-2 text-[#0A6847] no-underline hover:text-[#7ABA78]">
                        <span class="flex-shrink-0 text-3xl font-black lowercase tracking-tight opacity-100">DapurNusa.</span>
                    </a>
                </div>
                <h4 class="mb-2 font-medium text-gray-700 xl:text-xl">Join DapurNusa!</h4>
                <p class="mb-6 text-gray-500">Create your account to get started</p>
                @if ($errors->any())
                    <div class="mb-4 p-3 text-sm text-red-700 bg-red-100 border border-red-400 rounded-lg">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="" class="mb-4" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="mb-2 inline-block text-xs font-medium uppercase text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="block w-full cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" placeholder="Enter your name" required />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="mb-2 inline-block text-xs font-medium uppercase text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="block w-full cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" placeholder="Enter your email" required />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="mb-2 inline-block text-xs font-medium uppercase text-gray-700">Password</label>
                        <input type="password" id="password" name="password" class="block w-full cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" placeholder="Enter your password" required />
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="mb-2 inline-block text-xs font-medium uppercase text-gray-700">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="block w-full cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" placeholder="Confirm your password" required />
                    </div>
                    <div class="mb-4">
                        <label for="foto" class="mb-2 inline-block text-xs font-medium uppercase text-gray-700">Profile Photo</label>
                        <input type="file" id="foto" name="foto" class="block w-full cursor-text appearance-none rounded-md border border-gray-400 bg-white py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" accept="image/*" required />
                    </div>
                    <div class="mb-4">
                        <button class="grid w-full cursor-pointer select-none rounded-md border border-[#0A6847] bg-[#7ABA78] py-2 px-5 text-center align-middle text-sm text-white shadow hover:border-[#7ABA78] hover:bg-[#0A6847] hover:text-white focus:border-[#0A6847] focus:bg-[#7ABA78] focus:text-white focus:shadow-none" type="submit">Register</button>
                    </div>
                </form>
                <p class="mb-4 text-center">
                    Already have an account?
                    <a href="{{ route('login') }}" class="cursor-pointer text-[#0A6847] no-underline hover:text-[#7ABA78]"> Sign in here </a>
                </p>
            </div>
        </div>
        <!-- /Register -->
    </div>
</body>

</html>
