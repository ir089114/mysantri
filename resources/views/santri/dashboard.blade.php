@extends('layouts.app')

@section('title', 'Halaman Santri')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-4xl">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Daftar Santri</h1>
        <p class="text-gray-700 dark:text-gray-300 mb-6">Ini adalah halaman untuk melihat daftar santri.</p>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg">
                <thead class="bg-gray-100 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            NIS
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            Nama
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            Kelas
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800">
                    <!-- Contoh data statis, ganti dengan data dinamis -->
                    <tr>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">12345</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">Ahmad</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">10A</td>
                        <td class="px-6 py-4">
                            <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a> |
                            <a href="#" class="text-red-500 hover:text-red-700">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">67890</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">Fatimah</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-gray-100">11B</td>
                        <td class="px-6 py-4">
                            <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a> |
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
