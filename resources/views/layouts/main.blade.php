<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('generics')['app_name']}} | @yield('title')</title>

    {{-- CDNS --}}
    @yield('cdns')

    {{-- Vite --}}
    @vite('resources/js/app.js')
</head>
<body>

    {{-- Header --}}
    @include('includes.header')

    {{-- Main --}}
    @yield('main-content')

    {{-- Footer --}}
    @yield('footer')

    {{-- Scripts --}}
    @yield('scripts')
    
</body>
</html>