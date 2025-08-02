<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruKelasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


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
    Route::get('/register-guru', function () {
        return view('auth.registerguru');
    })->name('register-guru');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
// Auth close
// siswa atau user
Route::middleware(['auth', 'role:siswa'])->prefix('siswa')->name('user-')->group(function () {
    Route::get('dashboard', function () {
        return view('user.index');
    })->name('index');
});
// siswa close
// admin atau user
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin-')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('index');
});
// admin close
// guru atau user
Route::middleware(['auth', 'role:pengajar'])->prefix('pengajar')->name('guru-')->group(function () {
    Route::get('dashboard', function () {
        return view('guru.index');
    })->name('index');
    Route::get('/Kelas', [GuruKelasController::class, 'index'])->name('index.kelas');
    Route::get('/Kelas/create', [GuruKelasController::class, 'create'])->name('index.kelas.create');
    Route::post('/Kelas/create', [GuruKelasController::class, 'store'])->name('index.kelas.store');
});
// guru closes

Route::get('/test', function () {
    return view('component.dashboard');
})


    ?>