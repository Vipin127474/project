@extends('layout')

@section('title', 'register')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <section class="hero-section">
        <div class="hero-content">
            <h2>SIGN UP</h2>
         
            <h1> Discover <span class="highlight">the</span> Ultimate <span class="highlight">Experience</span>–Unleash the <span class="highlight">Full</span> Potential</h1>
        </div>
        <div class="form">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h2>Register</h2>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <button type="submit">Register</button>
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </form>
        </div>
    </section>
@endsection





