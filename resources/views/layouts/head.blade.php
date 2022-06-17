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


        <!-- Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Quicksand Font-->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
        </style>

    </head>
    <body>
        @auth
        @if(\Auth::user()->role == "1")
            @include('admin.navbar-admin')
        @else
            @include('navbar.navbar-logged-in')
        @endif
            
        @endauth

        @guest
            @include('navbar.navbar-logged-out')
        @endguest

        @yield('navbar')

        @yield('carousel')
        @yield('content')
        @yield('intro')
        @yield('parallax')
        @yield('events')
        @yield('portraits')
        @yield('families')
        @yield('engagement')

        @yield('book-events')
        @yield('book-portraits')
        @yield('book-families')
        @yield('book-engagements')


        @yield('reviews')
        @yield('about')
        @yield('contact')

    </body>
    </html>
    
