<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="flex min-h-screen w-screen w-full items-center justify-center text-gray-600 bg-gray-50">
  <div class="relative">
    <div class="hidden sm:block h-56 w-56 text-indigo-300 absolute a-z-10 -left-20 -top-20">
      <svg id='patternId' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg'><defs><pattern id='a' patternUnits='userSpaceOnUse' width='40' height='40' patternTransform='scale(0.6) rotate(0)'><rect x='0' y='0' width='100%' height='100%' fill='none'/><path d='M11 6a5 5 0 01-5 5 5 5 0 01-5-5 5 5 0 015-5 5 5 0 015 5' stroke-width='1' stroke='none' fill='currentColor'/></pattern></defs><rect width='800%' height='800%' transform='translate(0,0)' fill='url(#a)'/></svg>
    </div>
    <div class="hidden sm:block h-28 w-28 text-indigo-300 absolute a-z-10 -right-20 -bottom-20">
      <svg id='patternId' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg'><defs><pattern id='b' patternUnits='userSpaceOnUse' width='40' height='40' patternTransform='scale(0.5) rotate(0)'><rect x='0' y='0' width='100%' height='100%' fill='none'/><path d='M11 6a5 5 0 01-5 5 5 5 0 01-5-5 5 5 0 015-5 5 5 0 015 5' stroke-width='1' stroke='none' fill='currentColor'/></pattern></defs><rect width='800%' height='800%' transform='translate(0,0)' fill='url(#b)'/></svg>
    </div>
    
    <div class="relative flex flex-col sm:w-[30rem] rounded-lg border-gray-400 bg-[#f0e6ba] shadow-lg px-4">
      <div class="flex-auto p-6">
        <div class="mb-10 flex flex-shrink-0 flex-grow-0 items-center justify-center overflow-hidden">
          <a href="#" class="flex cursor-pointer items-center gap-2 text-[#0A6847] no-underline hover:text-[#7ABA78]">
            <span class="flex-shrink-0 text-3xl font-black lowercase tracking-tight opacity-100">DapurNusa.</span>
          </a>
        </div>
        
        <h4 class="mb-2 font-medium text-gray-700 xl:text-xl">Welcome to DapurNusa!</h4>
        <p class="mb-6 text-gray-500">Please sign-in to access your account</p>
        
        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('login') }}" method="POST" class="mb-4">
          @csrf
          <div class="mb-4">
            <label for="email" class="mb-2 inline-block text-xs font-medium uppercase text-gray-700">Email or Username</label>
            <input type="text" class="block w-full cursor-text appearance-none rounded-md border border-gray-400 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" id="email" name="email" placeholder="Enter your email or username" autofocus="" />
          </div>
          
          <div class="mb-4">
            <div class="flex justify-between">
              <label class="mb-2 inline-block text-xs font-medium uppercase text-gray-700" for="password">Password</label>
              <a href="#" class="cursor-pointer text-[#0A6847] no-underline hover:text-[#7ABA78]">
                <small>Forgot Password?</small>
              </a>
            </div>
            <div class="relative flex w-full flex-wrap items-stretch">
              <input type="password" id="password" class="relative block flex-auto cursor-text appearance-none rounded-md border border-gray-400 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" name="password" placeholder="············" />
            </div>
          </div>
          
          <div class="mb-4">
            <button class="grid w-full cursor-pointer select-none rounded-md border border-[#0A6847] bg-[#7ABA78] py-2 px-5 text-center align-middle text-sm text-white shadow hover:border-[#7ABA78] hover:bg-[#0A6847] hover:text-white focus:border-indigo-600 focus:bg-[#0A6847] focus:text-white focus:shadow-none" type="submit">Sign in</button>
          </div>
        </form>
        
        <p class="mb-4 text-center">
          New on futurism?
          <a href="{{ route('register') }}" class="cursor-pointer text-[#0A6847] no-underline hover:text-[#7ABA78]"> Create an account </a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
