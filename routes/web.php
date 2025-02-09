<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
});

Route::middleware([GuestMiddleware::class])->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});

// Logout bisa diakses hanya oleh user yang sudah login
Route::middleware(['auth'])->post('/logout', [AuthController::class, 'logout'])->name('logout');



// Middleware untuk proteksi dashboard berdasarkan role
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/customer', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');

    Route::get('/kasir', function () {
        return view('kasir.dashboard');
    })->name('kasir.dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
});

Route::get('/about', function ( $title = 'About' ) {
    return view('about', compact('title'));
});
