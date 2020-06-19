<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta name="viewport"
        content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
    minimum-scale=1.0">
    <meta http="X-Ua-Compatable"content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    {{-- @yield('content')
    <header>
        <ul>
            <li><a href="/about">About Us</a></li>
            <li><a href="/services">Service</a><li>
        </ul>
    </header>
    --}}

    @include('nav')

    @yield('content')


</body>
</html>