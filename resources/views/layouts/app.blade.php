<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Pesantren')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    dark: {
                        bg: "#1a202c",
                        text: "#a0aec0",
                        header: "#2d3748",
                        footer: "#4a5568",
                    },
                },
            },
        },
        darkMode: 'class', // Aktifkan dark mode dengan class
    };
    </script>
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-dark-bg dark:text-dark-text transition-colors duration-300">
    <header class="bg-white shadow-md dark:bg-dark-header">
        <nav class="container mx-auto p-4 flex justify-between items-center">
            <ul class="flex space-x-4">
                <li><a href="/" class="text-blue-500 hover:text-blue-700 dark:text-blue-300 dark:hover:text-blue-500">Home</a></li>
                @auth
                    @if(auth()->user()->role === 'santri')
                        <li><a href="/santri" class="text-blue-500 hover:text-blue-700 dark:text-blue-300 dark:hover:text-blue-500">Dashboard Santri</a></li>
                    @elseif(auth()->user()->role === 'admin')
                        <li><a href="/admin" class="text-blue-500 hover:text-blue-700 dark:text-blue-300 dark:hover:text-blue-500">Dashboard Admin</a></li>
                    @endif
                    <li>
                        <form action="/logout" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-red-500 hover:text-red-700 dark:text-red-300 dark:hover:text-red-500">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="/login" class="text-blue-500 hover:text-blue-700 dark:text-blue-300 dark:hover:text-blue-500">Login</a></li>
                    <li><a href="/register" class="text-blue-500 hover:text-blue-700 dark:text-blue-300 dark:hover:text-blue-500">Register</a></li>
                @endauth
            </ul>
            <button id="darkModeToggle" class="px-4 py-2 bg-gray-300 text-gray-800 dark:bg-gray-700 dark:text-gray-100 rounded">
                Toggle Dark Mode
            </button>
        </nav>
    </header>

    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    <footer class="bg-gray-200 text-center py-4 dark:bg-dark-footer dark:text-dark-text">
        <p>&copy; {{ date('Y') }} Aplikasi Pesantren</p>
    </footer>

    <script>
        // Dark mode toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        const htmlElement = document.documentElement;

        darkModeToggle.addEventListener('click', () => {
            if (htmlElement.classList.contains('dark')) {
                htmlElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                htmlElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });

        // Load saved theme
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            htmlElement.classList.add('dark');
        }
    </script>
</body>
</html>
