@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <div class="container">
        <h1>Selamat Datang di Aplikasi Pesantren</h1>
        <p>Ini adalah halaman default Laravel yang telah dimodifikasi.</p>
        <a href="/santri">Lihat Data Santri</a> | <a href="/admin">Lihat Halaman Admin</a>
    </div>
@endsection
