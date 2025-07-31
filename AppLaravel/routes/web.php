<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Auth
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::name('auth-')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
// Auth close
// siswa atau user
Route::middleware(['auth', 'role:siswa'])->prefix('user')->name('user-')->group(function () {
    Route::get('siswa', function () {
        return view('user.index');
    })->name('index');
});
// siswa close
// admin atau user
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin-')->group(function () {
    Route::get('admin', function () {
        return view('admin.index');
    })->name('index');
});
// admin close
// guru atau user
Route::middleware(['auth', 'role:guru'])->prefix('guru')->name('guru-')->group(function () {
    Route::get('guru', function () {
        return view('guru.index');
    })->name('index');
});
// guru close


