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
            return redirect()->intended('/dashboard')->with('success', 'Berhasil login!');
        }
    
        return back()->withErrors(['identifier' => 'NIS/Email atau password salah']);
    }
    
    
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
