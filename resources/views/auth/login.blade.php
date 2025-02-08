@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <h1>Login</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <label for="identifier">NIS atau Email</label>
            <input type="text" id="identifier" name="identifier" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
</div>
@endsection
