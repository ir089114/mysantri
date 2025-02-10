<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Tambahkan ini



class SantriController extends Controller
{   
    public function dashboard()
{
    $user = Auth::user(); // Mendapatkan data pengguna yang sedang login
   
    return view('santri.dashboard', compact('user'));
}


    /*
    public function dashboard()
    {
        return view('santri.dashboard');
    }
        */
}
