@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6">Register</h1>
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-gray-700 dark:text-gray-300 mb-2">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg text-gray-900 dark:text-gray-100 bg-gray-50 dark:bg-gray-700 focus:ring focus:ring-blue-300 dark:focus:ring-blue-700 focus:outline-none">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="email" class="block text-gray-700 dark:text-gray-300 mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg text-gray-900 dark:text-gray-100 bg-gray-50 dark:bg-gray-700 focus:ring focus:ring-blue-300 dark:focus:ring-blue-700 focus:outline-none">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="nis" class="block text-gray-700 dark:text-gray-300 mb-2">NIS</label>
                <input type="text" id="nis" name="nis" value="{{ old('nis') }}" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg text-gray-900 dark:text-gray-100 bg-gray-50 dark:bg-gray-700 focus:ring focus:ring-blue-300 dark:focus:ring-blue-700 focus:outline-none">
                @error('nis') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="password" class="block text-gray-700 dark:text-gray-300 mb-2">Password</label>
                <input type="password" id="password" name="password" value="password123" readonly
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg text-gray-900 dark:text-gray-100 bg-gray-50 dark:bg-gray-700 focus:ring focus:ring-blue-300 dark:focus:ring-blue-700 focus:outline-none">
                <small class="text-gray-500 dark:text-gray-400">Password default: <strong>password123</strong></small>
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="password_confirmation" class="block text-gray-700 dark:text-gray-300 mb-2">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg text-gray-900 dark:text-gray-100 bg-gray-50 dark:bg-gray-700 focus:ring focus:ring-blue-300 dark:focus:ring-blue-700 focus:outline-none">
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-blue-500 dark:bg-blue-700 text-white py-2 rounded-lg hover:bg-blue-600 dark:hover:bg-blue-800 focus:ring focus:ring-blue-300 dark:focus:ring-blue-700 focus:outline-none">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
