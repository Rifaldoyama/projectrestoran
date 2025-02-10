<x-layout>
    <x-header>Welcome, {{ Auth::user()->name }}</x-header>
    <x-croushel></x-croushel> 
    <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-2 ml-48 md:text-4xl">Rekomendasi</h1>
    
    
    
    
    
    
    <h2>Customer Dashboard</h2>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</x-layout>

