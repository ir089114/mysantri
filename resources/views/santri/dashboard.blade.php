@extends('layouts.app')

@section('title', 'Halaman Santri')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-4xl">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Selamat Datang, {{ $user->name }}</h1>
        <p class="text-gray-700 dark:text-gray-300 mb-6">Berikut adalah informasi Anda:</p>

        <!-- Informasi User -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <p class="font-medium text-gray-900 dark:text-gray-100">Email:</p>
                <p class="text-gray-700 dark:text-gray-300">{{ $user->email }}</p>
            </div>
            <div>
                <p class="font-medium text-gray-900 dark:text-gray-100">Nama:</p>
                <p class="text-gray-700 dark:text-gray-300">{{ $user->name }}</p>
            </div>
        </div>

        <!-- Aksi -->
       
    </div>
</div>
@endsection
