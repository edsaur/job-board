<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Job Board {{ $title ?? '' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="bg-gradient-to-r from-indigo-200 via-purple-300 to-pink-100 container m-auto">
        <main>
        {{$slot}}
        </main>
    </body>
</html>
