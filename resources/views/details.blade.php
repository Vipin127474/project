<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body> 
    <nav class="navbar">
    <a class="nav-link" href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Dashboard</a>
    <div class="navbar-menu">
        <a class="nav-link" href="#">Upgrade your plan</a>
        <a class="nav-link script" href="{{route('show')}}"><span>&#43;</span> Create Script</a>
        <a class="nav-link" href="#">Profile</a>
    </div>
</nav>


    <div class="container">
        <h1>{{ $script->title }}</h1>
        <p><strong>Genre:</strong> {{ $script->genre }}</p>
        <p><strong>Language:</strong> {{ $script->language }}</p>
        <p><strong>Script:</strong></p>
        <div class="generated-text">{{ $script->generated_text }}</div>
    </div>
    
</body>
</html>