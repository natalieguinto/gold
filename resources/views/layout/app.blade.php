<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <ul class="links">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('packages')}}">Packages</a></li>
            <li><a href="{{route('collection')}}">Collection</a></li>
           
            @if (auth()->check())
             <li><a href="{{route('logout')}}">Logout</a></li>
            @else
             <li><a href="{{route('attendees')}}">Attendees</a></li>
             <li><a href="{{route('login')}}">Login</a></li>
            @endif
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>