<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Pesantren')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                @auth
                    @if(auth()->user()->role === 'santri')
                        <li><a href="/santri/dashboard">Dashboard Santri</a></li>
                    @elseif(auth()->user()->role === 'admin')
                        <li><a href="/admin/dashboard">Dashboard Admin</a></li>
                    @endif
                    <li>
                        <form action="/logout" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @endauth
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My Application</p>
    </footer>
</body>
</html>
