<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
{
    $request->validate([
        'identifier' => 'required', // Bisa NIS atau Email
        'password' => 'required',
    ]);

    // Tentukan apakah identifier adalah email atau NIS
    $field = filter_var($request->identifier, FILTER_VALIDATE_EMAIL) ? 'email' : 'nis';

    // Buat array credentials
    $credentials = [
        $field => $request->identifier,
        'password' => $request->password,
    ];

    // Lakukan proses login
    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        
        // Redirect sesuai role
        if ($user->role === 'santri') {
            return redirect('/santri')->with('success', 'Selamat datang, Santri!');
        } elseif ($user->role === 'admin') {
            return redirect('/admin')->with('success', 'Selamat datang, Admin!');
        }

        // Jika role tidak dikenal
        return redirect('/')->with('error', 'Role tidak dikenal.');
    }

    return back()->withErrors(['identifier' => 'NIS/Email atau password salah']);
}

    
    
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'nis' => 'required|string|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    \Log::info('Request validated', $validated);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'nis' => $request->nis,
        'role' => 'santri',
        'password' => Hash::make($request->password),
    ]);

    \Log::info('User created successfully');

    return redirect()->route('login')->with('success', 'Registration successful. Please login.');
}



    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
