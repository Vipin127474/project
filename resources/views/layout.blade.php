<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @yield('css')
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#">LOGO</a>
        <div class="navbar-menu">
            @auth
            <a class="nav-link link" href="{{ route('dashboard') }}">Dashboard</a>
        @endauth
            <a class="nav-link link" href="#">About Us</a>
            <a class="nav-link link" href="#">Pricing</a>
            <a class="nav-link link" href="#">Features</a>
            <a class="nav-link link" href="#">New Project</a>
            <a class="nav-link link" href="#">Blog</a>

        @auth
            <a class="nav-link link" href="#">Profile</a>
        @else
            <a class="nav-link auth" href="{{ route('login') }}">Login</a>
            <a class="nav-link auth" href="{{ route('register') }}">Register</a>
        @endauth



        </div>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
