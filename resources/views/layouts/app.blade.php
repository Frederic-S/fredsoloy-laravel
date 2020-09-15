<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fred Soloy</title>
        {{-- style --}}
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body class="font-sans bg-gray-400 text-black">
        @include('partials.nav')
        @yield('content')

    </body>
</html>