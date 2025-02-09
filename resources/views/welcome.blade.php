@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="text-center bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-4 text-gray-900 dark:text-gray-100">Selamat Datang di Aplikasi Pesantren</h1>
            <p class="text-gray-600 dark:text-gray-300 mb-6">Ini adalah halaman default Laravel yang telah dimodifikasi.</p>
            <div class="space-x-4">
                <a href="/santri" class="px-4 py-2 bg-blue-500 dark:bg-blue-700 text-white rounded hover:bg-blue-600 dark:hover:bg-blue-800">
                    Lihat Data Santri
                </a>
                <a href="/admin" class="px-4 py-2 bg-green-500 dark:bg-green-700 text-white rounded hover:bg-green-600 dark:hover:bg-green-800">
                    Lihat Halaman Admin
                </a>
            </div>
        </div>
    </div>
@endsection
