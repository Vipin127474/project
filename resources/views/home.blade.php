@extends('layout')

@section('title', 'Homepage')

<!-- Link to home-specific CSS -->
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Transform your story from <span class="highlight">idea</span> to <span class="highlight">screenplay</span></h1>
         
         <div class="button-container">
            <a href="#" class="hero-btn">Start Creating →</a>
        </div>
    </div>
        <div class="hero-image">
            <img src="https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg" alt="Film Project">
        </div>
    </section>
@endsection




{{-- <!-- resources/views/home.blade.php -->

<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#">New Project</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link auth" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link auth" href="{{ route('register') }}">Register</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Transform your story from <span class="highlight">idea</span> to <span class="highlight">screenplay</span></h1>
            <a href="#" class="btn btn-primary btn-lg mt-4">Start Creating <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="hero-image">
            <img src="https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg" alt="Film Project">
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> --}}
