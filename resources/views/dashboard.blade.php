<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar">
        <a class="nav-link" href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Dashboard</a>
        <div class="navbar-menu">
            <a class="nav-link" href="#">Upgrade your plan</a>
            <a class="nav-link script" href="{{ route('show') }}"><span>&#43;</span> Create Script</a>
            <a class="nav-link" href="#">Profile</a>
        </div>
    </nav>

    <div class="my">
        <a href="#" class="nav-link link"><i class="fa fa-folder"></i>My Projects</a>
        <a href="{{route('logout')}}" class="nav-link link"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
    </div>

    <div class="two-box">
        <div class="box box1">
            <div class="icon-circle">
                <i class="fa fa-thumbs-up"></i>
            </div>
            <div class="content">
                <h3>Give Feedback</h3>
                <p>Help us elevate this AI to new heights!</p>
                <a href="#" class="survey-link survey">Take Survey <span>&#8594;</span></a>
            </div>
        </div>
        <div class="box box2">
            <div class="icon-circle">
                <i class="fab fa-discord"></i>
            </div>
            <div class="content">
                <h3>Join us on Discord</h3>
                <p>Check out our Discord page to be a part of the community</p>
                <a href="#" class="survey-link join">Join Group <span>&#8594;</span></a>
            </div>
        </div>
    </div>

    <div class="film">
        
            <h2>Your Generated Scripts</h2>
                <ul class="scripts-list">
                    @foreach($scripts as $script)
                    <div class="container">
                        <li>
                            <h3>{{ $script->title }}</h3>
                            <p><strong>Genre:</strong> {{ $script->genre }}</p>
                            <p><strong>Language:</strong> {{ $script->language }}</p>
                            <a href="{{route('scripts', $script->id)}}" class="show-button">Show</a>

                        </li>
                    </div>
                    @endforeach
                </ul>
    </div>

</body>
</html>
