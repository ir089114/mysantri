<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Data admin yang sedang login
        $admin = Auth::user();

        // Ambil semua user dari tabel `users`
        $users = User::all();

        return view('admin.dashboard', compact('admin', 'users'));
    }
}

/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function dashboard()
{
    $user = Auth::user(); // Mendapatkan data pengguna yang sedang login
    return view('admin.dashboard', compact('user'));
}

}

*/