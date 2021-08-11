<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://use.typekit.net/oey0juf.css"> --}}
    @include('layouts.css')

    <title>Patrick Chacón</title>
</head>
<body>
    @yield('header')
    @include('layouts.header')

    @yield('main')

    @yield('footer')
    @include('layouts.footer')

    
    @include('layouts.js')

    </body>
</html>