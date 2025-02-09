@extends('layouts.app')

@section('title', 'Halaman Admin')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-4xl">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Daftar Admin</h1>
        <p class="text-gray-700 dark:text-gray-300 mb-6">Ini adalah halaman untuk melihat daftar admin.</p>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg">
                <thead class="bg-gray-100 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            ID Admin
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            Nama
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800">
                    <!-- Contoh data statis, ganti dengan data dinamis -->
                    <tr>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">1</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">Admin Utama</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">admin@domain.com</td>
                        <td class="px-6 py-4">
                            <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a> |
                            <a href="#" class="text-red-500 hover:text-red-700">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">2</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">Admin Kedua</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">admin2@domain.com</td>
                        <td class="px-6 py-4">
                            <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a> |
                            <a href="#" class="text-red-500 hover:text-red-700">Hapus</a>
                        </td>
                    </tr>
                    <!-- Tambahkan data dinamis di sini -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
