<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Menampilkan halaman profil
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $profile = User::where('id', Auth::id())->first();

        if (!$profile) {
            return redirect('/')->with('error', 'Profil tidak ditemukan.');
        }

        return view('customer.profil', compact('profile'));
    }

    // Menampilkan halaman edit profil
    public function edit()
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $profile = User::where('id', Auth::id())->first();

        if (!$profile) {
            return redirect('/')->with('error', 'Profil tidak ditemukan.');
        }

        return view('customer.edit-profil', compact('profile'));
    }

    // Menyimpan perubahan profil
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profile = User::where('id', Auth::id())->first();

        if (!$profile) {
            return redirect('/')->with('error', 'Profil tidak ditemukan.');
        }

        // Jika ada file foto yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($profile->foto && Storage::exists('public/' . $profile->foto)) {
                Storage::delete('public/' . $profile->foto);
            }

            // Simpan foto baru
            $fotoPath = $request->file('foto')->store('uploads', 'public');
            $profile->foto = $fotoPath;
        }

        // Perbarui data profil
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->save();

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');
    }
}