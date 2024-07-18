<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Job Board {{ $title ?? '' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-200 container m-auto">
        <main>
        {{$slot}}
        </main>
    </body>
</html>
