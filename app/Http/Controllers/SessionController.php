<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index() {
        return view('.index');
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (auth::attempt($infologin)) {
            $request->session()->regenerate();
            return redirect()->intended('/menu');
        }
        return back()->with('loginError', 'Login Gagal');
        
    }
}
