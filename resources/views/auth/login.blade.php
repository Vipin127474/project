@extends('layout')

@section('title', 'login')

<!-- Link to home-specific CSS -->
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h2>LOG IN</h2>
         
            <h1> Discover <span class="highlight">the</span> Ultimate <span class="highlight">Experience</span>–Unleash the <span class="highlight">Full</span> Potential</h1>
        </div>
        <div class="form">
<form action="{{ route('login') }}" method="POST">
    @csrf
    <h2>Login</h2>
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
    <p>Don’t have an account? <a href="{{ route('register') }}">Register</a></p>
</form>
</div>
    </section>
@endsection


