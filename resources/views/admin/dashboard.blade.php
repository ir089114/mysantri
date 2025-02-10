@extends('layouts.app')

@section('title', 'Halaman Admin')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-4xl">

        <!-- Profile Admin -->
        <h1 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4">Halo, {{ $admin->name }}</h1>
        <p class="text-gray-700 dark:text-gray-300 mb-6">Ini adalah informasi profil Anda:</p>
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <p class="font-medium text-gray-900 dark:text-gray-100">Email:</p>
                <p class="text-gray-700 dark:text-gray-300">{{ $admin->email }}</p>
            </div>
            <div>
                <p class="font-medium text-gray-900 dark:text-gray-100">Role:</p>
                <p class="text-gray-700 dark:text-gray-300">{{ $admin->role }}</p>
            </div>
        </div>

        <!-- Daftar User -->
        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Daftar Pengguna</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg">
                <thead class="bg-gray-100 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            ID User
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            Nama
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            Role
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800">
                    @foreach ($users as $user)
                        <tr>
                            <td class="px-6 py-4 text-gray-900 dark:text-gray-100">{{ $user->id }}</td>
                            <td class="px-6 py-4 text-gray-900 dark:text-gray-100">{{ $user->name }}</td>
                            <td class="px-6 py-4 text-gray-900 dark:text-gray-100">{{ $user->email }}</td>
                            <td class="px-6 py-4 text-gray-900 dark:text-gray-100">{{ $user->role }}</td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a> |
                                <a href="#" class="text-red-500 hover:text-red-700">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
