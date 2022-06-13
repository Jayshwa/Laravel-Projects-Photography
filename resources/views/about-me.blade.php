@extends('layouts.head')
@section('about')
    @auth
        @include('navbar-logged-in')
    @endauth

    @guest
        @include('navbar-logged-out')
    @endguest
@endsection