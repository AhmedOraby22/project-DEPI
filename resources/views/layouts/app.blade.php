<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Medical Project')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2024 My Medical Project. All rights reserved.</p>
    </footer>
</body>
</html>
