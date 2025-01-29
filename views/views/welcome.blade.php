<!DOCTYPE html>
<html>
<head>
    <title>Fashion Store </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body> 
    <header>
        <nav>
            <a href="{{url('/')}}">about</a>
            <a href="{{url('/contact')}}">contact</a>
            <a href="{{url('/shop')}}">shop</a>
            <a href="{{url('/checkout')}}">checkout</a>
        </nav>
    </header>
    <main>
    @yield('content')
    </main>
    <footer>
        <p> &copy; 2025 fashion store </p>
    </footer>
</body>
</html>