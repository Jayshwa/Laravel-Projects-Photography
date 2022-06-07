<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="pinterest" content="nopin" />

        <title>Joshua Young Photography</title>

        <!-- Bootstrap -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Quicksand Font-->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
        </style>

    </head>
    <body>
        @yield('navbar')
        @yield('content')
        @yield('intro')
        @yield('contact')
        @yield('parallax')
        @yield('events')
        @yield('portraits')
        @yield('families')
        @yield('engagement')

        @yield('book-events')
        @yield('book-portraits')
        @yield('book-families')
        @yield('book-engagement')

        @yield('reviews')
        @yield('about')

        @yield('pizzas')
    </body>
    </html>
    
