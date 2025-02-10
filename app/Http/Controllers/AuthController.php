<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Menampilkan halaman register
    public function showRegister()
    {
        return view('auth.register');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            // Redirect berdasarkan role
            return redirect()->route(match ($user->role) {
                'admin' => 'admin.dashboard',
                'customer' => 'customer.dashboard',
                'kasir' => 'kasir.dashboard',
                default => 'index',
            });
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // Proses register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Simpan foto jika ada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('uploads/profil', 'public');
        } else {
            $fotoPath = 'uploads/profil/Defaultimg.png'; // Path foto default
        }

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'foto' => $fotoPath, // Simpan path foto di database
        ]);

        Auth::login($user);
        $request->session()->regenerate(); // Regenerasi session setelah login

        return redirect()->route('customer.dashboard');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Hapus semua session
        $request->session()->regenerateToken(); // Regenerasi CSRF token

        return redirect()->route('login');
    }
}
