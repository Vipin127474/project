<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate Text</title>
    <link rel="stylesheet" href="{{ asset('css/generated_text.css') }}">
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




    <form action="{{ route('generate-text') }}" method="POST">
        @csrf
        <h1>Generate Text</h1>
        <label for="Title">Title:</label>
        <input type="text" id="Title" name="Title">

        <label for="Genre">Genre:</label>
        <select id="Genre" name="Genre">
            <option value="">Select Genre</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Science Fiction">Science Fiction</option>
            <option value="Mystery">Mystery</option>
            <option value="Romance">Romance</option>
            <option value="Thriller">Thriller</option>
            <option value="Thriller">Adventure</option>
            <option value="Thriller">Action</option>
        </select>

        <label for="Language">Language:</label>
        <select id="Language" name="Language">
            <option value="">Select Language</option>
            <option value="English">English</option>
            <option value="Spanish">Spanish</option>
            <option value="French">French</option>
            <option value="German">German</option>
            <option value="Chinese">Chinese</option>
        </select>

        <label for="prompt">Prompt:</label>
        <input type="text" id="prompt" name="prompt">

        <button type="submit">Generate</button>
    </form>

   
</body>
</html>
