<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="title" content="Martini Tattoo">
        <meta name="keywords" content="Tatuagem, Tatuagem de animais, Tattoo, Tattoo Brooklin, Hangar Tatto">
        <meta name="description" content="Martini Tatto, tatuando a mais de 15 anos.">
        <meta name="author" content="Guilherme Martini">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Martini Tattoo">
        <meta property="og:description" content="A mais de 15 anos fazendo todos os tipos de tatuagem.">
        <meta property="og:url" content="https://www.martinitattoo.com">
        <meta property="og:image" content="{{ asset('storage/assets/img/theme.jpg') }}">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <title>Martini Tattoo</title>
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @filamentStyles
        @vite('resources/css/app.css')
         <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-H790K4XHZF"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-H790K4XHZF');
        </script>
    </head>

    <body class="bg-black overflow-x-hidden">
        {{ $slot }}

        @filamentScripts
        @vite('resources/js/app.js')
        
    </body>
</html>
