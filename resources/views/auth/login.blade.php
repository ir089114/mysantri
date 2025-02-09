@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6">Login</h1>
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="identifier" class="block text-gray-700 dark:text-gray-300 mb-2">NIS atau Email</label>
                <input type="text" id="identifier" name="identifier" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg text-gray-900 dark:text-gray-100 bg-gray-50 dark:bg-gray-700 focus:ring focus:ring-blue-300 dark:focus:ring-blue-700 focus:outline-none">
            </div>
            <div class="relative">
                <label for="password" class="block text-gray-700 dark:text-gray-300 mb-2">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg text-gray-900 dark:text-gray-100 bg-gray-50 dark:bg-gray-700 focus:ring focus:ring-blue-300 dark:focus:ring-blue-700 focus:outline-none">
                <button type="button" id="togglePassword" class="absolute inset-y-0 right-3 flex items-center text-gray-500 dark:text-gray-300">
                    👁️
                </button>
            </div>
            <button type="submit"
                class="w-full bg-blue-500 dark:bg-blue-700 text-white py-2 rounded-lg hover:bg-blue-600 dark:hover:bg-blue-800 focus:ring focus:ring-blue-300 dark:focus:ring-blue-700 focus:outline-none">
                Login
            </button>
        </form>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-4">Belum punya akun? <a href="{{ route('register') }}"
                class="text-blue-500 dark:text-blue-400 hover:underline">Daftar di sini</a></p>
    </div>
</div>

<script>
    // Toggle password visibility
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function() {
        // Toggle type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // Toggle eye icon
        this.textContent = type === 'password' ? '👁️' : '👁️🗨️';
    });
</script>
@endsection
