<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        Auth::login($user);

        if ($user->role == "siswa") {
            return redirect()->route('user-index');
        } else if ($user->role == "admin") {
            return redirect()->route('admin-index');
        } else {
            return redirect()->route('guru-index');
        }

    }
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || Hash::check($request->password, $user->password)) {

        }
        ;

        Auth::login($user);


        if ($user->role == "siswa") {
            return redirect()->route('user-index');
        } else if ($user->role == "admin") {
            return redirect()->route('admin-index');
        } else {
            return redirect()->route('guru-index');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    }

}
