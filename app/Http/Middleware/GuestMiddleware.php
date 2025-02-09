<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            // Redirect pengguna ke dashboard berdasarkan perannya
            switch (Auth::user()->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'customer':
                    return redirect()->route('customer.dashboard');
                case 'kasir':
                    return redirect()->route('kasir.dashboard');
                default:
                    return redirect()->route('home');
            }
        }

        return $next($request);
    }
}
