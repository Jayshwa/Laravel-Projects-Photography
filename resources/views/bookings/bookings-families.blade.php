@extends('layouts.head')
@section('book-families')
@auth
    @include('navbar-logged-in')
@endauth

@guest
    @include('navbar-logged-out')
@endguest
@endsection