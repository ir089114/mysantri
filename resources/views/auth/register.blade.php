@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
    <h1>Register</h1>
    <form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="nis">NIS</label>
        <input type="text" id="nis" name="nis" value="{{ old('nis') }}" required>
        @error('nis') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        @error('password') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>

</div>
@endsection
